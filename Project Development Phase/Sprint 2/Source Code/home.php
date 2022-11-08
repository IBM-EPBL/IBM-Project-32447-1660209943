<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body {
background-image:url('pics/homes.jpg');
 background-repeat:no-repeat;
 background-size:cover;
 }
 </style>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
          <li><a href="#"><i class="fas fa-sliders-h"></i>Accounts</a></li>
          <li><a href="#"><i class="fas fa-address-book"></i>Expense</a></li>
          <li><a href="#"><i class="fas fa-stream"></i>Budget Limit</a></li>
          <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
          <li><a href="#"><i class="fas fa-globe-asia"></i>Feedback</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i>Support</a></li>
          <li><a href="logout-user.php"><i class="fas fa-home"></i>Logout</a></li>
          <div class="icons">
            <a href="#"><i class='fab fa-google-play'></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </ul>
      </nav>
    </div>
    <div>
    <nav>
      <link rel="stylesheet" href="new.css">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Expense Tracker</label>
      <ul>
        <li><a class="active" href="#">Add Income</a></li>
        <li><a href="#">Add Expense</a></li>
        <li><a href="#">Edit Income</a></li>
        <li><a href="#">Edit Expense</a></li>
        <li><a href="#">Sync Bank Account</a></li>
      </ul>
    </nav>
</div>
  </body>
</html>

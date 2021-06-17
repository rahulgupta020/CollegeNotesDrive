<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php session_start(); ?>
<?php
if (isset($_POST['login'])) {
  $username  = $_POST['username'];
  $email = $_POST['email'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $email);
$query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
// print_r($result); exit;
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    //   print_r($row); exit;
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $name = $row['name'];
    $email = $row['email'];
    $role= $row['role'];
    $course = $row['course'];
    // if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
    //   print($_SESSION['username']); exit;
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;
      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      header('location: setpassword.php');
    }
}
    else {
      echo "<script>alert('invalid username/email');
      window.location.href= 'recoverpassword.php';</script>";

    }
}
?>


  <div class="login-card">
    <h1>Recover Forgot Password</h1><br>
  <form method="POST">
    <input type="text" name="username" placeholder="Enter the Username" required="">
    <input type="text" name="email" placeholder="Enter Your email" required="">
    <input type="submit" name="login" class="login login-submit" value="Submit">
  </form>
    
  <div class="login-help">
    <a href="signup.php">Register</a> • <a href="login.php">Login</a>
  </div>
</div>

  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

  
</body>
</html>

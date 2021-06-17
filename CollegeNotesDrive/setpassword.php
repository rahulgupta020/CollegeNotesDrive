<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['username']) && $_SESSION['username'] == false) {
header("Location:login.php");
} else {
    $username = $_SESSION['username'];
} 
if(isset($_POST['login'])) {
    // print_r($_POST); exit;
    $password = $_POST['newpassword'];
    $confirmPassword = $_POST['confirmnewpassword'];
// print($password);
// print($confirmPassword); 
if($password != $confirmPassword) {
    echo "<script>alert('invalid password/confirmpassword');</script>";
} else {
    $newPassword = password_hash("$password" , PASSWORD_DEFAULT);
    $updatequery = "UPDATE users SET password = '$newPassword' WHERE username='$username'";
$result1 = mysqli_query($conn , $updatequery) or die(mysqli_error($conn));
if (mysqli_affected_rows($conn) > 0) {
	echo "<script>alert('PROFILE UPDATED SUCCESSFULLY');
	window.location.href='login.php';</script>";
}
else {
	echo "<script>alert('An error occured, Try again!');</script>";
}

}
}

?>

  <div class="login-card">
    <h1>New Password</h1><br>
  <form method="POST">
  <div class="form-group">
		<label for="usertag">New Password <font color='brown'> (changing password is optional)</font></label>
		<input type="password" name="newpassword" class="form-control" placeholder="Enter New Password">
	</div>
	<div class="form-group">
		<label for="usertag">Confirm New Password</label>
		<input type="password" name="confirmnewpassword" class="form-control" placeholder="Re-Enter New Password" >
	</div>
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


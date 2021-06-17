<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
	body {
			padding-top:20px;
		}
		.container {
    height: 65%;
		}
		b.alert-success {
    margin-left: 428px;
}
	</style>
</head>
<body>
<?php
// print_r($_POST);
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$message = (isset($_POST['message']) ? $_POST['message'] : '');

if(!empty($name) || !empty($message) || !empty($email)) {
	$query = "INSERT INTO contact_us (name,email,message) VALUES ('$name' , '$email' , '$message' )";
	$result = mysqli_query($conn , $query);
	if($result) {
		echo '<div class="alert alert-success" role="alert">
				<b>Your Message is has been send..!</b>
	  		  </div>';
	} else {
		echo '<div class="alert alert-danger" role="alert">
		      Something Went Wrong...!
	  		</div>';
	}
} 
// print($name);
?>
<!-- <form action="contact1.php" method="post" class="form">

          </form> -->
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<!-- </div> -->
  <!-- <h2>CONTACT US</h2>
  <p type="Name:"><input name="name" placeholder="Write your name here.."></input></p>
  <p type="Email:"><input name="email" placeholder="Let us know how to contact you back.."></input></p>
  <p type="Message:"><input name="message" placeholder="What would you like to tell us.."></input></p>
  <button>Send Message</button> -->
<!-- </form> -->

<?php include 'includes/footer.php';?>
</body>
</html>



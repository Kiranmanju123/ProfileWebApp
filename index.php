<?php include 'connection/db.php'; ?>
<?php 
if(isset($_SESSION['user_id']))
{
	header("location:profile/index.php");
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1 shrink-to-fit=no">
	<title>Profile</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<!-- === Add Background Video === -->
<video autoplay muted loop id="myvideo">
	<source src="assets/img/coding.mp4" type="video/mp4">
</video>

<!-- === NAVBAR  === -->
<?php include 'parts/nav.php'; ?>
<?php if(isset($_SESSION['unutherrized'])): ?>
	<div class="alert alert-danger text-center all-msg">
		<strong><?php echo $_SESSION['unutherrized']; ?></strong>
	</div>
	<?php endif; ?>
	<?php unset($_SESSION['unutherrized']); ?>

<div class="showcase">
<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			
			<?php if(isset($_SESSION['online_user'])): ?>
				<h3>Thank You <span class="online"><?php echo $_SESSION['online_user'] ?></span> See you next time </h3>
				<p><i class="fa fa-thumbs-o-up"></i></p>
			<?php else: ?>
				<h1 class="ki">Mantain Your Profile...</h1><hr>
				<p class="kii"> If you say sorry to someone that doest mean that you are wrong that just mean value you the person more than being right...</p>
 			<h6 class="des">-Designed by kiran.M</h6>			<?php endif; ?>
			<?php unset($_SESSION['online_user']); ?>
			
			
		</div><!-- col -->
		
 		<div class="col-md-4 content">
 			<div class="signup-cover">
 			<div class="card">
 				<div class="card-header">
 					<div class="row">
 						<div class="col-md-9">
 							<h3 class="form-heading">Signup</h3>
 							
 							
 						</div> <!--col --->
 						<div class="col-md-3 text-right ">
 							<i class="fa fa-pencil-square-o fa-3x "></i>
 							
 						</div> <!--coloumn-->
 						
 					</div> <!--row-->

 					
 				</div> <!-- card header -->

 				<div class="card-body">
 					<form id="signup_submit">
 						<div class="form-group show-progress ">
 							
 						</div>

 						<div class="form-group">
 							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
 							<div class="name-error error" ></div>


 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="emial" name="email" id="email" class="form-control" placeholder="Enter Your Emial">
 							<div class="email-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password" name="password" id="password" class="form-control" placeholder="Choose Your Password">
 						<div class="password-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password"  id="confirm" class="form-control" placeholder="Confirm your Password Your Password">

 						<div class="confirm-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>

 						</div> <!--form group-->

 						<div class="form-group he">
 							<a href="#" id="login">Already have an account </a>
 							
 						</div>
 						
 					</form> <!--form-->
 					
 				</div> <!--card body-->



 				
 			</div> <!-- card-->
 			</div><!--sign-up form -->
 			<div class="login-cover">

 				<div class="card">
 				<div class="card-header">
 					<div class="row">
 						<div class="col-md-9">
 							<h3 class="form-heading">Login</h3>
 							<p>Enter Emial and Password</p>
 							
 						</div> <!--col --->
 						<div class="col-md-3 text-right ">
 							<i class="fa fa-lock fa-3x "></i>
 							
 						</div> <!--coloumn-->
 						
 					</div> <!--row-->

 					
 				</div> <!-- card header -->

 				<div class="card-body">
 					<form id="login-submit-form" >
 						<div class="form-group">
 							<div class="login-error error ">
 								
 							</div>
 							
 						</div>
 						

 						<div class="form-group">
 							<input type="email" name="login_email" id="login-email" class="form-control" placeholder="Enter Your Emial">

 							<div class="login-email-error error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<input type="password" name="login_password" id="login-password" class="form-control" placeholder="Choose Your Password">

 						<div class="login-password-error" ></div>

 						</div> <!--form group-->

 						<div class="form-group">
 							<a href="#"  id="signup">Create new account </a>
 							
 						</div>

 						

 						<div class="form-group">
 							<button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Login</button>

 						</div> <!--form group-->
 						
 					</form> <!--form-->
 					
 				</div> <!--card body-->



 				
 			</div> <!-- card-->

 				
 			</div> <!--login-cover-->




 			
 		</div> <!--column -->
	</div><!-- row -->
</div><!-- showcase -->
</div><!-- container -->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
        $(".all-msg").fadeOut("slow");
		},2000);
	})
</script>
</body>
</html>
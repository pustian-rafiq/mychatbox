
<?php include "includes/db_connection.php"; ?>

<?php

  if (isset($_POST['sign_up'])) {
  	

  	$username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
  	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
  	$user_password = htmlentities(mysqli_real_escape_string($con,$_POST['user_password']));
  	$confirm_password = htmlentities(mysqli_real_escape_string($con,$_POST['confirm_password']));
  	$user_country = htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
  	$gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
  	$rand = rand(1,2);
  	if ($rand == 1) {
  		$profile_pic = "images/bg1.jepg";
  	}elseif ($rand == 2) {
  		$profile_pic = "images/bg2.jepg";
  	}

  	/*Check for existing email*/
     $query = "SELECT * FROM users_tbl where email='$email'";
		  $execute = mysqli_query($con,$query);
		  $row=mysqli_fetch_assoc($execute);
		  $check_email = $row["email"];


  	if (empty($username)) {
  		echo "<script>alert('We can not verify your name')</script>";
  	}elseif (strlen($user_password)<8) {
  			echo "<script>alert('Password should be minimum 8 characters!')</script>";
  	}elseif ($user_password != $confirm_password) {
  		echo "<script>alert('Password must be same')</script>";
  	}elseif ($email == $check_email) {
  		echo "<script>alert('Your email already exists.Please try to again!')</script>";
  		echo "<script>window.open('signup.php','_self')</script>";
  		exit();
  	}else{

 		$user_password = md5($user_password);
 		$sql = "INSERT INTO users_tbl (username,user_pass,user_email,user_profile,user_country,user_gender)
 		VALUES('$username','$user_password','$email','$profile_pic','$user_country','$gender')";
		
		 
		 $execute = mysqli_query($con,$sql);
		if ($execute) {
				echo "<script>alert('Congratulations $username, your account has been created successfully ')</script>";
				echo "<script>window.open('signin.php','_self')</script>";
			}else{
				echo "<script>alert('Registration failed!.Please try to again!')</script>";
  		        echo "<script>window.open('signup.php','_self')</script>";
			}
  	}

  	// if ($rand == 1) {
  	// 	$profile_pic = "images/bg1.jepg";
  	// }elseif ($rand == 2) {
  	// 	$profile_pic = "images/bg2.jepg";
  	// }

  }





?>
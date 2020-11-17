<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Robot|Courgette|Pacifico:400,700" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/signup.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <title>Login my Account</title>
    </head>
<body>
<!--Start Sign Up Form-->
    <div class="signup-form">
        <form action="" method="">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chatting with yours friends</p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="someone@gmail.com" autocomplete="off" required>

            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="someone@gmail.com" autocomplete="off" required>

            </div>
     
            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password" autocomplete="off" required>
  
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required>
  
            </div>
            <!-- Start Country list-->
           <?php
           
              $country =array("Afghanistan","Albania", "American", "Australia","Bahrain","Bangladesh","Belgium", "Bhutan"," Brazil","Canada", "Spain","Chile","China","Dubai","Greece","Germany","India","Italy","Japan","Nepal","Pakistan","Soudi Arab","Srilanka","UK");
            
           ?>
            <div class="form-group">
                <label for="user_country">Country</label>
                <select name="user_country" id="user_country" class="form-control">
                    <option disabled="">Select Your Country</option>
                    <?php 
                    
                    for ($i=0; $i < count($country); $i++) {  ?>
                            <option value="<?php echo $i; ?>">

                            <?php
                            echo $country[$i];
                            
                            ?>
                            </option>
                     <?php } ?>
                </select>

            </div>
     <!-- End Country list-->  

     <!-- Start Gender list-->

            <div class="form-group">
                
                <input type="radio" id="gender" name="gender" required>
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" required>
                <label for="female">Female</label>

                <input type="radio" id="others" name="gender" required>
                <label for="others">Others</label>
  
            </div>
    <!-- End Country list-->

           <div class="form-group">
                <label for="checkbox" class="checkbox-inline">
                    <input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp;
                    <a href="#">Privacy Policy</a>
                </label>
                
  
            </div>
           
            <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
  
            </div>

            
        </form>
        <div class="text-center small"  >Don't have an account? <a href="signup.php">Create one</a>
       <!--  style="color: #67428B;" -->
        </div>

    </div>
    <!--End Sign In Form-->
    
</body>
</html>
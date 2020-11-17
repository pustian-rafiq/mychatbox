<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Robot|Courgette|Pacifico:400,700" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/signin.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <title>Login my Account</title>
    </head>
<body>
<!--Start Sign In Form-->
    <div class="signin-form">
        <form action="" method="">
            <div class="form-header">
                <h2>Sign In</h2>
                <p>Login to MyChat</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="someone@gmail.com" autocomplete="off" required>

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required>
  
            </div>
            <div class="small">Forgot Password?<a href="forgot_pass.php">Click Here</a> </div><br>
            <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
  
            </div>
            
        </form>
        <div class="text-center small"  >Don't have an account? <a href="signup.php">Create one</a>
       <!--  style="color: #67428B;" -->
        </div>

    </div>
    <!--End Sign In Form-->
    
</body>
</html>
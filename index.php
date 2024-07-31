<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];

        if( !empty($password) && !empty($user_email))
        {

            //read from database
            $query = "select * from users where user_email = '$user_email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] == $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: home.php");
                        die;
                    }
                }
            }
        }else
        {
            echo "wrong email or password!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    
  <title>JackPotJive</title>
</head>
<body>
    <div id="screen-header" class="container-fluid col-md-12">
        <div class="row">
            <div class="col">
                <div class="logo col-md-6">
                    <a href="#">
                        <img src="images/logo.png" alt="Your Logo" height="80">
                    </a>
                </div>
            </div>
            <div class="col text-end">
                <div class="signup-button col-md-6">
                    <a href="signup.php" type="button"><strong>Sign Up</strong></a>
                </div>
            </div>
        </div>
    </div>

    <!-- login form starts here -->
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">

            <form class="form-signin" method="post">
              <h1 class="h3 mb-3 font-weight-normal text-center">Sign In</h1>
          
              <label for="emailaddress" class="sr-only">Email address</label>
              <input type="email" id="emailaddress" class="form-control mb-3" name="user_email" placeholder="Email Address" required autofocus>
          
              <label for="password" class="sr-only">Password</label>
              <div class="input-group mb-3">
                  <input type="password" id="password" name="password" class="form-control mr-2" placeholder="Password" required>
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button" id="passwordToggleBtn" title="Toggle Password Visibility">
                        <i id="passwordIcon" class="fa fa-eye-slash"></i> Show
                      </button>
                  </div>
              </div>
          
              <div class="checkbox mb-3">
                  <label>
                      <input type="checkbox" value="remember-me"> Remember me
                  </label>
              </div>
          
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
          </form>
          </div>
      </div>
  </div>

  <a href="home.php" type="button" class="btn btn-primary fixed-bottom">Home</a>
  
  
    <!-- login form ends here -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>      
</body>
</html>
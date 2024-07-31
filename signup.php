<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        echo"Something was posted";
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($user_email))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,user_email,password) values ('$user_id','$user_name','$user_email','$password')";

            mysqli_query($con, $query);

            header("Location: index.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
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
                    <a href="index.php" type="button"><strong>Sign in</strong></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-signup" method="post">
                    <h1 class="h3 mb-3 font-weight-normal text-center">Sign Up</h1>
    
                    <label for="fullname" class="sr-only">Full Name</label>
                    <input type="text" id="fullname" name="user_name" class="form-control mb-3" placeholder="Full Name" required autofocus>
    
                    <label for="emailaddress" class="sr-only">Email address</label>
                    <input type="email" id="emailaddress" name="user_email" class="form-control mb-3" placeholder="Email Address" required>
    
                    <label for="password" class="sr-only">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control mr-2" placeholder="Password" required>
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" id="passwordToggleBtn" title="Toggle Password Visibility">
                                <i id="passwordIcon" class="fa fa-eye-slash"></i> Show
                            </button>
                        </div>
                    </div>
    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    
    <a href="home.php" type="button" class="btn btn-primary fixed-bottom">Home</a>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>      
</body>
</html>
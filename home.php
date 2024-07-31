<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
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
                    <a href="logout.php" type="button"><strong>Logout</strong></a>
                    <a href="profile.php" type="button"><fontcolor="GREEN"><strong><?php echo $user_data['user_name']; ?></strong></fontcolor></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header">
        <h1>JackPotJive</h1>
        <p>Feeling lucky? Buy a ticket now!</p>
      </div>
    
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.jpg" class="d-block w-100" alt="Lottery 1">
          </div>
          <div class="carousel-item">
            <img src="images/2.jpg" class="d-block w-100" alt="Lottery 2">
          </div>
          <div class="carousel-item">
            <img src="images/3.jpg" class="d-block w-100" alt="Lottery 3">
          </div>
          <div class="carousel-item">
            <img src="images/4.jpg" class="d-block w-100" alt="Lottery 4">
          </div>
          <div class="carousel-item">
            <img src="images/5.jpg" class="d-block w-100" alt="Lottery 5">
          </div>
        </div>
      </div>
    
      <div class="container">
        <h2>Welcome to the Lottery Madness!</h2>
        <p>Get ready for an exciting chance to win big. Buy your lottery ticket now!</p>
    
        <button class="btn btn-primary buy-ticket-btn">Buy a Ticket</button>
      </div>
    
      <div class="footer">
        <p>&copy; 2023 Lottery Madness. All rights reserved.</p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>      
</body>
</html>
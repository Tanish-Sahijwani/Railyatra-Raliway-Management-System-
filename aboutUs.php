<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Railyatra</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <!--######################## NAVBAR #######################################-->
    <nav class="navbar navbar-expand-lg  darkBlue fixed-top">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" alt="" style="
            margin-bottom: 14px">
            <span class='whiteText my-3'>RAIL</span><span class="yellowText ">YATRA</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
              <i class="fas fa-bars yellowIcon" aria-hidden="true"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav  ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-white navbarStyle " href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="onlineBooking.html">Online Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="pnrStatus.html">Pnr Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="runningStatus.html">Running Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle " href="contactUs.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning buttonRadius mr-3 buttonStyle" href="login.html" role="button">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning buttonRadius buttonStyle" href="signup.html" role="button">Signup</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="p-3">
        <h3 style="color: #016180;margin-top: 80px;">About Us</h3>
        <p> Railyatra!!! You can book trains for any destination, class or train type with us.We will help you in booking tickets from the comfort of our homes or offices. While this is convenient for most people ,it has made things particularly easy for
            people residing in remote location. You can save the time needed to travel to railway station and waiting in the queue for your turn. We also provide you with an excellent feature which will help you to check your pnr status with your phone
            number rather than pnr number making tasks easier for you !!
        </p>
    </div>

    </div>

</body>

</html>
<?php
    require "partials/footer.php";
    ?>
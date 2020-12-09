<?php
    session_start(); // resume
    $logged = false; // by default, flag

    // check is the variable exists and if exists check if it is true.
    if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"])
        $logged = true;
?>
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
                    <a class="nav-link text-white navbarStyle " href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="onlineBookingFront.php">Online Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="pnrStatus.php">Pnr Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle" href="runningStatus.php">Running Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navbarStyle " href="contactUs.php">Contact us</a>
                </li>
                <?php
                    if($logged) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link text-white ">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?= $_SESSION["name"] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning buttonRadius mr-3 buttonStyle" href="logout.php" role="button">Logout</a>
                    </li>
                <?php } else {?>

                <li class="nav-item">
                    <a class="btn btn-warning buttonRadius mr-3 buttonStyle" href="loginFront.php" role="button">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning buttonRadius buttonStyle" href="signupFront.php" role="button">Signup</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
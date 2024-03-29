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
    <link rel="stylesheet" href="footer.css ">
</head>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
    require "partials/_nav.php";
    ?>
        <!-- ######################### SignUp ############################ -->

        <h3 class="text-center" style="color: #016180;margin-top: 82px;">SIGN UP</h3>

        <div id="login" class="container-fluid  d-flex justify-content-center mt-3">

            <form method="POST" action="signup.php">

                <label for="First_Name">First Name:</label><br>
                <input class="input" type="text" id="First_Name" name="First_Name" placeholder="Enter your First Name" required><br>

                <label for="Last_Name">Last Name:</label><br>
                <input class="input" type="text" id="Last_Name" name="Last_Name" placeholder="Enter your Last Name" required><br>


                <label for="Email">Email:</label><br>
                <input class="input" type="email" id="email" name="email" placeholder="Enter your Email address" required><br>

                <label for="mobileNumber">Mobile Number:</label><br>
                <input class="input" type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" required><br>

                <label for="age">Age:</label><br>
                <input class="input" type="number" id="age" name="age" placeholder="Enter your age" required><br>
                <label for="gender">
            Please select your gender:
            </label><br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label><br>

                <label for="password">Password</label><br>
                <input class="input" type="password" id="password" name="password" placeholder="Enter password" required><br>

                <label for="confirmPassword">Confirm Password</label><br>
                <input class="input" type="password" id="confirmPassword" name="confirmPassword" placeholder="Enter confirm password" required><br><br>

                <input type="submit" value="SignUp" class="submit  btn-warning buttonRadius input">
                <br><br>
                <p>Already have an Account?
                    <a href="loginFront.php">Click here</a>
                </p>
            </form>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- #########################Footer############################# -->
        <?php
    require "partials/footer.php";
    ?>
</body>

</html>
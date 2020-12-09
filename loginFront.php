<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="login.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Railyatra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="footer.css">

</head>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
    require "partials/_nav.php";
    ?>

        <!-- ##################Login#################### -->
        <h3 class="text-center" style="color: #016180;margin-top: 82px;">LOG IN </h3>

        <div id="login" class="container-fluid  d-flex justify-content-center " >


            <form method="POST" action="login.php">
                <label for="login">Email:</label><br>
                <input class="input" type="email" id="email" name="email" placeholder="Enter Email address" required>
                <span class="error"><br> Please enter your Email-id</span>
                <span class="error" id="invalid_email"><br> Please enter your VALID Email-id</span>
                <br>

                <label for="password">Password</label><br>
                <input class="input" type="password" id="password" name="password" placeholder="Enter password" required>
                <span class="error"><br>Please enter your password</span>
                <br><br>

                <input id="submit" name="submit" type="submit" value="Login" class="submit  btn-warning buttonRadius input">
                <br><br>
                <p>Create New Account?
                    <a href="signupFront.php">Click here</a>
                </p>
            </form>
      
           
        </div>

        <script src="login.js"></script>

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
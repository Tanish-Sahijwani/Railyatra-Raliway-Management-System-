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
    <?php
    require "partials/_nav.php";
    ?>

        <!-- ########################Online Booking ############################## -->
        <h3 class="text-center" style="color: #016180; margin-top:82px">Online Booking</h3>
        <div id="onlineBooking" class="container-fluid  d-flex justify-content-center mt-3">

            <form action="OnlineBooking.php" method="POST">
                <label for="From">From:</label><br>
                <input class="input" type="text" id="From" name="From" placeholder="City name" required><br><br>

                <label for="To">To:</label><br>
                <input class="input" type="text" id="To" name="To" placeholder="City name" required><br><br>

                <label for="date">Date:</label><br>
                <input class="input" type="date" id="date" name="date" required><br><br>

                <input type="submit" value="Search" class="submit  btn-warning buttonRadius input">


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
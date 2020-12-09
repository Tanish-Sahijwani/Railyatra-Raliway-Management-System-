<?php
    session_start();
    if(!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn'])
        header("Location: loginFront.php"); 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="login.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Railyatra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        #Seat_Type {
            width: 30vw;
            padding: 5px;
            border: 1px solid #000000;
            border-radius: 78px;
            font-size: 1em;
            border: 1px solid black;
            outline: none;
        }

        span {
            color: #016180;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#form").hide();
            $("#bookNow").click(function() {
                $("#bookNow").hide();
                $("#inform").hide();
                $("#form").show();
            });
            $(document).ready(function () {
  $('#myCheckbox').click(function () {
    $('#myButton').prop("disabled", !$("#myCheckbox").prop("checked")); 
  })
});

        });

        function multiply() {
            // Get the input values
            a = Number(document.getElementById('ticket_fare').value);
            b = Number(document.getElementById('no_of_tickets').value);
            d = document.getElementById('Seat_Type').value;
            if (d == "General") {
                e = 1;
            } else if (d == "Sleeper") {
                e = 1.5;
            } else if (d == "AC2tier") {
                e = 4;
            } else if (d == "AC3tier") {
                e = 2;
            }
            // Do the multiplication
            c = a * b * e;

            // Set the value of the total
            document.getElementById('TOTAL').innerHTML = c;
        }
    </script>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST)) {
        $start = $_POST['start'];
        $dest = $_POST['dest'];
        $trainNo = $_POST['trainNo'];
        $trainName = $_POST['trainName'];
        $arrival = $_POST['arrival'];
        $seat_available = $_POST['seat_available'];
        $depature_time = $_POST['departure'];
        $ticket_fare = $_POST['ticket_fare'];
    }
}
?>
<?php
require "partials/_nav.php";
?>

<body>
    <?php
    echo "<div id ='inform' style='margin-top:80px; padding:20px'> ";
    echo "<span>Ticket for </span><br>";
    echo "<span>Train Name:" . $trainName . "</span><br>";
    echo "<span>Train Number :" . $trainNo . "</span><br>";
    echo "<span>" . $start;
    echo " </span><span>to</span><span> " . $dest . "</span><br>";
    echo "<span>Departure Time :" . $depature_time . "</span><br>";
    echo "<span>Arrival Time :" . $arrival . "</span><br>";
    echo "</div>";
    $Pnr = mt_rand(1000000000, 9999999999);
    $coach = mt_rand(1, 5);
    $seat_no = mt_rand(1, 100);
    ?>
    <button id="bookNow" class="submit  btn-warning buttonRadius input" style="margin-left: 10px;">Confirm</button>

    <div id="" class="container-fluid  d-flex justify-content-center " style="margin-top:80px">
        <form method="POST" action="confirm.php">
            <input type="hidden" name="start" value="<?= $start ?>" />
            <input type="hidden" name="departure" value="<?= $departure ?>" />
            <input type="hidden" name="dest" value="<?= $dest ?>" />
            <input type="hidden" name="trainNo" value="<?= $trainNo ?>" />
            <input type="hidden" name="trainName" value="<?= $trainName ?>" />
            <input type="hidden" name="arrival" value="<?= $arrival ?>" />
            <input type="hidden" name="seat_available" value="<?= $seat_available ?>" />
            <input type="hidden" name="depature_time" value="<?= $depature_time ?>" />
            <input type="hidden" name="ticket_fare" id="ticket_fare" value="<?= $ticket_fare ?>" />
            <input type="hidden" name="Pnr" value="<?= $Pnr ?>" />
            <input type="hidden" name="coach" value="<?= $coach ?>" />
            <input type="hidden" name="seat_no" value="<?= $seat_no ?>" />

            <div id="form">
                <h4>Please fill this detials</h4>
                <label for="First_Name">First Name:</label><br>
                <input class="input" type="text" id="First_Name" name="First_Name" placeholder="Enter your First Name" required><br>

                <label for="Last_Name">Last Name:</label><br>
                <input class="input" type="text" id="Last_Name" name="Last_Name" placeholder="Enter your Last Name" required><br>


                <label for="Email">Email:</label><br>
                <input class="input" type="email" id="email" name="email" placeholder="Enter your Email address" required><br>

                <label for="mobileNumber">Mobile Number:</label><br>
                <input class="input" type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" required><br>

                <label for="no_of_tickets">Number Of Tickets:</label><br>
                <input class="input" type="number" id="no_of_tickets" onchange="multiply()" name="no_of_tickets" placeholder="Enter Number Of Tickets" required><br>

                <label for="Seat Type">Select a Seat Type You Want:</label><br>
                <select name="Seat_Type" id="Seat_Type" onchange="multiply()">
                    <option value="General">General</option>
                    <option value="Sleeper">Sleeper</option>
                    <option value="AC2tier">AC2tier</option>
                    <option value="AC3tier">AC3tier</option>
                </select> <br>

                <label for="TOTAL">Total Amount</label><br>
                <h3 type="text" name="TOTAL" id="TOTAL"></h3>


                <label for="myCheckbox"><input id="myCheckbox" type="checkbox" /> I Agree Term and Condition</lable>
                   <br>
                <input id="myButton" type="submit" value="Confirm" class="submit  btn-warning buttonRadius input" disabled>
        </form>
    </div>

</body>

</html>
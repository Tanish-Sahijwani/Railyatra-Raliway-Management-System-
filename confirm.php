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
<style>
    span 
    {
        color: #016180;

        font-size: 2.5em;
    }
        .info {
            max-width: 70vw;
            background-color:  #FAD201;
            color: blue;
        }
</style>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
        require "partials/_nav.php";
    ?>
    <!-- ######################### PNR status  ############################ -->

    <div id="onlineBooking" class="info container border border-warning " style="margin-top:80px">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Railway_db");
        if (!$conn) 
        {
            echo "Connection Error: " . mysqli_connect_error();
        }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') 
        {
            $first = $_POST['First_Name'];
            $last = $_POST['Last_Name'];
            $ph = $_POST['mobileNumber'];
            $start = $_POST['start'];
            $dest = $_POST['dest'];
            $trainNo = $_POST['trainNo'];
            $trainName = $_POST['trainName'];
            $arrival = $_POST['arrival'];
            $seattype = $_POST['Seat_Type'];
            $no_of_tickets = $_POST['no_of_tickets'];
            $seat_available = $_POST['seat_available'];
            $new_seat_available = 0;
            $depature_time = $_POST['depature_time'];
            $Pnr = mt_rand(1000000000, 9999999999);
            $coach = mt_rand(0, 5);
            $query = "INSERT INTO Pnr (fname, lname, P_no, S_stat, D_stat, Seat_Type, no_of_tickets, Pnr_no, Train_Name ,Train_No, Coach, arrivial_time, depature_time) 
        VALUES ('{$first}','{$last}',{$ph},'{$start}','{$dest}','{$seattype}', {$no_of_tickets}, {$Pnr}, '{$trainName}', '{$trainNo}','{$coach}','{$arrival}','{$depature_time}' )";
            $update = mysqli_query($conn, $query);
            if (!$update) 
            {
                echo "ERROR WHILE INSERTING!";
                echo mysqli_connect_error($conn);
            } else 
            {
                echo "<h2>Your Ticket is Booked Successfully</h2> <br>" ;
              echo "Your Pnr Number is " .  $Pnr . "<br>";
              echo "Jounery from :" .$start ;
              echo " to " .$dest. "<br>";
              echo "Seat Type :" . $seattype . "<br>";
              echo "Departure Time :" . $depature_time . "<br>";
              echo "Arrival Time :" . $arrival . "<br>";

            }
            $new_seat_available = $seat_available - $no_of_tickets;
            $query1 = "UPDATE Train SET seat_available = '$new_seat_available' WHERE t_no = '$trainNo' ";
            $update1 = mysqli_query($conn, $query1);
            if (!$update1) 
            {
                echo "ERROR WHILE INSERTING!";
                echo mysqli_connect_error($conn);
            } else 
            {
                echo "";
            }
            $query3 = "UPDATE Pnr SET status = 'Waiting' WHERE Pnr_no = '$Pnr' ";
            $update3 = mysqli_query($conn, $query3);
            if ($seat_available > 0) 
            {
                $query2 = "UPDATE Pnr SET status = 'Confirm' WHERE Pnr_no = '$Pnr' ";
            } else 
            {
                echo "Your Ticket is Confirmed";
            }
            $update2 = mysqli_query($conn, $query2);
        }
        ?> 
    </div>
    <?php
        require "partials/footer.php";
    ?>
 </body>
</html>
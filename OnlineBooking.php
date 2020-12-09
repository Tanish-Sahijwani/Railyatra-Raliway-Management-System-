

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
</head>
<style>
    table, th, td {
  table-layout: auto;
  font-size: 1em;
}
span {
    color: #016180;

    font-size: 2.5em;
}
</style>
<body>

    <!--######################## NAVBAR #######################################-->
    <?php
        require "partials/_nav.php";
    ?>
    <!-- ######################### PNR status  ############################ -->

    <div id="onlineBooking" class="container-fluid" style="margin-top:80px">

        <?php
        $conn = mysqli_connect("localhost", "root", "", "Railway_db");
        if (!$conn) {
            echo "Connection Error: " . mysqli_connect_error();
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $start = $_POST['From'] ;  
            $end =  $_POST['To'] ;
            $date=  $_POST['date'] ;
           
        $sql = "SELECT * FROM Train WHERE s_stat = '$start' AND d_stat = '$end' ";
            
            $search = mysqli_query($conn,$sql)  ;
            if (!$search)
            mysqli_connect_error($conn);
            $row = mysqli_fetch_assoc($search) ;
            
            //var_dump($row) ;
            while  ($row)  
            {
                echo "<form action='book.php' method='POST'>";
                echo "<input type='hidden' value='{$row['s_stat']}' name='start' />";
                echo "<input type='hidden' value='{$row['departure']}' name='departure' />";
                echo "<input type='hidden' value='{$row['d_stat']}' name='dest' />";
                echo "<input type='hidden' value='{$row['arrival']}' name='arrival' />";
                echo "<input type='hidden' value='{$row['t_no']}' name='trainNo' />";
                echo "<input type='hidden' value='{$row['t_name']}' name='trainName' />";
                echo "<input type='hidden' value='{$row['ticket_fare']}' name='ticket_fare' />";
                echo "<input type='hidden' value='{$row['seat_available']}' name='seat_available' />";
                echo "<input type='hidden' value='{$row['ticket_fare']}' name='ticket_fare' />";
                echo "<span>".$row["s_stat"]."</span><span>  to  </span><span>".$row["d_stat"]."</span>" ;
                echo "<table class='table table-hover'><thead class='bg-warning'><tr><th>Train Number</th><th>Train Name</th><th>Start Station</th><th>Departure Details</th><th>Destination Station</th><th>Arrival Date & Time</th><th>Total Seats</th><th>Seat Available</th><th>Seat Type</th><th>Minimum Fare</th><th></th></tr></thead>";
                echo "<tr><td>" . $row["t_no"]. "</td><td>" . $row["t_name"]."</td><td>" . $row["s_stat"]. "</td><td>" . $row["departure"]. "</td><td>" . $row["d_stat"]. "</td><td>" . $row["arrival"]."</td><td>" . $row["total_seat"]. "</td><td>" . $row["seat_available"]. "</td><td>" . $row["seat_type"]. "</td><td>" . $row["ticket_fare"]."</td> <td>" ."<button type='submit' class='btn btn-warning'> Book Now</button>". "</td>  </tr>"; 
                echo "</table>";
                echo "</form>";
                $row = mysqli_fetch_assoc($search) ;
            }
            if (!$search)
            {
                echo "<script>
                alert('Please Fill All Details');
                window.location.href = 'onlineBooking.php
                ' 
                </script>" ;
            }

           
        }
        ?>
    </div>
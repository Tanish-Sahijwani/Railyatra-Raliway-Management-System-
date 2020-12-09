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
    <style>
        .info {
            max-width: 70vw;
            background-color:  #FAD201;
            color: blue;
        }
    </style>
    
</head>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
        require "partials/_nav.php";
    ?>
    <!-- ######################### PNR status  ############################ -->
    <h3 class="text-center" style="color: #016180; margin-top: 100px;">HERE  IS YOUR DETAIL </h3>

    <div id="pnrStatus" class="info container border border-warning  ">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Railway_db");
        if (!$conn) {
            echo "Connection Error: " . mysqli_connect_error();
        }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $uid = isset($_POST['mobile']) == true ? $_POST['mobile'] : '';

            $sql = "SELECT * FROM Pnr WHERE P_no='$uid' ";
            $result = mysqli_query($conn, $sql);
            //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

            //If username and password exist in our database then create a session.
            //Otherwise echo error.

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<span>First Name :     </span>" . $row["fname"] . "<br>";
                    echo "<span>Last Name :      </span>" . $row["lname"] . "<br>";
                    echo "<span>Phone no :       </span>" . $row["P_no"] . "<br>";
                    echo "<span>PNR NO :         </span>" . $row["Pnr_no"] . "<br>";
                    echo "<span>Current Status : </span>" . $row["status"] . "<br>";
                    echo "<span>No of tickets :  </span>" . $row["no_of_tickets"] . "<br>";
                    echo "<span>Source :         </span>" . $row["S_stat"] . "<br>";
                    echo "<span>Destination :    </span>" . $row["D_stat"] . "<br>";
                    echo "<span>Seat Type :      </span>" . $row["Seat_Type"] . "<br>";
                    echo "<span>Train Name :     </span>" . $row["Train_Name"] . "<br>";
                    echo "<span>Train No :       </span>" . $row["Train_No"] . "<br>";
                    echo "<span>Coach :          </span>" . $row["Coach"] . "<br>";
                    echo "<span>Arrival Time :   </span>" . $row["arrivial_time"] . "<br>";
                    echo "<span>Departure Time : </span>" . $row["depature_time"] ."<br> <br> <br> <br>";
                }
            }
        else {
            echo "<script>
    alert('No Tickets are found for this mobile number.Check your mobile number and try again');
    window.location.href = 'pnrStatus.php' 
    </script>";
        }
    }
        ?>
    </div>
    <?php
    require "partials/footer.php";
    ?>
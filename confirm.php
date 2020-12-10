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
    span {
        color: #016180;

        font-size: 2.5em;
    }

    .info {
        max-width: 70vw;
        background-color: #FAD201;
        color: #016180;
    }
</style>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
    require "partials/_nav.php";
    ?>
    

    <div id="onlineBooking" class="info container border border-warning " style="margin-top:80px">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Railway_db");
        if (!$conn) {
            echo "Connection Error: " . mysqli_connect_error();
        }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $first = $_POST['First_Name'];
            $last = $_POST['Last_Name'];
            $ph = $_POST['mobileNumber'];
            $email= $_POST['email'];
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
            $Pnr = $_POST['Pnr'];
            $coach = $_POST['coach'];
            $seat_no =$_POST['seat_no'];
            
            
            $query = "INSERT INTO Pnr (fname, lname, P_no, S_stat, D_stat, Seat_Type, no_of_tickets, Pnr_no, Train_Name ,Train_No, Coach, arrivial_time, depature_time,seat_no) 
        VALUES ('{$first}','{$last}',{$ph},'{$start}','{$dest}','{$seattype}', {$no_of_tickets}, {$Pnr}, '{$trainName}', '{$trainNo}','{$coach}','{$arrival}','{$depature_time}' ,'{$seat_no}')";
            $update = mysqli_query($conn, $query);
            if (!$update) {
                echo "";
                echo mysqli_connect_error($conn);
            } else {
                echo "<h2>Your Ticket is Booked Successfully</h2> <br>";
                echo "<b>Your Pnr Number is </b>" .  $Pnr . "<br>";
                echo "<b>Train Name:</b>" . $trainName . "<br>";
                echo "<b>Train Number :</b>" . $trainNo . "<br>";
                echo "<b>Jounery from :</b>" . $start;
                echo " to " . $dest . "<br>";
                echo "<b>Seat Type :</b>" . $seattype . "<br>";
                echo "<b>Coach Number :</b>" . $coach . "<br>";
                echo "<b>Seat Number:</b>" . $seat_no . "<br>";
                echo "<b>Departure Time :</b>" . $depature_time . "<br>";
                echo "<b>Arrival Time :</b>" . $arrival . "<br>";
                //echo "<b>Total amount:</b>" . $total . "<br>";
            }
            $new_seat_available = $seat_available - $no_of_tickets;
            $query1 = "UPDATE Train SET seat_available = '$new_seat_available' WHERE t_no = '$trainNo' ";
            $update1 = mysqli_query($conn, $query1);
            if (!$update1) {
                echo "ERROR WHILE INSERTING!";
                echo mysqli_connect_error($conn);
            } else {
                echo "";
            }
            $query3 = "UPDATE Pnr SET status = 'Waiting' WHERE Pnr_no = '$Pnr' ";
            $update3 = mysqli_query($conn, $query3);
            if ($seat_available > 0) {
                $query2 = "UPDATE Pnr SET status = 'Confirm' WHERE Pnr_no = '$Pnr' ";
            } else {
                echo "Your Ticket is Confirmed";
            }
            $update2 = mysqli_query($conn, $query2);
        }

        require 'PHPMailer\PHPMailer-5.2-stable/PHPMailerAutoload.php';
    
        $mail = new PHPMailer;
        
        //$mail->SMTPDebug = 3;                                // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
        //$mail->Host = 'smtp.mandrillapp.com';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '2018.tanish.sahijwani@ves.ac.in';  // SMTP username
        $mail->Password = '*******';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        $mail->setFrom('2018.tanish.sahijwani@ves.ac.in', 'RailYatra.com');
        $mail->addAddress($email, $first);     // Add a recipient
        
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Your Ticket details';
        $mail->Body    = "<b>Hello,</b><b>".$first." ".$last."</b><br><b>Your Ticket details are</b><br><b>Pnr Number:</b>" .  $Pnr . "<br>"."<b>Train Name:</b>" . $trainName . "<br>"."<b>Train Number :</b>" . $trainNo . "<br>"."<b>Jounery from :</b>" . $start." to " . $dest . "<br>"."<b>Seat Type :</b>" . $seattype . "<br>"."<b>Coach Number :</b>" . $coach . "<br>"."<b>Seat Number:</b>" . $seat_no . "<br>"."<b>Departure Time :</b>" . $depature_time . "<br>"."<b>Arrival Time :</b>" . $arrival . "<br><br><br>"."<b>Happy Journey!!</b>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '<b>Details of your ticket has been sended to '.$email.'</b>';
        }
        ?>
    </div>
    <?php
    require "partials/footer.php";
    ?>
    <?php
   
?>

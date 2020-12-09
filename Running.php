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
$conn=mysqli_connect("localhost", "root", "", "Railway_db");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
    }
if($_SERVER["REQUEST_METHOD"]=='POST')
{$trainno = isset($_POST['TrainNumber']) == true ? $_POST['TrainNumber'] : '';

$sql="SELECT * FROM running WHERE train_no='$trainno' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
}

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
echo "<span>Train Name :     </span>".$row["train_name"]."<br>" ;
echo "<span>Station Name :    </span>".$row["station_name"]."<br>" ;
echo "<span>Train No          </span>".$row["train_no"] ."<br>" ;
echo "<span>Arrival Details :  </span>".$row["arrival_time"]."<br>" ;
echo "<span>Status :            </span>".$row["delay"]."<br>" ;
echo "<span>Departure Details :  </span>".$row["departure"]."<br>" ;

}
else
{
    echo "<script>
    alert('Incorrect Incorrect Train no Please Try Again');
    window.location.href = 'runningStatus.html' 
    </script>" 
    ; 
}
?>
</div>
<?php
    require "partials/footer.php";
    ?>
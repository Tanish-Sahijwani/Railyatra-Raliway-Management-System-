<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "Railway_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);
// now Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$uid = isset($_POST['email']) == true ? $_POST['email'] : '';
$pwd = isset($_POST['password']) == true ? $_POST['password'] : '';
$sql = "SELECT * FROM Passenger WHERE email='$uid' and pswd='$pwd' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if (mysqli_num_rows($result) == 1) {
   // var_dump($row);
   // echo "Welcome";
    session_start(); // starts/Resumes the session ---> Starting
    $_SESSION["name"] = $row['fname'];
    $_SESSION["isLoggedIn"] = true;
    echo "<script>
    alert('Login Sucessfully');
    window.location.href = 'index.php' 
    </script>";
} else {
    echo "<script>
    alert('Incorrect Password or Email-id');
    window.location.href = 'login.php' 
    </script>";
}

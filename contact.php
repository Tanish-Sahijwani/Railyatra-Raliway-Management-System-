<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "Railway_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database_name);
// now Check the connection
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 //require_once("contactUs.html");
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$yourPhone = $conn->real_escape_string($_POST['your_phone']);
$comments = $conn->real_escape_string($_POST['comments']);

$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "<script>
alert('ThankYou We Will Contact You Soon');
window.location.href = 'index.php' 
</script>" ; 
}
}
else
{
echo "Please fill Name and Email";
}
?>
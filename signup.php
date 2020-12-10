<?php
$conn=mysqli_connect("localhost", "root", "", "Railway_db");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
    }
if($_SERVER["REQUEST_METHOD"]=='POST')
{
$first=$_POST['First_Name'];
$last=$_POST['Last_Name'];
$ph=$_POST['mobileNumber'];
$ag=$_POST['age'];
$gen=$_POST['gender'];
$em=$_POST['email'];
$pswd=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
	if($pswd==$confirmPassword) {
$query= "INSERT INTO Passenger (fname, lname, ph_no, pswd, age, gender, email) VALUES ('{$first}','{$last}','{$ph}','{$pswd}','{$ag}','{$gen}','{$em}')";
$update=mysqli_query($conn, $query);
if(!$update) {
	echo "ERROR WHILE INSERTING!";
	}
else{
	echo "<script>
alert('Signedin Sucessfully');
window.location.href = 'loginFront.php' 
</script>" ; 
echo "Welcome";
}

}
}
?>

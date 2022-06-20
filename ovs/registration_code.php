
<?php
require_once('db_conn.php');
$uname  = $gender = $email = $password = $address =$pincode=$email  =$latitude =$longitude =  '';

$uname = $_POST['username'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phno=$_POST['phno'];
$pincode=$_POST['pincode'];
$password= $_POST['password'];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

$sql = "SELECT * FROM vol WHERE username='$uname' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	header("Location: signup.php?error=The user is already registered");
	exit();
}else {
$sql2 = "INSERT INTO vol(`username`,`password`,`gender`,`address`,`pincode`,`phno`,`email`,`date`,`latitude`,`longitude`) VALUES ('$uname','$password','$gender','$address','$pincode','$phno','$email',current_timestamp(),'$latitude','$longitude')";
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
	header("Location: signup.php?success=Your account has been created successfully");
 exit();
}
else
{
	echo "Error :".$sql;
}
}
?>
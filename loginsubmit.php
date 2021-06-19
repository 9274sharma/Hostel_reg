<?php 

include('dbcon.php');

 ?>

<!-- DATABASE ENTRY -->
<?php

$username = $_POST['username'];
$password = $_POST['password'];
//$regid = $_POST['regid'];


$sql = "select * from login where username='$username' and password='$password' ";
$result = $conn->query($sql);
if($result->num_rows > 0){
	//echo 'login succedd!!!';
	header("Location: ./dashboard.html");

}else{
	echo 'login failed';
}
?>
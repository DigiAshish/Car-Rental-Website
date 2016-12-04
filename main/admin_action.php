<?php
 session_start();

 $car_no = $_GET['car_no'];
 $conn=connect_to_db();									
	$sql="update cr_car set car_availableFL = 'N' where car_no = '".$car_no."'";
echo 'before';	
$result = $conn->query($sql);
echo 'after';	
function connect_to_db()
{$hostname="localhost";						
$database="digiashi_CarRental";
$username="digiashi_root";
$password="digiashi_root";
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {						
	die("Connection failed: " . $conn->connect_error);		
}
return $conn;
}	
?>

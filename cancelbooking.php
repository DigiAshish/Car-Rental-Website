<?php
session_start();

$hostname="localhost";
$database="digiashi_CarRental";
$username="digiashi_root";
$password="digiashi_root";

$conn = mysqli_connect($hostname, $username, $password,$database);
if (!$conn)
	{
     die("Connection failed: " . mysqli_connect_error());
   }
 $sql = "UPDATE `cr_booking` SET `booking_status`='Cancelled' WHERE `booking_id`='".$_GET['booking_id']."'"; 
 $result = $conn->query($sql);
 header('Location: myaccount.php');
?>
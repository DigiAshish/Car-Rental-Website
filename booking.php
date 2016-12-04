<?php
session_start();
 $_SESSION['mfg_id'] = $_GET['mfg_id'];
 $_SESSION['user_id']=6;
 $_SESSION['car-location'];
$hostname="localhost";
$database="digiashi_CarRental";
$username="digiashi_root";
$password="digiashi_root";
	$conn = mysqli_connect($hostname, $username, $password,$database);
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql="select car_no from cr_car where cr_car.mfg_id='".$_SESSION['mfg_id']."' and cr_car.car_no not in (select car_no from cr_booking where booking_status='Successful' ) limit 1";
	/* add date caluse*/
	$resultCarNo = $conn->query($sql);
	if ($resultCarNo->num_rows > 0)
	{
		$row = $resultCarNo->fetch_assoc();

	 $sqlBooking = "INSERT INTO `cr_booking`( `booking_pickup_location`, `booking_date`, `booking_from_date`, `booking_to_date`, `car_no`, `user_id`, `booking_status`) VALUES ('".$_SESSION['car-location']."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','".$row['car_no']."','".$_SESSION['user_id']."','Inprogress')";
	 $result = $conn->query($sqlBooking);
	 header('location: payment.html');
	}
	else
	{
		header('location: index.php');
	}
	
	
	
?>
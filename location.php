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
 $sql = "SELECT * FROM cr_locations"; 
 $result = $conn->query($sql);
 $innerTxt="";
if ($result->num_rows >= 1 )	
{
    while($row = $result->fetch_assoc() ) 
	{
		$innerTxt=$innerTxt. "<option value=".$row["location_city"].">".$row["location_city"]."</option>";
    }
	echo $innerTxt;
} 

 ?>
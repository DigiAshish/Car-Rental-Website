<?php
 session_start();
  
// define variables and set to empty values
$firstname = $lastname = $pwd = $email=$license="";
$nameErr=$pwdErr=$emailErr=$licenseErr="";
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (isset($_POST['action'])) {
    switch($_POST['action']) {
    case 'signin':
         signin();
         break;
    case 'signup':
        signup();
        break;
    }
}
}
function signin()
{
		$pwdErr=$emailErr="";
		$username=test_email($_POST["form-username"]);
		$password=test_pwd($_POST["form-user-password"]);
		
		if($pwdErr=="" && $emailErr=="")
		{
			$conn=connect_to_db();
			$sql="select user_password,user_type,user_id from cr_user where user_email='".$username."'";
			$result = $conn->query($sql);
			if ($result->num_rows ==1)
			{
				
				while($row = $result->fetch_assoc()) {
        				$hash = $row["user_password"];
					$user_type = $row["user_type"];
					$user_id = $row["user_id"];
    				
				}
				
				if (password_verify($password, $hash)) {
					$_SESSION['errors']="";
					$_SESSION['user_id']=$user_id;
					if($user_type=='admin'){
						$_SESSION['user_type']="admin";
						header('Location: admin.php');
					}
					else{
						$_SESSION['user_type']="customer";     
       						header('Location: /index.php');
					}
					

				} 
				else
				{  
					$_SESSION['errors']="Please Enter Valid Credentials";
					header('Location: index.php');
				
				}
				
			}			
			
		}
}
function connect_to_db()
{
	 					$hostname="localhost";
						$database="digiashi_CarRental";
						$username="digiashi_root";
						$password="digiashi_root";

		// Create connection
		$conn = new mysqli($hostname, $username, $password, $database);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		return $conn;
		
}
function signup()
{
  $firstname = test_name($_POST["form-first-name"]);
  $lastname = test_name($_POST["form-last-name"]);
  $pwd = test_pwd($_POST["form-password"]);
  $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
  $email = test_email($_POST["form-email"]);
  $license = test_license($_POST["form-license"]);
    if($nameErr == "" && $emailErr=="" && $licenseErr=="" && $pwdErr=="")
   {
	  $_SESSION['signuperrors']="";
		$conn=connect_to_db();
		$sql = "INSERT INTO cr_user( `user_firstname`, `user_lastname`, `user_password`, `user_email`, `user_phone`, `user_type`, `user_license`, `user_available_fl`) VALUES ('".$firstname."','".$lastname."','".$hashed_pwd."','".$email."','9999999999','customer','".$license."','TRUE')";
		
		if ($conn->query($sql) === TRUE) {
			$_SESSION['signuperrors']="";
			$sqlUser="SELECT user_id from cr_user where user_email='".$email."'";
			$resultUser=$conn->query($sqlUser);
			$rowUser=$resultUser->fetch_assoc();
			$_SESSION['user_id']=$rowUser['user_id'];
		}
		else {
			$_SESSION['signuperrors']="Invalid Details";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	    
		$conn->close();
	     
       header('Location: /index.php');
   }
   else
   {
	   $_SESSION['signuperrors']="Invalid Details";
	     session_destroy();
		 header('Location: index.html');
	   
   }
}

function test_name($data) 
{
  if ( !preg_match("/^[a-zA-Z]*$/",$data)||$data==null ||$data=="") 
  {
	 $GLOBALS['nameErr'] = "Invalid Name";
  }
  return $data;
}
function test_email($data) {
   if (!preg_match("/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/",$data) || $data==null ||$data=="" )
  {
	 $GLOBALS['emailErr']= "Invalid email";
  }
  return $data;
}
function test_pwd($data)
{
 if(strlen($data)<6)
 {
	   $GLOBALS['pwdErr']="Inavlid Password";
 }
return $data;
}
function test_license($data)
{
	if(strlen($data)<10)
	{
		$GLOBALS['licenseErr']="Invalid License";
	}
	return $data;
}
?>
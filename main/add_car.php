<!DOCTYPE html>
<?php session_start();?>

<html lang="en">
    <head>
        <title>RentWheels - Admin Page</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<script>

function delcar(){
	window.location='admin_action.php?car_no='+document.getElementById('car_no').value;
		
}
</script>
    </head>

    <body>
        <div class="top-content">
        	<div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="sgb-header"><img src="assets/ico/apple-touch-icon-144-precomposed.png" alt="" /></div>
							<div class="col-sm-offset-2 text">
								<h1><strong>RENTWheels</strong> Admin Action</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-box">
									<div class="form-top">
										<div class="form-top-left">
											<h3>Delete a car</h3>
										</div>
									</div>
									<div class="form-bottom">
										
										<input type="hidden" id="car_number" name="action" value="delcar" />
<?php if(isset($_SESSION['del_car_error'])):?>
												<div class="error"><?php echo $_SESSION['del_car_error'];?></div>
											<?php endif; ?>
										
										<?php
	$conn=connect_to_db();									
	$sql="select car_no from cr_car where car_availableFl = 'Y'";
	$result = $conn->query($sql);
	if ($result->num_rows)
	{	
		echo "<select id=\"car_no\" name=\"car_no\">";				
		echo "<option value=\"\">--Select a car--</option>";
		while($row = $result->fetch_assoc()) {					
			echo "<option value=\"".$row['car_no']."\">" . $row['car_no'] . "</option>";    				
		}
		echo "</select>";	
	}
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
										
<br>
				                        <button  onClick="delcar()" >delete</button>
				            
			                    </div>
		                    </div>
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Add a car</h3>
	                            		<p>Add a car to a given location</p>
	                        		</div>
	                        		
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="admin_action.php" method="post" class="add_car_form">
									 <input type="hidden" name="action" value="addcar" />
									  <?php if(isset($_SESSION['add_car_errors'])):?>
										<div class="error"><?php echo $_SESSION['add_car_errors'];?></div>
										<?php endif; ?>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-car-no">Car Number</label>
				                        	<input type="text" name="form-car-no" placeholder="Car Number" class="form-car-no form-control" id="form-car-no">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-car-loc">Car Location</label>
				                        	<input type="text" name="form-car-loc" placeholder="Car Location" class="form-car-loc form-control" id="form-car-loc">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-mfg-id">mfg_id</label>
				                        	<input type="text" name="form-mfg-id" placeholder="mfg_id" class="form-mfg-id form-control" id="form-mfg-id">
				                        </div>
					
				                        
				                        <button type="submit" class="btn">Add a car!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/loginValidation.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
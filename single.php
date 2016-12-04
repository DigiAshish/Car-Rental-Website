<?php
session_start();


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rent Wheels</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
		
		
		function bookCar(count){
		window.location='booking.php?mfg_id='+count; 
		}
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
		
	</script>
</head>
<body>
<div class="header-bg">
	<div class="wrap"> 
				<div class="h-bg">
					<div class="total">
						<div class="header">
							<div class="clear"></div>
								<div class="header-bot">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="Rent Wheels" /></a>
						</div>
						<div class="cart">
					    	<ul class="ph-no">
								<li class="item  first_item">
									<div class="item_html">
										<span class="text1">Wheels on the go!</span>
									</div>
								</li>
							</ul>
							<?php 
							if($_SESSION['user_id']!=null)
							{
							echo "<div class=myaccount>
		   	   					<span><a href=myaccount.php>MY ACCOUNT</a></span>
		   					</div>";
							}
							else{
									echo "<div class=login>
		   	   					<span><a href=main/index.php><img src=images/login.png  title=login></a></span>
		   					</div>";
							}
							?>
				    		
				    		
						</div>					
						<div class="clear"></div>
												
					</div>
			</div>			
			<div class="orange"></div>
				<div class="menu"> 	
					<div class="top-nav"> 
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href='#findCars'>Find Cars</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
							<div class="clear"></div> 
					</div>
				</div>		
			
	<div class="content-bottom">
	   		<div class="cont span_2_of_3">
				<div class="top-index">&nbsp;&nbsp;<a href="#" class="headerNavigation">Catalog</a> »  
					<a href="#" class="headerNavigation">Cars</a> » 
					<a href="#" class="headerNavigation last">Model 0012</a></div>
		 <div class="grid-bottom">
				<?php
						$hostname="localhost";
						$database="digiashi_CarRental";
						$username="digiashi_root";
						$password="digiashi_root";
						$conn = mysqli_connect($hostname, $username, $password,$database);
						if (!$conn)
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$_SESSION['car-location']=$_GET['car-location'];
						$sql = "SELECT * from cr_mfg as m where m.size_id=(SELECT size_id from cr_size where size_detail='".$_GET['size_detail']."') and mfg_id IN(SELECT mfg_id from cr_car where cr_car.car_availableFl='Y' and cr_car.car_no in( SELECT car_no from cr_car_location where cr_car_location.location_zip in (SELECT location_zip FROM cr_locations WHERE location_city='".$_GET['car-location']."')))";
						$result = $conn->query($sql);
						if ($result->num_rows >= 1)	
						{
							$count=0;
							echo "<h4>Results found</h4>";
							while($row = $result->fetch_assoc()) 
							{
								$count=$row['mfg_id'];
								$innerText="<div id=cardetail".$count." class=section group>";
								$innerText=$innerText."<div class=lsidebar span_1_of_s style=float:left>";
								$innerText=$innerText." <div id=container".$count.">";
								$innerText=$innerText."<div id=products_example".$count.">";
								$innerText=$innerText."<div id=products".$count.">";
								$innerText=$innerText."<div class=slides_container>";
								$innerText=$innerText."<a href=# target=_blank><img src="."images/pic".$count.".jpg"." alt="." "."></a>";
								$innerText=$innerText."</div></div></div></div></div>";
								$innerText=$innerText."<div class=cont1 span_2_of_s>";
								$innerText=$innerText."<h5 id=carname".$count.">".$row['mfg_brand']." ".$row['mfg_model']."</h5>";
								$innerText=$innerText."<h3 class=price1><b>Price:&nbsp;&nbsp;</b><span id=carprice".$count."  class=productPrice>$".$row['mfg_rate']."  </span><span><button id=book-btn".$count." value=".$count." onclick=bookCar('".$count."')>Book </button></span></h3>";
								$innerText=$innerText."</div><div class=clear></div></div>";
							
						  echo $innerText;
						}
						} 
						else
							echo "<h4>Results not found</h4>";
						?>
				<div class="clear"></div> 
		    </div>
			
	</div>	
	<div class="rsidebar span_1_of_3">
				<div class="sidebar">
					<h4 class="title_block"><span>Brands</span></h4>
				   <div class="info-Box">
						<ul style="list-style: none; margin: 0; padding: 0;">
							<li class="first">
								<a href="#">Visit Manufacturer-1 ..</a>
							</li>
							
						</ul>
					</div>
					<div class="box_wrapper_title"><h1><span class="title-icon"></span>Manufacturer Info</h1></div>
				<div class="manu-info">
					<h5><a href="#">From 24/7 roadside assistance to 24-hour customer support, we’ll be here for you every step of the way during your rental.</a></h5>
				</div>
			
		         </div>
				</div>			    
			<div class="clear"></div> 
		</div>
	<div class="footer">
		<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="#">New products</a></li>
						<li><a href="#">top sellers</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Comments</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Your Account</a></li>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Prices</a></li>
						<li><a href="#">Address</a></li>
						<li><a href="#">Locations</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
					</ul>
					<p>Design by <a href="#">W3layouts</a></p>
				</div>
				<div class="clear"></div> 
		</div>
	</div>
   </div>
</div>
</div>
</div>
</body>
</html>

    	
    	
            
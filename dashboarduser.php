<?php
session_start();
$r = '';     
if (!$_SESSION['info'])   
{
	session_destroy(); 
	header('location:index.php');     
}    
if ($_SESSION['btn']!='')
{  
   $btn = $_SESSION['btn']; 
   $r = 1;
}  
else if ($_SESSION['btn2']!='') 
{  
   $btn = $_SESSION['btn2'];
   $r = 2; 
}  
$email = $_SESSION['email']; 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/travel (1).png" type="image/x-icon">
  <title>Trip It Online Travel Agency</title>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/userstyle.css">

  </head>
  <body class="tm-gray-bg">
  	<div class="tm-header" style='z-index:201;'>
  		<a href="index.html"><img src="img/logo2.PNG" class="logo" alt="logo"></a>
	  	<nav class="tm-nav" >
			<ul>
				<li><a href="index.html" class="active" style="text-decoration: none;">home</a></li>
				<li class="stays"><a href="#hotels-margin" style="text-decoration: none;">hotels</a>
				</li>
				<li class="travels"><a href="#trips-margin-top" style="text-decoration: none;">international trips</a>
				</li>
				<li><a href="#about-margin" style="text-decoration: none;">About</a></li>
				<li><a href="#contact-margin" style="text-decoration: none;">Contact</a></li>
			</ul>
		</nav>
		<span class="sign">	
			<a href="index.php" id="sign-up" style='font-size: 20px; margin-left: 60px; position: relative; bottom: 6px; text-decoration: none;'>Sign Out</a>
		</span>
  	</div>   
	<div id="form-position" style="bottom: 600px;"></div>
	<section class="container tm-home-section-1" id="more" style="height: 1500px;"> 
		<div class="row" style="margin-top: 255px; ">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1" id="book-box" style='bottom:100px;'> 
					<ul class="nav nav-tabs tm-white-bg" id="hotelCarTabs">
						<li> 
					    	<a id="hotel-anch">Hotel</a> 
					    </li>
						<li >   
					    	<a id="trip-anch">Trip</a>                     
					    </li>
					</ul>
					<div class="tab-content">
					    <div class="tab-pane fade in active tm-white-bg" id="hotel" style="display: block;">
					    	<div class="tm-search-box effect2" >
								<?php
								$res = $_SESSION['info'];  
								if ($res!= 'yes') echo "<div style=' text-align:center; font-size: 20px; font-weight: 400; width: 30%; background-color : gold;  margin: auto auto; text-transform: capitalize; color :white; font-style: italic;'>$res</div>";?>   
								<form method="post" action='reserveh.php' class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
											<label style='font-family:Platino Linotype; font-style: italic; font-size:17px;'>Select Hotel</label>
							            	 <select class="form-control" id="hotel-select" name='hotel_select'>
							            	 	<option value="Africa-Jade">Africa Jade</option > 
												<option value="Le-Royal">Le Royal</option>
												<option value="Radisson-Blu">Radisson Blu</option>
												<option value="Movenpick">Movenpick</option> 
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker1'>
												<label class="date-label">Check-In Date</label><br>
							                    <input type='date' class="form-control" id="checkin-dt" name="checkin" required/>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker2'>
												<label class="date-label">Check-Out Date</label><br>
							                    <input type='date' class="form-control" id="checkout-dt" name="checkout" required/>
							                </div>
							            </div>
							            <div class="form-group ">
										<input class= "form-control" type="number" id="ad-nb" placeholder="-- Adults Number --" name="ad_nbs" required>
							            </div>  
										<input class= "form-control" type="number" id="ch-nb" placeholder="-- Children Number --" name="ch_nbs" required>
										<input type='email' style='display: none;' name ='email_inpt' value= "<?php echo $email;?>">   
						 
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center" style='height: 60px; background-color:white;' >
						            	<input type="submit"  style='cursor: pointer; margin-top: 2px; width: 150px; ' id="reserve-btn" name="reserve-btn" value='reserve'>  
						            </div>  
								</form>
							</div>
					    </div>
					    <div class="tab-pane tm-white-bg" id="car" style="display: none; ">
							<div class="tm-search-box effect2">
								<form method="post" action='reservet.php' class="hotel-search-form" id="trip-fom">
									<div class="tm-form-inner" style='background-color:white;'>
										<div class="form-group">
											<label style='font-family:Platino Linotype; font-style: italic; font-size:17px;'>Select Trip</label>
							            	 <select class="form-control" id="trip-select" name='trip_select'> 
							            	 	<option value="Istanbul-Antalya">Instanbul & Antalya</option>
												<option value="Berlin">Berlin</option>
												<option value="Sicily">Sicily</option>
												<option value="Dubai-Zanzibar">Dubai & Zanzibar</option>
											</select> 
							          	</div>
										  <div class="form-group">
							                <div class='input-group date' id='datetimepicker1-fm'>
												<label class="date-label">Departure Date<label><br>
							                    <input id="depart-dt" type='date' class="form-control" name="dp_dt" required/>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker2-fm'>
												<label class="date-label" id="arr-dt">Arrival Date</label><br>
							                    <input id="arrival-dt" type='date' class="form-control" name="arr_dt" required/>
							                </div>
							            </div>
							            <div class="form-group">
												<input id="adults-number" class= "form-control" type="number" placeholder="-- Adults Number --" name="adu_nbs" required>	
											</select> 
							          	</div>	
										<input id="children-number" class= "form-control" type="number" placeholder="-- Children Number --"  name="chi_nbs" required>
										<input type='email' style='display: none;' name ='email_ip' value= "<?php echo $email;?>">						           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center" style='height: 40px; background-color:white;'>
						            	<input type="submit" style='cursor: pointer; width: 150px; position: relative; bottom: 20px;  ' id="reserve-btn2" name="reserve-btn2" value="Reserve">
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>
		</div> 
		<div id="hotels-margin" style='position: relative; top: 18px;'></div>
		<div class="section-margin-top" id="hotels-section" style='margin-top: 20px;'> 				
			<div class="tm-section-header">
				<div><hr class="line" id="line1"></div>
				<div><h2 class="tm-section-title" id="hotels">Hotels</h2>
					<h3 class="subtitle-hotels" id="hotels-sub">We'll <span class="us">Take You</span>There</h3>
				</div>
				<div><hr class="line" id="line2"></div>	
			</div>
			<div class="service-box">
				<div class="single-service" id="first-hotel">
					<img src="img/africa jade.jpg" alt="image">  
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Africa Jade Thalasso</h3>  
						<hr>
						<p>Korba - Nabeul</p> 
						<p class="price" id="first-price">150 TND on a Single Occupancy Basis</p> 
						<a href="#form-position" class="reserve reserve-hotel" id="f-btn"  style="text-decoration: none;">Reserve</a>
					</div>
				</div>
				<div class="single-service" id="sec-hotel">
					<img src="img/le Royal.jpg" alt="image">
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Le Royal Hammamet</h3>  
						<hr>
						<p>Hammamet - Nabeul</p>
						<p class="price" id="sec-price">180 TND on a Single Occupancy Basis</p> 
						<a href="#form-position" class="reserve reserve-hotel" id="s-btn"  style="text-decoration: none;">Reserve</a>
					</div>
				</div>
				<div class="single-service">
					<img src="img/radisson.jpg" alt="image"> 
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Radisson Blu Palace Resort</h3>
						<hr>
						<p>Djerba</p>
						<p class="price" id="third-price">275 TND on a Single Occupancy Basis</p> 	
						<a href="#form-position" type="button" class="reserve reserve-hotel" id="t-btn"  style="text-decoration: none;">Reserve</a>
					</div>
				</div>
				<div class="single-service">
					<img src="img/movenpick.jpg" alt="image"> 
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Movenpick Resort & Marine Spa</h3>
						<hr>
						<p>Sousse</p>
						<p class="price" id="fourth-price">215 TND on a Single Occupancy Basis</p> 
						<a href="#form-position" class="reserve reserve-hotel" id="fo-btn"  style="text-decoration: none;">Reserve</a>
					</div>
				</div>
			</div>
		</div>
	</section>		
	
	<div id="trips-margin-top"></div> 
	<section class="tm-white-bg section-padding-bottom" id="trips">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div><hr class="trips-line" id="trips-first"></div>
					<div><h2 class="tm-section-title" id="trips-title">International Trips</h2>
						<h3 class="subtitle-trips" id="trips-sub">Adventure <span class="us">Awaits</span></h3> 
					</div>
					<div><hr  class="trips-line" id="trips-sec"></div>	
				</div>
				<div class="col-lg-6">
					<div class="tm-home-box-3 tm-box-left" id="first-trip-box">
						<div class="tm-home-box-3-img-container">
							<img src="img/istanbul.jpg" alt="image" class="img-responsive" id="first-trip">	
						</div>						
						<div class="tm-home-box-3-info" id="first-desc"> 
							<div id="first-trip-title">Instanbul & Antalya</div> 
							<p class="tm-home-box-3-description">
								
								<ul id="first-info">
									<li class="list-text">The plane ticket Tunis / Istanbul / Tunis on a regular flight.</li>
									<li class="list-text">4 nights in Antalya at the Armas Gul Beach 4* hotel on all-inclusive or similar basis.</li>
									<li class="list-text">2 nights in Istanbul at the Tayhan 3* hotel or similar on a bed and breakfast basis.</li>
									<li id="first-trip-price"><span class="us">3500 TND</span> inclusive of all taxes</li>
									<li><a href="#form-position" class="reserve" id="first-btn"  style="text-decoration: none;">Reserve</a></li>
								</ul>
							</p>
							<hr id="first-trip-line"> 
						</div>					
					</div>					
			    </div>
			    <div class="col-lg-6" id="sec-trip-box">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="img/berlin.jpg" alt="image" class="img-responsive" id="sec-trip">	
						</div>						
						<div class="tm-home-box-3-info" id="sec-desc"> 
							<div id="sec-trip-title">Berlin</div>  
							<p class="tm-home-box-3-description">
								<ul id="sec-info">
									<li class="list-text">Tunis-Berlin-Tunis plane ticket.</li>
									<li class="list-text">3 nights at the Regent 5* hotel (or similar) on a single occupancy basis.</li>
									<li class="list-text">Private transfer from airport-hotel-airport.</li>
									<li id="sec-trip-price"><span class="us">3200 TND</span> inclusive of all taxes</li>
									<li><a href="#form-position" class="reserve" id="sec-btn"  style="text-decoration: none;">Reserve</a></li>
								</ul>
							</p>
							<hr id="sec-trip-line"> 
						</div>	
						</div>				
					</div>
				</div>
				<div class="col-lg-6" id="third-trip-box">
				    <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="img/Sicile.jpg" alt="image" class="img-responsive" id="third-trip">	
						</div>		
						<div id="third-trip-title">Sicily</div> 				
						<div class="tm-home-box-3-info" id="third-desc">
							<p class="tm-home-box-3-description">
								<ul id="third-info">
									<li class="list-text">Tunis-Berlin-Tunis plane ticket.</li>
									<li class="list-text">3 nights at the Regent 5* hotel (or similar) on a single occupancy basis.</li>
									<li class="list-text">Private transfer from airport-hotel-airport.</li>
									<li id="third-trip-price"><span class="us">3300 TND</span> inclusive of all taxes</li>
									<li><a href="#form-position" class="reserve" id="third-btn"  style="text-decoration: none;">Reserve</a></li>
								</ul>
							</p>
							<hr id="third-trip-line"> 
						</div>					
						</div>
					</div>
			    </div>
			    <div class="col-lg-6" id="fourth-trip-box">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="img/dubai.jpg" alt="image" class="img-responsive" id="fourth-trip"> 	
						</div>				 		
						<div class="tm-home-box-3-info" id="fourth-desc">
							<div id="fourth-trip-title">Dubai & Zanzibar</div> 
							<p class="tm-home-box-3-description">
								<ul id="fourth-info">
									<li class="list-text">Airline ticket Tunis-Dubai-Zanzibar-Tunis on a regular flight.</li>
									<li class="list-text">2 Nights at the Shangri La 5* hotel (or similar), deluxe room with sea view on a single occupancy basis.</li>
									<li class="list-text">Transfers Airport/Hotel/Airport in Dubai.</li>
									<li class="list-text">4 Nights at the Riu Palace Zanzibar 5* hotel (or similar), junior suite with garden view on an all-inclusive basis.</li>
									<li class="list-text">Transfers Airport/Hotel/Airport in Zanzibar.</li>
									<li id="fourth-trip-price"><span class="us">4220 TND</span> inclusive of all taxes</li>
								</ul>
							</p>
							<hr id="fourth-trip-line"> 
							<a href="#form-position" class="reserve" id="fourth-btn"  style="text-decoration: none;">Reserve</a>
						</div>					
					</div>
			   	</div>
			</div>		
		</div>
	</section>	
<div class="container-margin margin-top-about" id="about-margin">
	<h2>Trip It Travel Agency</h2>
	<div class="mask"><div><div><h2>Trip It Travel Agency</h2></div></div></div>
	<link rel="stylesheet" href="/prj/stl.css"> 
</div>
<section id="about-us" data-parallax-speed="0.5"> 
	<div class="tm-section-header">
		<div class="col-lg-4"><hr class="about-line"></div>
		<div class="col-lg-4 title"><h2 class="tm-section-title contact" id="about-title">about</h2><h3 class="subtitle" id="sub-about">who <span class="us">are</span> we</h3></div>
		<div class="col-lg-4"><hr class="about-line"></div> 
	</div>
	<img src="img/logo2.PNG" alt="logo" id="logo">
	<div style="position: relative;  bottom: 150px; left: 95px; color: gold; text-transform: capitalize; font-size: 35px; text-align:center; font-family: 'Yesteryear'; "> 
		your online travel agency in Tunisia, offers the best prices and services on your trips <br>around the world and stays in Tunisia
	</div>
	<hr id="about-line" style="bottom: 130px;">  
	<div id="news-box">
		<div id="message"><span class="us">I want</span> to <span class="us"> receive</span> the <span class="us"> latest offers</span> and <span class="us">promos</span> via <span class="us"> E-mail</span></div>
		<?php 
			if (!empty($_POST["news-btn"]))
			{
				extract($_POST); 
				$con = mysqli_connect("localhost","root", "", "trip_it"); 
				$sql = "INSERT INTO offersemails (email) VALUES ('$offers_email')";
  				mysqli_query($con, $sql);
				mysqli_close($con);
			}
		?>  
		<div id="news-form" style="position: relative; top: -50px;">         
		  	<form method="post" id="news" class="news">
				<div id="input-group">
					<input type="email" name="offers_email" id="emailNews" class="form-control h-50" placeholder="E-mail" required>
					<input  type="submit" id="news-btn" name="news-btn" value="Sign Up"> 
				</div>  
		  	</form>
		</div>
	</div>
</section>
	<div class="container-margin margin-top-about" id="contact-margin">
		<h2>Trip It Travel Agency</h2>
		<div class="mask"><div><div><h2>Trip It Travel Agency</h2></div></div></div>
	</div>
<section id="contact-us" class="parallax-demo" style="background-image: url('https://images.pexels.com/photos/551855/pexels-photo-551855.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb')">
	<div class="tm-section-header"> 
		<img src="img/travel (1).png" alt="image" class="logo-img">
		<div class="col-lg-4"><hr></div>
		<div class="col-lg-4 title"><h2 class="tm-section-title contact">contact</h2><h3 class="subtitle" id="contact-sub">contact <span class="us">us</span></h3></div>
		<div class="col-lg-4"><hr></div>	
	</div>			
	<div class="form-container">
		<form method="post"> 
		<div class="sec-form-control">
				<input name="contact_name" type="text" required>
				<label id="form-name">Name</label>
		</div>
			<div class="sec-form-control" id="email-box">
				<input name="contact_email" type="email" required>
				<label id="form-email">Email</label>
			</div>
			<div class="sec-form-control" id="subject-box">
				<input name="contact_subject" type="text" required>
				<label id="form-subject">Subject</label>
			</div>
			<textarea id="contact_message" name="contact_message" class="text" placeholder="Message" required></textarea><br>
			<span class="btn" id="bt-ct"><span></span><input type="submit" name="send" value="Send"></span>
		</form>
		<?php
			if (!empty($_POST["send"])) 
			{
				extract($_POST); 
				$to_Email = "haddad.iheb99@gmail.com"; 
				$mail_headers =  'From: [ '. $contact_email . ' ]'. "\r\n" .
				'MIME-Version: 1.0' . "\r\n" .
				'Content-type: text/html; charset=utf-8'; 
				$contact_message = "Name : " . $contact_name . "<br>". "message : " . $contact_message . '<br>'."Best Regards."; 
				mail($to_Email, $contact_subject, $contact_message, $mail_headers);
			} 
		?>
	<div>
</section>
	<footer class="tm-black-bg" id="footer">
		<span id="row"> 
			<div id="phone-item">  
				<img src="img/phone2.png" alt="image" id="image"> 
				<hr id="phone-line">
				<p><span class="info"><span class="yellow">Need</span> Help?</span><div class="cd" id="num">+ 216 20 62 20 22</div><div class="cd" id="mail">haddad.iheb99@gmail.com</div></p>  
			</div>   
			<div id="payment-item">  
				<img src="img/sec_icone2.png" alt="image" id="image-payment">
				<hr id="payment-line">  
				<p>100% <span class="yellow">Secure</span><br>Payment</p> 
			</div>   
			<div id="agency-item">  
				<img src="img/agence_icone1.png" alt="image" id="image-agency"> 
				<hr id="agency-line">
				<p>Rue <span class="yellow">Medinat Kadhimya</span><br>Ennasr <span class="yellow">2</span></p>  
			<div>
		</span> 
		<span id="social"> 
			<div class="social-link">
				<a href="https://www.instagram.com/trip_it_travel_agency/" target="_blank" id="it"><img src='img/instagram.png' id="insta" alt="image"></a>
				<a href="https://www.facebook.com/profile.php?id=100091765163259&is_tour_dismissed=true" target="_blank" id="fb"><img id="facebook" src="img/facebook.png" alt="image"></a> 
				<a href="https://twitter.com/TripIt1963567" target="_blank"  id="tw"><img src="img/twitter.png"z alt="image" id="twitter"></a>
			</div>
			<hr>
			<span id="first-child">Follow Us</span>
			<span id="sec-child">On Social Media</span> 
		</span>
	</footer>
	     				
	
	<script type="text/javascript" src="js/form.js"></script> 
 
	
	 

	
	<script> 
		const button1 = document.getElementById('f-btn');
		const button2 = document.getElementById('s-btn'); 
		const button3 = document.getElementById('t-btn'); 
		const button4 = document.getElementById('fo-btn');
		const link1 = document.getElementById('hotel-anch');  
		const link2 = document.getElementById('trip-anch');
		const select1 = document.getElementById('trip-select'); 
		const select2 = document.getElementById('hotel-select');  
		const tab1 = document.getElementById('hotel'); 
		const tab2 = document.getElementById('car');   
		<?php if ($r == 1)   
			echo "select2.options[$btn].selected = true;"; 
		else if ($r == 2) 
			echo 
			"link2.style.background = 'white';
			link1.style.background = 'gold';   
			tab1.style.display = 'none'; 
			tab2.style.display = 'block'; 
			select1.options[$btn].selected = true;";
		?> 
		link1.addEventListener('click', function() {
			link1.style.background = 'white';
			link2.style.background = 'gold';
			tab1.style.display = 'block'; 
			tab2.style.display = 'none';   
		}); 
		link2.addEventListener('click', function() {
			link2.style.background = 'white';
			link1.style.background = 'gold';
			tab2.style.display = 'block'; 
			tab1.style.display = 'none';   
		}); 
		button1.addEventListener('click', function() {
			link1.style.background = 'white';
			link2.style.background = 'gold';
			tab1.style.display = 'block'; 
			tab2.style.display = 'none'; 
			select2.options[0].selected = true;   
		}); 
		button2.addEventListener('click', function() {
			link1.style.background = 'white';
			link2.style.background = 'gold';
    		tab1.style.display = 'block'; 
			tab2.style.display = 'none';
			select2.options[1].selected = true;   
		}); 
		button3.addEventListener('click', function() {
			link1.style.background = 'white';
			link2.style.background = 'gold';
    		tab1.style.display = 'block'; 
			tab2.style.display = 'none';
			select2.options[2].selected = true; 
		}); 
		button4.addEventListener('click', function() {
			link1.style.background = 'white';
			link2.style.background = 'gold';
    		tab1.style.display = 'block'; 
			tab2.style.display = 'none';
			select2.options[3].selected = true;  
		}); 

		const btn1 = document.getElementById('first-btn');
		const btn2 = document.getElementById('sec-btn');
		const btn3 = document.getElementById('third-btn');
		const btn4 = document.getElementById('fourth-btn'); 
		btn1.addEventListener('click', function() {
			link2.style.background = 'white';
			link1.style.background = 'gold';
    		tab1.style.display = 'none'; 
			tab2.style.display = 'block'; 
			select1.options[0].selected = true;  
		}); 
		btn2.addEventListener('click', function() {
			link2.style.background = 'white';
			link1.style.background = 'gold';
    		tab1.style.display = 'none'; 
			tab2.style.display = 'block'; 
			select1.options[1].selected = true;   
		}); 
		btn3.addEventListener('click', function() {
			link2.style.background = 'white';
			link1.style.background = 'gold';
    		tab1.style.display = 'none'; 
			tab2.style.display = 'block';
			select1.options[2].selected = true; 
		}); 
		btn4.addEventListener('click', function() {
			link2.style.background = 'white';
			link1.style.background = 'gold';
    		tab1.style.display = 'none'; 
			tab2.style.display = 'block';
			select1.options[3].selected = true;   
		}); 
	</script>
 </body>
 <?php session_destroy(); ?>
 </html>
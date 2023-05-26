<?php
session_start();
$_SESSION['info'] = '';
$_SESSION['btn'] = '';   
$_SESSION['btn2'] = '';   
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
  <link href="css/style.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
  	<div class="tm-header">
  		<a href="index.html"><img src="img/logo2.PNG" class="logo" alt="logo"></a>
	  	<nav class="tm-nav">
			<ul>
				<li><a href="index.html" class="active" style="text-decoration: none;">home</a></li>
				<li class="stays"><a href="#more" style="text-decoration: none;">hotels</a>
				</li>
				<li class="travels"><a href="#trips-margin-top" style="text-decoration: none;">international trips</a>
				</li>
				<li><a href="#about-margin" style="text-decoration: none;">About</a></li>
				<li><a href="#contact-margin" style="text-decoration: none;">Contact</a></li>
			</ul>
		</nav>
		<span class="sign" >	
			<a href="login&signup.php" id="sign-up" style=' text-decoration: none; font-size: 20px; margin-left: 60px; position: relative; bottom: 6px; border: none; '>login</a>
		</span>
  	</div>
	<section class="container tm-home-section-1" id="more" style="height:1000px;">
		<div id="hotels-margin"></div>
		<div class="section-margin-top" id="hotels-section"> 				
			<div class="tm-section-header">
				<div><hr class="line" id="line1"></div>
				<div><h2 class="tm-section-title" id="hotels" style="position: relative; top: 20px;">Hotels</h2>
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
						<form action = "login&signup.php" method='post'>   
						<button type='submit' name='fbtn'class="reserve reserve-hotel" id="f-btn">Reserve</button>
						</form> 
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
						<form action = "login&signup.php" method='post'> 
						<input type='number' style='display:none;' value=1 name='btn'>
						<button type='submit' name='fbtn' class="reserve reserve-hotel" id="s-btn">Reserve</button> 
						</form>
					</div>
				</div>
				<div class="single-service" style="margin-top: 20px;">
					<img src="img/radisson.jpg" alt="image"> 
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Radisson Blu Palace Resort</h3>
						<hr>
						<p>Djerba</p>
						<p class="price" id="third-price">275 TND on a Single Occupancy Basis</p> 	
						<form action = "login&signup.php" method='post'>
						<input type='number' style='display:none;' value=2 name='btn'> 
						<button type='submit' name='fbtn' type="button" class="reserve reserve-hotel" id="t-btn">Reserve</button>
						</form>
					</div>
				</div>
				<div class="single-service" style="margin-top: 20px;">
					<img src="img/movenpick.jpg" alt="image"> 
					<div class="overflow"></div>
					<div class="service-desc">
						<h3>Movenpick Resort & Marine Spa</h3>
						<hr>
						<p>Sousse</p>
						<p class="price" id="fourth-price">215 TND on a Single Occupancy Basis</p> 
						<form action = "login&signup.php" method='post'>
						<input type='number' style='display:none;' value=3 name='btn'>
						<button type='submit' name='fbtn' class="reserve reserve-hotel" id="fo-btn">Reserve</button> 
						</form>
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
									<li>
										<form action='login&signup.php' method='post'>
										<input type='number' style='display:none;' value=0 name='bt'>
										<input type='submit' style='position:absolute; top: 149px; right: 95px;' class="reserve" id="first-btn" name='btn2' value='Reserve'>
										</form>
									</li>
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
									<li>
										<form action='login&signup.php' method='post'>
										<input type='number' style='display:none;' value=1 name='bt'>
										<input type='submit' style='position:absolute; top: 149px; right: 95px;' class="reserve" id="sec-btn" name='btn2' value='Reserve'>
										</form>
									</li>
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
									<li>
										<form action='login&signup.php' method='post'>
										<input type='number' style='display:none;' value=2 name='bt'>
										<input type='submit' style='position:absolute; top: 151px; right: 95px;' class="reserve" id="third-btn" name='btn2' value='Reserve'>
										</form>
									</li>
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
							<form action='login&signup.php' method='post'>
							<input type='number' style='display:none;' value=3 name='bt'>
							<input  type='submit' class="reserve" style='position:absolute; top: 215px;'id="fourth-btn" name='btn2' value='Reserve'>
							</form>
						</div>					
					</div>
			   	</div>
			</div>		
		</div>
	</section>
	
<div class="container-margin margin-top-about" id="about-margin">
	<h2>Trip It Travel Agency</h2>
	<script type="text/javascript" src="/prj/stl.js"></script> 
	<div class="mask"><div><div><h2>Trip It Travel Agency</h2></div></div></div>
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
	<hr id="about-line" style="bottom: 125px;">  
	<div id="news-box">
		<div id="message"><span class="us">I want</span> to <span class="us"> receive</span> the <span class="us"> latest offers</span> and <span class="us">promos</span> via <span class="us"> E-mail</span></div>
		<?php 
			if (!empty($_POST["news-btn"]))
			{
				extract($_POST); 
				$con = mysqli_connect("localhost","root", "", "trip_it"); 
				$res = $con->query("SELECT * from emails where email = '$offers_email'");
				if ($res -> num_rows == 1) echo "<div id='alertemail'>existant email</div>"; 
				else{  echo "<div id='succesemail'>email accepted</div>";   
				$sql = "INSERT INTO emails (email) VALUES ('$offers_email')"; 
  				mysqli_query($con, $sql);
				}
				mysqli_close($con);
			}
		?>  
		<div id="news-form" style="position:relative; top: -50px;">         
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
		<link href="/prj/stl.css" rel="stylesheet">
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
			<span class="btn" id="bt-ct"><span></span><input type="submit" name="send" value="Send" id="btn-ct"></span>
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
				echo "<div id='form-msg'>message sent</div>";
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
				<a href="https://twitter.com/TripIt1963567" target="_blank" class="sc-im" id="tw"><img src="img/twitter.png"z alt="image" id="twitter"></a> 
			</div>
			<hr>
			<span id="first-child">Follow Us</span>
			<span id="sec-child">On Social Media</span> 
		</span>
	</footer>
	
	<script type="text/javascript" src="js/form.js"></script> 

	
 </body>
 </html>
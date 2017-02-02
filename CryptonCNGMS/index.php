<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Home</title>
	</head>
	<body>
		<header class="header-home">
			<nav-bar>
				<nav-item><a class="active" href="index.php">Home</a></nav-item>
				<nav-item><a href="about.php">About</a></nav-item>
				<nav-item><a href="contact.php">Contact</a></nav-item>
				<nav-item><a href="faq.php">FAQ</a></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-register').style.display='block'" style="margin: 5px 5px 5px 0px;background-color: #00d245">Register</button></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-login').style.display='block'">Login</button></nav-item>
			</nav-bar>
			
			<img class="logo-home" src="resources/images/logo-300x300.png" alt="logo" style="width:300px;height:300px">
			
			<div id="modal-login" class="modal">
				<form id="login-form" name="login-form" class="modal-content animate" action="login.php" method="post">
					<div class="image-container">
						<img src="resources/images/user-256x256.png" alt="user-icon">
					</div>
					
					<div style="padding: 16px">
						<label>Email</label>
						<input type="text" placeholder="Enter your email" name="email" required>
						<label>Password</label>
						<input type="password" placeholder="Enter your password" name="password" required>
						<button type="submit" form="login-form">Login</button>
						<label><input type="checkbox" checked="checked">Remember Me</label>
					</div>
					
					<div style="padding: 16px;background-color: #000000">
						<button type="button" onclick="document.getElementById('modal-login').style.display='none'" style="background-color: #f44336">Cancel</button>
						<span class="password">Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
			
			<div id="modal-register" class="modal">
				<form class="modal-content animate" style="margin-top: 25px;height: 430px">
					<div class="image-container">
						<img src="resources/images/user-256x256.png" alt="user-icon">
					</div>
					
					<div style="margin-top: 30px;padding: 16px">
						<label>Register as</label>
						<button type="button" onclick="location.href='register-driver.php'" style="width: 98%;background-color: #4b0082">Driver</button>
						<button type="button" onclick="location.href='register-passenger.php'" style="width: 98%">Passenger</button>
					</div>
					
					<div style="padding: 16px;background-color: #000000">
						<button type="button" onclick="document.getElementById('modal-register').style.display='none'" style="background-color: #f44336">Cancel</button>
					</div>
				</form>
			</div>
		</header>
		
		<overview-home>
			<p style="font-size:75px " align="center">Crypton<br>CNG Management System</p>
			<p5>The first of its kind in Bangladesh with unique features of comfort, safety and reliability in CNG services. Open to everyone, everywhere. All ride requests are blindly matched with the closest available driver. So there is no discrimination based on race, gender, or destination.</p5>
			<br><br>
			<p5>Crypton CNG has provided continuous service to County residents and visitors for over 20 years. It is the largest cng company in County operating over 200 CNGs. We provide services to over 350,000 passengers each year. Our CNGs travel over 3 million miles each year and we are authorized to operate in every municipality in county. Our call center is open 24 hours a day, 365 days a year and handles over 250,000 thousand calls each year. We inspect our vehicles weekly for mechanical and appearance issues.</p5>
		</overview-home>
		
		<div id="container" style="margin-top: 1325px">
			<div class="photobanner">
				<img class="start-animation" src="resources/images/1.jpg" alt="image-1">
				<img src="resources/images/2.jpg" alt="image-2">
				<img src="resources/images/3.jpg" alt="image-3">
				<img src="resources/images/4.jpg" alt="image-4">
				<img src="resources/images/5.jpg" alt="image-5">
				<img src="resources/images/6.jpg" alt="image-6">
				<img src="resources/images/7.jpg" alt="image-7">
				<img src="resources/images/8.jpg" alt="image-8">
				<img src="resources/images/9.jpg" alt="image-9">
				<img src="resources/images/10.jpg" alt="image-10">
			</div>
		</div>
		
		<footer style="top: 1675px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/facebook.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/twitter.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/youtube.png" height="50px"></a>
			
			<center>© 2016 Crypton Corporation</center>
		</footer>
	</body>
</html>
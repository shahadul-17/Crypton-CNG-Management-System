<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>About</title>
	</head>
	<body>
		<header class="header">
			<nav-bar>
				<nav-item><a href="index.php">Home</a></nav-item>
				<nav-item><a class="active" href="about.php">About</a></nav-item>
				<nav-item><a href="contact.php">Contact</a></nav-item>
				<nav-item><a href="faq.php">FAQ</a></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-register').style.display='block'" style="margin: 5px 5px 5px 0px;background-color: #00d245">Register</button></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-login').style.display='block'">Login</button></nav-item>
			</nav-bar>
			
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
		
		<div style="padding: 50px">
			<p style="font-size:50px"><font color="#d20000">About</font></p>
			
			<img class="logo-home" style="top: 200px" src="resources/images/fariha.jpg" alt="fariha">
			<h4 align="center" style="margin-top: 280px">Fariha Tasnim Samsi<br>(Web Designer and Developer)</h4>
			
			<img class="logo-home" style="top: 550px" src="resources/images/shahadul.jpg" alt="shahadul">
			<h4 align="center" style="margin-top: 315px">Md. Shahadul Alam Patwary<br>(Founder and Project Manager)</h4>
			
			<img class="logo-home" style="top: 900px" src="resources/images/sabrina.jpg" alt="sabrina">
			<h4 align="center" style="margin-top: 315px">Sabrina Islam<br>(Database Designer and Developer)</h4>
			
			<img class="logo-home" style="top: 1250px" src="resources/images/tahsan.jpg" alt="tahsan">
			<h4 align="center" style="margin-top: 315px">Tahsan Dewan<br>(Web Designer and Developer)</h4>
		</div>
		
		<div id="container" style="margin-top:10px">
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
		
		<footer style="top: 1950px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/facebook.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/twitter.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/youtube.png" height="50px"></a>
			
			<center>© 2016 Crypton Corporation</center>
		</footer>
	</body>
</html>
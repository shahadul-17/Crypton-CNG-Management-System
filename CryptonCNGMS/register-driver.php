<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Register</title>
	</head>
	<body>
		<header class="header">
			<nav-bar>
				<nav-item><a href="index.php">Home</a></nav-item>
				<nav-item><a href="about.php">About</a></nav-item>
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
		
		<div class="registration-form">
			<h2>Create new driver account</h2>
			
			<form id="driver-registration-form" name="driver-registration-form" action="driver-registration.php" method="post">
				<label>First name</label>
				<input type="text" placeholder="Enter your first name" name="fname" required>

				<label>Last name</label>
				<input type="text" placeholder="Enter your last name" name="lname" required>
				
				<label>Email</label>
				<input type="text" placeholder="Enter your email" name="email" required>
				
				<label>Driving license number</label>
				<input type="text" placeholder="Enter your driving license number" name="dlnum" required>
				
				<label>Password</label>
				<input type="password" placeholder="Enter a password" name="password" required>
				
				<label>Address</label>
				<textarea style="padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;width: 100%;height: 70px" type="text" placeholder="Enter your address" name="address" required></textarea>
				
				<label>Phone number</label>
				<input type="text" placeholder="Enter your phone number" name="phone" required>
				
				<label>Gender</label>
				<select id="gender" name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				
				<label>Vehicle registration number</label>
				<input type="text" placeholder="Enter your vehicle registration number" name="vrn" required>
				
				<label>Birthdate</label>
				<input type="date" name="birthdate" required>
				
				<label>Monthly income (BDT)</label>
				<input type="text" placeholder="Enter your monthly income" name="income" required>
				
				<button type="submit" form="driver-registration-form" style="background-color: #00d245">Register</button>
			</form>
		</div>
		
		<footer style="top: 1085px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/facebook.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/twitter.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/youtube.png" height="50px"></a>
			
			<center>© 2016 Crypton Corporation</center>
		</footer>
	</body>
</html>
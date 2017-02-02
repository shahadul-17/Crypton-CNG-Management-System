<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Profile</title>
	</head>
	<body>
		<header class="header">
			<nav-bar>
				<nav-item><a class="active" href="driver-profile.php">Profile</a></nav-item>
				<nav-item><a href="passengers-for-drivers.php">Passengers</a></nav-item>
				<nav-item style="float:right"><button onclick="location.href='index.php'" style="background-color: #f44336">Sign out</button></nav-item>
			</nav-bar>
		</header>
		
		<!-- DRIVER PROFILE -->
		
		<div class="registration-form">
			<?php
				session_start();
				
				$hostname = "localhost";
				$username = "root";
				$password = "";
				$db_name = "cryptoncngms";
				
				$connect = mysql_connect($hostname, $username, $password);
				
				if ($connect) {
					$select_db = mysql_select_db($db_name);
					
					$uid = $_SESSION["uid"];
					
					if ($select_db) {
						$query = "SELECT * FROM cryptoncngms.users, cryptoncngms.drivers WHERE cryptoncngms.users.uid = '$uid' and cryptoncngms.users.uid = cryptoncngms.drivers.dlnum";
						
						$result = mysql_query($query);
						
						if ($result) {
							while ($row = mysql_fetch_array ($result)){
								?>
									<h2><?php echo $row['fname'] . "'s profile (Driver)"; ?></h2>
									
									<form id="driver-profile-form" name="driver-profile-form" action="driver-profile.php" method="get">
										<label>First name</label>
										<input type="text" placeholder="Enter your first name" name="fname" value="<?php echo $row['fname']; ?>" readonly>

										<label>Last name</label>
										<input type="text" placeholder="Enter your last name" name="lname" value="<?php echo $row['lname']; ?>" readonly>
										
										<label>Email</label>
										<input type="text" placeholder="Enter your email" name="email" value="<?php echo $row['email']; ?>" readonly>
										
										<label>Driving license number</label>
										<input type="text" placeholder="Enter your driving license number" value="<?php echo $row['dlnum']; ?>" name="dlnum" readonly>
										
										<label>Password</label>
										<input type="text" placeholder="Enter a password" name="password" value="<?php echo $row['password']; ?>" readonly>
										
										<label>Address</label>
										<textarea style="padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;width: 100%;height: 70px" type="text" placeholder="Enter your address" name="address" readonly><?php echo $row['address']; ?></textarea>
										
										<label>Phone number</label>
										<input type="text" placeholder="Enter your phone number" name="phone" value="<?php echo $row['phone']; ?>" readonly>
										
										<label>Gender</label>
										<input type="text" placeholder="Enter your gender" name="phone" value="<?php echo $row['gender']; ?>" readonly>
										
										<label>Vehicle registration number</label>
										<input type="text" placeholder="Enter your vehicle registration number" name="email" value="<?php echo $row['vrn']; ?>" readonly>
										
										<label>Birthdate</label>
										<input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>" readonly>
										
										<label>Monthly income (BDT)</label>
										<input type="text" placeholder="Enter your monthly income" name="income" value="<?php echo $row['income']; ?>" readonly>
									</form>
								<?php
							}
							
							mysql_close($connect);
						} else {
							echo mysql_error();
						}
					}
					else {
						echo mysql_error();
					}
				}
				else {
					echo mysql_error();
				}
			?>
		</div>
		
		<footer style="top: 1035px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/facebook.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/twitter.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/youtube.png" height="50px"></a>
			
			<center>© 2016 Crypton Corporation</center>
		</footer>
	</body>
</html>
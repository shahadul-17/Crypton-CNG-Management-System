<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Passengers</title>
	</head>
	<body>
		<header class="header">
			<nav-bar>
				<nav-item><a href="admin-profile.php">Profile</a></nav-item>
				<nav-item><a href="drivers-for-admin.php">Drivers</a></nav-item>
				<nav-item><a class="active" href="passengers-for-admin.php">Passengers</a></nav-item>
				<nav-item style="float:right"><button onclick="location.href='index.php'" style="background-color: #f44336">Sign out</button></nav-item>
			</nav-bar>
		</header>
		
		<!-- Passengers PROFILE -->
		
		<div class="registration-form" style="">
			<?php
				session_start();
				
				$hostname = "localhost";
				$username = "root";
				$password = "";
				$db_name = "cryptoncngms";
				
				$db = mysql_connect($hostname, $username, $password);
				
				if ($db) {
					$select_db = mysql_select_db($db_name);
					
					$uid = $_SESSION["uid"];
					
					if ($select_db) {
						$query = "SELECT utype FROM cryptoncngms.users WHERE cryptoncngms.users.uid = '$uid'";
						$result = mysql_query($query);
						
						if ($result) {
							$row = mysql_fetch_array($result);
							
							if ($row['utype'] == "admin") {
								if ($result) {
									echo "<h3>Passengers</h3>";
									
									$query = "SELECT fname, lname, phone, current_location, destination, date FROM cryptoncngms.users, cryptoncngms.passengers, adbpassenger WHERE cryptoncngms.users.uid = cryptoncngms.passengers.nid and cryptoncngms.passengers.id = cryptoncngms.adbpassenger.id";
									$result = mysql_query($query);
									
									if ($result) {
										echo '<table style="width: 100%;padding: 5px;border: 1px solid black">';
										echo '<tr><th style="padding: 5px;border: 1px solid black">First name</th><th style="padding: 5px;border: 1px solid black">Last name</th><th style="padding: 5px;border: 1px solid black">Phone</th><th style="padding: 5px;border: 1px solid black">Current Location</th><th style="padding: 5px;border: 1px solid black">Destination</th><th style="padding: 5px;border: 1px solid black">Date</th></tr>';
										
										while ($row = mysql_fetch_array($result)) {
											if($row) {
												echo '<tr><td style="padding: 5px;border: 1px solid black">' . $row['fname'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['lname'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['phone'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['current_location'] . '</td><td style="padding: 5px;border: 1px solid black">' . $row['destination'] . '</td>';
												
												if ($row['date'] == NULL) {
													echo '<td style="padding: 5px;border: 1px solid black">Today (Urgent)</td></tr>';
												} else {
													echo '<td style="padding: 5px;border: 1px solid black">' . $row['date'] . '</td></tr>';
												}
											}
										}
										
										echo '</table>';
									}
									else {
										echo mysql_error();
									}
								}
							}
						} else {
							mysql_error();
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
	</body>
</html>
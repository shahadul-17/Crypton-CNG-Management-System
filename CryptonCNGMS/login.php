<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Login</title>
	</head>
	<body>
		<?php
			session_start();
			
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$db_name = "cryptoncngms";
			
			$db = mysql_connect($hostname, $username, $password);
			
			if ($db) {
				$select_db = mysql_select_db($db_name);
				
				if ($select_db) {
					$email = $_POST['email'];
					$password = $_POST['password'];
					
					$query = "SELECT uid, utype FROM cryptoncngms.users WHERE email = '$email' and password = '$password'";
					
					$result = mysql_query($query);
					
					if ($result) {
						$row = mysql_fetch_array ($result);
						
						$_SESSION['uid'] = $row['uid'];
						
						if ($row['utype'] == "driver") {
							header("Location: driver-profile.php");
						} else if ($row['utype'] == "passenger") {
							header("Location: passenger-profile.php");
						} else if ($row['utype'] == "admin") {
							header("Location: admin-profile.php");
						}
					} else {
						echo mysql_error();
					}
					
					mysqli_close($connect);
				}
				else {
					echo mysql_error();
				}
			}
			else {
				echo mysql_error();
			}
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Booking</title>
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
					$uid = $_SESSION['uid'];
					$current_location = $_POST['current_location'];
					$destination = $_POST['destination'];
					$date = $_POST['date'];
					
					$connect = mysqli_connect($hostname, $username, $password, $db_name);
					$query_1 = "INSERT INTO cryptoncngms.passengers VALUES('', '$uid', '$current_location', '$destination')";
					$query_2 = "INSERT INTO cryptoncngms.adbpassenger VALUES('', '$uid', '$date')";
					
					$result_1 = mysql_query($query_1);
					$result_2 = mysql_query($query_2);
					
					if ($result_1 && $result_2) {
						header("Location: my-bookings.php");
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
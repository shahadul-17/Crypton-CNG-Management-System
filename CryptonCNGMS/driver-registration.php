<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/logo-16x16.png" type="image/png">
		
		<title>Registration</title>
	</head>
	<body>
		<?php
			session_start();
			
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$db_name = "cryptoncngms";
			
			$connect = mysql_connect($hostname, $username, $password);
			
			if ($connect) {
				$select_db = mysql_select_db($db_name);
				
				if ($select_db) {
					$uid = $_POST['dlnum'];
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$address = $_POST['address'];
					$gender = $_POST['gender'];
					$phone = $_POST['phone'];
					$vrn = $_POST['vrn'];
					$birthdate = $_POST['birthdate'];
					$income = $_POST['income'];
					
					$query_1 = "INSERT INTO cryptoncngms.users VALUES('$uid', 'driver', '$fname', '$lname', '$email', '$password', '$gender', '$phone')";
					$query_2 = "INSERT INTO cryptoncngms.drivers VALUES('$uid', '$address', '$vrn', '$birthdate', '$income')";
					
					$result_1 = mysql_query($query_1);
					$result_2 = mysql_query($query_2);
					
					if ($result_1 && $result_2) {
						mysql_close($connect);
						
						$_SESSION["uid"] = $uid;
						
						header("Location: driver-profile.php");
					} else {
						echo mysql_error();
					}

					mysql_close($connect);
				} else {
					echo mysql_error();
				}
			} else {
				echo mysql_error();
			}
		?>
	</body>
</html>
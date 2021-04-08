
<!DOCTYPE html>
<html>
	<head>
		<title>Add Data</title>
	</head>
	<body>
		<?php	
			//including the database connection file
			include_once("dbconnection.php");


                $schoolid= $_POST['schoolid'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
				$client = "client";
				

					//insert data to database
                $result = mysqli_query($conn, "INSERT INTO users(FirstName, LastName, Username, UserPassword, SchoolID, Email, LevelAccess) VALUES('$firstname','$lastname','$username', '$password', '$schoolid', '$email', '$client')");
                if(!$result) {
                    echo '<script>alert("Registration failed")</script>';
					header('Location:register.php');
                    }
				else{
					header('Location:../index.php');
				}		
		?>
	</body>
</html>

<?php

if(isset($_POST['login'])) 
    {     
        include_once("DBfunctions/dbconnection.php");
        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query($conn,"SELECT Username, UserPassword FROM users WHERE Username = '".$name."' AND  UserPassword = '".$password."' ");
        $result2 = mysqli_fetch_array($result1, MYSQLI_NUM);
        
        if($result2 > 0 )
        { 
            echo '<script>alert("log in sucess")</script>';
        }
        else
        {
            echo '<script>alert("The username or password are incorrect!")</script>';
        }
}

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-reg.css">
    <title>Log in</title>
</head>
<body>
        <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
        <?php endif; ?>

    <form action="index.php" method="POST">
        <div class="login-reg-container">
            <div class="login-reg-header">
                <h2>Log in</h2>
            </div>
            <div class="login-reg-item">
                <span>Username</span>
                <input name="username" type="text" placeholder="Enter username" required>
            </div>
            <div class="login-reg-item">
                <span>Password</span>
                <input name="password" type="text" placeholder="Enter password" required>
            </div>
            <div class="login-reg-item">
                <a href="register.php">Don't have an account?</a>
            </div>
            <div class="login-reg-item">
                <input name="login" type="submit" onclick="adminORcustomer()" class="login-btn" value="Login">
            </div>
        </div>
        admin_manage-lab-1.php -----
        customer-home.php
    </form>
<!--
    <script>
        alert("For the sake of demonstration:\n\nLogin as ADMIN \n   username: admin \n   passwoord: admin123\nLogin as USER \n   username: user\n   password: user123");
		
        function adminORcustomer(){
				user = document.getElementById("username").value;
				pass = document.getElementById("password").value;

			if (( user =="superadmin") && (pass =="superadmin123")){
				document.getElementById("formaction").onsubmit="return true"; //enable form action to admin page
				document.getElementById("formaction").action="admin_lab-utilization.php"; //redirect to ADMIN
			}
			else if((user=="user") && (pass=="user123")){
				document.getElementById("formaction").onsubmit="return true"; //enable form action to customer page
				document.getElementById("formaction").action="customer-home.php"; //redirect to CUSTOMER
			}
			else {
				document.getElementById("wrong-auth").style.display = "block";
			}
		}
	</script>
    -->

</body>
</html>
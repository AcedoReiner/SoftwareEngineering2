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
<form action="DBfunctions/registersave.php" method="POST">
    <div class="login-reg-container">
        <div class="login-reg-header">
            <h2>Sign Up</h2>
        </div>
        <div class="login-reg-item">
            <span>School ID</span>
            <input name="schoolid" type="text" placeholder="Enter School ID" required>
        </div>
        <div class="login-reg-item">
            <span>First Name</span>
            <input name="firstname" type="text" placeholder="Enter firstname" required>
        </div>
        <div class="login-reg-item">
            <span>Last Name</span>
            <input name="lastname" type="text" placeholder="Enter lastname" required>
        </div>
        <div class="login-reg-item">
            <span>Username</span>
            <input name="username" type="text" placeholder="Enter usename" required>
        </div>
        <div class="login-reg-item">
            <span>Password</span>
            <input name="password" type="text" placeholder="Enter password" required>
        </div>
        <div class="login-reg-item">
            <span>Confirmation Email</span>
            <input name="email" type="email" placeholder="Enter email" required>
        </div>
        <div class="login-reg-item">
            <a href="index.php">Already have an account?</a>
        </div>
        <div class="login-reg-item">
        
            <button class="login-btn">Sign Up</button>
        </div>
    </div>

</form>
</body>
</html>
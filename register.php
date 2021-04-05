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
<form action="save_task.php" method="POST">

          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
    <div class="login-reg-container">
        <div class="login-reg-header">
            <h2>Sign Up</h2>
        </div>
        <div class="login-reg-item">
            <span>First Name</span>
            <input type="text" placeholder="Enter firstname" required>
        </div>
        <div class="login-reg-item">
            <span>Last Name</span>
            <input type="text" placeholder="Enter lastname" required>
        </div>
        <div class="login-reg-item">
            <span>Username</span>
            <input type="text" placeholder="Enter usename" required>
        </div>
        <div class="login-reg-item">
            <span>Password</span>
            <input type="text" placeholder="Enter password" required>
        </div>
        <div class="login-reg-item">
            <span>Confirmation Email</span>
            <input type="email" placeholder="Enter email" required>
        </div>
        <div class="login-reg-item">
            <a href="login.html">Already have an account?</a>
        </div>
        <div class="login-reg-item">
        <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">asd
            <button class="login-btn">Sign Usp</button>
        </div>
    </div>

</form>
</body>
</html>
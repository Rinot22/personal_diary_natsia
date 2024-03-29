<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login-style.css">
  </head>
<body>
    <div class="wrapper">
        <h2>Registration</h2>
            <div>
                <?php if (isset($messages)) {
                    foreach ($messages as $message) echo $message;
                }
                ?>
            </div>
            <form action="registration" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Create password" required>
                </div>
                <div class="input-box">
                    <input type="password" name="confirm_password" placeholder="Confirm password" required>
                </div>
                <div class="input-box button">
                    <input type="Submit" value="Register Now">
                </div>
                <div class="text">
                    <h3>Already have an account? <a href="login">Login now</a></h3>
                </div>
            </form>
    </div>
</body>
</html>
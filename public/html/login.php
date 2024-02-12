<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
  </head>
<body>
  <div class="wrapper">
    <h2>Log in</h2>
    <div>
      <?php if(isset($messages)) {
        foreach($messages as $message) echo $message;
      }
      ?>
    </div>
    <form action="login" method="post">
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Log in">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="registration">Register now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
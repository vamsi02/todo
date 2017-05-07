<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<div class="container">&nbsp;</div>
<div class="container">
<div class="row">
<html>
<body>
  <h1> This is a login page</h1>
  <form method = "post" action="index.php">
  <strong>Username:</strong><input type="test" name="reg_uname" value=""/><br><br>
  <strong>Password:</strong><input type="password" name="reg_password" value=""/><br><br>
  <input type ="hidden" name="action" value="test_user"><br>
  <input type="submit" value="Login"/>
  </form>
  <form action = 'register.php'>
      <input type = 'submit' value = 'register' />
  </form>
</body>
</html>

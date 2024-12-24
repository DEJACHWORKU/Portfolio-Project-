
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Login System</title>
  <link rel="stylesheet" href="style/login.css">
</head>
<body>
  <div class="box">
    <h1>Login Here</h1>
    <div class="err">
    </div>
    <form action="login.php" method="post" >
      <input type="text" name="fname" id="" placeholder="Enter username"require>
      <input type="password" name="password" id="" placeholder="Enter Password"require>
      <input type="submit" name="LOGIN" value="LOGIN">
      you are a memeber?<a href="signup.php" style=" color: #ffc107;">SIGNUP</a>
    </form>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup system</title>
  <link rel="stylesheet" href="style/signup.css">
</head>
<body>
    <div class="box">
<h1>SIGNUP</h1>
<div class="err">
</div>

<form action="signup.php" method="Get">
<input type="text" name="Fname" id="" placeholder="Enter Firstname"required>
<input type="text" name="Lname" id="" placeholder="Enter Lastname"required>
<input type="email" name="ermail" id="" placeholder="Enter email"required>
<label>sex</label>
<input type="radio" name="sex" id=""value="male"required>male
<input type="radio" name="sex" id=""value="femal"required>female

<input type="password" name="password" id="" placeholder="Enter password">
<input type="password" name="pass2" id="" placeholder="confirm password"required>
<input type="submit" value="SIGNUP"name="SIGNUP">
you are a memeber?<a href="login.php" style=" color: #ffc107;">LOGIN</a>
</form>
</div>
</body>
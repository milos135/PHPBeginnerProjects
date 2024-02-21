<!DOCTYPE html>
<html>
<head>
<title>Web Chat</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
<div id="info">
<h2>login here</h2>
<form action="login.php" method="post">
    <label><b>Username</b>
    </label>
    <input type="text" name="uname" placeholder="Username"><br><br>
    <label><b>Password</b>
    <input type="text" name="pass" placeholder="Password"><br><br>
    <button type="submit"><b>Login</b></button>
</form>

<form action="signup.php" method="post">
 <h2>Dont have an account</h2>
 <label >Username:</label>
 <input type="text" name="uname" placeholder="Username"><br><br>
 <label >Email:</label>
 <input type="text" name="email" placeholder="Email"><br><br>
 <label >Password:</label>
 <input type="text" name="pass" placeholder="Password"><br><br>
 <button type="submit"><b>Signup</b></button>
</form>


</div>
</div>



</body>
</html>
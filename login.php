<?php 
include('includes/errors.php');

?>

<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
<div id="wrapper">

<h3>Administration login</h3>
<form action="login-process.php" method="post">
<p>
<input type="text" name="username" required placeholder="Enter username" /></p>
<p>
<input type="password" name="password" required placeholder="Enter password"/></p>
<input type="submit" name="submit" value="LOGIN" />

</form>
<p><a href='registerUser.php'>Register here</a></p>
</div>

</body>

</html>
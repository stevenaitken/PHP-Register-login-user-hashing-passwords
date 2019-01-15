<!DOCTYPE HTML>

<?php
include('includes/errors.php');
include('includes/dbconx.php');

?>

<html lang="en">
<head>

<meta charset="utf-8">
<title>Register User</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
<div id="wrapper">

<h3>Register User</h3>
<form action="registerProcess.php" method="post">
<p><input type="text" name="username" required placeholder="Enter username" /></p>
<p><input type="password" name="password" required placeholder="Enter password"/></p>
<p><input type="submit" name="submit" value="Register" /></p>


</form>

</div>

</body>

</html>
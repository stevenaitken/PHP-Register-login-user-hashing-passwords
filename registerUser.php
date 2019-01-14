<!DOCTYPE HTML>

<?php session_start();
include('includes/errors.php');
include('includes/dbconx.php');

?>

<html lang="en">
<head>

<meta charset="utf-8">
<title>Register User</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
h3{color:#aaa;}
	#wrapper{width:70%;margin: 0 auto;border:1px #161D6B solid; text-align: center;font-family: 'Roboto', sans-serif;font-size: 150%;border-radius: 20px;}
	input{display:inline-block;}
	input[type =submit]{border:0px;padding:15px;background-color: #161D6B;color:#fff;background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width:170px;}
	</style>
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
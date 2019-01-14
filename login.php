<?php session_start();
include('includes/errors.php');

?>

<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
h3{color:#aaa;}
	#wrapper{width:70%;margin: 0 auto;border:1px #161D6B solid; text-align: center;font-family: 'Roboto', sans-serif;font-size: 160%;border-radius: 20px;}
	input{display:inline-block;}
	input[type =submit]{border:0px;padding:15px;background-color: #161D6B;color:#fff;

  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width:170px;
}
	</style>
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
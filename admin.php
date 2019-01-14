<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>

<?php
include('includes/errors.php');
if(!isset($_SESSION['username'])){

header('location:login.php');
}
?>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<style>
	#wrapper{width:70%;margin: 0 auto;border:1px #161D6B solid; text-align: center;font-family: 'Roboto', sans-serif;font-size: 150%;border-radius: 20px;}
	input{display:inline-block;}
	input[type =submit]{border:0px;padding:15px;background-color: #161D6B;color:#fff;position: relative;left:8px;}

	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width:200px;
}
	</style>
<meta charset="utf-8">
<title>Admin Page</title>
</head>

<body>
<div id="wrapper"><h3>Admin Page</h3>
<p>You are currently logged on as:&nbsp; <?php echo $_SESSION['username']; ?></p>

<p><button class="button">Add Record</button></p>
<p><button class="button">Edit Record</button></p>
<p><button class="button">Delete Record</button></p>

<a href="logout.php">Log out</a></div>

</body>

</html>
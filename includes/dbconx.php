<?php

// connect to the database
$conn=mysqli_connect("localhost","root","root","admin");

// show errors (remove this line if on a live site)
// Check connection
if (mysqli_connect_errno()) {
	mysqli_report(MYSQLI_REPORT_ERROR);
  die( "Failed to connect to the database: " . mysqli_connect_error());
}

?>


<?php
session_start();
session_unset();
session_destroy();

header('location:login.php ');
$_SESSION['tries']=0;


?> 

<?php
session_start();
	// destroy the session 
session_unset(); 
header('Location:http://localhost/wtfinal/index.php');
?>
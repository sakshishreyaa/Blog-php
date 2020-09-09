<?php 
	session_start();//recreate sesion environment
	session_unset($_SESSION['user']);// destroy global variables related to sesssion
	session_destroy(); // destroy session
	header('location: index.php');
?>
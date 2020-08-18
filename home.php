<?php
//start the user session
session_start();

if(!isset($_SESSION['currentUser'])) {
	//goto login.php
	header("Location: login.php");
}
?>
<?php
	session_start();
		unset($_SESSION["nv"]);
		header('location:../../index.php');
?>
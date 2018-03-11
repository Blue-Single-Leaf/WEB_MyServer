<?php
	session_start();
	if(!isset($_SESSION['power'])){
		echo "<script language='javascript'>window.location='log/log.html';</script>";
	}
	else {
		echo "<script language='javascript'>window.location='log/choice.html';</script>";
	}
?>
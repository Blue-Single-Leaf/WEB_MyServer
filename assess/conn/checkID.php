<?php 
	session_start();
	if(!isset($_SESSION['power'])){
		echo "<script type='text/javascript' language='javascript'>alert('您尚未登陆，请先登陆！');window.location='../../log/log.html'</script>";
	}		
?>
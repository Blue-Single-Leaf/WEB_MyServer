<?php 
	include("../conn/connect.php");
	$username=$_POST['username'];
	$pwd=md5($_POST['pwd']);
	$sql="insert into tb_user (username,password,power,register)values('$username','$pwd','2','1')";
	$query=mysqli_query($conn,$sql);
	mysqli_close($conn);
	if($query){
		echo "<script type='text/javascript' language='javascript'>window.history.back();</script>";
	}
	else{
	
		echo "<script type='text/javascript' language='javascript'>alert('添加失败');window.history.back();</script>";
	}

	
?>
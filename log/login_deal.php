<?php 
	session_start();
	include("../assess/conn/connect.php");
	header("Content-type:text/html;charset=utf-8");
	$username=$_POST['username'];
	$password=md5($_POST['pwd']);
	
	$sql="select * from tb_user where username = '$username' and password = '$password'";
	$query=mysqli_query($conn,$sql);
	$rows=mysqli_num_rows($query);
	if($rows>0){
		$result=mysqli_fetch_array($query);
		$_SESSION['username']=$username;
		$_SESSION['pwd']=$password;
		$_SESSION['power']=$result['power'];
		$_SESSION['register']=$result['register'];
		mysqli_close($conn);
		echo "<script type='text/javascript' language='javascript'>window.location='choice.html';</script>";
	}
	else{
		mysqli_close($conn);
		echo "<script type='text/javascript' language='javascript'>alert('您的用户名或密码不对，请重新输入！');window.history.back();</script>";
	}
		

?>
<?php 
	include("../conn/connect.php");
	header("Content-type:text/html;charset=utf-8");
 	if(isset($_GET['id'])){				//判断为单个删除
		$id=$_GET['id'];
		$sql1="select * from tb_assess where id = $id ";
		$query1=mysqli_query($conn,$sql1);
		$result=mysqli_fetch_array($query1);
		
		$path=iconv('utf-8','gb2312//IGNORE',$result['path'].$result['filename']);
		unlink($path);		//删除硬盘中的文件
		$sql2="delete from tb_assess where id = $id ";
		$query2=mysqli_query($conn,$sql2);		//删除数据库中的记录
		
	}
		
	
	if(isset($_GET['check'])){			//判断为多个删除
		foreach($_POST['checkBox'] as $id ){
			$sql1="select * from tb_assess where id = $id ";
			$query1=mysqli_query($conn,$sql1);
			$result=mysqli_fetch_array($query1);
			$path=iconv('utf-8','gb2312//IGNORE',$result['path'].$result['filename']);
			unlink($path);		//删除硬盘中的文件
			$sql2="delete from tb_assess where id = $id ";
			$query2=mysqli_query($conn,$sql2);		//删除数据库中的记录
		}
	}
	if($query1 and $query2){
		
		echo "<script language='javascript' type='text/javascript'>alert('删除文件成功！');window.location.href=document.referrer;</script>";		
		}
	else{
		
		echo "<script language='javascript' type='text/javascript'>alert('删除文件失败！');window.location.href=document.referrer;</script>";
	
		
}
		
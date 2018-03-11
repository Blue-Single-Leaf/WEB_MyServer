<?php
	include("../conn/connect.php");
	$keyword=$_POST['dealit'];
	$tmp_id=array();
	$tmp_id=$_POST['checkBox'];
	if($keyword=="agree"){
		foreach($_POST['checkBox'] as $id){
			$sql1="select * from tb_assess2 where id = $id";
			$query1=$conn->query($sql1);
			$result=mysqli_fetch_array($query1);
			$filename=$result['filename'];
			$type=$result['type'];
			$size=$result['size'];
			$path=$result['path'];
			$poster=$result['poster'];
			$p_time=$result['posttime'];
			$kind=$result['kind'];
			$type2=$result['type2'];
			
			$sql2="insert into tb_assess(filename,type,size,path,poster,posttime,kind,type2) values('$filename','$type','$size','$path','$poster','$p_time','$kind','$type2')";
			$query2=$conn->query($sql2);
			$del_sql="delete from tb_assess2 where id = $id";
			$query3=$conn->query($del_sql);
		}
		if($query1 && $query2 && $query3){
			echo "<script language='javascript' type='text/javascript'>alert('上传文件发布成功');window.location.href=document.referrer;</script>";
		}
		else{
			echo "<script language='javascript' type='text/javascript'>alert('上传文件发布失败');window.location.href=document.referrer;</script>";
		}
	}
	else{
		foreach($_POST['checkBox'] as $id ){
			$sql1="select * from tb_assess2 where id = $id ";
			$query1=mysqli_query($conn,$sql1);
			$result=mysqli_fetch_array($query1);
			$path=iconv('utf-8','gb2312//IGNORE',$result['path'].$result['filename']);
			unlink($path);		//删除硬盘中的文件
			$sql2="delete from tb_assess2 where id = $id ";
			$query2=mysqli_query($conn,$sql2);		//删除数据库中的记录
		}
		if($query1 && $query2){
			echo "<script language='javascript' type='text/javascript'>alert('文件及通知删除成功');window.location.href=document.referrer;</script>";
		}
		else{
			echo "<script language='javascript' type='text/javascript'>alert('文件及通知删除失败');window.location.href=document.referrer;</script>";
		}
	
	}
			
	
?>
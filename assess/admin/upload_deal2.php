<?php 
	session_start();
	include("../conn/connect.php");
	header("Content-type:text/html;charset=utf-8");
	if($_FILES['myfile']['error']>0){
		echo "文件上传出错，错误原因：".$_FILES['myfile']['error'];
	}
	else{
		$sort=array('docx',"doc","xls","xlsx","rar","jpg","jpeg","png","gif",'pdf');
		$tmp_name=$_FILES['myfile']['tmp_name'];
		$filename=$_FILES['myfile']['name'];
		$sql5="select filename from tb_assess ";
		$query5=mysqli_query($conn,$sql5);
		while($row=mysqli_fetch_array($query5)){
			if($filename==$row['filename']){
				echo "<script language='javascript' type='text/javascript'>alert('该文件已在文件库中！');window.location.href=document.referrer;</script>";
				exit;
			}
		}
		$sql5="select filename from tb_assess2 ";
		$query5=mysqli_query($conn,$sql5);
		while($row=mysqli_fetch_array($query5)){
			if($filename==$row['filename']){
				echo "<script language='javascript' type='text/javascript'>alert('该文件已在审核列表中！');window.location.href=document.referrer;</script>";
				exit;
			}
		}
		$str=explode(".",$filename);
		$type1=strtolower(end($str));
	
		$type="";
		$type2=11;
		for($i=0;$i<count($sort);$i++){
			if($type1==$sort["$i"]){
				
				$type=strtolower(end($str));
				$type2=($i+1);
				break;
			}
		}
		
		if($type==""){
			$type=$type1;
		}
		
		$size=$_FILES['myfile']['size'];
		$kind=$_GET['kind'];
		$kind1=round($kind/10,1);
		$p_time=date("Y-m-d");
		$poster=$_SESSION['username'];
		$filename1=iconv('utf-8','gb2312//IGNORE',$filename);
		$path="../uploads/".$kind1.'/';
		move_uploaded_file($tmp_name,$path.$filename1);
		
		$sql="insert into tb_assess2(filename,type,size,path,poster,posttime,kind,type2,status) values('$filename','$type','$size','$path','$poster','$p_time','$kind','$type2','0')";
		
		$query=mysqli_query($conn,$sql);
		if($query){
			mysqli_close($conn);
			echo "<script language='javascript' type='text/javascript'>alert('文件已提交至管理员处审核');window.location.href=document.referrer;</script>";
		}
		else{
			mysqli_close($conn);
			echo "<script language='javascript' type='text/javascript'>alert('添加文件失败！');windw..location.href=document.referrer;</script>";
		}
		
		
	}
?>
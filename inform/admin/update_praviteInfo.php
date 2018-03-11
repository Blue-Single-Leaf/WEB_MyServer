<?php 
session_start();
include("connect.php");
include("../../assess/conn/connect.php");
$username=$_SESSION['username'];
$name=$_POST['name'];
$number=$_POST['number'];
$sex=$_POST['sex'];
$place=$_POST['place'];
$nation=$_POST['nation'];
$political_status=$_POST['political_status'];
$birth=$_POST['birth_y']."-".$_POST['birth_m']."-".$_POST['birth_d'];
$institute=$_POST['institute'];
$final_edu_bg=$_POST['final_edu_bg'];
$degree=$_POST['degree'];
$graduation_time=$_POST['graduation_time_y']."-".$_POST['graduation_time_m'];
$final_school=$_POST['final_school'];
$study_major=$_POST['study_major'];
$position_title=$_POST['position_title'];
$position_title_date=$_POST['position_title_date'];
$profess_title=$_POST['profess_title'];
$profess_title_date=$_POST['profess_title_date'];
$onsubject=$_POST['onsubject'];
$major=$_POST['major'];
$swork_time=$_POST['swork_time'];
$way=$_POST['way'];
$way_time=$_POST['way_time_y']."-".$_POST['way_time_m'];
$leave_time=$_POST['leave_time_y']."-".$_POST['leave_time_m'];
$high_level=$_POST['high_level'];
$level=$_POST['level'];
$ability=$_POST['ability'];
$etc=$_POST['etc'];
if ($_FILES['myfile']['name']==""){
	
	$sql = "update tb_staff set username = '$username',name = '$name', number = '$number',sex = '$sex',place='$place',nation='$nation',political_status='$political_status',birth='$birth',institute='$institute',final_school='$final_school',final_edu_bg='$final_edu_bg',degree='$degree',graduation_time='$graduation_time',study_major='$study_major',position_title='$position_title',position_title_date='$position_title_date',profess_title='$profess_title',profess_title_date='$profess_title_date',onsubject='$onsubject',major='$major',swork_time='$swork_time',way='$way',way_time='$way_time',leave_time='$leave_time',high_level='$high_level',level='$leave_time',ability='$ability',etc='$etc' where username='$username'";
	
}
else{
$filename=$_FILES['myfile']['name'];
$path="../upload/headpic/";
$up_name=$path.$filename;
$up_name=iconv('utf-8','gb2312//IGNORE',$up_name);
move_uploaded_file($_FILES['myfile']['tmp_name'],$up_name);

$sql = "update tb_staff set username = '$username',name = '$name', number = '$number',sex = '$sex',place='$place',nation='$nation',political_status='$political_status',birth='$birth',institute='$institute',final_school='$final_school',final_edu_bg='$final_edu_bg',degree='$degree',graduation_time='$graduation_time',study_major='$study_major',position_title='$position_title',position_title_date='$position_title_date',profess_title='$profess_title',profess_title_date='$profess_title_date',onsubject='$onsubject',major='$major',swork_time='$swork_time',way='$way',way_time='$way_time',leave_time='$leave_time',high_level='$high_level',level='$leave_time',ability='$ability',path='$path$filename',etc='$etc' where username='$username'";
}
echo $sql;
/*
values('$username','$name','$number','$sex','$place','$nation','$political_status','$birth','$institute','$final_school','$final_edu_bg','$degree','$graduation_time','$study_major','$position_title','$position_title_date','$profess_title','$profess_title_date','$onsubject','$major','$swork_time','$way','$way_time','$leave_time','$high_level','$level','$ability','$path$filename','$etc';*/
$result = mysqli_query($con,$sql);
if($result){
	/*修改user表里的注册信息值register*/
	/*$sql2="update tb_user set register = '2' where username = '".$_SESSION['username']."'";
	mysqli_query($conn,$sql2);*/
	
	echo "<script >alert('信息修改成功！');location.href='show.php';</script>";
}
else{
	echo "<script >alert('信息修改失败！');window.history.back();</script>";
}
	

mysqli_close($con);

?>

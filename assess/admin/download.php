<?php require_once('../conn/connect.php'); 
	$id=$_GET['id'];
	
	$sql="select * from tb_assess where id = $id";
	if(isset($_GET['deal'])){
		$sql="select * from tb_assess2 where id = $id";
	}
	$query=mysqli_query($conn,$sql);
	$result=$query->fetch_array();
	$path=$result['path'];
	$filename1=$result['filename'];
	$path=$result['path'];
	$filename=iconv("utf-8","gb2312//IGNORE",$filename1);
$file_path=$path.$filename;
if(!file_exists($file_path)){//检测文件是否存在
echo"文件不存在！";
die();
}
$filesize=filesize($file_path);
$file=fopen("$file_path","r");
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: ".$filesize);
header("Content-Disposition: attachment; filename=".$filename);
$buffer=1024;
//来个文件字节计数器
$count=0;
while(!feof($file)&&($filesize-$count>0)){
$data=fread($file,$buffer);
$count+=$data;//计数
echo $data;//传数据给浏览器端
}
/*echo fread($file,filesize("$file_path"));*/
fclose($file);




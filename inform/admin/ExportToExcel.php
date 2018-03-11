
<?php
include("connect.php");
// 输出Excel文件头，可把user.csv换成你要的文件名
header('charset=utf-8');
header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment;filename='user.csv'");
header("Cache-Control: max-age=0");
$get_lan=$_POST['get_lan'];
$sql_lan=$_POST['sql_lan'];
$tag1=$_POST['tag1'];
$t=$_POST['t_head'];
$t_head=array();
if($tag1>1){
		$key_word=explode(", ",$get_lan);
		$t_head=explode("-",$t);
	}
	else{
		$key_word[0]=$get_lan;
		$t_head[0]=$get_lan;
		} 
$sql="select ".$get_lan." from tb_staff where ".$sql_lan;
$query=mysqli_query($con,$sql);
$fp=fopen('php://output','a');
for ($m=0;$m<$tag1;$m++){
	$t_head[$m]=iconv('utf-8','gbk',$t_head[$m]);
}
fputcsv($fp,$t_head);
$cnt=0;
$limit=10000;
while($row=mysqli_fetch_assoc($query)){
	$cnt++;
	if($limit==$cnt){
		ob_flush();
		flush();
		$cnt=0;
	}
	for($i=0;$i<$tag1;$i++) {
		
		if($key_word[$i]=="degree"){
			if($row[$key_word[$i]]==1) $row[$key_word[$i]]="学士学位";
			else if($row[$key_word[$i]]==2) $row[$key_word[$i]]="硕士学位";
			else $row[$key_word[$i]]="博士学位";
		}
		else if($key_word[$i]=="final_edu_bg"){
			if($row[$key_word[$i]]==1) $row[$key_word[$i]]="本科";
			else if($row[$key_word[$i]]==2) $row[$key_word[$i]]="硕士研究生";
			else $row[$key_word[$i]]="博士研究生";
		}
		else if($key_word[$i]=="sex"){
			if($row[$key_word[$i]]==1) $row[$key_word[$i]]="男";
			else $row[$key_word[$i]]="女";
		}
			
		else $row[$key_word[$i]]=$row[$key_word[$i]];
		
	$row[$key_word[$i]]=iconv('utf-8', 'gbk',$row[$key_word[$i]]);
	}
	//for($n=0;$n<$tag1;$n++){
		//$row[$key_word[$n]]=iconv('utf-8','gbk',$row[$key_word[$n]]);
	//}
	fputcsv($fp,$row);
}
?>

<?php 
// 从数据库中获取数据，为了节省内存，不要把数据一次性读到内存，从句柄中一行一行读即可
//$sql = 'select * from tbl where ……';
//$stmt = $db->query($sql);

// 打开PHP文件句柄，php://output 表示直接输出到浏览器

// 输出Excel列名信息
//$head = array('姓名', '性别', '年龄', 'Email', '电话', '……');
//foreach ($head as $i => $v) {
// CSV的Excel支持GBK编码，一定要转换，否则乱码

//$head[$i] = iconv('utf-8', 'gbk', $v);
//}
/*foreach($t_head as $i => $v){
	$t_head[$i]=iconv('utf-8','gbk\\IGNORE',$v)
}*/

// 将数据通过fputcsv写到文件句柄
//fputcsv($fp, $head);
//fputcsv($fp,$t_head);

// 计数器
//$cnt = 0;
// 每隔$limit行，刷新一下输出buffer，不要太大，也不要太小
//$limit = 10000;
// 逐行取出数据，不浪费内存
//while ($row = $stmt->fetch(Zend_Db::FETCH_NUM)) {
//	while($row = $query->fetch(Zend_Db::FETCH_NUM)){
//$cnt ++;
//if ($limit ==$cnt) { //刷新一下输出buffer，防止由于数据过多造成问题
//ob_flush();
//flush();
//$cnt = 0;
//}
//foreach ($row as $i => $v) {
//$row[$i] = iconv('utf-8', 'gbk', $v);
//}
//fputcsv($fp, $row);
//}
?>

<?php 
	include("../../assess/conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息查询</title>
<link type="text/css" href="../css/show_table.css" rel="stylesheet" />
</head>
<script language="javascript" type="text/javascript">
function goToExcel(){
	form1.submit();
}


</script>

<body>
<div id="content">
<a href="info_query.php" style="text-align:left;text-size:18px;">返回</a>


<?php 
	include("connect.php");
	include("get_queryInfo.php");
	if($sql_lan==""){
		echo "<script language='javascript'>alert('请输入查询条件');window.history.back();</script>";
	}
	if($get_lan==""){
		echo "<script language='javascript'>alert('请选择输出项');window.history.back();</script>";
	}
	$sql="select ".$get_lan." from tb_staff where ".$sql_lan;
	$query=mysqli_query($con,$sql);
	$num=mysqli_num_rows($query);
	$query1=mysqli_query($con,$sql);
?>
   	<div id="title">教师信息简表</div><br/>
	<div id="head"><span id="total">共有记录数：<?php echo "<font color='#0000FF' size='+2'>".$num."</font>"; ?></span><a  id="excel" onclick="javascript:goToExcel()">导出到Excel表</a> </div>
	<table id="query_data" name="query_data" class="query_data" border="1px silver solid">

    <tr><?php for($i=0;$i<$tag1;$i++){?>
    	<th><?php echo $t_head[$i];?></th>
        <?php }?>
    </tr>
    <?php while($result=mysqli_fetch_array($query1)){?>
    <tr>
    	<?php for($i=0;$i<$tag1;$i++){?>
		<td><?php 
		
		
		if($key_word[$i]=="degree"){
			if($result[$key_word[$i]]==1) echo "学士学位";
			else if($result[$key_word[$i]]==2) echo "硕士学位";
			else echo "博士学位";
		}
		else if($key_word[$i]=="final_edu_bg"){
			if($result[$key_word[$i]]==1) echo "本科";
			else if($result[$key_word[$i]]==2) echo "硕士研究生";
			else echo "博士研究生";
		}
		else if($key_word[$i]=="sex"){
			if($result[$key_word[$i]]==1) echo "男";
			else echo "女";
		}
			
		else echo $result[$key_word[$i]]?></td>
        <?php }?>
    </tr>
    <?php }?>
    </table>

    </div>
<form id="form1" name="form1" action="ExportToExcel.php" method="post">
<input type="hidden" name="tag1" value="<?php echo $tag1;?>" />
<input type="hidden" name="get_lan" value="<?php echo $get_lan;?>" />
<input type="hidden" name="sql_lan" value="<?php echo $sql_lan;?>" />
<input type="hidden" name="t_head" value="<?php 
$t=$t_head[0];
for($k=1;$k<$tag1;$k++)
	$t.="-".$t_head[$k];

echo $t;
?>" />

</form>
</body>

</html>
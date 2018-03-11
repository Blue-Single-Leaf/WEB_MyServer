<?php 
include("../conn/checkID.php");
include("../conn/connect.php");
if($_SESSION['power']!=1){
	echo "<script type='text/javascript' language='javascript'>alert('您的权限不够！请先登录！');window.location='log.html'</script>";
	}		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/newmessage.css" rel="stylesheet" />
<title>新通知</title>
<script type="text/javascript" language="javascript" src="../js/manage2.js"></script>
</head>

<?php
$pagesize=10;
$s="select * from tb_assess2";
$query1=mysqli_query($conn,$s);
$total=mysqli_num_rows($query1);
	$total_page=ceil($total/$pagesize);
	if(isset($_GET['page'])){
		$page=$_GET['page'];
		
	}
	else if(isset($_POST['page'])){
		$page=$_POST['page'];
		
	}
	else{
		$page=1;
	}
	if($page>$total_page){
		$page=$total_page;
	}
	
	$sql2="select * from tb_assess2  limit ".($page-1)*$pagesize.",$pagesize";
	$query2=mysqli_query($conn,$sql2);
	if(@mysqli_num_rows($query2)>0){
	$this_num=mysqli_num_rows($query2);
	}
	else{
		$this_num=0;
	}
	$query2=mysqli_query($conn,$sql2);

?>
<body>
<div id="head">
	<img src="../images/e.jpg" />
</div>
<div id="hnav">
	<table id="hnavtable" >
    	<tr >
            <td><a href="assess11.php" >定位与目标</a></td>
            <td><a href="assess21.php" >师资队伍</a></td>
            <td><a href="assess31.php" >教学资源</a></td>
            <td><a href="assess41.php" >培养过程</a></td>
            <td><a href="assess51.php" >学生发展</a></td>
            <td><a href="assess61.php" >质量保障</a></td>
            <td><a href="assess71.php" >特色总结</a></td>
            <td><a href="assess81.php" >其它</a></td>
    	</tr>
    </table>
</div>
    <div id="logout"><a href="../../log/logout.php">注销</a></div>
<div id="content">
	<div id="position" >
    	当前位置：教学评估后台->新消息提醒
    </div>
    <div id="newmessage">
    	<table id="newtable">
        	<tr>
            	<th colspan="5">新上传文件</th>
            </tr>
<?php 
	if($this_num>0){;
?>
            <form action="deal.php" name="myform2" method="post">
            <tr>
            	<th class="more" width="8%"><a id="checkbox" onclick="return checkall()">全选</a></th><th width="12%">序号</th><th width="46%">文件名</th><th width="12%">类型</th><th width="22%">上传者</th>
            </tr>
            <?php
				$i=$pagesize*($page-1)+1;
				while($row = mysqli_fetch_assoc($query2)){
					
			?>
            <tr>
            	<td><input type="checkbox" name="checkBox[]"   value="<?php echo $row['id'];?>"  /></td>
            	<td><?php echo $i;$i++;?></td>            
                <td class="filename"><a href="download.php?id=<?php echo $row['id'];?>&deal=1" target="_blank"><?php echo $row['filename'];?></a></td>            	
                <td><?php echo $row['type'];?></td>            	
                <td><?php echo $row['poster'];?></td>
            </tr>
            <?php } ?>
<?php
	}
	else{
		echo "<tr><td colspan='5' style='color:blue'>当前无上文件需处理</td><tr>";
	}
	
	?>
        </table>
        <div id="deal">
        	<select name="dealit" id="dealit" size="1">
            	<option value="agree">同意上传</option>
                <option value="disagree">拒绝上传</option>
            </select>
        	<input type="submit" value="提交" name="submit" onclick="return confir_some()" />
        	
        </div>
        </form>
    </div>
    <div id="change">
                 	共有文件&nbsp;<?php echo $total;?>&nbsp;个 &nbsp;&nbsp; 当前页次&nbsp;<?php echo $page;?>/<?php echo $total_page;?>&nbsp;页 &nbsp; &nbsp; 跳转到第<form action="" method="get" name="changepage"> <input id="page" type="text" name="page"  />页 &nbsp; <input type="submit" name="go" value="GO"  /></form> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    				<?php if($total_page<=1) {
						 	echo "上一页&nbsp;I&nbsp;下一页";
						  } 
						  else{
							  if($page==1){
							  echo "上一页&nbsp;I&nbsp;<a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."'>下一页</a>";
							  }
							  else if($page==$total_page){
								  echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page-1)."'>上一页</a>&nbsp;I&nbsp;下一页";
							  }
							  else{
								  echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page-1)."'>上一页</a>&nbsp;I&nbsp<a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."'>下一页</a>";
							  }
								  
						  }
						  ?>
       				 
    			 </div>
</div>
<div id="footer">
	<p>吉林大学电子工程系版权所有&copy;</p>
    <p>地址 ：吉林省长春市南湖大路5372号 &nbsp; &nbsp; &nbsp; 邮编 ：130012</p>

</div>
</body>
</html>
<?php 
	include("../conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/ht.css" rel="stylesheet" />
<title>学生发展</title>
<script type="text/javascript" language="javascript" src="../js/manage.js"></script>
</head>
<?php 
	include("../conn/connect.php");
	$k=52;
	$pagesize=15;
	$sql1="select * from tb_assess where kind = $k";
	$query1=mysqli_query($conn,$sql1);
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
	
	$sql2="select * from tb_assess where kind = $k limit ".($page-1)*$pagesize.",$pagesize";
	$query2=mysqli_query($conn,$sql2);
	$this_num=@mysqli_num_rows($query2);
	
	$query2=mysqli_query($conn,$sql2);
	$sq13="select * from tb_assess2";
	$query3=mysqli_query($conn,$sq13);
	
?>


<body>
<div id="head">
	<object data="" style="display:none">
    	<param name="src" value="" />
        <param name="autostart" value="1" />
        <param name="playconut" value="infinite" />
    </object>
	
	<img src="../images/e.jpg" />
	<div id="log" >
    		<table>
        	<tr>
            	<form name="search_form" id="search_form" action="search.php" target="_blank" method="get">
                <td><input type="text" name="wd" id="wd"  /></td>
                <td><input type="submit" name="sub" id="sub" value="搜索" /></td>
                </form>
            </tr>
        </table>
    </div>
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
<table id="maintable">
	<tr >
		<td id="first">
			<div id="vnav">
				<ul id="list">
    				<li><div class="vnavl"><a href="assess51.php" >51</a></div></li>
        			<li><div class="vnavl"><a href="assess52.php">52</a></div></li>
        			<li><div class="vnavl"><a href="assess53.php">53</a></div></li>
    			</ul>
			</div>
		</td>
		<td id="second">
			<div id="content">
				<div id="position" >
    				当前位置：教学评估后台-><span id="location1"></span>-><span id="location2"></span>
                    <?php if($_SESSION['power']==1){?>
                    <a id="manage" onclick="javascript:return disall()">管理</a>
                    <a id="newmess" href="newmessage.php" target="_blank">新消息【<span><?php echo $newmess=mysqli_num_rows($query3);?></span>】</a>
					<?php } else{?>
                    <a id="manage1" onclick="javascript:return disadd()">添加文件</a>
                    <?php }?>
   				 </div>
                 <div id="addfile">
                 	添加文件: &nbsp; <form id="add" action="upload_deal<?php if($_SESSION['power']==2) echo 2;?>.php?kind=<?php echo $k;?>" method="post" name="add" enctype="multipart/form-data"><input type="file" name="myfile" /><input type="submit" value="上传" name="upload" id="upload" /></form>
                 </div>
                 <div id="resource" >
                 	<table id="table">
                    	<tr>
                        	<td colspan="5" id="table_title">文件列表</td>
                        </tr>
<form action="delete.php?check=1" name="myform1" method="post">
                    	<tr>
                            <td  class="checkmore"><a id="selectall" onclick="javascript:return checkall()">全选</a></th>
                            <td align="center">编号</th>
                            <td>文件名</th>
                            <td align="center">上传日期</th>
                            <td class="del">删除</th>
                        </tr>
                        
                        <?php
	
	if($total>0){
		
		$i=($page-1)*$pagesize+1;
		while($result = mysqli_fetch_array($query2)){
			$type2=$result['type2'];
			
			
?>
			<tr>
            	<td class="checkmore"><input type="checkbox" name="checkBox[]"   value="<?php echo $result['id'];?>"  /></td>
                <td align="center"><?php echo $i;$i++?></td>
                <td><a href="download.php?id=<?php echo $result['id'];?>" target="_blank">
				<img src="../images/<?php if($type2<3) echo 'word.png'; else if($type2<5) echo 'excel.png';else if($type2==5) echo 'rar.png'; else if($type2<11) echo 'pic.png';else echo 'other.png';?>" height="15px" />
				<?php echo $result['filename'];?></a></td>
                <td align="center"><?php echo $result['posttime'];?></td>
            	<td class="del"><a href="delete.php?id=<?php echo $result['id'];?>" onclick="return confir()">删除</a></td>
            </tr>
<?php
			
			
		}
	}
	else{
?>
	<tr>
    	<td colspan="5" id="nofile">尚无文件上传</td>
    </tr>
<?php
	}

?>
                        
                        
                    </table>
             		<span id="somedelete" class="checkmore"><input type="submit" name="sub3" id="sub3" value="删除所选" onclick="return confir_some()" /></form></span>
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
		</td>
	</tr>
</table>
<div id="footer">
	<p>吉林大学电子工程系版权所有&copy;</p>
    <p>地址 ：吉林省长春市南湖大路5372号 &nbsp; &nbsp; &nbsp; 邮编 ：130012</p>

</div>
<script language="javascript" type="text/javascript">window.onload=getLocation()</script>
</body>
</html>

<?php 
	include("../../assess/conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/qt.css" rel="stylesheet" />
<link type="text/css" href="../css/show.css" rel="stylesheet" />
<title>个人信息</title>
</head>

<?php
include("connect.php");
$sql = "select * from tb_staff where username='".$_SESSION['username']."'";
$result = mysqli_query($con,$sql);
?>

<body>
<div id="head">
	<img src="../images/e.jpg" />	
</div>
<div id="hnav">
	<table id="hnavtable" >
    	<tr >
            <td><a href="#" >教师个人信息</a></td>
            <td><a href="#" >教师任课信息</a></td>
            <td><a href="#" >科研情况</a></td>
            <a id="logout" href="../../log/logout.php">--注销--</a>
    	</tr>
    </table>
</div>
<div id="vnav">
	<ul id="list">
    	<li class="vnavl" >基本信息</li>
        <li class="vnavl" >工作信息</li>
        <li class="vnavl">其它信息</li>
    </ul>
</div>
<div id="content">
	<div id="position" >
    	当前位置：
        <div id="rewrite"><a href="rewrite.php" >[修改信息]</a></div>
    </div>
    <div id="information">
    	<table id="table">  
        <?php while($row = mysqli_fetch_array($result)){?>		
        <tr>
        	<td>姓&nbsp; &nbsp; &nbsp; &nbsp;名：</td>
            <td><?php echo $row['name']; ?></td>
            <td rowspan="4" id="pic"> 个 人 <br/> 相 片</td>
            <td rowspan="4" id="pic1"><img src="<?php echo $row['path']; ?>"/></td>
        </tr>
        <tr>
            <td>编&nbsp; &nbsp; &nbsp; &nbsp;号：</td>
            <td><?php echo $row['number']; ?></td>
        </tr>
        <tr>
        	<td>性&nbsp; &nbsp; &nbsp; &nbsp;别：</td>       	
            <td><?php if($row['sex']==1) echo "男";else echo "女"; ?></td> 
        </tr>
        <tr>     
        	<td>民&nbsp; &nbsp; &nbsp; &nbsp;族：</td>
            <td><?php echo $row['nation']; ?></td>
        </tr>
        <tr>
        	<td>政治面貌：</td>
            <td><?php echo $row['political_status']; ?></td>
            <td>籍&nbsp; &nbsp; &nbsp; &nbsp;贯：</td> 
        	<td><?php echo $row['place']; ?></td>
        </tr>
        <tr>
        	<td>学院编号：</td>  
            <td><?php echo $row['institute']; ?></td> 
            <td>学&nbsp; &nbsp; &nbsp; &nbsp;位：</td>  
            <td><?php if($row['degree']==1) echo "学士学位";else if($row['degree']==2) echo "硕士学位";else echo "博士学位"; ?></td>   
        </tr>
        <tr>
        	<td>出生日期：</td>
            <td><?php echo $row['birth']; ?></td>
            <td>学科专业：</td>
            <td><?php echo $row['study_major']; ?></td>
        </tr>
        <tr>
        	<td>毕业时间：</td>
            <td><?php echo $row['graduation_time']; ?></td>
        	<td>毕业学校：</td>
            <td><?php echo $row['final_school']; ?></td>
        </tr>
        <tr>        	
        	<td>职&nbsp; &nbsp; &nbsp; &nbsp;称：</td>
            <td><?php echo $row['profess_title']; ?></td>
            <td>职称任职日期：</td>
            <td><?php echo $row['profess_title_date']; ?></td>
        </tr>
        <tr>
        	<td>岗&nbsp; &nbsp; &nbsp; &nbsp;位：</td>
            <td><?php echo $row['position_title']; ?></td>
            <td>岗位任职日期：</td>
            <td><?php echo $row['position_title_date']; ?></td>
        </tr>
        <tr>            
        	<td>入校方式：</td>  
            <td><?php echo $row['way']; ?></td> 
            <td>参加工作时间：</td>      	            
            <td><?php echo $row['swork_time']; ?></td>       
        </tr>
        <tr>        	
        	<td>最高学历：</td>
            <td><?php if($row['final_edu_bg']==1) echo "本科";else if($row['final_edu_bg']==2) echo "硕士研究生";else echo "博士研究生"; ?></td>
            <td>归属本科专业：</td>
            <td><?php echo $row['major']; ?></td>
        </tr>
        <tr> <td>入校时间：</td>            
            <td><?php echo $row['way_time']; ?></td>      	
            <td>从事学科专业：</td>
            <td><?php echo $row['onsubject']; ?></td>
        </tr>
        <tr>
        	<td>开课能力：</td>
            <td><?php echo $row['ability']; ?></td>
            <td>引进人才层次：</td>
            <td><?php echo $row['level']; ?></td>
        </tr>
        <tr>
        	<td>离校时间：</td>
            <td><?php echo $row['leave_time']; ?></td>
            <td>高层次人才：</td> 
            <td><?php if($row['high_level']==1)echo "是";else echo "不是"; ?></td>
        </tr>
        <tr>
        	<td>备&nbsp; &nbsp; &nbsp; &nbsp;注：</td>
            <td colspan="3"><?php echo $row['etc']; ?></td>
        </tr>
        <?php }
		mysqli_close($con);
		?>
    </table>
    </div>
</div>
<div id="footer">
	<p>吉林大学电子工程系版权所有&copy;</p>
    <p>地址 ：吉林省长春市南湖大路5372号 &nbsp; &nbsp; &nbsp; 邮编 ：130012</p>
</div>
</body>
</html>

       
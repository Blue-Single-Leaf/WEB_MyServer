<?php 
	include("../../assess/conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/qt.css" rel="stylesheet" />
<link type="text/css" href="../css/registe.css" rel="stylesheet" />
<title>修改信息</title>
<script type="text/javascript" language="javascript" src="../js/insert1.js"></script>
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
    	<li class="vnavl" id="basic_link" onclick="b_change()"><a>基本信息</a></li>
        <li class="vnavl" id="work_link">工作信息</li>
        <li class="vnavl">其它信息</li>
    </ul>
</div>
<div id="content">
	<div id="position" >
    	当前位置：
    </div>
    <div id="main" class="main">
    <form action="update_praviteInfo.php" method="post" enctype="multipart/form-data" name="form1" >
	<div id="part1">   
    <table>
    	<tr id="first"><th id="title" colspan="2">基本信息</th></tr>
  		<?php while($row = mysqli_fetch_array($result)){  
			$birth=explode("-",$row['birth']);
			$birth_y=$birth[0];
			$birth_m=$birth[1];
			$birth_d=$birth[2];
			
			$graduation_time=explode("-",$row['graduation_time']);
			$graduation_time_y=$graduation_time[0];
			$graduation_time_m=$graduation_time[1];
			$way_time=explode("-",$row['way_time']);
			$way_time_y=$way_time[0];
			$way_time_m=$way_time[1];
			$leave_time=explode("-",$row['leave_time']);
			$leave_time_y=$leave_time[0];
			$leave_time_m=$leave_time[1];
		?>	
        <tr>
        	<td>姓&nbsp; &nbsp; &nbsp; &nbsp;名：<input type="text" class="txt" name="name" id="name" value="<?php echo $row['name']; ?>"/></td>
            <td rowspan="4"><div id="self_img"><img src="<?php echo $row['path'];?>" id="preview" name="preview" style="width:130px;height:160px;" /></div><input type="file" name="myfile" id="myfile" onchange="pre()" /></td>
        </tr>
            <td>编&nbsp; &nbsp; &nbsp; &nbsp;号：<input type="text" class="txt" name="number" id="number" value="<?php echo $row['number']; ?>" /></td>
        </tr>
        <tr>
        	<td>籍&nbsp; &nbsp; &nbsp; &nbsp;贯：<input type="text" class="txt" name="place" id="place" value="<?php echo $row['place']; ?>" /></td>        
		</tr>
        <tr>
        	<td>民&nbsp; &nbsp; &nbsp; &nbsp;族：<input type="text" class="txt" name="nation" id="nation" value="<?php echo $row['nation']; ?>" /></td>
        </tr>
        <tr>
        	<td>政治面貌：<input type="text" class="txt" name="political_status" id="political_status" value="<?php echo $row['political_status']; ?>" /></td>
             <td>性&nbsp; &nbsp; &nbsp; &nbsp;别：<input type="radio" name="sex" class="sex" value="1" id="sex" <?php if($row['sex']==1) echo 'checked';?> />男&nbsp;&nbsp;<input type="radio" name="sex" class="sex" value="2" id="sex" <?php if($row['sex']==2) echo 'checked';?> />女</td>
        	
        </tr>
        <tr>
        	<td>学院编号：<input type="text" class="txt" name="institute" id="institute" value="<?php echo $row['institute']; ?>" /></td>   
            <td>学&nbsp; &nbsp; &nbsp; &nbsp;位：<select name="degree" id="degree">
            		<option value="1" <?php if($row['degree']==1) echo 'selected';?>>学士学位</option>
                    <option value="2" <?php if($row['degree']==2) echo 'selected';?>>硕士学位</option>
                    <option value="3" <?php if($row['degree']==3) echo 'selected';?>>博士学位</option>
            	</select>
            </td>     
        </tr>
        <tr>
        	<td>出生日期：
            	<select name="birth_y" id="birth_y" style="font-size:14px;">
            	<?php for($i=2016;$i>1900;$i--){?>
            	<option value="<?php echo $i;?>"  <?php if($birth_y==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>
            <select name="birth_m" id="birth_m" style="font-size:14px;" >
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"  <?php if($birth_m==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>
            <select name="birth_d" id="birth_d" style="font-size:14px;">
            	<?php for($i=1;$i<=31;$i++){?>
<option value="<?php if($i<10) $i="0".$i;echo $i;?>"  <?php if($birth_d==$i) echo "selected";?>><?php echo $i;?></option>				<?php }?>
            </select>
            
            
            </td>
        	<td>最高学历：<select name="final_edu_bg" id="final_edu_bg" size="1" >
            		<option value="1"  <?php if($row['final_edu_bg']==1) echo 'selected';?>>本科</option>
                    <option value="2"  <?php if($row['final_edu_bg']==2) echo 'selected';?>>硕士研究生</option>
                    <option value="3"  <?php if($row['final_edu_bg']==3) echo 'selected';?>>博士研究生</option>
                </select>   
            </td>
        </tr>
        <tr>
        	<td>毕业时间：<select name="graduation_time_y" id="graduation_time_y" style="font-size:14px;">
            	<?php for($i=2020;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"  <?php if($graduation_time_y==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="graduation_time_m" id="graduation_time_m" style="font-size:14px;">
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"  <?php if($graduation_time_m==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>
            月</td>
        	<td>毕业学校：<input type="text" class="txt" name="final_school" id="final_school" value="<?php echo $row['final_school']; ?>"/></td>
        </tr>
        <tr>
        	<td>学科专业：<input type="text" class="txt" name="study_major" id="study_major" value="<?php echo $row['study_major']; ?>" /></td>
        </tr>
        <tr>
        	<td id="next" colspan="3"><div id="n"><a onclick="javascript:return change()">下一步</a></div></td>
        </tr>
        
    </table>
    </div>
    
    <div id="part2">
    <table>
    	<tr>
       		<th id="title" colspan="2">工作信息</th>
        </tr>
        <tr>
        	<td>职&nbsp; &nbsp; &nbsp; &nbsp;称：<input type="text" class="txt" name="profess_title" id="profess_title" value="<?php echo $row['profess_title']; ?>"  /></td>
            <td>职称任职日期：<input type="text" class="txt" name="profess_title_date" id="profess_title_date" value="<?php echo $row['profess_title_date']; ?>"  /></td>
        </tr>
        <tr>
        	<td>岗&nbsp; &nbsp; &nbsp; &nbsp;位：<input type="text" class="txt" name="position_title" id="position_title" value="<?php echo $row['position_title']; ?>"  /></td>
            <td>岗位任职日期：<input type="text" class="txt" name="position_title_date" id="position_title_date" value="<?php echo $row['position_title_date']; ?>"  /></td>
        </tr>
        <tr>            
        	<td>入校方式：<input type="text" class="txt" name="way" id="way" value="<?php echo $row['way']; ?>"  /></td>         	
            <td>参加工作时间：<input type="text" class="txt" name="swork_time" id="swork_time" value="<?php echo $row['swork_time']; ?>"  /></td>          
        </tr>
        <tr>        	
        	<td>入校时间：<select name="way_time_y" id="way_time_y" style="font-size:14px;">
            	<?php for($i=2016;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"  <?php if($way_time_y==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="way_time_m" id="way_time_m" style="font-size:14px;">
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"  <?php if($way_time_m==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>月</td>
            <td>归属本科专业：<input type="text" class="txt" name="major" id="major" value="<?php echo $row['major']; ?>"  /></td>
        </tr>
        <tr>
            <td>离校时间：<select name="leave_time_y" id="leave_time_y" style="font-size:14px;">
				<option value="0000" <?php if($leave_time_y==$i) echo "selected"?>>----</option>
            	<?php for($i=2016;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"  <?php if($leave_time_y==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="leave_time_m" id="leave_time_m" style="font-size:14px;">
            	<option value="00" <?php if($leave_time_m==$i) echo "selected"?>>----</option>
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"  <?php if($leave_time_m==$i) echo "selected";?>><?php echo $i;?></option>
				<?php }?>
            </select>月</td>        	
            <td>从事学科专业：<input type="text" class="txt" name="onsubject" id="onsubject"  value="<?php echo $row['onsubject']; ?>" /></td>
        </tr>
        <tr>
        	<td>开课能力：<input type="text" class="txt" name="ability" id="ability"  value="<?php echo $row['ability']; ?>" /></td>
            <td>引进人才层次：<input type="text" class="txt" name="level" id="level" value="<?php echo $row['level']; ?>"  /></td>
        </tr>
        <tr>
        	<td>高层次人才：<input type="text" class="txt" name="high_level" id="high_level"  value="<?php echo $row['high_level']; ?>" /></td>
            <td>备&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 注：<input type="text" class="txt" name="etc" id="etc"  value="<?php echo $row['etc']; ?>" /></td>
        </tr>
        <tr>
        	<td colspan="3" align="center"><input type="submit" value="提交" id="submit" onclick="javascript:return change()"></input></td>
        </tr>
        <?php }
		mysqli_close($con);
		 ?>
    </table>
    </div>
    </form>
    </div>
</div>
<div id="footer">
	<p>吉林大学电子工程系版权所有&copy;</p>
    <p>地址 ：吉林省长春市南湖大路5372号 &nbsp; &nbsp; &nbsp; 邮编 ：130012</p>

</div>
</body>
</html>

       
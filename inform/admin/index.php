<?php 
	include("../../assess/conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/qt.css" rel="stylesheet" />
<link type="text/css" href="../css/registe.css" rel="stylesheet" />
<title>个人信息</title>
<script type="text/javascript" language="javascript" src="../js/insert1.js"></script>
</head>

<?php
if($_SESSION['power']==1){

	echo "<script>window.location='info_query.php';</script>";
}
if($_SESSION['register']==2){

	echo "<script>window.location='show.php';</script>";
}
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
    <form action="insert1.php" method="post" enctype="multipart/form-data" name="form1" >
	<div id="part1">   
    <table>
    	<tr id="first"><th id="title" colspan="2">基本信息</th></tr>
  		
        <tr>
        	<td>姓&nbsp; &nbsp; &nbsp; &nbsp;名：<input type="text" class="txt" name="name" id="name" placeholder="必填信息"/></td>
            <td rowspan="4"><div id="self_img"><img src="" id="preview" name="preview" style="width:130px;height:160px;" /></div><input type="file" name="myfile" id="myfile" onchange="pre()" /></td>
        </tr>
            <td>编&nbsp; &nbsp; &nbsp; &nbsp;号：<input type="text" class="txt" name="number" id="number" /></td>
        </tr>
        <tr>
        	<td>籍&nbsp; &nbsp; &nbsp; &nbsp;贯：<input type="text" class="txt" name="place" id="place" /></td>        
		</tr>
        <tr>
        	<td>民&nbsp; &nbsp; &nbsp; &nbsp;族：<input type="text" class="txt" name="nation" id="nation" /></td>
        </tr>
        <tr>
        	<td>政治面貌：<input type="text" class="txt" name="political_status" id="political_status"  /></td>
             <td>性&nbsp; &nbsp; &nbsp; &nbsp;别：<input type="radio" name="sex" class="sex" value="1" id="sex" />男&nbsp;&nbsp;<input type="radio" name="sex" class="sex" value="2" id="sex" />女</td>
        	
        </tr>
        <tr>
        	<td>学院编号：<input type="text" class="txt" name="institute" id="institute" /></td>   
            <td>学&nbsp; &nbsp; &nbsp; &nbsp;位：<select name="degree" id="degree" style="width:120px;font-size:16px;">
            		<option value="1">学士学位</option>
                    <option value="2">硕士学位</option>
                    <option value="3">博士学位</option>
            	</select>
            </td>     
        </tr>
        <tr>
        	<td>出生日期：<!--<input type="text" class="txt" name="birth" id="birth" />-->
            <select name="birth_y" id="birth_y" style="font-size:14px;">
            	<?php for($i=2016;$i>1900;$i--){?>
            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>
            <select name="birth_m" id="birth_m" style="font-size:14px;" >
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>
            <select name="birth_d" id="birth_d" style="font-size:14px;">
            	<?php for($i=1;$i<=31;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>
            
            </td>
        	<td>最高学历：<select name="final_edu_bg" id="final_edu_bg" size="1" style="width:120px;font-size:16px;">
            		<option value="1">本科</option>
                    <option value="2">硕士研究生</option>
                    <option value="3">博士研究生</option>
                </select>   
            </td>
        </tr>
        <tr>
        	<td>毕业时间：<!--<input type="text" class="txt" name="graduation_time" id="graduation_time"/>-->
            	<select name="graduation_time_y" id="graduation_time_y" style="font-size:14px;">
            	<?php for($i=2020;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="graduation_time_m" id="graduation_time_m" style="font-size:14px;">
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>
            月
            </td>
        	<td>毕业学校：<input type="text" class="txt" name="final_school" id="final_school" /></td>
        </tr>
        <tr>
        	<td>学科专业：<input type="text" class="txt" name="study_major" id="study_major" /></td>
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
        	<td>职&nbsp; &nbsp; &nbsp; &nbsp;称：<!--<input type="text" class="txt" name="profess_title" id="profess_title"  />-->
           	<select name="profess_title" id="profess_title" style="width:120px;font-size:16px;">
            	<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
				
            </td>
            <td>职称任职日期：<input type="text" class="txt" name="profess_title_date" id="profess_title_date"  /></td>
        </tr>
        <tr>
        	<td>岗&nbsp; &nbsp; &nbsp; &nbsp;位：<!--<input type="text" class="txt" name="position_title" id="position_title"  />-->
            	<select name="position_title" id="position_title" style="width:120px;font-size:16px;">
            	<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </td>
            <td>岗位任职日期：<input type="text" class="txt" name="position_title_date" id="position_title_date"  /></td>
        </tr>
        <tr>            
        	<td>入校方式：<input type="text" class="txt" name="way" id="way"  /></td>         	
            <td>参加工作时间：<input type="text" class="txt" name="swork_time" id="swork_time"  /></td>          
        </tr>
        <tr>        	
        	<td>入校时间：<!--<input type="text" class="txt" name="way_time" id="way_time"  />-->
            	<select name="way_time_y" id="way_time_y" style="font-size:14px;">
            	<?php for($i=2016;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="way_time_m" id="way_time_m" style="font-size:14px;">
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>月
            </td>
            <td>归属本科专业：<input type="text" class="txt" name="major" id="major"  /></td>
        </tr>
        <tr>
            <td>离校时间：<!--<input type="text" class="txt" name="leave_time" id="leave_time"  />-->
            	<select name="leave_time_y" id="leave_time_y" style="font-size:14px;">
                <option value="0000">----</option>
            	<?php for($i=2016;$i>1946;$i--){?>
            	<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>年
            <select name="leave_time_m" id="leave_time_m" style="font-size:14px;">
 				<option value="00">----</option>
            	<?php for($i=1;$i<=12;$i++){?>
            	<option value="<?php if($i<10) $i="0".$i;echo $i;?>"><?php echo $i;?></option>
				<?php }?>
            </select>月
            </td>        	
            <td>从事学科专业：<input type="text" class="txt" name="onsubject" id="onsubject"  /></td>
        </tr>
        <tr>
        	<td>开课能力：<input type="text" class="txt" name="ability" id="ability"  /></td>
            <td>引进人才层次：<!--<input type="text" class="txt" name="level" id="level"  />-->
            	<select name="level" id="level" style="width:120px;font-size:16px;">
            	<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </td>
        </tr>
        <tr>
        	<td>高层次人才：<!--<input type="text" class="txt" name="high_level" id="high_level"  />-->
            	<select name="high_level" id="high_level" style="width:120px;font-size:16px;">
                    <option value="1">是</option>
                    <option value="2">不是</option>
                </select>
            </td>
            <td>备&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 注：<input type="text" class="txt" name="etc" id="etc"  /></td>
        </tr>
        <tr>
        	<td colspan="3" align="center"><input type="submit" value="提交" id="submit" name="submit" onclick="javascript:return change()"></input></td>
        </tr>
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

       
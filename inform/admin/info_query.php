<?php 
	include("../../assess/conn/checkID.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../css/qt.css" rel="stylesheet" />
<link type="text/css" href="../css/query1.css" rel="stylesheet" />
<title>个人信息</title>
<script type="text/javascript" language="javascript" src="../js/query1.js"></script>
</head>



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
<div id="position" >
    	当前位置：后台->信息查询
</div>
<div id="main">
	<form name="query_form" id="query_form" method="post" action="info_show.php">
	<div id="query_info">
    	<div id="q_title">
        	指定查询条件
        </div>
        <div id="q_main">
        	<div class="basic_info">
            	<table class="tb_basic">
                	<tr>
                    	<td colspan="6" class="title">基本信息</td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_name" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">姓名</td>
                        <td class="q_input"><input type="text" name="q_name" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_number" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">编号</td>
                        <td class="q_input"><input type="text" name="q_number" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_place" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">籍贯</td>
                        <td class="q_input"><input type="text" name="q_place" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_nation" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">民族</td>
                        <td class="q_input"><input type="text" name="q_nation" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_political_status" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">政治面貌</td>
                        <td class="q_input"><input type="text" name="q_political_status" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_sex" value="1"  /></td>
                        <td class="q_middle">性别</td>
                        <td class="q_input">&nbsp;&nbsp;<input type="radio" name="q_sex"  value="1" />男&nbsp;&nbsp;<input type="radio" name="q_sex"  value="2" />女</td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_institute" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">学院编号</td>
                        <td class="q_input"><input type="text" name="q_institute" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_degree" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">学位</td>
                        <td class="q_input">
                        	<select name="q_degree" class="int">
                            	<option value="1">学士学位</option>
                    			<option value="2">硕士学位</option>
                    			<option value="3">博士学位</option>
                        	</select>	
                        </td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_birth" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">出生日期</td>
                        <td class="q_input"><input type="text" name="q_birth" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_final_edu_bg" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">最高学历</td>
                        <td class="q_input">
                        	<select name="q_final_edu_bg" class="int">
            					<option value="1">本科</option>
                    			<option value="2">硕士研究生</option>
                    			<option value="3">博士研究生</option>
                        	</select>	
                        </td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_graduation_time" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">毕业时间</td>
                        <td class="q_input"><input type="text" name="q_graduation_time" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_final_school" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">毕业学校</td>
                        <td class="q_input"><input type="text" name="q_final_school" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_study_major" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">学科专业</td>
                        <td class="q_input"><input type="text" name="q_study_major" class="int" /></td>
                        <td colspan="3"></td>
                        
                    </tr>
                    
                    
                </table>
            </div>
            <div class="work_info">
            	<table class="tb_work">
                	<tr>
                    	<td colspan="6" class="title">工作信息</td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_profess_title" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">职称</td>
                        <td class="q_input"><input type="text" name="q_profess_title" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_profess_title_date" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">职称任职日期</td>
                        <td class="q_input"><input type="text" name="q_profess_title_date" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_position_title" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">岗位</td>
                        <td class="q_input"><input type="text" name="q_position_title" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_position_title_date" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">岗位任职日期</td>
                        <td class="q_input"><input type="text" name="q_position_title_date" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_way" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">入校方式</td>
                        <td class="q_input"><input type="text" name="q_way" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_swork_time" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">参加工作时间</td>
                        <td class="q_input"><input type="text" name="q_swork_time" class="int"  /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_way_time" value="1" onclick="query(this)"  /></td>
                        <td class="q_middle">入校时间</td>
                        <td class="q_input"><input type="text" name="q_way_time" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_major" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">归属本科专业</td>
                        <td class="q_input"><input type="text" name="q_major" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_leave_time" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">离校时间</td>
                        <td class="q_input"><input type="text" name="q_leave_time" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_onsubject" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">从事学科专业</td>
                        <td class="q_input"><input type="text" name="q_onsubject" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_ability" value="1" onclick="query(this)" /></td>
                        <td class="q_middle">开课能力</td>
                        <td class="q_input"><input type="text" name="q_ability" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_level" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">引进人才层次</td>
                        <td class="q_input"><input type="text" name="q_level" class="int" /></td>
                    </tr>
                    <tr>
                    	<td class="q_check"><input type="checkbox" name="qc_high_level" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">高层次人才</td>
                        <td class="q_input"><input type="text" name="q_high_level" class="int" /></td>
                        <td class="q_check"><input type="checkbox" name="qc_etc" value="1" onclick="query(this)" /></td>
                        <td class="q_middle2">备&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 注</td>
                        <td class="q_input"><input type="text" name="q_etc" class="int" /></td>
                        
                    </tr>
                    
                    
                </table>
            </div>
        </div>
        <div id="q_foot">
        快捷查询：<select name="quick_query" id="quick_query" style="width:70px;">
        			<option value="">1</option>
                    <option value="">2</option>
                </select>
        </div>
    </div>
    
<!--****上下查询展示模块分隔界****-->

<!--****上下查询展示模块分隔界****-->
	<div id="show_info">
    	<div id="s_title">
        	指定查询后输出项
        </div>
        <div id="s_main">
        	<div class="basic_info">
            	<table class="tb_basic">
                	<tr>
                    	<td colspan="4" class="title"><input type="checkbox" id="sb" value="1" onclick="sb_chg(this)"/>基本信息</td>
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_name" value="1" class="sb_info" /></td>
                        <td class="s_middle">姓名</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_number" value="1" class="sb_info"  /></td>
                        <td class="s_middle">编号</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_place" value="1" class="sb_info"  /></td>
                        <td class="s_middle">籍贯</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_nation" value="1" class="sb_info"  /></td>
                        <td class="s_middle">民族</td>
                       
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_political_status" value="1" class="sb_info"  /></td>
                        <td class="s_middle">政治面貌</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_sex" value="1" class="sb_info"  /></td>
                        <td class="s_middle">性别</td>
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_institute" value="1" class="sb_info"   /></td>
                        <td class="s_middle">学院编号</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_degree" value="1" class="sb_info"  /></td>
                        <td class="s_middle">学位</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_birth" value="1" class="sb_info"  /></td>
                        <td class="s_middle">出生日期</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_final_edu_bg" value="1" class="sb_info"  /></td>
                        <td class="s_middle">最高学历</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_graduation_time" value="1" class="sb_info"   /></td>
                        <td class="s_middle">毕业时间</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_final_school" value="1" class="sb_info"  /></td>
                        <td class="s_middle">毕业学校</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_study_major" value="1" class="sb_info"  /></td>
                        <td class="s_middle">学科专业</td>
                        
                        <td colspan="2"></td>
                        
                    </tr>
                    
                    
                </table>
            </div>
            <div class="work_info">
            	<table class="tb_work">
                	<tr>
                    	<td colspan="4" class="title"><input type="checkbox" id="sw" value="1" onclick="sw_chg(this)" />工作信息</td>
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_profess_title" value="1" class="sw_info" /></td>
                        <td class="s_middle">职称</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_position_title_date" value="1" class="sw_info" /></td>
                        <td class="s_middle2">职称任职日期</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_position_title" value="1" class="sw_info" class="sw_info" /></td>
                        <td class="s_middle">岗位</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_position_title_date" value="1" class="sw_info" /></td>
                        <td class="s_middle2">岗位任职日期</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_way" value="1" class="sw_info" /></td>
                        <td class="s_middle">入校方式</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_swork_time" value="1" class="sw_info" /></td>
                        <td class="s_middle2">参加工作时间</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_way_time" value="1" class="sw_info" /></td>
                        <td class="s_middle">入校时间</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_major" value="1" class="sw_info"  /></td>
                        <td class="s_middle2">归属本科专业</td>
                       
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_leave_time" value="1" class="sw_info" /></td>
                        <td class="s_middle">离校时间</td>
                        
                        <td class="s_check"><input type="checkbox" name="sc_onsubject" value="1" class="sw_info" /></td>
                        <td class="s_middle2">从事学科专业</td>
                        
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_ability" value="1" class="sw_info" /></td>
                        <td class="s_middle">开课能力</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_level" value="1" class="sw_info" /></td>
                        <td class="s_middle2">引进人才层次</td>
                      
                    </tr>
                    <tr>
                    	<td class="s_check"><input type="checkbox" name="sc_high_level" value="1" class="sw_info" /></td>
                        <td class="s_middle2">高层次人才</td>
                       
                        <td class="s_check"><input type="checkbox" name="sc_etc" value="1" class="sw_info" /></td>
                        <td class="s_middle2">备&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 注</td>
                        
                        
                    </tr>
                    
                    
                </table>
            </div>
        </div>
        
    </div>
    <div id="go1" onclick="javascript:query_form.submit()">
    	提交查询
    </div>
    </form>
</div>
<div id="footer">
	<p>吉林大学电子工程系版权所有&copy;</p>
    <p>地址 ：吉林省长春市南湖大路5372号 &nbsp; &nbsp; &nbsp; 邮编 ：130012</p>

</div>
</body>
</html>

       
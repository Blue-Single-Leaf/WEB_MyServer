<?php

	//****查询条件获取*******//
	//********************//
	$sql_lan="";$tag=0;
	if(isset($_POST['qc_name'])){
		$sql_lan='('.'name'."="."'".$_POST['q_name']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_number'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'number'."="."'".$_POST['q_number']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_place'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'place'."="."'".$_POST['q_place']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_nation'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'nation'."="."'".$_POST['q_nation']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_political_status'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'political_status'."="."'".$_POST['q_political_status']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_sex'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'sex'."="."'".$_POST['q_sex']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_institute'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'institute'."="."'".$_POST['q_institute']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_degree'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'degree'."="."'".$_POST['q_degree']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_birth'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'birth'."="."'".$_POST['q_birth']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_final_edu_bg'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'final_edu_bg'."="."'".$_POST['q_final_edu_bg']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_graduation_time'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'graduation_time'."="."'".$_POST['q_graduation_time']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_final_school'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'final_school'."="."'".$_POST['q_final_school']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_study_major'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'study_major'."="."'".$_POST['q_study_major']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_profess_title'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'profess_title'."="."'".$_POST['q_profess_title']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_profess_title_date'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'profess_title_date'."="."'".$_POST['q_profess_title_date']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_position_title'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'position_title'."="."'".$_POST['q_position_title']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_position_title_date'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'position_title_date'."="."'".$_POST['q_position_title_date']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_way'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'way'."="."'".$_POST['q_way']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_swork_time'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'swork_time'."="."'".$_POST['q_swork_time']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_way_time'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'way_time'."="."'".$_POST['q_way_time']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_major'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'major'."="."'".$_POST['q_major']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_leave_time'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'leave_time'."="."'".$_POST['q_leave_time']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_onsubject'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'onsubject'."="."'".$_POST['q_onsubject']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_ability'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'ability'."="."'".$_POST['q_ability']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_level'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'level'."="."'".$_POST['q_level']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_high_level'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'high_level'."="."'".$_POST['q_high_level']."'".')';
		$tag++;
	}
	if(isset($_POST['qc_etc'])){
		if($tag!=0) $sql_lan.=" and ";
		$sql_lan.='('.'etc'." like "."'%".$_POST['q_etc']."%'".')';
		$tag++;
	}
	//*****查询条件获取结束*******//
	//*************************//
	
	//************************//
	//******显示项目获取********//
	//************************//
	
	$get_lan="";$tag1=0;$t_head=array();
	if(isset($_POST['sc_name'])){
		$get_lan= 'name';
		$t_head[$tag1]='姓名';
		$tag1++;
	}
	if(isset($_POST['sc_number'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'number';
		$t_head[$tag1]='教师编号';
		$tag1++;
	}
	if(isset($_POST['sc_place'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'place';
		$t_head[$tag1]='籍贯';
		$tag1++;
	}
	if(isset($_POST['sc_nation'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'nation';
		$t_head[$tag1]='民族';
		$tag1++;
	}
	if(isset($_POST['sc_political_status'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'political_status';
		$t_head[$tag1]='政治面貌';
		$tag1++;
	}
	if(isset($_POST['sc_sex'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'sex';
		$t_head[$tag1]='性别';
		$tag1++;
	}
	if(isset($_POST['sc_institute'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'institute';
		$t_head[$tag1]='学院编号';
		$tag1++;
	}
	if(isset($_POST['sc_degree'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'degree';
		$t_head[$tag1]='学位';
		$tag1++;
	}
	if(isset($_POST['sc_birth'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'birth';
		$t_head[$tag1]='年龄';
		$tag1++;
	}
	if(isset($_POST['sc_final_edu_bg'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'final_edu_bg';
		$t_head[$tag1]='最高学历';
		$tag1++;
	}
	if(isset($_POST['sc_graduation_time'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'graduation_time';
		$t_head[$tag1]='毕业时间';
		$tag1++;
	}
	if(isset($_POST['sc_final_school'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'final_school';
		$t_head[$tag1]='毕业院校';
		$tag1++;
	}
	if(isset($_POST['sc_study_major'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'study_major';
		$t_head[$tag1]='学科专业';
		$tag1++;
	}
	if(isset($_POST['sc_profess_title'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'profess_title';
		$t_head[$tag1]='职称';
		$tag1++;
	}
	if(isset($_POST['sc_profess_title_date'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'profess_title_date';
		$t_head[$tag1]='职称任职日期';
		$tag1++;
	}
	if(isset($_POST['sc_position_title'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'position_title';
		$t_head[$tag1]='岗位';
		$tag1++;
	}
	if(isset($_POST['sc_position_title_date'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'position_title_date';
		$t_head[$tag1]='岗位任职日期';
		$tag1++;
	}
	if(isset($_POST['sc_way'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'way';
		$t_head[$tag1]='入校方式';
		$tag1++;
	}
	if(isset($_POST['sc_swork_time'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'swork_time';
		$t_head[$tag1]='参加工作时间';
		$tag1++;
	}
	if(isset($_POST['sc_way_time'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'way_time';
		$t_head[$tag1]='入校时间';
		$tag1++;
	}
	if(isset($_POST['sc_major'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'major';
		$t_head[$tag1]='归属本科专业';
		$tag1++;
	}
	if(isset($_POST['sc_leave_time'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'leave_time';
		$t_head[$tag1]='离校时间';
		$tag1++;
	}
	if(isset($_POST['sc_onsubject'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'onsubject';
		$t_head[$tag1]='从事学科专业';
		$tag1++;
	}
	if(isset($_POST['sc_ability'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'ability';
		$t_head[$tag1]='开课能力';
		$tag1++;
	}
	if(isset($_POST['sc_level'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'level';
		$t_head[$tag1]='引进人才层次';
		$tag1++;
	}
	if(isset($_POST['sc_high_level'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'high_level';
		$t_head[$tag1]='是否高层次人才';
		$tag1++;
	}
	if(isset($_POST['sc_etc'])){
		if($tag1!=0) $get_lan.=", ";
		$get_lan.= 'etc';
		$t_head[$tag1]='备注';
		$tag1++;
	}
	//************************//
	//******显示项目获取结束********//
	//************************//
	
	
	//*************************//
	//*****处理上述数据**********//
	//*************************//
	
	if($tag1>1){
		$key_word=explode(", ",$get_lan);
	}
	else
		$key_word[0]=$get_lan;
	
?>

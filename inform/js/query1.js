function query(obj){
	var a=obj.name.replace(/qc_/,"q_");
	var target=document.getElementsByName(a)[0];
	if(obj.value=="1"){
		obj.value="2";
		target.style.display="block";
		
	}
	else{
		obj.value="1";
		target.style.display="none";
		
	}	
}
function sb_chg(obj){
	var ss=document.getElementsByClassName("sb_info");
	if(obj.value=="1"){
		obj.value="2";
		for(var i=0;i<ss.length;i++){
			ss[i].checked=true;
		}
		
	}
	else{
		obj.value="1";
		for(var i=0;i<ss.length;i++){
			ss[i].checked=false;
		}
	}
}
function sw_chg(obj){
	var ss=document.getElementsByClassName("sw_info");
	if(obj.value=="1"){
		obj.value="2";
		for(var i=0;i<ss.length;i++){
			ss[i].checked=true;
		}
		
	}
	else{
		obj.value="1";
		for(var i=0;i<ss.length;i++){
			ss[i].checked=false;
		}
	}
}
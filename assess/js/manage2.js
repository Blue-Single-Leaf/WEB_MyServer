// JavaScript Document
function checkall(){					//全选与全不选
	var key_word=document.getElementById("checkbox");
	var ch=document.getElementsByName("checkBox[]");
	if(key_word.innerHTML=="全选"){
		for(var i=0;i<ch.length;i++){
			ch[i].checked=true;
			key_word.innerHTML="全不选";
		}
	}
	else {
		for(var i=0;i<ch.length;i++){
			ch[i].checked=false;
			key_word.innerHTML="全选";
		}
	}
}
function confir_some(){					//多选确认
	var y=1;
	var ch=document.getElementsByName("checkBox[]");
	for(var i=0;i<ch.length;i++){		//判断是否选择多选框
		if(ch[i].checked)
		y++;
		break;
	}
	if(y==1){
		alert("请先选择需要处理的文件！");
		return false;
	}
	else{
		var obj=document.getElementById("dealit");
		var index=obj.selectedIndex;
		if(obj.options[index].text=="同意上传")
				var word="您确认允许所选文件通过审核？";
		else    var word="您确认拒绝并删除所选文件？"
		if(confirm(word)){
			return true;
		}
		else{
			return false;
		}
	}
}
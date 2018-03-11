function getLocation(){
	//先填上Location1的值
	
	var val=document.getElementById("addfile").children[0].action.replace(/[^0-9]/g,"");
			//获取当前所在的位置，如11，42等
	if(val>200){
		val-=200;
	}
	
	
	var table=document.getElementById('hnavtable').children[0].children[0];		//连续获取其子元素的值，此时table为<tbody>
	var a=table.children;
	for(var i=0;i<a.length;i++){
		var k=a[i].children[0].href;
		var key=k.replace(/[^0-9]/g,"");
											//正则表达式取出href中的数字
		if((key-val)>-5&&(key-val)<5){
			var loc1=document.getElementById("location1");
			loc1.innerHTML=a[i].innerHTML;										//给location1赋值
			break;
		}	
	}

	//再填上Location2的值，同上
	var table=document.getElementById('list');
	var a=table.children;
	for(var i=0;i<a.length;i++){
		var k=a[i].children[0].children[0].href;
		var key=k.replace(/[^0-9]/g,"");
		
		if(key==val){
			var loc2=document.getElementById("location2");
			loc2.innerHTML=a[i].children[0].children[0].innerHTML;
			break;
		}	
	}
	
		
}

function confir(){						//单选确认
	if(confirm("您确认要删除所选文件？")){
		return true;
	}
	else{
		return false;
	}
}
function disall(){						//显示隐藏删除添加部分
	var chsome=document.getElementsByClassName("checkmore");
	var del=document.getElementsByClassName("del");
	var addfile=document.getElementById("addfile");
	var manage=document.getElementById("manage");
	if(manage.innerHTML=="管理"){
		manage.innerHTML="取消操作";		//判断显示还是隐藏
		for(var i=0; i<chsome.length;i++){
			chsome[i].style.display="block";
		}
		for(var i=0; i<del.length;i++){
			del[i].style.display="block";
		}
		addfile.style.display="block";
		
	}
	else{
		manage.innerHTML="管理";
		for(var i=0; i<chsome.length;i++){
			chsome[i].style.display="none";
		}
		for(var i=0; i<del.length;i++){
			del[i].style.display="none";
		}
		addfile.style.display="none";
		
	}
}
function disadd(){
	var addfile=document.getElementById("addfile");
	var manage=document.getElementById("manage1");
	if(manage.innerHTML=="添加文件"){		//判断显示还是隐藏
		addfile.style.display="block";
		manage.innerHTML="取消操作";
	}
	else{
		addfile.style.display="none";
		manage.innerHTML="添加文件";
	}
}
	

function checkall(){					//全选与全不选
	var key_word=document.getElementById("selectall");
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
		alert("请先选择需要删除的文件！");
		return false;
	}
	else{
		if(confirm("您确认删除所选文件？")){
			return true;
		}
		else{
			return false;
		}
	}
}
		
// JavaScript Document
function w_change(){
	var part1=document.getElementById("part1");
	part1.style.display="none";
	var part2=document.getElementById("part2");
	part2.style.display="block";
}
function b_change(){
	var part1=document.getElementById("part1");
	part1.style.display="block";
	var part2=document.getElementById("part2");
	part2.style.display="none";
}
function change(){
	var part1=document.getElementById("part1");
	part1.style.display="none";
	var part2=document.getElementById("part2");
	part2.style.display="block";
	var work_link=document.getElementById("work_link");
	work_link.innerHTML="<a onclick='w_change()'>工作信息</a>";
}
function pre(){
	var file=document.getElementById('myfile').files[0];
	var src=window.URL.createObjectURL(file);
	document.getElementById('preview').src=src;
}
function checked(){
	
}
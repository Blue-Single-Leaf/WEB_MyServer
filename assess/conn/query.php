<?php 
	include("../conn/connect.php");
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else{
		$page=1;
	}
	$pagesize=10;
	$sql1="select * from tb_assess where kind = $k";
	$query1=mysqli_query($conn,$sql1);
	$total=mysqli_num_rows($query1);
	$sql2="select * from tb_assess where kind = $k limit ".$page*$pagesize.",$pagesize";
	$query2=mysqli_query($conn,$sql2);
	$this_num=mysqli_num_rows($query2);
	$total_page=ceil($total/$pagesize);
?>
<?php
	
	if($total>0){
		while($result=mysqli_fetch_array($query2)){
			
			
		}
	}
	else{
?>
	<tr>
    	<td>尚无文件上传</td>
    </tr>
<?php
	}

?>


<?php 
//翻页文件
if($page > 1){
    $page_banner2.= "<a href='".$_SERVER['PHP_SELF']."?p=1&l=1&a=2'>首页</a>";
    $page_banner2.= "<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."&l=1&a=2' ><上一页</a>";
}else{
    $page_banner2.="<span class='disable'>首页</span>";
    $page_banner2.="<span class='disable'><上一页</span>";
}

if($total_pages2 > $showpage){
    if($page > $pageoffset+1){
        $page_banner2.="...";
    }
    if($page > $pageoffset){
        $start = $page - $pageoffset;
        $end2 = $total_pages2 > $page+$pageoffset?$page+$pageoffset:$total_pages2;
    }else{
        $start = 1;
        $end2 = $total_pages2 > $showpage ? $showpage:$total_pages2;
    }
    if($page + $pageoffset > $total_pages2){
        $start = $start - ($page+$pageoffset-$end2);
    }
}
for($i=$start;$i<=$end2;$i++){
    if($page==$i){
        $page_banner2.="<span class='current'>{$i}</span>";
    }else{
    $page_banner2.= "<a href='".$_SERVER['PHP_SELF']."?p=".$i."&l=1&a=2' >$i</a>";
    }
}
//尾部省略
if($total_pages2 > $showpage && $total_pages2 >$page+$pageoffset){
    $page_banner2.="...";
}

if($page < $total_pages2){
    $page_banner2.= "<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."&l=1&a=2' >下一页></a>";
    $page_banner2.= "<a href='".$_SERVER['PHP_SELF']."?p=".($total_pages2)."&l=1&a=2'>尾页</a>";
}else{
    $page_banner2.="<span class='disable'>下一页></span>";
    $page_banner2.="<span class='disable'>尾页</span>";
  }
$page_banner2.="共{$total_pages2}页";
$page_banner2.="<form action = 'self_program.php?l=1&a=2' method='get'>";
$page_banner2.="到第<input type='text' size='2' name='p' value='$page'>页";
$page_banner2.="<input type='submit' value='确定'>";
$page_banner2.="</form></div>";
echo $page_banner2;
?>
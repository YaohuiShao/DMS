<?php
session_start();
include("./conn.php");
//添加代码
if($act=="save" and $id=="")
{
	$sql="insert into `shenqing` (goodsid,num,ruser,w_date,content) values ('$goodsid','$num','$ruser','$w_date','$content')";

	if(mysql_query($sql))
	{//如果mysql_query返回值为真,javascript提示添加成功,否则提示添加失败
		mysql_query("update goods set num=num-$num where id=$goodsid");
	echo "<script>alert('成功');location.href='myr.php';</script>";
	exit;
	}
	else exit("失败了");
}

?>
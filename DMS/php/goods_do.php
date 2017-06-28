<?php
session_start();
include("./conn.php");
//添加代码
$duser=$_SESSION[login];
if($act=="save" and $id=="")
{
	$sql="insert into `goods` (name,ptype,num,duser) values ('$name','$ptype','$num','$duser')";
	if(mysql_query($sql))
	{//如果mysql_query返回值为真,javascript提示添加成功,否则提示添加失败
	echo "<script>alert('添加成功,请等待审核');location.href='myd.php';</script>";
	exit;
	}
	else exit("添加失败了");
}
//修改代码
if($act=="save" and $id!="")
{
	
	$sql="update `goods` set name='$name',ptype='$ptype',num='$num' where id=$id";
	if(mysql_query($sql))
	{//如果mysql_query返回值为真,javascript提示修改成功,否则提示修改失败
	echo "<script>alert('修改成功');location.href='myd.php';</script>";
	exit;
	}
	else exit("修改失败了");
}
//删除代码
if($act=="del")
{	$sql="delete from goods where id=$id";
	if(mysql_query($sql))
	{
	echo "<script>alert('删除成功');location.href='myd.php';</script>";
		exit;
	}
	else exit("删除失败了");

}

?>
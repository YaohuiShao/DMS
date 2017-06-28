<?php
require("header.php");
if($act=="login")
{
$sql="select * from $table where username='$uname' and password='$pwd'";

$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
	if(!empty($data))
	{
		
	$_SESSION[user_name]=$uname;
$_SESSION[user_id]=$data[id];
	$_SESSION[login]=$uname;
	$_SESSION[login_t]=$table;

	echo "<script>alert('登录成功');location.href='index.php';</script>";
	exit;
	}
	else
	{
echo "<script>alert('帐号或者密码错误');location.href='index.php';</script>";
	exit;
	}
}
?>

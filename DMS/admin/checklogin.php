<?php
session_start();
require("../conn.php");
$sql = "select * from admin where username='$name' and userpassword='$password'";
$res=mysql_query($sql);
$login=mysql_fetch_array($res);
if(!empty($login))
{
$_SESSION["user_name"]=$name;
	echo"<script>alert('登录成功了');location.href='manage.php'</script>";

}
else
{echo"<script>alert('用户名或者密码错误');history.back();</script>";
exit;

}
?>


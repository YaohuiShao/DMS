<?php
require("../conn.php");
$Password=md5($Password);
$sql="select * from manage where UserName='$UserName'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
if(!empty($data))
{
	echo "<script language=JavaScript>window.alert('���ʺ��Ѵ��ڣ�');history.back();</script>";
	exit;
}
$sql="insert into manage (UserName,Password,type) values ('$UserName','$Password','$type')";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('��ӳɹ���');window.location.href='manage.php'}</script>";
}
else
echo "ʧ����";
?>
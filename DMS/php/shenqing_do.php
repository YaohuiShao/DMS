<?php
session_start();
include("./conn.php");
//��Ӵ���
if($act=="save" and $id=="")
{
	$sql="insert into `shenqing` (goodsid,num,ruser,w_date,content) values ('$goodsid','$num','$ruser','$w_date','$content')";

	if(mysql_query($sql))
	{//���mysql_query����ֵΪ��,javascript��ʾ��ӳɹ�,������ʾ���ʧ��
		mysql_query("update goods set num=num-$num where id=$goodsid");
	echo "<script>alert('�ɹ�');location.href='myr.php';</script>";
	exit;
	}
	else exit("ʧ����");
}

?>
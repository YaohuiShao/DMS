<?php
session_start();
include("../conn.php");
//��Ӵ���
$duser=$_SESSION[login];
if($act=="save" and $id=="")
{
	$sql="insert into `goods` (name,ptype,num,duser) values ('$name','$ptype','$num','$duser')";
	if(mysql_query($sql))
	{//���mysql_query����ֵΪ��,javascript��ʾ��ӳɹ�,������ʾ���ʧ��
	echo "<script>alert('��ӳɹ�,��ȴ����');location.href='goods.php';</script>";
	exit;
	}
	else exit("���ʧ����");
}
//�޸Ĵ���
if($act=="save" and $id!="")
{
	
	$sql="update `goods` set name='$name',ptype='$ptype',num='$num' where id=$id";
	if(mysql_query($sql))
	{//���mysql_query����ֵΪ��,javascript��ʾ�޸ĳɹ�,������ʾ�޸�ʧ��
	echo "<script>alert('�޸ĳɹ�');location.href='goods.php';</script>";
	exit;
	}
	else exit("�޸�ʧ����");
}
//ɾ������
if($act=="del")
{	$sql="delete from goods where id=$id";
	if(mysql_query($sql))
	{
	echo "<script>alert('ɾ���ɹ�');location.href='goods.php';</script>";
		exit;
	}
	else exit("ɾ��ʧ����");

}

?>
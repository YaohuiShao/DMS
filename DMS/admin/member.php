<?php
session_start();
include("../conn.php");
if($act=="del")
{
	$sql="delete from duser where id=$id";
	$result=mysql_query($sql);
	if($result)
	{
		echo "<script>alert('ɾ���ɹ�');location.href='member.php';</script>";
		exit;
	}
	else
	{
	exit("ɾ��ʧ����");

	}
}if($act=="shenhe")
{
	$sql="update duser set s=$s where id=$id";
	//echo $sql;
	mysql_query($sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�б�</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">

 <tr align="center" bgcolor="#aec3de">
          <td colspan="18"  class="optiontitle">
		  <form id="form1" name="form1" method="post" action="">
          
          ����:
              <input type="text" name="nickname" id="name" />
			    �༶:
              <input type="text" name="banji" id="name" />
            <input type="submit" name="button" id="button" value="��ѯ" />
          </form>  </td>
        </tr>

<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">

 <tr align="center" bgcolor="#aec3de">
<td colspan="18" bgcolor="#99FF99"  class="optiontitle">��Ա����  </td>
        </tr>

<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">��½�˺�</td>
	<td class="optiontitle">����</td>
	<td class="optiontitle">����</td>
	<td class="optiontitle">�Ա�</td>
	<td class="optiontitle">����</td>
	<td class="optiontitle">qq</td>
	<td class="optiontitle">��ϵ�绰</td>
    <td class="optiontitle">ѧԺ</td>
	<td class="optiontitle">�༶</td>
	<td class="optiontitle">�����ַ</td>

	<td class="optiontitle">����</td></tr><?php
	$where=" where 1=1";
	if($nickname!="")
$where.=" and nickname='$nickname'";
if($banji!="")
$where.=" and banji='$banji'";
$sql="select * from duser $where order by id  DESC";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
	
?><tr align="center" class="tdbg">
<td height="25"><?php echo $data["username"]?></td>
<td height="25"><?php echo $data["nickname"]?></td>
<td height="25"><?php echo $data["password"]?></td>
<td height="25"><?php echo $data["sex"]?></td>
<td height="25"><?php echo $data["email"]?></td>
<td height="25"><?php echo $data["qq"]?></td>
<td height="25"><?php echo $data["tel"]?></td>
<td height="25"><?php echo $data["dep"]?></td>
<td height="25"><?php echo $data["banji"]?></td>
<td height="25"><?php echo $data["addr"]?></td>

<td height="25">

<a href="./dchange.php">�޸���Ϣ</a>|<a href="?act=del&id=<?php echo $data[id]?>" onClick="return confirm('��ȷ��Ҫɾ����?')">ɾ��</a></td>
</tr>
<?php
}
?>
</table>

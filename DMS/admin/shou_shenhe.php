<?php
session_start();
include("../conn.php");
if($act=="del")
{
$sql="delete from shenqing where id=$id";
	$result=mysql_query($sql);
	if($result)
	{
		echo "<script>alert('ɾ���ɹ�');location.href='shou_shenhe.php';</script>";
		exit;
	}
}if($act=="shenhe")
{
	$sql="update shenqing set s=$s where id=$id";
	//echo $sql;
	mysql_query($sql);
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
          
          �ؼ���
              <input type="text" name="ruser" id="name" />
            <input type="submit" name="button" id="button" value="��ѯ" />
          </form>  </td>
        </tr>

<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">��Ʒ����</td>
	<td class="optiontitle">����</td>
	<td class="optiontitle">������</td>
	<td class="optiontitle">����</td>
	<td class="optiontitle">ԭ��</td>
	<td class="optiontitle">���״̬</td>
	<td class="optiontitle">����</td></tr>
<?php
$where=" where s=0";
if($ruser!="")
$where.=" and ruser ='$ruser'";
$sql="select * from `shenqing` $where  order by id  DESC";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{if($data[s]==0){
		$a="<font color=red>δ���</font>";
				$d="<a href=?act=shenhe&s=1&id=$data[id]>���ͨ��</a>";

	}
	else{
		$a="<font color=green>�����</font>";
		$d="<a href=?act=shenhe&s=0&id=$data[id]>ȡ��ͨ��</a>";

	}
?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo get_name($data["goodsid"],"goods")?></td>
<td height="25"><?php echo $data["num"]?></td>
<td height="25"><?php echo $data["ruser"]?></td>
<td height="25"><?php echo $data["w_date"]?></td>
<td height="25"><?php echo $data["content"]?></td>
<td height="25"><?php echo $a?></td>

<td height="25"><?php echo $d?>
| <a href="?act=del&id=<?php echo $data[id]?>" onClick="return confirm('��ȷ��Ҫɾ����?')">ɾ��</a></td>
</tr>
<?php
}
?>
</table>

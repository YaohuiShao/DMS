<?php
include("header.php");
if($id!="")
{//ȡ��goods������������������鿴
	$sql="select * from shenqing where id=$id";
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
}
$sql="select * from goods where id=$data[goodsid]";
	$result=mysql_query($sql);
	$r=mysql_fetch_array($result);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����</title>
<link href="css/css.css" rel="stylesheet" type="text/css">

</head><table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
 <tr>
    <td height="19" colspan="4" class="tdtitle">
	<div align="center" class="title"> ����</div></td>
  </tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ��Ʒ���ƣ�</td>
<td align="left"><?php echo get_name($data[goodsid],"goods")?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ��Ʒ���</td>
<td align="left"><?php echo $r[ptype]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ������</td>
<td align="left"><?php echo $data[num]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> �����û���</td>
<td align="left"><?php echo $data[duser]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> �����û���</td>
<td align="left"><?php echo $data[ruser]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ����ʱ�䣺</td>
<td align="left"><?php echo $r[addtime]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ����ʱ�䣺</td>
<td align="left"><?php echo $data[w_date]?></td>
</tr>

<tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		            

		&nbsp;&nbsp;&nbsp;&nbsp;
          	<input type="button" name="Submit2" value="����" onClick="history.back(-1)"></td>
        </tr>
		
      </table>
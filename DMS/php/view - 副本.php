<?php
include("header.php");
if($id!="")
{//取出goods表数据用于详情浏览查看
	$sql="select * from goods where id=$id";
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>详情</title>
<link href="css/css.css" rel="stylesheet" type="text/css">

</head><table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
 <tr>
    <td height="19" colspan="4" class="tdtitle">
	<div align="center" class="title"> 详情</div></td>
  </tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 物品名称：</td>
<td align="left"><?php echo $data[name]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 物品类别：</td>
<td align="left"><?php echo $data[ptype]?></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 数量：</td>
<td align="left"><?php echo $data[num]?></td>
</tr>

<tr align="center" bgcolor="#F2FDFF">
  <td align="right"> 捐赠时间：</td>
  <td align="left"><?php echo $data[addtime]?></td>
</tr><tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		            	<input type="button" name="Submit2" value="申请受赠" onClick="location.href='shenqingAdd.php?goodsid=<?php echo $id?>'">

		&nbsp;&nbsp;&nbsp;&nbsp;
          	<input type="button" name="Submit2" value="返回" onClick="history.back(-1)"></td>
        </tr>
		
</table>
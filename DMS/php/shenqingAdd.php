<?php
include("header.php");
if($_SESSION[login_t]=="")
{
	echo"<script>alert('请先登录');history.back();</script>";
exit;
}
if($_SESSION[login_t]=="duser")
{
	echo"<script>alert('你不是受赠用户,不能操作');history.back();</script>";
exit;
}

if($goodsid!="")
{
	$sql="select * from goods where id=$goodsid";
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
}
$ruser=$_SESSION[login];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>添加/修改</title>
<link href="css/css.css" rel="stylesheet" type="text/css">

</head>
<form name="form1" method="post" action="shenqing_do.php?act=save&id=<?php echo $id?>" enctype="multipart/form-data" onSubmit="return check(this)">
<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
 <tr>
    <td height="19" colspan="4" class="tdtitle">
	<div align="center" class="title"> 申请受赠</div></td>
  </tr>
<input name="goodsid" type="hidden" id="goodsid" size="20" value="<?php echo $goodsid?>">
<input name="num" type="hidden" id="num" size="20" value="1">
<input name="ruser" type="hidden" id="ruser" size="20" value="<?php echo $ruser?>">

<input name="duser" type="hidden" id="duser" size="20" value="<?php echo $data[duser]?>">
		<tr align="center" bgcolor="#F2FDFF">
		<td align="right"> 日期：</td>
			<td align="left">
	<script language="javascript" src="js/JTimer.js"></script>
			<input name="w_date" type="text" id="w_date" size="10" value="<?php echo $data[w_date]?>" onFocus="JTC.setday()"></td>
		</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 原因：</td>
<td align="left"><textarea name="content" cols="40" rows="6" id="content_1"><?php echo $data[content]?>
</textarea>
</td>
</tr><tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		     <INPUT TYPE="hidden" name="action" value="yes">
            <input type="Submit" name="Submit" value="提交">
          	<input type="button" name="Submit2" value="返回" onClick="history.back(-1)"></td>
        </tr>
		</FORM>
      </table>
<?php
session_start();
include("../conn.php");
if($id!="")
{
	$sql="select * from goods where id=$id";
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>添加/修改</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function check(form){
	if(form.name.value==''){
		alert('请输入物品名称');
		return false;
	}
	
	return true;
}

</script>
</head>
<form name="form1" method="post" action="goods_do.php?act=save&id=<?php echo $id?>" enctype="multipart/form-data" onSubmit="return check(this)">
<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
 <tr>
    <td height="19" colspan="4" class="tdtitle">
	<div align="center" class="title"> 填写信息</div></td>
  </tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 物品名称：</td>
<td align="left"><input name="name" type="text" id="name" size="20" value="<?php echo $data[name]?>"></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 物品类别：</td>
<td align="left">
<select name="ptype" id="ptype">
  <?php
  $sql="select * from ptype order by id DESC";
 $res=mysql_query($sql);
 while($rs=mysql_fetch_array($res))
 {
	 ?>

	  <option value="<?php echo $rs[name]?>" <?php if($rs[name]==$data[ptype]) echo "selected"; ?>><?php echo $rs[name]?></option>
	 <?php
	 }
  ?>
  </select>
</td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 数量：</td>
<td align="left"><input name="num" type="text" id="num" size="20" value="<?php echo $a=empty($data[num])?1:$data[num]?>"></td>
</tr>
		<tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		     <INPUT TYPE="hidden" name="action" value="yes">
            <input type="Submit" name="Submit" value="提交">
          	<input type="button" name="Submit2" value="返回" onClick="history.back(-1)"></td>
        </tr>
		</FORM>
      </table>
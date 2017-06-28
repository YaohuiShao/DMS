<?php
require("header.php");
$table=$_SESSION[login_t];
	$sql="select * from $table where id=$_SESSION[user_id]";
	
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
if($act=="save")
{


		$sql="update $table set nickname='$nickname',password='$password',sex='$sex',email='$email',qq='$qq',tel='$tel',dep='$dep',banji='$banji',addr='$addr' where id=$_SESSION[user_id]";
$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('修改成功');location.href='dchange.php';</script>";
	exit;
	}
	else
	{
	exit ("修改失败了");
	}
	}
?>
<div id="page">
	<!-- start content -->
  <div id="content">
		<div class="post">
<script type="text/javascript">
function check_uploadObject(form){
	if(form.username.value==''){
		alert('请输入登陆账号');
		return false;
	}
	if(form.password.value==''){
		alert('请输入密码.');
		return false;
	}
	if(form.repassword.value==''){
		alert('请输入确认密码.');
		return false;
	}
	if(form.repassword.value!=form.password.value){
		alert('两次密码不一样.');
		return false;
	}
	  if(form.qq.value=="")
	{
	 alert("请输入qq!");
	 form.qq.select();
	 return(false);
	 }
	  if(form.tel.value=="")
	{
	 alert("请输入电话!");
	 form.tel.select();
	 return(false);
	 }
	  if(form.email.value=="")
	{
	 alert("请输入电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("请输入正确的电子邮箱地址!");
	 form.email.select();
	 return(false);
	 }
	return true;
}

</script>
<form name="form1" method="post" action="?act=save&id=<?php echo $id?>" enctype="multipart/form-data" onSubmit="return check_uploadObject(this)"><table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

 <tr>
    <td height="19" colspan="4" class="tdtitle"><div align="center" class="title"> 资料修改</div></td>
  </tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 登陆账号：</td>
<td align="left"><input name="username" type="text" id="username" size="20" value=<?php echo $data[username]?>><font color="red">必填</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 姓名：</td>
<td align="left"><input name="nickname" type="text" id="nickname" size="20" value=<?php echo $data[nickname]?>></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 密码：</td>
<td align="left"><input name="password" type="password" id="password" size="20" value=<?php echo $data[password]?>><font color="red">必填</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 确认密码</td>
<td align="left"><input name="repassword" type="password"/><font color="red">必填</font></td>
</tr>


<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 性别：</td>
<td align="left">        <input type="radio" name="sex" value="男" />男 <input type="radio" name="sex" value="女" />女 
</td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 邮箱：</td>
<td align="left"><input name="email" type="text" id="email" size="20" value=<?php echo $data[email]?>><font color="red">必填</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> qq：</td>
<td align="left"><input name="qq" type="text" id="qq" size="20" value=<?php echo $data[qq]?>><font color="red">必填</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 联系电话：</td>
<td align="left"><input name="tel" type="text" id="tel" size="20" value=<?php echo $data[tel]?>><font color="red">必填</font></td>
</tr>


<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 学院：</td>
<td align="left"><input name="dep" type="text" id="dep" size="20" value="<?php echo $data[dep]?>"></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 班级：</td>
<td align="left"><input name="banji" type="text" id="banji" size="20" value="<?php echo $data[banji]?>"></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> 地址：</td>
<td align="left"><input name="addr" type="text" id="addr" size="20" value=<?php echo $data[addr]?>></td>
</tr>


<tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		     <INPUT TYPE="hidden" name="action" value="yes">
            <input type="Submit" name="Submit" value="修改">
          	<input type="button" name="Submit2" value="返回" onClick="history.back(-1)"></td>
        </tr>
		</FORM>
</table>
</DIV></DIV><?php
require("footer.php");
?>
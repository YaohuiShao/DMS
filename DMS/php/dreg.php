<?php
require("header.php");
if($act=="save")
{
$sql="select * from duser where username ='$username'";
$res=mysql_query($sql);
if(!mysql_num_rows($res))
	{
		

		$sql="insert into `duser` (username,nickname,password,sex,email,qq,tel,dep,banji,addr) values ('$username','$nickname','$password','$sex','$email','$qq','$tel','$dep','$banji','$addr')";
$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('ע��ɹ�');location.href='index.php';</script>";
	exit;
	}
	else
	{
	exit("ע��ʧ����");
	}
	}

else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('ʧ��,�ʺ��Ѵ���');history.back();</SCRIPT>";
	exit;
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
		alert('�������½�˺�');
		return false;
	}
	if(form.password.value==''){
		alert('����������.');
		return false;
	}
	if(form.repassword.value==''){
		alert('������ȷ������.');
		return false;
	}
	if(form.repassword.value!=form.password.value){
		alert('�������벻һ��.');
		return false;
	}
	  if(form.qq.value=="")
	{
	 alert("������qq!");
	 form.qq.select();
	 return(false);
	 }
	  if(form.tel.value=="")
	{
	 alert("������绰!");
	 form.tel.select();
	 return(false);
	 }
	  if(form.email.value=="")
	{
	 alert("��������������ַ!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("��������ȷ�ĵ��������ַ!");
	 form.email.select();
	 return(false);
	 }
	return true;
}

</script>
<form name="form1" method="post" action="?act=save&id=<?php echo $id?>" enctype="multipart/form-data" onSubmit="return check_uploadObject(this)"><table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

 <tr>
    <td height="19" colspan="4" class="tdtitle"><div align="center" class="title"> �����û�ע��</div></td>
  </tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ��½�˺ţ�</td>
<td align="left"><input name="username" type="text" id="username" size="20" value=<?php echo $data[username]?>><font color="red">����</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ������</td>
<td align="left"><input name="nickname" type="text" id="nickname" size="20" value=<?php echo $data[nickname]?>></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ���룺</td>
<td align="left"><input name="password" type="password" id="password" size="20" value=<?php echo $data[password]?>><font color="red">����</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ȷ������</td>
<td align="left"><input name="repassword" type="password"/><font color="red">����</font></td>
</tr>


<tr align="center" bgcolor="#F2FDFF">
<td align="right"> �Ա�</td>
<td align="left">        <input type="radio" name="sex" value="��" />�� <input type="radio" name="sex" value="Ů" />Ů 
</td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ���䣺</td>
<td align="left"><input name="email" type="text" id="email" size="20" value=<?php echo $data[email]?>><font color="red">����</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> qq��</td>
<td align="left"><input name="qq" type="text" id="qq" size="20" value=<?php echo $data[qq]?>><font color="red">����</font></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ��ϵ�绰��</td>
<td align="left"><input name="tel" type="text" id="tel" size="20" value=<?php echo $data[tel]?>><font color="red">����</font></td>
</tr>


<tr align="center" bgcolor="#F2FDFF">
<td align="right"> ѧԺ��</td>
<td align="left"><input name="dep" type="text" id="dep" size="20" value="<?php echo $data[dep]?>"></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> �༶��</td>
<td align="left"><input name="banji" type="text" id="banji" size="20" value="<?php echo $data[banji]?>"></td>
</tr>
<tr align="center" bgcolor="#F2FDFF">
<td align="right"> �����ַ��</td>
<td align="left"><input name="addr" type="text" id="addr" size="20" value=<?php echo $data[addr]?>></td>
</tr>


<tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		     <INPUT TYPE="hidden" name="action" value="yes">
            <input type="Submit" name="Submit" value="ע��">
          	<input type="button" name="Submit2" value="����" onClick="history.back(-1)"></td>
        </tr>
		</FORM>
</table>
</DIV></DIV><?php
require("footer.php");
?>
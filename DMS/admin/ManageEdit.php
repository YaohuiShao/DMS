<?php
require("../conn.php");
if($action=="Edit")
{
	$OldPassword=md5($OldPassword);
	$sql="select * from manage where UserName='$UserName' and Password='$OldPassword'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
if(empty($data))
{
	echo "<script language=JavaScript>window.alert('�������������');history.back();</script>";
	exit;
}
else
	{
	$NewPassword=md5($NewPassword);
$sql="update manage set Password='$NewPassword' where UserName='$UserName'";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('�����޸ĳɹ���');window.location.href='manage.php'}</script>";
}
}
}
?><script language="javascript">
<!--
  if (window == top)top.location.href = "Default.asp";
// -->
</script>
<html>
<head>
<title>#��վ����ϵͳ</title>
<link rel="Shortcut Icon" href="ico.ico">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--


.back_southidc{
	BACKGROUND-IMAGE:url('image/titlebg.gif');
	color:#048590;
	text-align:center;

}
.tang_southidc{
	color:#135294;
	text-align:center;
	font-weight: bold;
	background-color:#B5D185;

}
.table_southidc{BACKGROUND-COLOR:#B5D185; margin-bottom:5px;} /*������ɫ����*/
.td_southidc{BACKGROUND-COLOR: F2F8FF;}
.tr_southidc{BACKGROUND-COLOR: ECF5FF;}

-->
</style>
<link href="style.css" rel="stylesheet" type="text/css">

<body>

<SCRIPT language=javascript>
<!--
function myform_onsubmit()
{
	if(document.myform.OldPassword.value=="")
		{
alert ("�����벻��Ϊ�ա�");
return false;

	}
	if(document.myform.NewPassword.value=="")
		{
alert ("�����벻��Ϊ�ա�");
return false;

	}
if (document.myform.NewPassword.value!=document.myform.ConPassword.value)
{
alert ("�������ȷ�����벻һ�¡�");
document.myform.NewPassword.value='';
document.myform.ConPassword.value='';
document.myform.NewPassword.focus();
return false;
}
}
//-->
</SCRIPT>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" height="25"> ����Ա�����޸�</td>
        </tr>
        <tr class="tr_southidc">
          <FORM name=myform  onsubmit="return myform_onsubmit()" action="ManageEdit.php?action=Edit&UserName=<?php echo $UserName?>" method=post>
            <td><table width="50%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
                <tr>
                  <td height="25" colspan="2" class="back_southidc">&nbsp;</td>
                </tr>
                <tr>
                  <td width="29%" height="22"> <div align="right">����Ա�ʺţ�</div></td>
                  <td width="71%"><?php echo $UserName?></td>
                </tr>
                <tr>
                  <td height="22"><div align="right">�����룺</div></td>
                  <td><input name="OldPassword" type="password" size="16" maxlength="20"></td>
                </tr>
                <tr>
                  <td height="22"> <div align="right">�����룺</div></td>
                  <td><input name="NewPassword" type="password" size="16" maxlength="20"></td>
                </tr>
                <tr>
                  <td height="22"> <div align="right">����ȷ�ϣ�</div></td>
                  <td><input name="ConPassword" type="password" size="16" maxlength="20"></td>
                </tr>
                <tr>
                  <td height="22" colspan="2"><div align="center">
                      <INPUT  type=submit value='ȷ���޸�' name=Submit2>
                    </div></td>
                </tr>
              </table></td>
          </form>
        </tr>
      </table>
      <br> <strong> </strong></td>
  </tr>
</table>

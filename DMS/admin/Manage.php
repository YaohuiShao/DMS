<?php
require("../conn.php");
if($mark=="del")
{
$sql="delete from manage where UserName='$UserName'";
mysql_query($sql);
}
?>

<script language="javascript">
<!--

function ConfirmDel()
{
   if(confirm("ȷ��Ҫɾ��ѡ�е���Ŀ��һ��ɾ�������ָܻ���"))
     return true;
   else
     return false;
}

function form_onsubmit()
{
	if(document.form_admin.UserName.value=="")
		{
alert ("����Ա�ʺŲ���Ϊ�ա�");
return false;

	}
	if(document.form_admin.Password.value=="")
		{
alert ("���벻��Ϊ�ա�");
return false;

	}
if (document.form_admin.Password.value!=document.form_admin.ConPassword.value)
{
alert ("�������ȷ�����벻һ�¡�");
document.form_admin.Password.value='';
document.form_admin.ConPassword.value='';
document.form_admin.Password.focus();
return false;
}
}
//-->
</SCRIPT>


<script language="javascript">
<!--
  if (window == top)top.location.href = "Default.asp";
// -->
</script>
<html>
<head>
<title>####��վ����ϵͳ</title>
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

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <strong><br>
      </strong> <table width="620" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td class="back_southidc" width="598" height="25" >��ӹ���Ա</td>
        </tr>
        <tr class="tr_southidc">
          <FORM name="form_admin" method="post"  onsubmit="return form_onsubmit()" action="ManageSave.php" >
            <td><table width="50%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc" >
                <tr>
                  <td height="25" colspan="2" class="back_southidc">&nbsp;</td>
                </tr>
                <tr>
                  <td width="29%" height="22"> ����Ա�ʺţ�</td>
                  <td width="71%"><input name="UserName" type="text" id="UserName" size="16" maxlength="20"></td>
                </tr>
                <tr>
                  <td height="22"> ����Ա���룺</td>
                  <td><input name="Password" type="password" size="16" maxlength="20"></td>
                </tr>
                <tr>
                  <td height="22"> ����ȷ�ϣ�</td>
                  <td><input name="ConPassword" type="password" size="16" maxlength="20"></td>
                </tr>

                <tr>
                  <td height="22" colspan="2" align="center" valign="middle">
                  <INPUT type=submit value='ȷ�����' name=Submit2></td>
                </tr>

              </table></td>
          </form>
        </tr>
      </table>
      <br>
      <table width="620" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="553" height="25" class="back_southidc"> ����Ա�ʺŹ���</td>
        </tr>
        <tr class="tr_southidc">
            <td><br>
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="table_southidc">
                <tr bgcolor="#A4B6D7">
                  <td width="28%" height="25" class="back_southidc">
                    <div align="center">����Ա�ʺ�</td>

                  <td width="24%" class="back_southidc">
                    <div align="center">����</td>
                  <td width="20%" class="back_southidc">
                    <div align="center">ɾ��</td>
                </tr>
<?php
$sql="select * from manage ";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
?>
                <tr bgcolor="#DFEBF2">
                  <td height="22">
                    <div align="center"><?php echo $data[UserName]?></td>
                  <td height="22">

                    <div align="center">
                      <a href='ManageEdit.php?UserName=<?php echo $data[UserName]?>'>�޸�����</a>
                  </td>
                  <td>
                    <div align="center">
					<a href="Manage.php?UserName=<?php echo $data[UserName]?>&mark=del" onClick="return ConfirmDel();">ɾ��</a>
                  </td>
                </tr>
<?php
}
?>
              </table></td>
        </tr>
      </table>
    </td>
  </tr>
</table>

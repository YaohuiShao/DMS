<?php
session_start();
require("../conn.php");
if($act=="login")
{

		$admin_pass=md5($password);
		$sql="select * from manage where UserName='$name' and Password='$admin_pass'";
//echo $sql;
		$re=mysql_query($sql);
		$num=@mysql_num_rows($re);
		if($num==0)
		{
			echo "<script>alert('管理员帐号或者密码错误'),history.back()</script>";
		exit;
		}
		else
			{
				$_SESSION[login_type]=$type;
				$_SESSION[login_name]=$name;
		echo "<script>alert('管理员登录成功');location.href='main.php';</script>";


		}


}
?>


 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>管理系统后台登录</TITLE>
<META http-equiv=Content-Type content=text/html;charset=gb2312>
<STYLE>
.tableborder {
	BORDER-RIGHT: #737373 1px solid; BORDER-TOP: #bbbbbb 1px solid; BORDER-LEFT: #bbbbbb 1px solid; BORDER-BOTTOM: #737373 1px solid; BACKGROUND-COLOR: #d8dbd7
}
.setupheader {
	FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #ffffff; BACKGROUND-COLOR: #454545
}
.button {
	FONT-SIZE: 12px; CURSOR: pointer; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px
}
.topheader {
	PADDING-RIGHT: 3px; PADDING-LEFT: 3px; FONT-WEIGHT: bold; PADDING-BOTTOM: 3px; COLOR: #ffffff; PADDING-TOP: 3px; BACKGROUND-COLOR: #485E24}
.header_box {
	PADDING-RIGHT: 1px; PADDING-LEFT: 1px; VERTICAL-ALIGN: middle; PADDING-TOP: 1px; HEIGHT: 1px; BACKGROUND-COLOR: #ffffff
}
.header_box1 {
	PADDING-RIGHT: 1px; PADDING-LEFT: 1px; PADDING-BOTTOM: 1px; VERTICAL-ALIGN: middle; PADDING-TOP: 1px; HEIGHT: 1px; BACKGROUND-COLOR: #ffffff
}
.install_box {
	PADDING-RIGHT: 1px; PADDING-LEFT: 1px; PADDING-BOTTOM: 1px; PADDING-TOP: 1px; BACKGROUND-COLOR: #CCCCCC}
.firsthr {
	BACKGROUND-COLOR: #808080
}
.secondhr {
	BACKGROUND-COLOR: #ffffff
}
TD {
	FONT-SIZE: 12px; FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif
}
</STYLE>

<META content="MSHTML 6.00.2900.2873" name=GENERATOR><script language=javascript>
function isok(theform)
{

if (theform.name.value=="")
  {
	alert(" 用户名不能为空！");
	theform.name.focus();
	return (false);
  }
if (theform.password.value=="")
  {
	alert("对不起!密码不能为空！");
	theform.password.focus();
	return (false);
  }
return (true);
}
</script>
</HEAD>


<BODY topMargin=80 bgcolor="#B5D185">
<TABLE class=tableborder cellSpacing=1 cellPadding=0 width=496 align=center
border=0>
  <FORM id=a action="?act=login" method=post>
  <TBODY>
  <TR>
    <TD>
      <DIV class=topheader>&nbsp;&nbsp;后台登录</DIV>
      <DIV class=header_box><IMG height=171 src="Images/index_body/login.jpg"
      width=491></DIV>
      <DIV class=install_box>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD colSpan=3>　</TD></TR>
        <TR>
          <TD align=right width="48%">用户名: <INPUT style="WIDTH: 92px"
            name=name></TD>
          <TD align=left width="3%">　</TD>
          <TD align=left width="48%">　</TD></TR>
        <TR>
          <TD align=right>密　码: <INPUT style="FONT-SIZE: 12px; WIDTH: 92px"
            type=password name=password></TD>
          <TD align=left>　</TD>
          <TD align=left></TD></TR>
        <TR>
          <TD>　</TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=2 width="100%" border=0>
        <TBODY>
        <TR>
          <TD>
            <DIV class=firsthr style="HEIGHT: 1px"><IMG height=1 alt=""
            src="Images/index_body/Admin.htm" width=1></DIV>
            <DIV class=secondhr style="HEIGHT: 1px"><IMG height=1 alt=""
            src="Images/index_body/Admin.htm" width=1></DIV></TD></TR></TBODY></TABLE>
      <DIV align=right>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD
            align=right><INPUT class=button type=submit value="  登录  ">&nbsp;&nbsp;
<INPUT class=button onclick=javascript:window.opener=null;window.close(); type=button value="  关闭   ">
            &nbsp;&nbsp;</TD></TR>
        <TR>
          <TD
  align=right>　</TD></TR></TBODY></TABLE></DIV></DIV></TD></TR></TBODY></FORM></TABLE>
<SCRIPT language=JavaScript>
CheckBrowerVersion();
var ErrInfo='';
function CheckBrowerVersion()
{
	var MajorVer=navigator.appVersion.match(/MSIE (.)/)[1];
	var MinorVer=navigator.appVersion.match(/MSIE .\.(.)/)[1];
	var IE6OrMore=MajorVer>= 5.5||(MajorVer>=5.5&&MinorVer>=5.5);
	if (!IE6OrMore)
	{
		alert('IE浏览器版本太低，系统将不能正常运行。点击确定将带你到下载地址！');
		location.href=""
		//document.all.BtnSubmit.disabled=true;
	}
}
if (ErrInfo!='') alert(ErrInfo);
</SCRIPT>
</BODY></HTML>

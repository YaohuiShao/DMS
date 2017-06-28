<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
session_start();
if($_SESSION[login_name]=="")
{	echo ("<script>location.href='index.php';</script>");
		exit;
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
<HTML><HEAD><TITLE>网站系统后台管理</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<STYLE>BODY {
	SCROLLBAR-SHADOW-COLOR: #deefc6; SCROLLBAR-ARROW-COLOR: #ffffff; SCROLLBAR-BASE-COLOR: #c0d586
}
</STYLE>

<META content="MSHTML 6.00.2900.2873" name=GENERATOR></HEAD><FRAMESET border=0
frameSpacing=0 rows=55,* frameBorder=no cols=*><FRAME name=topFrame
src="index_top.php" scrolling=no><FRAMESET border=0 name=btFrame
frameSpacing=0 frameBorder=NO cols=152,*><FRAME name=menu
src="index_menu.php" scrolling=yes><FRAME name=main
src="index_body.php" scrolling=yes></FRAMESET></FRAMESET><noframes></noframes></HTML>

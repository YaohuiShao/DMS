<?php
require("../conn.php");
//�����Ϣ
if($mark=="save")
{
if($title=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('��������ݶ�����Ϊ�գ�');history.back();</script>";
	exit;
}
$addtime=date("Y-m-d");
$sql="insert into news (title,content,addtime) values ('$title','$content','$addtime')";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('��ӳɹ���');window.location.href='news.php'}</script>";
}
else
{
exit ("ʧ����");
}
}
?>
<html>
<head>
<title>####��վ����ϵͳ</title>
<link rel="Shortcut Icon" href="ico.ico">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--


.back_southidc{
	BACKGROUND-IMAGE:url('image/titlebg.gif');
	color:#fff;
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
<script charset="utf-8" src="./editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>

<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});

			});
		</script>
<body>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            �����Ϣ</td>
        </tr>
        <tr>
          <form method="post" name="myform" action="?mark=save">
            <td><div align="center">
                <table width="100%" border="0" cellspacing="1" cellpadding="0">
                  <tr bgcolor="#ECF5FF">
                    <td width="16%" height="23" bgcolor="#ECF5FF"> <div align="center">��Ϣ����:</div></td>
                    <td width="34%" height="25"> <input type="text" name="title" class="inputtext" maxlength="100" size="45">
                    </td>

                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="25" colspan="6"><div align="left">��Ϣ����</div></td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="300" colspan="6"> <textarea id="content_1" name="content" cols="100" rows="8" style="width:550px;height:300px;"><?php echo $data[content]?></textarea>
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td colspan="6"> <div align="center">
                        <input name="submit" type="submit" value="ȷ��">
                        &nbsp;
                        <input name="reset" type="reset" value="ȡ��">
                      </div></td>
                  </tr>
                </table>
              </div></td>
          </form>
        </tr>
      </table>
      <br> </td>
  </tr>
</table>

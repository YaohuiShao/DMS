<?php
require("../conn.php");
//读取修改数据
$sql="select * from news where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//修改信息
if($mark=="save")
{
if($title=="" || $content=="")
{
echo "<script language=JavaScript>window.alert('标题和内容都不能为空！');history.back();</script>";
	exit;
}
$sql="update news set title='$title',content='$content' where id=$id";
$result=mysql_query($sql);
if($result)
{
	echo "<script language=JavaScript>{window.alert('修改成功！');window.location.href='news.php'}</script>";
}
else
{
exit ("失败了");
}
}
?>
<html>
<head>
<title>####网站管理系统</title>
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
.table_southidc{BACKGROUND-COLOR:#B5D185; margin-bottom:5px;} /*表格的蓝色底线*/
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
            添加信息</td>
        </tr>
        <tr>
          <form method="post" name="myform" action="?mark=save&id=<?=$id?>">
            <td><div align="center">
                <table width="100%" border="0" cellspacing="1" cellpadding="0">
                  <tr bgcolor="#ECF5FF">
                    <td width="16%" height="23" bgcolor="#ECF5FF"> <div align="center">信息名称:</div></td>
                    <td width="34%" height="25"> <input type="text" name="title" class="inputtext" maxlength="100" size="45" value=<?=$data[title]?>>
                    </td>

                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="25" colspan="6"><div align="left">信息内容</div></td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td height="300" colspan="6"> <textarea id="content_1" name="content" cols="100" rows="8" style="width:550px;height:300px;"><?php echo $data[content]?></textarea>
                    </td>
                  </tr>
                  <tr bgcolor="#ECF5FF">
                    <td colspan="6"> <div align="center">
                        <input name="submit" type="submit" value="确定">
                        &nbsp;
                        <input name="reset" type="reset" value="取消">
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

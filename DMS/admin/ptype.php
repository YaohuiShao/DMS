<?php
session_start();
require "../conn.php";

if($act=="del")
{
$sql="delete from ptype where id=$id";
$result=mysql_query($sql);

}
if($id!="")
{
	$sql="select * from ptype where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>类别管理</title><script language=javascript>
function ConfirmDel()
{
   if(confirm("确定要删除此记录吗？"))
     return true;
   else
     return false;
}
</script>
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

</head>


<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="862" align="center" valign="top">
      <br>

      <table width="556" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td width="550" height="25" class="back_southidc">
             类别管理</td>
        </tr>
        <tr>
          <td height="66">
            <div align="center">
              <table width="100%" height="62" border="0" align="center" cellpadding="0" cellspacing="1" class="tang_southidc">
                <tr bgcolor="#ECF5FF" class="title">
                  <td width="78" align="center"><strong>序号</strong></td>

                  <td width="265" height="29" align="center"><strong>类别名称</strong></td>
                  <td width="108" align="center"><strong> 操作</strong></td>
                </tr>
<?php
$sql="select * from ptype order by id DESC";
$result=mysql_query($sql);
$i=0;
while($d=mysql_fetch_array($result))
{
	$i++;
?>
                <tr class="tdbg">
                  <td align="center" bgcolor="#ECF5FF"><?php echo $i;?></td>

                  <td height="28" align="center" bgcolor="#ECF5FF"><?php echo $d[name];?></td>
                  <td align="center" bgcolor="#ECF5FF">


                    &nbsp;<a href="?id=<?php echo $d[id]?>&act=edit">修改</a>&nbsp;
                    &nbsp;<a href="?id=<?php echo $d[id]?>&act=del" onClick="return ConfirmDel();">删除</a></td>
                </tr>


<?php
}
	?>

              </table>
            </div></td>
        </tr>
      </table>






<?php
if($act=="save")
{
	if($id=="")
		{
 $sql="insert into ptype (name) values ('$p0')";
 if(mysql_query($sql))
			{
	echo "<script>location.href='ptype.php'</script>";
	 exit;
			}
 else
			{
	 echo "添加失败";
	 exit;
			}
		}
$sql="update ptype set name='$p0' where id=$id";
mysql_query($sql);
	echo "<script>location.href='ptype.php'</script>";
	exit;
}

?><p>

 <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"> <br> <table width="560" border="0" cellpadding="2" cellspacing="1" class="table_southidc">
        <tr>
          <td height="25" class="back_southidc">
            添加/编辑类别</td>
        </tr>
    <form name="form1" method="post" action="?act=save&id=<?php echo $data[id]?>" onSubmit="return chkinput(this)">

    <tr>
      <td ><table width="580" border="0" align="center" cellpadding="0" cellspacing="1">


           <tr>
    <td height="25" bgcolor="#FFFFFF"><div align="right">类别名称</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="text" name="p0" class="inputcss" size="20" value="<?php echo $data[name]?>"></div></td>
          </tr>








      </table>
	  </td>
    </tr>
     <tr>
      <td height="20"><div align="center" ><input type="submit" value="保存" class="buttoncss">&nbsp;</div></td>
    </tr>
	</form>
  </table>
</p>
<p>&nbsp;</p>
</form>
</body>
</html>

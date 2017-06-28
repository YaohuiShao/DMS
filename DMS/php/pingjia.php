<?php
include("header.php");
$ruser=$_SESSION[user_name];
if($act=="save")
{
$sql="insert into pingjia (goodsid,content,ruser,title) values ('$goodsid','$content','$ruser','$title')";
$res=mysql_query($sql);
	if($res)
	{
	echo "<script>alert('评价成功');location.href='pingjia.php?goodsid=$goodsid&cid=$cid';</script>";
	exit;
	}
	else
	{
	exit("失败了");
	}
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>评价</title>
<link href="css/css.css" rel="stylesheet" type="text/css">

</head><table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
 <tr>
    <td height="19" colspan="4" class="tdtitle">
	<div align="center" class="title"> 详情</div></td>
  </tr>
  </table>
 <table width="950" border="0" align="center" cellpadding="5" cellspacing="5">
          <form name="form1" method="post" action="?act=save" onSubmit="javascript:return check();">

		  <tr>
              <td width="10%">标题</td>
              <td width="90%"><label for="content"></label>
              <input name="title" type="text" id="num" size="20" >

			  </td>
            </tr>

            <tr>
              <td width="10%">评价内容：</td>
              <td width="90%"><label for="content"></label>
              <textarea name="content" id="content" cols="45" rows="5"></textarea></td>
            </tr>
            
            <tr>
              <td>&nbsp;</td> <input name="cid" type="hidden" value="<?php echo $cid?>">
                  <input name="goodsid" type="hidden" value="<?php echo $goodsid?>">
              <td><input type="submit" name="button" value="提交" />
               
                </td>
            </tr>
          </form>
        </table>
       
<table width="950" align="center"  border="0" cellpadding="5" cellspacing="5">
<?php
$sql="select * from pingjia where goodsid='$goodsid'";
$res=mysql_query($sql);
 while($d=mysql_fetch_array($res))
 {
?>
            <tr>
              <td width="10%">评价内容：</td>
              <td width="90%"><font color="#FF0000"><?php echo $d[content]?></font><br><br>评价时间:<?php echo $d[addtime]?></td>
            </tr>
            
            
         <?php
		 }
		 ?>
        </table>
<?php
session_start();
include("../conn.php");
if($act=="del")
{
$sql="delete from shenqing where id=$id";
	$result=mysql_query($sql);
	if($result)
	{
		echo "<script>alert('删除成功');location.href='shou.php';</script>";
		exit;
	}
}if($act=="shenhe")
{
	$sql="update shenqing set s=$s where id=$id";
	//echo $sql;
	mysql_query($sql);
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>列表</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">

 <tr align="center" bgcolor="#aec3de">
          <td colspan="18"  class="optiontitle">
		  <form id="form1" name="form1" method="post" action="">
          
          关键字
              <input type="text" name="ruser" id="name" />
            <input type="submit" name="button" id="button" value="查询" />
          </form>  </td>
        </tr>

<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">物品名称</td>
	<td class="optiontitle">数量</td>
	<td class="optiontitle">接收人</td>
	<td class="optiontitle">日期</td>
	<td class="optiontitle">原因</td>
	<td class="optiontitle">审核状态</td>
	<td class="optiontitle">操作</td></tr>
<?php
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
$where=" where s=1";
if($ruser!="")
$where.=" and ruser='$ruser'";
$sql="select * from `shenqing` $where order by id DESC";
 $result=mysql_query($sql);
 $count = mysql_num_rows($result);
$size =5;

$pager = get_pager('shou.php',array(),$count,$page,$size);
$sql="select * from `shenqing` $where  order by id  DESC";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{if($data[s]==0){
		$a="<font color=red>未审核</font>";
				$d="<a href=?act=shenhe&s=1&id=$data[id]>审核通过</a>";

	}
	else{
		$a="<font color=green>已审核</font>";
		$d="<a href=?act=shenhe&s=0&id=$data[id]>取消通过</a>";

	}
?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo get_name($data["goodsid"],"goods")?></td>
<td height="25"><?php echo $data["num"]?></td>
<td height="25"><?php echo $data["ruser"]?></td>
<td height="25"><?php echo $data["w_date"]?></td>
<td height="25"><?php echo $data["content"]?></td>
<td height="25"><?php echo $a?></td>

<td height="25"><?php echo $d?>
|<a href="?act=del&id=<?php echo $data[id]?>" onClick="return confirm('您确定要删除吗?')">删除</a></td> 
</tr>
<?php
}
?><tr align="center" bgcolor="#F2FDFF">
   <td colspan="8"  class="optiontitle">&nbsp;<?php require("../page.php") ?></td>
  </tr>
</table>

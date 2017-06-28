<?php
require("header.php");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>列表</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">

 <tr align="center" bgcolor="#aec3de">
          <td colspan="18"  class="optiontitle">
		  <form id="form1" name="form1" method="post" action="">
          
          关键字
              <input type="text" name="name" id="name" />
            <input type="submit" name="button" id="button" value="查询" />
          </form>  </td>
        </tr>

<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">物品名称</td>
	<td class="optiontitle">物品类别</td>
	<td class="optiontitle">时间</td>
	


<?php
$where=" where s=1";
if($name!="")
$where.=" and name ='$name'";
$sql="select * from `goods` $where  order by id  DESC";
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
?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo $data["name"]?></td>
<td height="25"><?php echo $data["ptype"]?></td>
<td height="25"><?php echo $data["addtime"]?></td>

</tr>
<?php
}
?>
</table>
<div align=center><a href='index.php'>返回</a></div>

<?php
include("./header.php");

?>

<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">



<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">物品名称</td>
	<td class="optiontitle">物品类别</td>
	<td class="optiontitle">数量</td>
	
	<td class="optiontitle">查看</td></tr>
<?php
$page = empty($_REQUEST['page']) ? '1' : intval($_REQUEST['page']);
$where=" where s=1";
$where.=" and num>=1";
if($name!="")
$where.=" and name ='$name'";

$sql="select * from `goods` $where order by id DESC";
 $result=mysql_query($sql);
 $count = mysql_num_rows($result);
$size =5;

$pager = get_pager('goodslist.php',array(),$count,$page,$size);

$sql="select * from `goods` $where  order by id  DESC limit $pager[start],$pager[size]";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{

?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo $data["name"]?></td>
<td height="25"><?php echo $data["ptype"]?></td>
<td height="25"><?php echo $data["num"]?></td>

<td height="25"> <a href="view.php?id=<?php echo $data[id]?>" >查看</a></td>
</tr>
<?php
}
?> <tr align="center" bgcolor="#F2FDFF">
   <td colspan="8"  class="optiontitle">&nbsp;<?php require("./page.php") ?></td>
  </tr>
</table>
<div align=center><a href='index.php'>返回</a></div>
<?php require ("footer.php"); ?>

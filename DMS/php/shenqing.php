<?php
session_start();
include("./header.php");

?>

<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">



<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">��Ʒ����</td>
	<td class="optiontitle">��������</td>
	<td class="optiontitle">����</td>
		<td class="optiontitle">�����û�</td>	

	<td class="optiontitle">�����û�</td>	

	<td class="optiontitle">�鿴</td></tr>
<?php
$where=" where s=1";
if($name!="")
$where.=" and name ='$name'";
$sql="select * from `shenqing` $where  order by id  DESC limit 0,3";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{

?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo get_name($data["goodsid"],"goods")?></td>
<td height="25"><?php echo $data["w_date"]?></td>
<td height="25"><?php echo $data["num"]?></td>
<td height="25"><?php echo $data["duser"]?></td>

<td height="25"><?php echo $data["ruser"]?></td>


<td height="25"> <a href="rview.php?id=<?php echo $data[id]?>" >�鿴</a></td>
</tr>

<?php
}
?>
</table>

<?php require ("footer.php"); ?>

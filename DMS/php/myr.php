<?php
include("./header.php");

?>

<table width="950"  border="0" align="center" cellpadding="4" cellspacing="1" class="table_big">



<tr align="center" bgcolor="#F2FDFF"><td class="optiontitle">��Ʒ����</td>

	<td class="optiontitle">��������</td>
	<td class="optiontitle">����</td>
	
	<td class="optiontitle">�Ƿ����</td>	

	<td class="optiontitle">����</td>
	</tr>
<?php
$where=" where ruser='$_SESSION[login]'";
if($name!="")
$where.=" and name ='$name'";
$sql="select * from `shenqing` $where  order by id  DESC limit 0,3";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{if($data[s]==0){
		$a="<font color=red>��</font>";
				$d="<a href=?act=shenhe&s=1&id=$data[id]>���ͨ��</a>";

	}
	else{
		$a="<font color=green>��</font>";
		$d="<a href=?act=shenhe&s=0&id=$data[id]>ȡ��ͨ��</a>";

	}

?><tr align="center" bgcolor="#FFFFFF" onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'><td height="25"><?php echo get_name($data["goodsid"],"goods")?></td>
<td height="25"><?php echo $data["w_date"]?></td>
<td height="25"><?php echo $data["num"]?></td>


<td height="25"><?php echo $a?></td>

<td height="25"> <a href="pingjia.php?goodsid=<?php echo $data["goodsid"]?>" >��Ҫ����</a></td>
</tr>

<?php
}
?>
</table>
<div align=center><a href='index.php'>����</a></div>
<?php require ("footer.php"); ?>

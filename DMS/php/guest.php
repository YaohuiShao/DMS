<?php
require_once 'header.php';

if($_SESSION[user_name]=="")
{
	
echo "<script>alert('���ȵ�¼');location.href='index.php';</script>";
	exit;
}
if($_SESSION[login_t]=="ruser")
{
	
echo "<script>alert('�����û����ܿ���������');location.href='index.php';</script>";
	exit;
}

if($act=="save")
{
	if($title=="" || $content=="")
	{
	echo "<script>alert('����,����,����Ϊ��');history.back();</script>";
	exit;
	}
	$kdate=date("Y-m-d");
$sql="insert into guest(title,content,userid,addtime) values ('$title','$content','$_SESSION[user_name]','$kdate')";
$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('�ɹ�,��ȴ��ظ�');location.href='guest.php';</script>";
	exit;
	}
	else

	exit("ʧ����");

	}

?>


<form id="form1" method="post" action="?act=save">

<table width="950" border="1" cellpadding="0" align="center" cellspacing="0"  style="border-collapse:collapse;">
				  <tr>
				    <td width="34%" align="right">����</td>
				    <td width="66%" align="left">

				        <label for="title"></label>
				        <input type="text" name="title" id="title" size=30 />

			        </td>
			      </tr>
			
				  <tr>
				    <td align="right">����</td>
				    <td align="left"><label for="content1"></label>
			        <textarea name="content" id="content1" cols="45" rows="5" ></textarea></td>
			      </tr>
				  <tr>
				    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="�ύ" /></td>
			      </tr>
		      </table>
			</form><br>
				<table width="950" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#2587CC" style="border-collapse:collapse;">
				
                  <?php
				  $sql="select * from guest  order by id DESC";
				  $res=mysql_query($sql);
				  while($d=mysql_fetch_array($res))
				  {
				  ?>
				  <tr>
				    <td width="35%" height="30" align="center">��ѯ����:</td>
				    <td width="65%" align="left"> <font color="blue" size="4"><?php echo $d[title]?></td>
			      </tr>
				  <tr>
				    <td height="50" align="center">��ѯ����:</td>
				    <td height="50" align="left"> <?php echo $d[content]?><br><br>ʱ��:<?php echo $d[addtime]?></td>
			      </tr>
                  <?php
				  if($d[replay]!="")
				  {
				  ?>
				  <tr bgcolor="#FFFFFF">
				    <td align="right">����ظ�:</td>
				    <td align="left"><font color="red" size="3"><br><?php echo $d[replay]?><br><br><?php echo $d[rtime]?></font></td>
			      </tr>
                  <?php
				  }
				  ?>
				  <tr>
				    <td colspan="2" align="right">&nbsp;</td>
			      </tr>
                  <?php
                  }
				  ?>
	          </table>
</div>
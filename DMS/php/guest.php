<?php
require_once 'header.php';

if($_SESSION[user_name]=="")
{
	
echo "<script>alert('请先登录');location.href='index.php';</script>";
	exit;
}
if($_SESSION[login_t]=="ruser")
{
	
echo "<script>alert('受赠用户不能看在线留言');location.href='index.php';</script>";
	exit;
}

if($act=="save")
{
	if($title=="" || $content=="")
	{
	echo "<script>alert('标题,内容,不能为空');history.back();</script>";
	exit;
	}
	$kdate=date("Y-m-d");
$sql="insert into guest(title,content,userid,addtime) values ('$title','$content','$_SESSION[user_name]','$kdate')";
$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('成功,请等待回复');location.href='guest.php';</script>";
	exit;
	}
	else

	exit("失败了");

	}

?>


<form id="form1" method="post" action="?act=save">

<table width="950" border="1" cellpadding="0" align="center" cellspacing="0"  style="border-collapse:collapse;">
				  <tr>
				    <td width="34%" align="right">标题</td>
				    <td width="66%" align="left">

				        <label for="title"></label>
				        <input type="text" name="title" id="title" size=30 />

			        </td>
			      </tr>
			
				  <tr>
				    <td align="right">内容</td>
				    <td align="left"><label for="content1"></label>
			        <textarea name="content" id="content1" cols="45" rows="5" ></textarea></td>
			      </tr>
				  <tr>
				    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交" /></td>
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
				    <td width="35%" height="30" align="center">咨询标题:</td>
				    <td width="65%" align="left"> <font color="blue" size="4"><?php echo $d[title]?></td>
			      </tr>
				  <tr>
				    <td height="50" align="center">咨询内容:</td>
				    <td height="50" align="left"> <?php echo $d[content]?><br><br>时间:<?php echo $d[addtime]?></td>
			      </tr>
                  <?php
				  if($d[replay]!="")
				  {
				  ?>
				  <tr bgcolor="#FFFFFF">
				    <td align="right">管理回复:</td>
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
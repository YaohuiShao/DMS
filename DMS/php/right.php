<!-- �ұߵ��û���¼�����ԡ�ͶƱ -->
			<div class="page_other_msg right">
				<div class="left_row">
					<div class="list">
						<div class="list_bar">
							�û���¼
						</div>
						<div class="list_content">
							<div id="div">








<?php
if($_SESSION[login]=="")
{
?>
<form action="login.php?act=login" name="userLogin" method="post" onSubmit="return login()">
			      <table cellspacing="0" cellpadding="0" width="98%" align="center" border="0">
			          <tr>
			            <td align="center" colspan="2" height="10"></td>
			          </tr>
			          <tr>
			            <td align="right" width="31%" height="30" style="font-size: 11px;">�û�����</td>
			            <td align="left" width="69%"><input class="input" id="username" title="�û�������Ϊ��" size="16" name="uname" type="text" /></td>
			          </tr>
			          <tr>
			            <td align="right" height="30" style="font-size: 11px;">�ܡ��룺</td>
			            <td align="left"><input class="input" title="���벻��Ϊ��" type="password" size="16" name="pwd"/></td>
			          </tr>
                       <tr>
			            <td align="right" height="30" style="font-size: 11px;">ѡ����ݣ�</td>
			            <td align="left"><label for="table"></label>
			              <select name="table" id="table">
			                <option value="duser">�����û�</option>
			                <option value="ruser">�����û�</option>
                         </select></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="10"><font color="red"></font></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="30">
			               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			               <input type="submit" value="��  ¼"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />
						   &nbsp;
						   
			            </td>
			          </tr>
			      </table>
		    </form>
<?php
							   }
						   else
						   {
							   ?>

		        <br/>
			     ��ӭ����<?php echo $_SESSION[login]?>  &nbsp;&nbsp;&nbsp;&nbsp;
			    <br/> <br/>
				<?php
				if($_SESSION[login_t]=="duser")
							   {
				?>
				<a href="./myd.php">�ҵľ���</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./goodsadd.php">��Ҫ����</a>
				<br/><br/><a href="./dchange.php">�޸���Ϣ</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
							   }
				else
				{
					?>
					<a href="./myr.php">�ҵ�����</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./goodslist.php">��������</a>
					<br/><br/><a href="./memberAdd.php">�޸���Ϣ</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php

				}
				?>
				 
			    <a href="./logout.php">��ȫ�˳�</a><br/>

<?php
	}
	?>
							</div>
						</div>
					</div>
				</div>

				<div class="left_row">
				    <div class="list">
				        <div class="list_bar"><span style="float:left">�����б�</span>
							 <span style="float:right"><a href="plist.php">����</a></span></div>
				        <div class="list_content">
				            <div id="div">
				                   <div style="overflow:hidden;height:150px;">
							             <div id="roll-orig-1607838439">




		 <table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php
						$sql="select * from pingjia order by id DESC limit 0,6";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
						?>
		          <tr><td height="28" id="roll-line-1607838439" width="100%"><div class="" style="padding:2px 0px;"><div class="f-left">. <a href="pview.php?id=<?php echo $data[id]?>" title=""><span style=""><?php echo $data[title]?></span></a></div><div class="clear"></div></div></td></tr>
<?php
							}
							?>
		 </table>
	</body>
</html>

							             </div>
						                 <div id="roll-copy-1607838439"></div>
				                   </div>
					        </div>
					    </div>
				    </div>
				</div>
			</div>
			<div style="clear: both"></div>
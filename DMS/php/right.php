<!-- 右边的用户登录。留言。投票 -->
			<div class="page_other_msg right">
				<div class="left_row">
					<div class="list">
						<div class="list_bar">
							用户登录
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
			            <td align="right" width="31%" height="30" style="font-size: 11px;">用户名：</td>
			            <td align="left" width="69%"><input class="input" id="username" title="用户名不能为空" size="16" name="uname" type="text" /></td>
			          </tr>
			          <tr>
			            <td align="right" height="30" style="font-size: 11px;">密　码：</td>
			            <td align="left"><input class="input" title="密码不能为空" type="password" size="16" name="pwd"/></td>
			          </tr>
                       <tr>
			            <td align="right" height="30" style="font-size: 11px;">选择身份：</td>
			            <td align="left"><label for="table"></label>
			              <select name="table" id="table">
			                <option value="duser">捐赠用户</option>
			                <option value="ruser">受赠用户</option>
                         </select></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="10"><font color="red"></font></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="30">
			               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			               <input type="submit" value="登  录"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />
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
			     欢迎您：<?php echo $_SESSION[login]?>  &nbsp;&nbsp;&nbsp;&nbsp;
			    <br/> <br/>
				<?php
				if($_SESSION[login_t]=="duser")
							   {
				?>
				<a href="./myd.php">我的捐赠</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./goodsadd.php">我要捐赠</a>
				<br/><br/><a href="./dchange.php">修改信息</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
							   }
				else
				{
					?>
					<a href="./myr.php">我的受赠</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./goodslist.php">申请受赠</a>
					<br/><br/><a href="./memberAdd.php">修改信息</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php

				}
				?>
				 
			    <a href="./logout.php">安全退出</a><br/>

<?php
	}
	?>
							</div>
						</div>
					</div>
				</div>

				<div class="left_row">
				    <div class="list">
				        <div class="list_bar"><span style="float:left">评价列表</span>
							 <span style="float:right"><a href="plist.php">更多</a></span></div>
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
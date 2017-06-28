<?php
require("header.php");
$sql="select * from pingjia where id=$id";
$res=mysql_query($sql);
$look=mysql_fetch_array($res)
?>
<div align="center" style="padding-left:20px"><table width="950" border="0" align="center" cellpadding="0" cellspacing="0" align="middle">
                <!--DWLayoutTable-->

                <tr>
                  <td height="30" colspan="2" align="center" valign="middle"><h3>受赠物品:<?php echo get_name($look["goodsid"],"goods")?></h3></td>
                </tr>



              </table></td>
          </tr>
          <tr>
            <td height="61" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="707" height="6"></td>
                </tr>
                        </table></td>
          </tr>
          <tr>
            <td height="62" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="707" height="7"></td>
                </tr>
                                                </table></td>
          </tr>
		            <tr>
            <td height="61" valign="top"><table width="950" align="middle" border="0" cellpadding="0" cellspacing="0">
                <!--DWLayoutTable-->
                <tr>
                  <td height="30" colspan="2" align="left" valign="middle"><h3>评价标题:<?=$look[title]?></h3></td>
                </tr>
                <tr>
                  <td height="25" align="left" valign="middle" class="style9">评价内容:<?=$look[content]?></td>
                </tr>
                <tr>
                  <td height="6"></td>
                </tr>
            </table></td>
          </tr>
      </table>
	  <div align=center><a href='index.php'>返回</a></div>
	  </div><?
require("footer.php");
?>
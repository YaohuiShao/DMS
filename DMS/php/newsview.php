<?php
require("header.php");
$sql="select * from news where id=$id";
$res=mysql_query($sql);
$look=mysql_fetch_array($res)
?>
<div align="center" style="padding-left:20px"><table width="950" border="0" align="center" cellpadding="0" cellspacing="0" align="middle">
                <!--DWLayoutTable-->

                <tr>
                  <td height="30" colspan="2" align="center" valign="middle"><h3><?=$look[title]?></h3></td>
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
                  <td height="25" align="left" valign="middle" class="style9"><?=$look[content]?></td>
                </tr>
                <tr>
                  <td height="6"></td>
                </tr>
            </table></td>
          </tr>
      </table></div>
	  <div align=center><a href='index.php'>·µ»Ø</a></div>
<?
require("footer.php");
?>
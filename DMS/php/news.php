<?php
require("header.php");?>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0" align="middle">  
<tr align="center" class="list_bar">
    <td width="681">���ű���</td>
    <td width="159">�鿴</td>
  </tr>
  <?
   $sql1=mysql_query("select * from news order by id desc",$conn);
   while($data=mysql_fetch_array($sql1))
   {
   ?>
  <tr align="center" >
    <td><?=$data[title]?></td>
    <td><a href="newsview.php?id=<?=$data[id]?>">�鿴����</a></td>
  </tr>
  <?
   }
  ?>
</table>
<p>&nbsp;</p>
<div align=center><a href='index.php'>����</a></div>
<?php require ("footer.php"); ?>

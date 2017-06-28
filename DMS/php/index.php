<?php
require("header.php");
?>
<div class="page_row">
<!--左边的 -->
<div class="page_main_msg left"> 
 
  <div class="left_row">
    <div class="list pic_news">
      <div class="list_bar"> <span style="float:left">新闻资讯</span> <span style="float:right"><a href="news.php">更多</a></span> </div>
      <div id="tw" class="list_content">
        <div style="width:100%;overflow:hidden;white-space:nowrap;">
         <table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php
						$sql="select * from news order by id DESC limit 0,10";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
						?>
		          <tr><td height="28" id="roll-line-1607838439" width="100%"><div class="" style="padding:2px 0px;"><div class="f-left">. <a href="./newsview.php?id=<?php echo $data[id]?>" title=""><span style=""><?php echo $data[title]?></span></a></div><?php echo $data[addtime]?><div class="clear"></div></div></td></tr>
<?php
							}
							?>
		 </table>

        </div>
      </div>
    </div>
  </div>
 

 


</div>

<!--左边的 -->

<?php

			require("right.php");
			?>

<!-- 右边的用户登录。留言。投票 -->
</div>

<?php
require("footer.php");
?>

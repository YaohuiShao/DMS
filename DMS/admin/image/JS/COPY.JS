// 自动 COPY 代码开始
function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}
function JM_cc(ob){
	var obj=MM_findObj(ob); if (obj) { 
	obj.select();js=obj.createTextRange();js.execCommand("Copy");}
	alert("复制成功，请粘贴到下面编辑器要分页的地方！");
}

// 自动 COPY 代码结束
document.write ('<input name="page_url" disabled  style="BORDER-RIGHT: #665b8e 1px solid; PADDING-RIGHT: 1px; BORDER-TOP: #665b8e 1px solid; PADDING-LEFT: 1px; PADDING-BOTTOM: 1px; BORDER-LEFT: #665b8e 1px solid; CURSOR: text; COLOR: #333333; PADDING-TOP: 1px; BORDER-BOTTOM: #665b8e 1px solid" onmouseover="this.focus()" onfocus="this.select()" value="[NextPage]" size="10"> ');
document.write ('<input style="BORDER-RIGHT: #a2a2a2 1px solid; BORDER-TOP: #ffffff 1px solid; FONT-SIZE: 12px; BORDER-LEFT: #ffffff 1px solid; WIDTH: 71px; COLOR: #333333; BORDER-BOTTOM: #a2a2a2 1px solid; HEIGHT: 19px; BACKGROUND-COLOR: #eeeeee" type="button" name="Button" class="button1" value="点这里复制" onClick=JM_cc("page_url")>');


document.body.onmousemove=quickalt;
document.body.onmouseover=getalt;
document.body.onmouseout=restorealt;
var tempalt='';

function getalt(){
 if(event.srcElement.title && (event.srcElement.title!='' || (event.srcElement.title=='' && tempalt!=''))){
  altlayer.style.left=document.body.scrollLeft+event.clientX;
  altlayer.style.top=document.body.scrollTop+event.clientY;
  altlayer.style.display='';
  tempalt=event.srcElement.title;
  tempbg=event.srcElement.altbg;
  tempcolor=event.srcElement.altcolor;
  tempborder=event.srcElement.altborder;
  event.srcElement.title='';
  altlayer.innerHTML=tempalt;
  if (typeof(tempbg)!="undefined"){altlayer.style.background=tempbg}else{altlayer.style.background="infobackground"}
  if (typeof(tempcolor)!="undefined"){altlayer.style.color=tempcolor}else{altlayer.style.color=tempcolor="infotext"}
  if (typeof(tempborder)!="undefined"){altlayer.style.border='1px solid '+tempborder;}else{altlayer.style.border='1px solid #000000';}
 }
}
function quickalt(){
 if(altlayer.style.display==''){
  altlayer.style.left=document.body.scrollLeft+event.clientX;
  altlayer.style.top=document.body.scrollTop+event.clientY;
 }
}
function restorealt(){
 event.srcElement.title=tempalt;
 tempalt='';
 altlayer.style.display='none';
}
//用在文字上显示查询出的图片时,在调用页加
//<div style="display:none;border:1px solid #000000;background-color:#FFFFCC;font-size:12px;position:absolute;padding:2;" id=altlayer></div>
//例如:
/*
<span title="<marquee style='width:100px;'>www.51windows.net</marquee>" altbg="red" altcolor="yellow" altborder="yellow">滚动字幕</span><br><br>
<span title="<img src='/web/UploadFiles_1001/200604/20060413182849860.gif' border='0'>" altbg="#F7F7F7" altcolor="#999999" altborder="#CCCCCC">图片</span><br><br>
<span title="<i style='font-size:24pt;font-family:verdana;'>www.51windows.net</i>" altbg="green" altcolor="yellow" altborder="darkgreen">大字体</span><br><br>
<div style="display:none;border:1px solid #000000;background-color:#FFFFCC;font-size:12px;position:absolute;padding:2;" id=altlayer></div>
*/

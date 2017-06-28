function select_time(st_obj)
{
  var showx=event.screenX-event.offsetX-14;
  var showy=event.screenY-event.offsetY-168;
  var retval=window.showModalDialog("html_data.asp?"+st_obj.value,"","dialogWidth:197px; dialogHeight:210px; dialogLeft:"+showx+"px; dialogTop:"+showy+"px; status:no; directories:yes;scrollbars:no;Resizable=no;");
  if( retval!=null ) { st_obj.value=retval; }
  //else { }
}
<?php
error_reporting(E_ALL ^ E_NOTICE);//����������
$mysql_server_name='localhost'; //���ݿ������
$mysql_username='root'; //���ݿ��û���
$mysql_password=''; //���ݿ�����
$mysql_database='mm_donate'; //���ݿ���
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("���ݿ�����ʧ��");//����mysql���ݿ������
mysql_query("set names gbk");//�������ݿ����
mysql_select_db($mysql_database,$conn);//ѡ�����ݿ�
//�����ϴ�·��
/* ȡ�ø�Ŀ¼ */
define('SYS_ROOT', str_replace("\\", '/', dirname(__FILE__)));
define('IMG_ROOT', SYS_ROOT."/upload/");
define('File_ROOT', SYS_ROOT."/upload/");
function write_log($name,$content)
{
$sql="insert into admin_log (name,content) values('$name','$content')";
		mysql_query($sql);
}
//��ȡ��һ����¼
function getfirst($SQL)
{
	global $GF;
	
	$GFRES = mysql_query($SQL);
	$GF = @mysql_fetch_array($GFRES);
	return $GF;
} 

function getcount($sql){
	global $RC;
	$res = mysql_query($sql);
	$RC = mysql_num_rows($res);
}

function get_name($id,$table)
{
	$sql="select * from $table where id=$id";
	$r=mysql_query($sql);
	$rows=mysql_fetch_array($r);

	return $rows[name];
}
//�����ϴ�Ŀ¼
function RecursiveMkdir($path) {
	if (!file_exists($path)) {
		RecursiveMkdir(dirname($path));
		@mkdir($path, 0777);
	}
}//��ȡ�ļ���׺��
function get_extend($file_name)
{
$extend = pathinfo($file_name);
$extend = strtolower($extend["extension"]);
return $extend;
}
//�ļ��ϴ�ʵ��
@extract($_POST);
@extract($_GET);

function upload_file($inputname, $file=null)
{
	$year = date('Y'); $day = date('md');
	$z = $_FILES[$inputname];
	//print_r($z);
	//exit;
	if($file==null)
	{

	$file_ext=get_extend($z['name']);
//echo $file_ext;
//exit;

	}
	$n = time().rand(1000,9999).".".$file_ext;
	if ($z &&  $z['error']==0) {
		if (!$file) {
			RecursiveMkdir( File_ROOT . '/' . "{$year}/{$day}" );
			$file = "{$year}/{$day}/{$n}";
			$path = File_ROOT . '/' . $file;

		} else {
			RecursiveMkdir( dirname(File_ROOT.'/' .$file) );
			$path = File_ROOT . '/' .$file;
		}
//echo $path ;


			move_uploaded_file($z['tmp_name'], $path);

		//echo $file;exit;
		return $file;
	}
	return $file;
}
//�ϴ�ͼƬ
function upload_image($inputname, $image=null, $type='upimages', $width=440) {
	$file_type = explode(".", $_FILES[$inputname]['name']);
	$suffix = $file_type[count($file_type) - 1];
	$n = date('YmdHis') . "." . $suffix;
	$z = $_FILES[$inputname];
	if ($z && $z['error'] == 0)
	{
		if (!$file)
		{
			RecursiveMkdir(IMG_ROOT . '/' . "{$type}/");
			$file = "{$type}/{$n}";
			$path = IMG_ROOT . '/' . $file;
		}
		else
		{
			RecursiveMkdir(dirname(IMG_ROOT . '/' . $file));
			$path = IMG_ROOT . '/' . $file;
		}
		move_uploaded_file($z['tmp_name'], $path);
		return $file;
	}
	return $file;
}
//��ҳ����.
function get_pager($url, $param, $count, $page = 1, $size = 10)
{
    $size = intval($size);
    if($size < 1)$size = 10;
    $page = intval($page);
    if($page < 1)$page = 1;
    $count = intval($count);

    $page_count = $count > 0 ? intval(ceil($count / $size)) : 1;
    if ($page > $page_count)$page = $page_count;

    $page_prev  = ($page > 1) ? $page - 1 : 1;
    $page_next  = ($page < $page_count) ? $page + 1 : $page_count;

    $param_url = '?';
    foreach ($param as $key => $value)$param_url .= $key . '=' . $value . '&';

    $pager['url']        = $url;
    $pager['start']      = ($page-1) * $size;
    $pager['page']       = $page;
    $pager['size']       = $size;
    $pager['count']		 = $count;
    $pager['page_count'] = $page_count;

	if($page_count <= '1')
	{
	    $pager['first'] = $pager['prev']  = $pager['next']  = $pager['last']  = '';
	}
	else
	{
		if($page == $page_count)
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = '';
			$pager['last']  = '';
		}
		elseif($page_prev == '1' && $page == '1')
		{
			$pager['first'] = '';
			$pager['prev']  = '';
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
		else
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
	}
    return $pager;
}
// ��ȡ�ַ�����,֧������
function cnsubstr($sourcestr,$cutlength)
{
   $returnstr='';
   $i=0;
   $n=0;
   $str_length=strlen($sourcestr);
   while (($n<$cutlength) and ($i<=$str_length))
   {
      $temp_str=substr($sourcestr,$i,1);
      $ascnum=Ord($temp_str);
      if ($ascnum>=224)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,3);
         $i=$i+3;
         $n++;
      }
      elseif ($ascnum>=192)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,2);
         $i=$i+2;
         $n++;
      }
      elseif ($ascnum>=65 && $ascnum<=90)
      {
         $returnstr=$returnstr.substr($sourcestr,$i,1);
         $i=$i+1;
         $n++;
      }
      else
      {
         $returnstr=$returnstr.substr($sourcestr,$i,1);
         $i=$i+1;
         $n=$n+0.5;
      }
   }
         if ($str_length/3>$cutlength){
          $returnstr = $returnstr . "...";
      }
    return $returnstr;
}
?>
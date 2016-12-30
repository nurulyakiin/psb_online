<?
$id		= @$_GET['id'];
$act 	= @$_GET['act'];
if ($act=='aktif'){
		$a = $_GET['a'];
		if($a == 'N'){
			$a = 'Y';
		}
		else{
			$a = 'N';
		}
	mysql_query("UPDATE psb_menu SET aktif = '$a' WHERE main_id= '$id'");
	include "js/back.js";
}
?>
<?
$id		= @$_GET['id'];
$act 	= @$_GET['act'];
if ($act=='enb'){
	$b = $_GET['b'];
	if($b == '0'){
		$b = '1';
	}
	else{
		$b = '0';
	}
	mysql_query("UPDATE psb_admin SET isenable = '$b' WHERE admin_id='$id'");
	include 'js/back.js';
}

elseif ($act=='del'){
		mysql_query("DELETE FROM psb_admin WHERE admin_id='$id'");
		include 'js/back.js';
}
?>
<?php
$id		= @$_GET['id'];
$act 	= @$_GET['act'];
if ($act=='v_edit'){
		$v = $_GET['v'];
		if($v == '0'){
			$v = '1';
		}
		else{
			$v = '0';
		}
	mysql_query("UPDATE ppdb_adm_siswa SET sts_verifikasi = '$v' WHERE adm_id='$id'");
	include 'js/back.js';
}
elseif ($act=='s_edit'){
		$s = $_GET['s'];
		if($s == '0'){
			$s = '1';
		}
		else{
			$s = '0';
		}
	mysql_query("UPDATE ppdb_adm_siswa SET sts_seleksi = '$s' WHERE adm_id='$id'");
	include "js/back.js";
}
elseif ($act=='del'){
	mysql_query("DELETE FROM psb_pendidikan WHERE id_pendidikan='$id'");
	include 'js/back.js';
}
?>
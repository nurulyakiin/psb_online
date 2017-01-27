<?php
include '../../config/koneksi.php';
if($_POST['nopes']){
	$sql = mysql_query("SELECT * FROM psb_formulir WHERE no_peserta='$_POST[nopes]'");
	$ketemu = mysql_num_rows($sql); 
	echo $ketemu;
}
?>
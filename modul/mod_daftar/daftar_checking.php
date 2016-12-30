<?php
include '../../config/koneksi.php';
if($_POST['nisn']){
	$sql = mysql_query("select * from psb_formulir where nisn='$_POST[nisn]'");
	$ketemu = mysql_num_rows($sql); 
	echo $ketemu;
}
?>
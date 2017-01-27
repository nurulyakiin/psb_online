<?php
include '../../config/koneksi.php';
if($_POST['nisn']){
	$sql = mysql_query("SELECT * FROM psb_formulir WHERE nisn='$_POST[nisn]'");
	$ketemu = mysql_num_rows($sql); 
	echo $ketemu;
}
?>
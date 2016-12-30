<?php
include '../../config/koneksi.php';
if($_POST['noform']){
	$sql = mysql_query("select * from psb_formulir where no_formulir='$_POST[noform]'");
	$ketemu = mysql_num_rows($sql); 
	echo $ketemu;
}
?>
<?php
include '../../../../config/koneksi.php';

$nisn			= $_POST['nisn'];
$status			= $_POST['status'];

$input = mysql_query("UPDATE psb_formulir SET 
						sts_verifikasi='$status' WHERE nisn='$nisn'");

	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

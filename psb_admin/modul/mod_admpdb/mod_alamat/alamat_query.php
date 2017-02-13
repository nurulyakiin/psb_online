<?php
include '../../../../config/koneksi.php';

$id_tempattinggal  	= $_POST['id_tempattinggal'];
$tempat  	= $_POST['tempat'];
$jarak  	= $_POST['jarak'];
$kendar  	= $_POST['kendar'];
$ref  		= $_POST['ref'];

$input = mysql_query("UPDATE psb_tempattinggal SET 
						tinggal_dengan='$tempat',
						jarak='$jarak',
						berangkat_dengan='$kendar',
						referensi='$ref' WHERE id_tempattinggal='$id_tempattinggal'");
	if($input && $input1){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

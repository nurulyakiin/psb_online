<?php
include '../../../../config/koneksi.php';

$id_pendidikan  	= $_POST['id_pendidikan'];
$asal  	= $_POST['asal'];
$sttb  	= $_POST['sttb'];
$lama  	= $_POST['lama'];
$tgl  	= $_POST['tgl'];

$input = mysql_query("UPDATE psb_pendidikan SET 
						asal_sekolah='$asal',
						tanggal_sttb='$sttb',
						lama_belajar='$lama',
						tanggal_diterima='$tgl' WHERE id_pendidikan='$id_pendidikan'");
	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

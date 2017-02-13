<?php
include '../../../../config/koneksi.php';

$id_wali  	= $_POST['id_wali'];
$nmwali  				= $_POST['nmwali'];
$alamat  				= $_POST['alamat'];
$notelp  				= $_POST['notelp'];
$tmp_lahirwali  		= $_POST['tmp_lahirwali'];
$tgl_lahirwali 			= $_POST['tgl_lahirwali'];
$kerja  				= $_POST['kerja'];

$input = mysql_query("UPDATE psb_wali SET 
						nama_wali='$nmwali',
						alamat_wali='$alamat',
						no_telp='notelp',
						ttl='$$tmp_lahirwali, $tgl_lahirwali',
						pekerjaan='$kerja' WHERE id_wali='$id_wali'");
	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

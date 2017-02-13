<?php
include '../../../../config/koneksi.php';

$id_dataorangtua  	= $_POST['id_dataorangtua'];
$nmayh  				= $_POST['nmayh'];
$nmibu  				= $_POST['nmibu'];
$alamat  				= $_POST['alamat'];
$notelp  				= $_POST['notelp'];
$tmp_lahirayh 			= $_POST['tmp_lahirayh'];
$tgl_lahirayh  			= $_POST['tgl_lahirayh'];
$tmp_lahiribu  			= $_POST['tmp_lahiribu'];
$tgl_lahiribu  			= $_POST['tgl_lahiribu'];
$kerja_ayh  			= $_POST['kerja_ayh'];
$hasil  				= $_POST['hasil'];
$kerja_ibu  			= $_POST['kerja_ibu'];
$pend_ayh  				= $_POST['pend_ayh'];
$pend_ibu  				= $_POST['pend_ibu'];
$agama_ayh  			= $_POST['agama_ayh'];
$agama_ibu  			= $_POST['agama_ibu'];

$input = mysql_query("UPDATE psb_dataorangtua SET 
						nama_ayah='$nmayh',
						nama_ibu='$nmibu',
						alamat='$alamat',
						no_telp='$notelp',
						ttl_ayah='$tmp_lahirayh, $tgl_lahirayh',
						ttl_ibu='$tmp_lahiribu, $tgl_lahiribu',
						pekerjaan_ayah='$kerja_ayh',
						penghasilan='$hasil',
						pekerjaan_ibu='$kerja_ibu',
						pendidikan_ayah='$pend_ayh',
						pendidikan_ibu='$pend_ibu',
						agama_ayah='$agama_ayh',
						agama_ibu='$agama_ibu' WHERE id_dataorangtua='$id_dataorangtua'");
	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

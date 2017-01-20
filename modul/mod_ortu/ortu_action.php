<?
session_start();

include '../../config/koneksi.php';

$id_keterangansiswa  	= $_POST['id_keterangansiswa'];
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


$input = mysql_query("INSERT INTO psb_dataorangtua(id_keterangansiswa, nama_ayah, nama_ibu, alamat, no_telp, ttl_ayah, ttl_ibu, pekerjaan_ayah, penghasilan, pekerjaan_ibu, pendidikan_ayah, pendidikan_ibu, agama_ayah, agama_ibu)
				 	VALUES ('$id_keterangansiswa', '$nmayh', '$nmibu', '$alamat', '$notelp', '$tmp_lahirayh, $tgl_lahirayh' , '$tmp_lahiribu, $tgl_lahiribu', '$kerja_ayh', '$hasil', '$kerja_ibu', '$pend_ayh', '$pend_ibu', '$agama_ayh', '$agama_ibu')");
	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

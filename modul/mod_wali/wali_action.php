<?
session_start();

include '../../config/koneksi.php';

$id_keterangansiswa  	= $_POST['id_keterangansiswa'];
$nmwali  				= $_POST['nmwali'];
$alamat  				= $_POST['alamat'];
$notelp  				= $_POST['notelp'];
$tmp_lahirwali  		= $_POST['tmp_lahirwali'];
$tgl_lahirwali 			= $_POST['tgl_lahirwali'];
$kerja  				= $_POST['kerja'];

// $sql = mysql_query("SELECT * FROM psb_formulir WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
// $row = mysql_fetch_array($sql);

// INSERT INTO `psb_keterangansiswa` (`id_keterangansiswa`, `id_formulir`, `nama_lengkap`, `nama_penggilan`, `nisn`, `tempat_tgllahir`, 
// 	`alamat`, `no_telp`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `riwayat_penyakit`, `kelainan_jasmani`, 
// 	`agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `status_anak`, `bahasa`) 
// VALUES (NULL, '3434', 'dfdf', 'df', '3435', 
// 	'sdfdsf', 'dfd', '3435', 'df', '34', '342', 'dsf', 'dsfds', 'fsdf', 'sdfs', 'dds', '3', '2', 'dxd', 'fd');

$input = mysql_query("INSERT INTO psb_wali(id_keterangansiswa, nama_wali, alamat_wali, no_telp, ttl, pekerjaan)
				 	VALUES ('$id_keterangansiswa', '$nmwali', '$alamat', '$notelp', '$tmp_lahirwali, $tgl_lahirwali', '$kerja')");
// var_dump('$id_keterangansiswa', '$tempat', '$jarak', '$kendar', '$ref');
// exit;

	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

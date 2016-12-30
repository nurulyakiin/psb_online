<?
session_start();

include '../../config/koneksi.php';

$id_keterangansiswa  	= $_POST['id_keterangansiswa'];
$tempat  	= $_POST['tempat'];
$jarak  	= $_POST['jarak'];
$kendar  	= $_POST['kendar'];
$ref  		= $_POST['ref'];

// $sql = mysql_query("SELECT * FROM psb_formulir WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
// $row = mysql_fetch_array($sql);

// INSERT INTO `psb_keterangansiswa` (`id_keterangansiswa`, `id_formulir`, `nama_lengkap`, `nama_penggilan`, `nisn`, `tempat_tgllahir`, 
// 	`alamat`, `no_telp`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `riwayat_penyakit`, `kelainan_jasmani`, 
// 	`agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `status_anak`, `bahasa`) 
// VALUES (NULL, '3434', 'dfdf', 'df', '3435', 
// 	'sdfdsf', 'dfd', '3435', 'df', '34', '342', 'dsf', 'dsfds', 'fsdf', 'sdfs', 'dds', '3', '2', 'dxd', 'fd');

$input = mysql_query("INSERT INTO psb_tempattinggal(id_keterangansiswa, tinggal_dengan, jarak, berangkat_dengan, referensi)
				 	VALUES ('$id_keterangansiswa', '$tempat', '$jarak', '$kendar', '$ref')");
// var_dump('$id_keterangansiswa', '$tempat', '$jarak', '$kendar', '$ref');
// exit;

	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

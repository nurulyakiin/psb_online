<?php
include '../../../../config/koneksi.php';

$isi			= $_POST['isi'];
$aktif			= $_POST['aktif'];
$kelas			= $_POST['kelas'];
$id_keterangansiswa			= $_POST['id_keterangansiswa'];

$input = mysql_query("INSERT INTO psb_jadwalsementara (id_keterangansiswa, jadwal, kelas, aktif) VALUES ('$id_keterangansiswa', '$isi', '$kelas', '$aktif')");

	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

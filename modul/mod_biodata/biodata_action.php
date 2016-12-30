<?
session_start();

include '../../config/koneksi.php';

$id_formulir  	= $_POST['id_formulir'];
$nmlkp  	= $_POST['nmlkp'];
$nmpgl  	= $_POST['nmpgl'];
$nisn  		= $_POST['nisn'];
$tmp_lahir  = $_POST['tmp_lahir'];
$tgl_lahir  = $_POST['tgl_lahir'];
$alamat  	= $_POST['alamat'];
$hp_siswa  	= $_POST['hp_siswa'];
$kelamin  	= $_POST['kelamin'];
$brtbdn  	= $_POST['brtbdn'];
$tgibdn  	= $_POST['tgibdn'];
$goldar  	= $_POST['goldar'];
$pykt  		= $_POST['pykt'];
$jasman  	= $_POST['jasman'];
$agama  	= $_POST['agama'];
$kkn  		= $_POST['kkn'];
$urut_anak  = $_POST['urut_anak'];
$urut_anak1 = $_POST['urut_anak1'];
$status_anak= $_POST['status_anak'];
$bhs  		= $_POST['bhs'];
$seragam  		= $_POST['seragam'];

// $sql = mysql_query("SELECT * FROM psb_formulir WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
// $row = mysql_fetch_array($sql);

// INSERT INTO `psb_keterangansiswa` (`id_keterangansiswa`, `id_formulir`, `nama_lengkap`, `nama_penggilan`, `nisn`, `tempat_tgllahir`, 
// 	`alamat`, `no_telp`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `riwayat_penyakit`, `kelainan_jasmani`, 
// 	`agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `status_anak`, `bahasa`) 
// VALUES (NULL, '3434', 'dfdf', 'df', '3435', 
// 	'sdfdsf', 'dfd', '3435', 'df', '34', '342', 'dsf', 'dsfds', 'fsdf', 'sdfs', 'dds', '3', '2', 'dxd', 'fd');

$input = mysql_query("INSERT INTO psb_keterangansiswa(id_formulir, nama_lengkap, nama_penggilan, nisn, tempat_tgllahir, alamat, 
					no_telp, jenis_kelamin, seragam, berat_badan, tinggi_badan, golongan_darah, riwayat_penyakit, kelainan_jasmani, agama,
					kewarganegaraan, anak_ke, jumlah_saudara, status_anak, bahasa)
				 	VALUES ($id_formulir, '$nmlkp', '$nmpgl', '$nisn', '$tmp_lahir $tgl_lahir', '$alamat', '$hp_siswa', '$kelamin', '$seragam', '$brtbdn', '$tgibdn', '$goldar', '$pykt', '$jasman', '$agama', '$kkn', '$urut_anak', '$urut_anak1', '$status_anak', '$bhs')");


	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

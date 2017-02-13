<?php
include '../../../../config/koneksi.php';

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

$input = mysql_query("UPDATE psb_keterangansiswa SET 
						nama_lengkap='$nmlkp',
						nama_penggilan='$nmpgl',
						nisn='$nisn',
						tempat_tgllahir='$tmp_lahir, $tgl_lahir',
						alamat='$alamat',
						no_telp='$hp_siswa',
						seragam='$seragam',
						berat_badan='$brtbdn',
						tinggi_badan='$tgibdn',
						riwayat_penyakit='$pykt',
						kelainan_jasmani='$jasman',
						agama='$agama',
						kewarganegaraan='$kkn',
						anak_ke='$urut_anak',
						jumlah_saudara='$urut_anak1',
						status_anak='$status_anak',
						bahasa='$bhs'
						WHERE nisn='$nisn'");

	if($input){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

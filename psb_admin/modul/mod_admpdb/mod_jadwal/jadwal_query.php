<?php
include '../../../../config/koneksi.php';

$nisn			= $_POST['nisn'];
$nm_siswa		= $_POST['nm_siswa'];
$tmp_lahir		= $_POST['tmp_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$kelamin		= $_POST['kelamin'];
$agama			= $_POST['agama'];
$urut_anak		= $_POST['urut_anak'];
$urut_anak1		= $_POST['urut_anak1'];
$status_anak	= $_POST['status_anak'];
$hp_siswa		= $_POST['hp_siswa'];
$almt_siswa		= $_POST['almt_siswa'];
$tmpt_siswa		= $_POST['tmpt_siswa'];
$kendaraan		= $_POST['kendaraan'];
$berat_bdn		= $_POST['berat_bdn'];
$tggi_bdn		= $_POST['tggi_bdn'];
$darah			= $_POST['darah'];
$asal_sklh		= $_POST['asal_sklh'];
$almt_sklh		= $_POST['almt_sklh'];
$kpl_sekolah	= $_POST['kpl_sekolah'];
$asal_kls		= $_POST['asal_kls'];
$tlp_sklh		= $_POST['tlp_sklh'];
$nm_ayah		= $_POST['nm_ayah'];
$nm_ibu			= $_POST['nm_ibu'];
$almt_ortu		= $_POST['almt_ortu'];
$hp_ortu		= $_POST['hp_ortu'];
$kerja_ayah		= $_POST['kerja_ayah'];
$kerja_ibu		= $_POST['kerja_ibu'];
$hasil_ortu		= $_POST['hasil_ortu'];
$biaya			= $_POST['biaya'];

$input = mysql_query("UPDATE ppdb_biodata SET 
						nisn='$nisn',
						nm_siswa='$nm_siswa',
						tmp_lahir='$tmp_lahir',
						tgl_lahir='$tgl_lahir',
						jns_kelamin='$kelamin',
						agama='$agama',
						ank_ke='$urut_anak',
						jml_saudara='$urut_anak1',
						sts_siswa='$status_anak',
						hp_siswa='$hp_siswa',
						almt_siswa='$almt_siswa',
						tmpt_siswa='$tmpt_siswa',
						kendaraan='$kendaraan',
						brt_badan='$berat_bdn',
						tgi_badan='$tggi_bdn',
						gol_darah='$darah',
						asl_sekolah='$asal_sklh',
						almt_sekolah='$almt_sklh',
						kpl_sekolah='$kpl_sekolah',
						asl_kls_smp='$asal_kls',
						tlp_skl='$tlp_sklh',
						nm_ayah='$nm_ayah',
						nm_ibu='$nm_ibu',
						almt_ortu='$almt_ortu',
						hp_ortu='$hp_ortu',
						kerja_ayah='$kerja_ayah',
						kerja_ibu='$kerja_ibu',
						hasil_ortu='$hasil_ortu',
						tgung_biaya='$biaya', 
						sts_bio=1 WHERE nisn='$nisn'");
$input1 = mysql_query("UPDATE ppdb_adm_siswa SET 
						nama='$nm_siswa',
						asal_skl='$asal_sklh'
						WHERE nisn='$nisn'");
	if($input && $input1){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

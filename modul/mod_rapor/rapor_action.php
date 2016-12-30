<?
session_start();

include '../../config/koneksi.php';
$bhs = $_POST['bhs'];			$big = $_POST['big'];
$bhs1 = $_POST['bhs1'];			$big1 = $_POST['big1'];
$bhs2 = $_POST['bhs2'];			$big2 = $_POST['big2'];
$bhs3 = $_POST['bhs3'];			$big3 = $_POST['big3'];
$bhs4 = $_POST['bhs4'];			$big4 = $_POST['big4'];
$totalBhs = $_POST['totalBhs'];	$totalbig = $_POST['totalbig'];

$mat = $_POST['mat'];			$ipa = $_POST['ipa'];
$mat1 = $_POST['mat1'];			$ipa1 = $_POST['ipa1'];
$mat2 = $_POST['mat2'];			$ipa2 = $_POST['ipa2'];
$mat3 = $_POST['mat3'];			$ipa3 = $_POST['ipa3'];
$mat4 = $_POST['mat4'];			$ipa4 = $_POST['ipa4'];
$totalmat = $_POST['totalmat'];	$totalipa = $_POST['totalipa'];

$ips = $_POST['ips'];
$ips1 = $_POST['ips1'];
$ips2 = $_POST['ips2'];
$ips3 = $_POST['ips3'];
$ips4 = $_POST['ips4'];
$totalips = $_POST['totalips'];

		
	$input = mysql_query("UPDATE ppdb_bind SET sem_1='$bhs', sem_2='$bhs1', sem_3='$bhs2', sem_4='$bhs3', sem_5='$bhs4', rata_rata='$totalBhs', sts_bind=1 WHERE nisn='$_SESSION[nisn]'");

	$input1 = mysql_query("UPDATE ppdb_bing SET sem_1='$big', sem_2='$big1', sem_3='$big2', sem_4='$big3', sem_5='$big4', rata_rata='$totalbig', sts_bing=1 WHERE nisn='$_SESSION[nisn]'");

	$input2 = mysql_query("UPDATE ppdb_mat SET sem_1='$mat', sem_2='$mat1', sem_3='$mat2', sem_4='$mat3', sem_5='$mat4', rata_rata='$totalmat', sts_mat=1 WHERE nisn='$_SESSION[nisn]'");

	$input3 = mysql_query("UPDATE ppdb_ipa SET sem_1='$ipa', sem_2='$ipa1', sem_3='$ipa2', sem_4='$ipa3', sem_5='$ipa4', rata_rata='$totalipa', sts_ipa=1 WHERE nisn='$_SESSION[nisn]'");

	$input4 = mysql_query("UPDATE ppdb_ips SET sem_1='$ips', sem_2='$ips1', sem_3='$ips2', sem_4='$ips3', sem_5='$ips4', rata_rata='$totalips', sts_ips=1 WHERE nisn='$_SESSION[nisn]'");

if ($input && $input1 && $input2 && $input3 && $input4){
	echo "sukses";
}
else{
	echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
}

?>
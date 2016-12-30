<?
session_start();

include '../../config/koneksi.php';
include '../../includes/meta.php';

$no_peserta		= $_POST['no_peserta'];
$password		= $_POST['password'];

$result = mysql_query("SELECT COUNT(*) as hasil FROM psb_formulir WHERE no_peserta='$no_peserta' AND password=md5('$password') AND sts_verifikasi='1'") or die (mysql_error());
$row = mysql_fetch_array($result);

if ($row[0]!="0")
{
	$query_status = mysql_query("SELECT * FROM psb_formulir WHERE no_peserta='$no_peserta'")or die (mysql_error());
	$row_status=mysql_fetch_array($query_status);
	$nisn = $row_status['nisn'];
	$no_peserta = $row_status['no_peserta'];
	
	$_SESSION['no_peserta'] = $no_peserta;
	$_SESSION['nisn'] = $nisn;

	mysql_query("UPDATE psb_formulir SET status='1' WHERE no_peserta='$no_peserta'") or die (mysql_error());
	echo "sukses";
	echo "<script>document.location.href='?module=akun'</script>";
}
else
{
	session_destroy();
	echo "<div class='alert alert-error'>Diharap melakukan pembayaran formulir terlebih dahulu untuk melanjutkan pengisian data dan konfirmasi pembayaran.</div>";

}
?>

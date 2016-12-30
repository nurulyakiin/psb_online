<?
session_start();
include '../config/koneksi.php';

$sess_id	= $_SESSION['admin_id'];
$sess_name	= $_SESSION['name'];
if (isset($sess_id) and (isset($sess_name)))
{
	mysql_query("update psb_admin set islogin = '0' where admin_id = '$sess_id'") or die (mysql_error());
	session_destroy();
	echo "<script>document.location.href='index.php'</script>";
}
?>
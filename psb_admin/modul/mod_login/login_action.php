<?
session_start();
include '../../../config/koneksi.php';

$username		= $_POST['username'];
$password		= $_POST['password'];

$result = mysql_query("SELECT count(*) as hasil FROM psb_admin WHERE isenable=1 AND username='$username' AND password=md5('$password')") or die (mysql_error());
$row = mysql_fetch_array($result);
if ($row[0]=="1"){
	$query_status = mysql_query("SELECT * FROM psb_admin WHERE username='$username'")or die (mysql_error());
	$row_status=mysql_fetch_array($query_status);
	
	$admin_id	= $row_status['admin_id'];
	$name		= $row_status['name'];
	
	$_SESSION['admin_id']     	= $admin_id;
	$_SESSION['name']  		= $name;
	
	
	mysql_query("UPDATE psb_admin set islogin='1', last_login=SYSDATE() where admin_id='$admin_id'") or die (mysql_error());
	
	echo "sukses";
}
else
{
	session_destroy();
	echo "<font color='#FF0000'>LOGIN GAGAL! <br> 
        Username atau Password Anda tidak benar.<br>
        Atau account Anda sedang diblokir.<br></font>";

}
?>

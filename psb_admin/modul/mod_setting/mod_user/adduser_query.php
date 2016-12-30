<?

include '../../../../config/koneksi.php';
$act 			= @$_GET['act'];
$id				= $_POST['id'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$name			= $_POST['name'];
$alamat			= $_POST['alamat'];
$isenable		= $_POST['isenable'];

$add = mysql_query("INSERT INTO psb_admin (admin_id, username, password, name, alamat, last_login, islogin, isenable) 
					  VALUES ('', '$username', MD5('$password'), '$name', '$alamat', '', '0', '$isenable')");
	if($add){
		echo "sukses";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
	}

?>

<?

include '../../../../config/koneksi.php';
$act 			= @$_GET['act'];
$id				= $_POST['id'];
$username		= @$_POST['username'];
$password		= $_POST['password'];
$password1		= $_POST['password'];
$name			= $_POST['name'];
$alamat			= $_POST['alamat'];
$isenable		= $_POST['isenable'];
$pass 			= strlen($password);

if( $pass >= 32){
$edit = mysql_query("UPDATE psb_admin SET 
						username='$username',
						password='$password',
						name='$name',
						alamat='$alamat',
						isenable='$isenable'
						WHERE admin_id='$id'");
	
}
else{
$edit = mysql_query("UPDATE psb_admin SET 
						username='$username',
						password=md5('$password'),
						name='$name',
						alamat='$alamat',
						isenable='$isenable'
						WHERE admin_id='$id'");
}
if($edit){
	echo "sukses";
}
else{
	echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
}
?>

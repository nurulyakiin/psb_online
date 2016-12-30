<?
include "../../../config/koneksi.php";

$email		= $_POST['email'];
$subjek		= $_POST['subjek'];
$pesan		= $_POST['pesan'];
$id			= $_POST['id'];
$dari = "smamitrabintaro@web.id";

$headers  = "From: $dari\r\n";
$headers .= "Reply-To: $dari\r\n";

if (mail($email,$subjek,$pesan,$headers)){
	mysql_query("update psb_kontak set aktif=0 where ktk_id='$id'");
	echo "sukses";
}
else{
	echo "<font color='#FF0000'>Email Gagal Dikirim</font>";
}

?>
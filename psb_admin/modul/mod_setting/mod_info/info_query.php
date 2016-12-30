<?

include "../../../../config/koneksi.php";
$id				= $_POST['id'];
$isi			= $_POST['isi'];
$aktif			= $_POST['aktif'];


$edit = mysql_query("UPDATE psb_info SET info='$isi', aktif='$aktif' WHERE info_id='$id'");
if($edit){
	echo "sukses";
}
else{
	echo "<font color='#00FF00'>Data Gagal Disimpan... </font><br>";
}

?>

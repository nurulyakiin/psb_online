<?
session_start();

include '../../config/koneksi.php';

$nopes		= $_POST['nopes'];
$noform		= $_POST['noform'];
$jns		= $_POST['jns'];
$email		= $_POST['email'];
$nabank		= $_POST['nabank'];
$narim		= $_POST['narim'];
$norek		= $_POST['norek'];
$tobay		= $_POST['tobay'];
$tgl		= $_POST['tgl'];

// $to=$email;

if($_POST['captcha']==$_SESSION['captcha_session']){
	$input = mysql_query("INSERT INTO psb_konfirmasi(no_perserta, 
													 no_formulir,
													 nama_pembayaran,
													 nama_bank,
													 total_pembayaran,
													 jenis_pembayarn,
													 no_rek,
													 tgl_pembayaran) 
											 VALUES ('$nopes',
											 		 '$noform',
													 '$narim',
													 '$nabank',
													 '$tobay',
													 '$jns',
													 '$norek',
													 '$tgl'
													 )");
	// $sql = mysql_query("SELECT * from psb_formulir where no_formulir='$noform'")or die(mysql_error());
	// $row = mysql_fetch_array($sql);
	// $message = "Selamat ! Konfirmasi Pembayaran Sukses. Silakan melakukan login kembali dan melakukan pengisian data. No Formulir : ".$row['no_formulir']." No Peserta : ".$auto." Password : ".$row['pass_view'];
	// $subject = "Konfirmasi Pembayaran Formulir Berhasil";
	// $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// // More headers
	// $headers .= 'From: smamitrabintaro.web.id <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
	// $headers .= 'Cc: admin@yourdomain.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
	// @mail($to,$subject,$message,$headers);

	if($input){
		echo "berhasil";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan...</font>";
	}
}
else{
	echo "<font color='#FF0000'>Kode captcha yang Anda Masukan Salah</font>";
}

?>

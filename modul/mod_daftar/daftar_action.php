<?
session_start();

include '../../config/koneksi.php';
include '../../config/Generate_Password.php';
include '../../config/auto_number.php';
// $nama		= $_POST['nama'];
$nisn		= $_POST['nisn'];
// $asal_skl	= $_POST['asal_skl'];
$email		= $_POST['email'];
// $noformulir	= $_POST['noformulir'];
$prog		= $_POST['prog'];
$nohp		= $_POST['nohp'];

$to=$email;

$struktur	= mysql_query("SELECT * FROM psb_formulir");
$field		= mysql_field_name($struktur,0);

$qry	= mysql_query("SELECT count(no_formulir) FROM psb_formulir");
$row	= mysql_fetch_array($qry);  

if ($row[0] <= 9){
	$tmp = "00";
}
else if($row[0] <= 99){
	$tmp = "0";
}

$inisialno = $tmp.$row[0]+1;

$inisial = date('Ym');
$date = date('Y-m-d');
$noformulir = $tmp.$inisialno.'/PSB/SMA/'.date('Y');
if($_POST['captcha']==$_SESSION['captcha_session']){
	$pass = GeneratePassword(8);
	$pass1 = md5($pass);
	$auto = auto_number('psb_formulir',$inisial);
	$input = mysql_query("insert into psb_formulir(no_peserta, 
													 nisn, 
													 no_formulir,
													 program_keahlian,
													 no_hp,
													 email, 
													 password, 
													 pass_view,
													 tgl_daftar, 
													 status) 
											 values ('$auto',
													 '$nisn',
													 '$noformulir',
													 '$prog',
													 '$nohp',
													 '$email',
													 '$pass1',
													 '$pass',
													 '$date'
													 ,0)");
	$sql = mysql_query("select*from psb_formulir where nisn='$nisn'")or die(mysql_error());
	$row = mysql_fetch_array($sql);
	$message = "Selamat ! Pendaftaran Sukses. Silakan melakukan pembayaran formulir sebesar Rp. 100.000,- melalui ATM Bank BNI dengan no rekenig 301868760 a/n SMA MITRA BINTARO. No Formulir : ".$row['no_formulir']." No Peserta : ".$auto." Password : ".$row['pass_view'];
	$subject = "Pendaftaran Formulir Berhasil";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// More headers
	$headers .= 'From: smamitrabintaro.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
	$headers .= 'Cc: admin@yourdomain.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
	@mail($to,$subject,$message,$headers);
	if($input || @mail){
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

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

$eror		= false;
$folder		= './images/';
//type file yang bisa diupload
$file_type	= array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql');
//tukuran maximum file yang dapat diupload
$max_size	= 5000000; // 500kb

// $to=$email;

if($_POST['captcha']==$_SESSION['captcha_session']){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan .= '- Ukuran file melebihi batas maximum<br />';
	}
	//check ukuran file apakah sudah sesuai

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		//mulai memproses upload file
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
			$catat = mysql_query('INSERT INTO psb_konfirmasi(no_perserta, 
													 no_formulir,
													 nama_pembayaran,
													 nama_bank,
													 total_pembayaran,
													 jenis_pembayarn,
													 no_rek,
													 tgl_pembayaran,bukti_tf,detail,folder,dateupload) VALUES 
													 ("'.$nopes.'",
											 		 "'.$noform.'",
													 "'.$narim.'",
													 "'.$nabank.'",
													 "'.$tobay.'",
													 "'.$jns.'",
													 "'.$norek.'",
													 "'.$tgl.'","'.$file_name.'", "'.$_POST['keterangan'].'", 
								  "'.$folder.'", "'.date('Y-m-d H:i:s').'")');
			echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';
		} else{
			echo "Proses upload eror";
		}
	}
// 	$input = mysql_query("INSERT INTO psb_konfirmasi(no_perserta, 
// 													 no_formulir,
// 													 nama_pembayaran,
// 													 nama_bank,
// 													 total_pembayaran,
// 													 jenis_pembayarn,
// 													 no_rek,
// 													 tgl_pembayaran) 
// 											 VALUES ('$nopes',
// 											 		 '$noform',
// 													 '$narim',
// 													 '$nabank',
// 													 '$tobay',
// 													 '$jns',
// 													 '$norek',
// 													 '$tgl'
// 													 )");

// 	if($input){
// 		echo "berhasil";
// 	}
// 	else{
// 		echo "<font color='#00FF00'>Data Gagal Disimpan...</font>";
// 	}
// // }
// else{
// 	echo "<font color='#FF0000'>Kode captcha yang Anda Masukan Salah</font>";
// }
}
?>

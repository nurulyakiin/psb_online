<?
$sql = mysql_query("select*from ppdb_admin where admin_id='$_SESSION[admin_id]'");
$res = mysql_fetch_array($sql);
$data = BesarKalimat($res['username']);
?>
<h2>Selamat datang...</h2>
<p>Hai <b><?=$data?></b>, selamat datang di halaman Administrator.<br> Silahkan klik menu pilihan untuk mengelola content website. </p> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 
<?php
include "../../config/koneksi.php";
include "../../config/functions_all.php";

$sql = mysql_query("SELECT * FROM psb_formulir AS a
  JOIN psb_keterangansiswa AS b ON a.id_formulir=b.id_formulir
  JOIN psb_pendidikan AS c ON b.id_keterangansiswa=c.id_keterangansiswa
  JOIN psb_tempattinggal AS d ON c.id_keterangansiswa=d.id_keterangansiswa
  JOIN psb_wali AS e ON d.id_keterangansiswa=e.id_keterangansiswa
  JOIN psb_dataorangtua AS f ON e.id_keterangansiswa=f.id_keterangansiswa
  WHERE a.nisn = '$_SESSION[nisn]'")or die(mysql_error());
$res=mysql_fetch_array($sql);

$sql2 = mysql_query("SELECT count(*) FROM psb_formulir AS a
        JOIN psb_keterangansiswa AS b ON AS b ON a.id_formulir=b.id_formulir
        JOIN psb_wali AS c ON b.id_keterangansiswa=c.id_keterangansiswa
        WHERE a.nisn = '$_GET[id]'")
$row = mysql_fetch_array($sql2);

if ($row[0]=="1"){
  $query = mysql_query("SELECT * FROM psb_wali WHERE username='$username'")or die (mysql_error());
  $row2 = mysql_fetch_array($query);
}
else
{

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
  font-size: 36px;
  font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="50%" height="50%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th height="23" colspan="3" align="center"><span class="style1"><u>SURAT PERNYATAAN</u></span></th>
  </tr>
  
  <tr>
    <td height="23" colspan="3" align="center" valign="top"><strong>CALON SISWA SISWI</strong></td>
  </tr>
  <tr>
    <td height="36" colspan="3" align="center" valign="bottom"><strong>SMA MITRA BINTARO</strong></td>
  </tr>
  <tr>
    <td height="23" colspan="3" align="center"><strong>PINANG KOTA TANGERANG</strong></td>
  </tr>
  <tr>
    <td height="23" colspan="3" align="center"><strong>TAHUN 2017</strong></td>
  </tr>
  <tr>
    <td width="256" height="23"><p>Yang bertanda tangan dibawah ini  Saya</p></td>
    <td width="3">:</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">1. Nama Lengkap</td>
    <td>:</td>
    <td colspan="2"><?=BesarKalimat($res['nama_lengkap'])?></td>
  </tr>
  <tr>
    <td height="23">2. Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td colspan="2"><?=BesarKalimat($res['tempat_tgllahir'])?></td>
  </tr>
  <tr>
    <td height="23">3. Agama</td>
    <td>:</td>
    <td colspan="2"><?=BesarKalimat($res['agama'])?></td>
  </tr>
  <tr>
    <td height="23">4. Nomor Pendaftaran</td>
    <td>:</td>
    <td colspan="2"><?=BesarKalimat($res['no_formulir'])?></td>
  </tr>
  <tr>
    <td height="23">5. Diterima Dikelas</td>
    <td>:</td>
    <td colspan="2">X (Sepuluh)</td>
  </tr>
  <tr>
    <td height="23">6. Nama Ortu / Wali</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="23">7. Pekerjaan Ortu / Wali</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="23">8. Agama</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="23">9. Hubungan Keluarga</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="23">10 . Alamat Ortu / Wali</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="23" colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="4" align="center"><strong>Dengan sungguh-sungguh dan penuh kesadaran :</strong></td>
  </tr>
  <tr>
    <td height="23" colspan="4"><p align="center"><strong>MENYATAKAN</strong></p></td>
  </tr>
  <tr>
    <td height="23" colspan="3"><p>Bahwa Saya selama menjadi siswa / i <strong>SMA MITRA BINTARO </strong>Kelurahan Kunciran Kecamatan Pinang Kota Tangerang</p><p>menyatakan :</p>
      <ol>
        <li><span dir="ltr"> </span>Akan belajar dengan baik, tekun dan penuh semangat.</li>
        <li><span dir="ltr"> </span>Akan menjaga nama baik diri sendiri, keluarga, sekolah dan  Yayasan.</li>
        <li><span dir="ltr"> </span>Sanggup mentaati dan mematuhi semua peraturan dan tata tertib  sekolah yang berlaku (Terlampir).</li>
        <li><span dir="ltr"> </span>Sanngup melunasi administrasi keuangan yang terlah ditentukan  oleh sekolah dan apabila dikemudian hari Saya<p> mengundurkan diri sebagai siswa /  i dikembalikan kepada orang tua, maka Saya tidak menuntut pengambilan  administrasi keuangan</p>yang sudah dibayarkan ke sekolah, dan melunasi sampai  tanggal bulan mengundurkan diri.</li>
      </ol>
      <p>Apabila Saya  tidak mentaati semua ketentuan yang di tetapkan disekolah, maka Saya sanggup  menerima sangsi antara lain :</p>
      <ol>
        <li><span dir="ltr"> </span>Tidak diperkenankan mengikuti selama jangka waktu yang  ditentukan sekolah</li>
        <li><span dir="ltr"> </span>Dikembalikan kepada orang tua / wali</li>
      </ol>
    Demikian surat pernyataan ini Saya buat dengan  sebenarnya, dan atas persetujuan orang tua / wali Saya.</td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="center">Mengetahui</td>
  <td width="536" height="23" colspan="1" align="center">Tangerang, .............. 20 .... </td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="center">Orang tua / Wali Siswa</td>
  <td width="536" height="23" colspan="1" align="center">Yang membuat pernyataan</td>
  </tr>
  <tr>
    <td height="43" colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="2">&nbsp;</td>
  <td height="23" colspan="1" align="center">Materai 6.000</td>
  </tr>
  <tr>
    <td height="23" colspan="2" align="center">.................................................</td>
  <td height="23" colspan="1" align="center">............................................</td>
  </tr>
</table>
</body>
</html>

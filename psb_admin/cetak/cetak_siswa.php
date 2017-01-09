<?php
session_start();
include "../../config/koneksi.php";
include "../config/functions_all.php";

$sql = mysql_query("SELECT * FROM psb_formulir AS a
  JOIN psb_keterangansiswa AS b ON a.id_formulir=b.id_formulir
  JOIN psb_pendidikan AS c ON b.id_keterangansiswa=c.id_keterangansiswa
  JOIN psb_tempattinggal AS d ON c.id_keterangansiswa=d.id_keterangansiswa
  JOIN psb_wali AS e ON d.id_keterangansiswa=e.id_keterangansiswa
  JOIN psb_dataorangtua AS f ON e.id_keterangansiswa=f.id_keterangansiswa")or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="200%" height="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="3%" align="center">No</td>
    <td width="16%" align="center">No Formulir </td>
    <td width="21%" align="center">Nama</td>
    <td width="6%" align="center">Program Jurusan </td>
    <td width="5%" align="center">Jenis Kelamin </td>
    <td width="14%" align="center">Asal Sekolah </td>
    <td width="6%" align="center">NISN</td>
    <td width="16%" align="center">Tempat, Tanggal Lahir </td>
    <td width="13%" align="center">Alamat</td>
  </tr>
<?php
$i = $posisi;
while($items=mysql_fetch_array($sql)){
// var_dump($items);
    $no_formulir        =   $items[no_formulir];
    $nama_lengkap   =   BesarKalimat($items[nama_lengkap]);
    $nisn           =   $items[nisn];
    $jenis_kelamin      =   BesarKalimat($items[jenis_kelamin]);
    $program_keahlian      =   BesarKalimat($items[program_keahlian]);
    $tempat_tgllahir        =   $items[tempat_tgllahir];
    $asal_sekolah    =   $items[asal_sekolah];
    $alamat    =   $items[alamat];
    $i++;

?>
  <tr>
    <td width="3%" align="center"><?=$i?></td>
    <td width="16%" align="center"><?=$no_formulir?></td>
    <td width="21%" align="center"><?=$nama_lengkap?></td>
    <td width="6%" align="center"><?=$program_keahlian?></td>
    <td width="5%" align="center"><?=$jenis_kelamin?></td>
    <td width="14%" align="center"><?=$asal_sekolah?></td>
    <td width="6%" align="center"><?=$nisn?></td>
    <td width="16%" align="center"><?=$tempat_tgllahir?></td>
    <td width="13%" align="center"><?=$alamat?></td>
  </tr>
<?php
}
?>
</table>
</body>
</html>
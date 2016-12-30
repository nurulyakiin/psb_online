<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php include_once( 'includes/meta.php'); ?>
</head>

<body>
<?php include_once( 'includes/nav.php'); ?>
<?
include 'config/koneksi.php';

$sql = mysql_query("SELECT a.sts_bind AS bind, b.sts_bing AS bing, c.sts_ipa AS ipa, d.sts_ips AS ips, 
						   e.sts_mat AS mat, f.sts_bio as bio
					FROM
						  psb_bind AS a, psb_bing AS b, psb_ipa AS c, psb_ips AS d, psb_mat AS e,
						  psb_biodata AS f
					WHERE
						  a.nisn = '$_SESSION[nisn]' AND b.nisn = '$_SESSION[nisn]' AND 
						  c.nisn = '$_SESSION[nisn]' AND d.nisn = '$_SESSION[nisn]' AND
						  e.nisn = '$_SESSION[nisn]' AND f.nisn = '$_SESSION[nisn]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
if ($row['bind']==1 && $row['bing']==1 && $row['ipa']==1 && $row['ips']==1 && $row['mat']==1 && $row['bio']==1){
?>
<table width="44%" border="0" align="center">
  <tr>
    <td width="3%"><strong><a href="./cetak/f_biodata.php" target="_blank"><img src="images/menuMG/cetakk.png" width="50" height="50" /></a></strong></td>
    <td width="97%"><strong><a href="./cetak/f_biodata.php" target="_blank">Cetak Data Calon PDB</a></strong></td>
  </tr>
  <tr>
    <td><strong><a href="./cetak/f_rapor.php" target="_blank"><img src="images/menuMG/cetakk.png" width="50" height="50" /></a><a href="?module=f_rapor" target="_blank"></a></strong></td>
    <td><strong><a href="./cetak/f_rapor.php" target="_blank">Cetak Nilai Rapor</a></strong></td>
  </tr>
</table><br/><br/><br/><br/>
<?
}
else
{
	echo "<br/><br/><br/><p align='center'><font color='#FF0000'>Cetak Dokumen Belum Tersedia <br />Untuk Mencetak Dokumen Silahkan Lengkapi Biodata dan Rapor</font></p><br/><br/><br/><br/><br/><br/>";
}
?>
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
</html>

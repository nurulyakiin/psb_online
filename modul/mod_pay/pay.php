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

$sql1 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Formulir Pendaftaran'")or die(mysql_error());
$row1=mysql_fetch_array($sql1);

$sql2 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'MOS'")or die(mysql_error());
$row2=mysql_fetch_array($sql2);

$sql3 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'SPP'")or die(mysql_error());
$row3=mysql_fetch_array($sql3);

$sql4 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Seragam'")or die(mysql_error());
$row4=mysql_fetch_array($sql4);

$sql5 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'LKS Semester 1'")or die(mysql_error());
$row5=mysql_fetch_array($sql5);

$sql6 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Atribut'")or die(mysql_error());
$row6=mysql_fetch_array($sql6);

$sql7 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Cover Ijazah'")or die(mysql_error());
$row7=mysql_fetch_array($sql7);

$sql8 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Kartu Pelajar & Photo'")or die(mysql_error());
$row8=mysql_fetch_array($sql8);
?>
<div id="info" align="center"></div>
<form action="#" method="post" id="pay">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="8" bgcolor="#33CC33"><span class="style1"><b>DATA PEMBAYARAN SISWA</b></span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">No Formulir</td>
		<td width="5">:</td>
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row1['no_formulir'] ?>" readonly="true" /></td>
		<td width="173">No Peserta</td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row1['no_peserta'] ?>" readonly="true" /></td>
	  </tr>
	  <tr>
		<td colspan="8">&nbsp;
		<hr />	
		</td>
	  </tr>
	  <tr>
		<td width="173">FORMULIR PENDAFTARAN</td>
		<td width="5">:</td>
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row1['sts_verifikasi']==1 ? 'Sudah Verifikasi' : 'BELUM Verifikasi' ?>" readonly="true" />&nbsp;*Rp. 100.000.-</td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row1['jenis_pembayarn']=='Formulir Pendaftaran' && $row1['total_pembayaran']>=100000 ? 'LUNAS' : $row1['total_pembayaran'] ?>" readonly="true" />&nbsp; **Rp. <?= $row1['total_pembayaran'] ?> ,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>MOS</td>
		<td>:</td>
		<td colspan="4"><input name="mos" type="text" id="mos" readonly="true" value="<?= $row2['jenis_pembayarn']=='MOS' && $row2['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>SPP</td>
		<td>:</td>
		<td colspan="4"><input name="spp" type="text" id="spp" readonly="true" value="<?= $row3['jenis_pembayarn']=='SPP' && $row3['total_pembayaran']>=135000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 135.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Seragam</td>
		<td>:</td>
		<td colspan="4"><input name="srm" type="text" id="srm" readonly="true" value="<?= $row4['jenis_pembayarn']=='Seragam' && $row4['total_pembayaran']>=350000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 350.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>LKS Semester 1</td>
		<td>:</td>
		<td colspan="4"><input name="lks" type="text" id="lks" readonly="true" value="<?= $row5['jenis_pembayarn']=='LKS Semester 1' && $row5['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Atribut</td>
		<td>:</td>
		<td colspan="4"><input name="atrib" type="text" id="atrib" readonly="true" value="<?= $row6['jenis_pembayarn']=='Atribut' && $row6['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Cover Ijazah</td>
		<td>:</td>
		<td colspan="4"><input name="cover" type="text" id="cover" readonly="true" value="<?= $row7['jenis_pembayarn']=='Cover Ijazah' && $row7['total_pembayaran']>=100000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 100.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Kartu Pelajar & Photo</td>
		<td>:</td>
		<td colspan="4"><input name="kts" type="text" id="kts" readonly="true" value="<?= $row8['jenis_pembayarn']=='Kartu Pelajar & Photo' && $row8['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
		<td><p class="center"><a target="_blank" href="modul/mod_pay/f_pay.php?id=<?= $_SESSION[no_peserta] ?>" class="btn btn-primary fa fa-1x fa-border fa-print"></a></p></td>
		<td><p>* Yang harus dibayar</p>
		<p>** Yang dibayar</p></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
<!-- <div class="container">
	<div class="col-lg-2 col-md-3 intro-marketing-box" align="center">
		<p class="center"><a href="modul/mod_surat/f_surat.php?id=<?= $_SESSION[no_peserta] ?>" class="btn btn-primary fa fa-1x fa-border fa-print"></a>
		<h4 class="center">Cetak Surat Pernyataan</span></h4>
		<p class="center">Anda dapat mencetak dokumen setelah mengisi biodata. </p><br/>
	</div>
</div> -->
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
</html>

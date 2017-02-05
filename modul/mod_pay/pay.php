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

$sql = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
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
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row['no_formulir'] ?>" readonly="true" /></td>
		<td width="173">No Peserta</td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row['no_peserta'] ?>" readonly="true" /></td>
	  </tr>
	  <tr>
		<td colspan="8">&nbsp;
		<hr />	
		</td>
	  </tr>
	  <tr>
		<td width="173">FORMULIR PENDAFTARAN</td>
		<td width="5">:</td>
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row['sts_verifikasi']==1 ? 'Sudah Verifikasi' : 'BELUM Verifikasi' ?>" readonly="true" />&nbsp;*Rp. 100.000.-</td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row['jenis_pembayarn']=='Formulir Pendaftaran' && $row['total_pembayaran']>=100000 ? 'LUNAS' : $row['total_pembayaran'] ?>" readonly="true" />&nbsp; **Rp. <?= $row['total_pembayaran'] ?> ,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>MOS</td>
		<td>:</td>
		<td colspan="4"><input name="mos" type="text" id="mos" readonly="true" value="<?= $row['jenis_pembayarn']=='MOS' && $row['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>SPP</td>
		<td>:</td>
		<td colspan="4"><input name="spp" type="text" id="spp" readonly="true" value="<?= $row['jenis_pembayarn']=='SPP' && $row['total_pembayaran']>=135000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 135.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Seragam</td>
		<td>:</td>
		<td colspan="4"><input name="srm" type="text" id="srm" readonly="true" value="<?= $row['jenis_pembayarn']=='Seragam' && $row['total_pembayaran']>=350000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 350.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>LKS Semester 1</td>
		<td>:</td>
		<td colspan="4"><input name="lks" type="text" id="lks" readonly="true" value="<?= $row['jenis_pembayarn']=='LKS Semester 1' && $row['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Atribut</td>
		<td>:</td>
		<td colspan="4"><input name="atrib" type="text" id="atrib" readonly="true" value="<?= $row['jenis_pembayarn']=='Atribut' && $row['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Cover Ijazah</td>
		<td>:</td>
		<td colspan="4"><input name="cover" type="text" id="cover" readonly="true" value="<?= $row['jenis_pembayarn']=='Cover Ijazah' && $row['total_pembayaran']>=100000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 100.000,-</td>
	  </tr>
	  <tr>
	  	<td>
	  	&nbsp;
	  	</td>
	  </tr>
	  <tr>
		<td>Kartu Pelajar & Photo</td>
		<td>:</td>
		<td colspan="4"><input name="kts" type="text" id="kts" readonly="true" value="<?= $row['jenis_pembayarn']=='Kartu Pelajar & Photo' && $row['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
		<td><p class="center"><a target="_blank" href="modul/mod_pay/f_pay.php?id=<?= $_SESSION[no_peserta] ?>" class="btn btn-primary fa fa-1x fa-border fa-print"></a></p></td>
		<td><p>* Yang harus dibayar</p>
		** Yang dibayar</td>
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

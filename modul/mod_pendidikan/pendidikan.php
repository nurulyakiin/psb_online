<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php include_once( 'includes/meta.php'); ?>
</head>

<body>
<?php include_once( 'includes/nav.php'); ?>
<?php

$sql = mysql_query("SELECT * FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir WHERE A.no_peserta = '$_SESSION[no_peserta]' ")or die(mysql_error());
$row = mysql_fetch_array($sql);
?>
<div id="info" align="center"></div>
<form action="#" method="post" id="pendidikan">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><b>C. KETERANGAN PENDIDIKAN SEBELUMNYA</b></td>
	  </tr>
	  <input name="id_keterangansiswa" type="hidden" id="id_keterangansiswa" value="<?= $row['id_keterangansiswa']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="asal" type="text" id="asal" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tanggal dan Nomor STTB</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="dd/mm/yyyy, 75657***" style="width: 180px" name="sttb" type="text" id="sttb" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Lama Belajar</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="tahun" style="width: 100px" name="lama" type="text" id="lama" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Diterima di Sekolah ini Tanggal</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl" type="text" id="tanggal" value="" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pindahan dari Sekolah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="pindah" type="text" id="pindah" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="1"><input name="submit" id="submit" class="btn btn-primary" type="submit" value="SIMPAN" />
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=akun')" type="button" value="BATAL" /></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
</html>

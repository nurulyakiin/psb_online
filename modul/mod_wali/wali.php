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

$sql = mysql_query("SELECT B.id_keterangansiswa AS id FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir")or die(mysql_error());
$row = mysql_fetch_array($sql);
// var_dump($row);
// exit;
?>
<div id="info" align="center"></div>
<form action="#" method="post" id="wali">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="9" bgcolor="#33CC33"><b>D. KETERANGAN WALI</b></td>
	  </tr>
	  <input name="id_keterangansiswa" type="hidden" id="id_keterangansiswa" value="<?= $row['id']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Nama Wali</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmwali" type="text" id="nmwali" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>Alamat Tempat Tinggal</label></td>
		<td>:</td>
		<td colspan="4"><textarea rows="4" cols="50" class="form-control" style="width: 190px" name="alamat" type="text" id="alamat" value="<?= $row['alamat']?>" size="30"> </textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>No Telp</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="notelp" type="text" id="notelp" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tempat Tanggal Lahir Wali</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahirwali" type="text" id="tmp_lahirwali" value="<?= $row['tmp_lahir']?>" size="30" /></td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl_lahirwali" type="text" id="tanggal" value="<?= $row['tgl_lahir']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="kerja" type="text" id="kerja" value="" size="15" /></td>
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

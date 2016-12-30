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
<form action="#" method="post" id="ortu">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="7" bgcolor="#33CC33"><b>D. KETERANGAN ORANG TUA</b></td>
	  </tr>
	  <input name="id_keterangansiswa" type="hidden" id="id_keterangansiswa" value="<?= $row['id']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Nama Lengkap Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmayh" type="text" id="nmayh" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Nama Lengkap Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmibu" type="text" id="nmibu" value="" size="15" /></td>
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
		<td>No. Telp/Hp</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 150px" name="notelp" type="text" id="notelp" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tempat Tanggal Lahir Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahirayh" type="text" id="tmp_lahirayh" value="<?= $row['tmp_lahir']?>" size="30" /></td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl_lahirayh" type="text" id="tanggal" value="<?= $row['tgl_lahir']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tanggal Tanggal Lahir Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahiribu" type="text" id="tmp_lahiribu" value="<?= $row['tgl_lahir']?>" size="15" /></td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl_lahiribu" type="text" id="tanggal2" value="<?= $row['tgl_lahir']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="kerja_ayh" type="text" id="kerja_ayh" value="" size="15"  /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Penghasilan per Bulan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="hasil" type="text" id="hasil" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="kerja_ibu" type="text" id="kerja_ibu" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pendidikan Tertinggi</td>
		<td>:</td>
		<td colspan="4">Ayah<input class="form-control" style="width: 190px" name="pend_ayh" type="text" id="pend_ayh" value="" size="15" /></td>
		<td colspan="4">Ibu<input class="form-control" style="width: 190px" name="pend_ibu" type="text" id="pend_ibu" value="" size="15"  /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Agama</td>
		<td>:</td>
		<td colspan="4">Ayah<input class="form-control" style="width: 200px" name="agama_ayh" type="text" id="agama_ayh" value="" size="15" /></td>
		<td colspan="4">Ibu<input class="form-control" style="width: 200px" name="agama_ibu" type="text" id="agama_ibu" value="" size="15" /></td>
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
		<td colspan="6"><input name="submit" id="submit" class="button" type="submit" value="SIMPAN" /></td>
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

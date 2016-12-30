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
<form action="#" method="post" id="alamat">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="5" bgcolor="#33CC33"><b>B. KETERANGAN TEMPAT TINGGAL</b></td>
	  </tr>
	  <input name="id_keterangansiswa" type="hidden" id="id_keterangansiswa" value="<?= $row['id']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Tinggal Dengan</td>
		<td>:</td>
		<td colspan="4">
		
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Orang Tua" /> <label> Orang Tua</label>
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Kos"> <label> Kos</label>
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Asrama"> <label> Asrama</label>
		
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Jarak Tempat Tinggal dengan SMA Mitra Bintaro</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="Km" style="width: 50px" name="jarak" type="text" id="jarak" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Berangkat Sekolah dengan Kendaraan</td>
		<td>:</td>
		<td colspan="4">
		
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Umum" /> <label> Umum</label>
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Motor"> <label> Motor</label>
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Antar Jemput"> <label> Antar Jemput</label>
		
		</td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Referensi SMA Mitra Bintaro dari</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="ref" type="text" id="ref" value="" size="15" /></td>
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

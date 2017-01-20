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
include '../../config/koneksi.php';
// var_dump($_POST);
// exit;
if ($_POST){
	$sql = mysql_query("SELECT B.id_keterangansiswa AS id FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir WHERE A.no_peserta = '$_SESSION[no_peserta]'")or die(mysql_error());
	$row = mysql_fetch_array($sql);
	// var_dump($_POST);
    $path = pathinfo($_SERVER['PHP_SELF']);
    for ($i = 0; $i < count ($_FILES['userfile']['name']); $i++)
    {
        $tmp_file = $_FILES['userfile']['tmp_name'][$i];
        $filetype = $_FILES['userfile']['type'][$i];
        $filesize = $_FILES['userfile']['size'][$i];
        $filename = $_FILES['userfile']['name'][$i];
        $destination = $path['dirname'] . '/images/document/' . $filename;
        if (move_uploaded_file($tmp_file, $_SERVER['DOCUMENT_ROOT'] . $destination))
        {
            $result = mysql_query ("INSERT INTO psb_dokumen(id_keterangansiswa, location,
                filetype, filename, filesize)
                VALUES ('$row[id]', '" . $destination . "','" . $filetype .
                "','" . $filename . "'," . $filesize . ")");
        }
    }
    header('Location: ?module=akun');
}
// $sql = mysql_query("SELECT B.id_keterangansiswa AS id FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir")or die(mysql_error());
// $row = mysql_fetch_array($sql);
?>
<div id="info" align="center"></div>
<form method="post" enctype="multipart/form-data"><input type="hidden" name="upload" value="1" />
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="9" bgcolor="#33CC33"><b>D. KETERANGAN WALI</b></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;**KET : File tidak lebih dari 1MB
		<p>&nbsp;**Sebelum upload rename dokumen dengan No Peserta</p></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Scan Akte Kelahiran</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Scan Ijazah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="30"> </textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Scan SKHUN</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file"  value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Scan KK</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Scan SKB</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Photo</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="15" /></td>
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
		<td colspan="1"><input name="submit" id="submit" class="btn btn-primary" type="submit" value="UPLOAD" />
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

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
        if ($tmp_file=='' || $filetype=='' || $filesize=='' || $filename=='')
        {
            echo '<script type="text/javascript">alert("LAMPIRKAN SEMUA FILE!!!");</script>';
        }
        elseif (move_uploaded_file($tmp_file, $_SERVER['DOCUMENT_ROOT'] . $destination))
        {
        	if ($filesize <= 500000)
        	{
				$result = mysql_query ("INSERT INTO psb_dokumen(id_keterangansiswa, location,
	                filetype, filename, filesize)
	                VALUES ('$row[id]', '" . $destination . "','" . $filetype .
	                "','" . $filename . "'," . $filesize . ")");
			}
			else
			{
				echo '<script type="text/javascript">alert("FILE TERLALU BESAR!!!");</script>';
			}
        }
    }
    header('Location: ?module=akun');
}
?>
<div id="info" align="center"></div>
<form method="post" enctype="multipart/form-data" onSubmit="return validasi(this)"><input type="hidden" name="upload" value="1" />
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="9" bgcolor="#33CC33"><b>D. KETERANGAN WALI</b></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;**KET : File tidak lebih dari 500kb
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
	 <!--  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Scan SKB</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="userfile[]" type="file" size="15" /></td>
	  </tr> -->
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
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#docu").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					userfile: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					userfile: {required: "NISN Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#docu").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var userfile = $("input[name=userfile]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_docu/docu_action.php",
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=akun';
					}
					else{
						// window.location.href = '?module=akun';
						$("#info").html(data);
						$("#info").fadeOut(5000);
					}
				}
			});
		return false;
		}
	});
})
</script>

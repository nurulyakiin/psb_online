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
		<!-- <tr>
		<td>Pindahan dari Sekolah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="pindah" type="text" id="pindah" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr> -->
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
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#pendidikan").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					asal: {required: true},
					sttb: {required: true},
					lama: {required: true,number: true},
					tgl: {required: true},
					// pindah: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					asal: {required: "Asal Sekolah Harus Diisi"},
					sttb: {required: "STTB Harus Diisi"},
					lama: {required: "Lamanya Harus Diisi",number: "Lamanya Harus Angka"},
					tgl: {required: "Tanggal Harus Diisi"},
					// pindah: {required: "Pindah Tanggal Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#pendidikan").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var asal = $("input[name=asal]").val();
			var sttb = $("input[name=sttb]").val();
			var lama = $("input[name=lama]").val();
			var tgl = $("input[name=tgl]").val();
			// var pindah = $("input[name=pindah]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_pendidikan/pendidikan_action.php",
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

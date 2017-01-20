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
<form action="#" method="post" id="ortu">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="7" bgcolor="#33CC33"><b>D. KETERANGAN ORANG TUA</b></td>
	  </tr>
	  <input name="id_keterangansiswa" type="hidden" id="id_keterangansiswa" value="<?= $row['id_keterangansiswa']?>"/>
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
	$("#ortu").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					nmayh: {required: true},
					nmibu: {required: true},
					alamat: {required: true},
					notelp: {required: true},
					tmp_lahirayh: {required: true},
					tgl_lahirayh: {required: true},
					tmp_lahiribu: {required: true},
					tgl_lahiribu: {required: true},
					kerja_ayh: {required: true},
					hasil: {required: true},
					kerja_ibu: {required: true},
					pend_ayh: {required: true},
					pend_ibu: {required: true},
					agama_ayh: {required: true},
					agama_ibu: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					nmayh: {required: "Nama Ayah Harus Diisi"},
					nmibu: {required: "Nama Ibu Harus Diisi"},
					alamat: {required: "Alamat Harus Diisi"},
					notelp: {required: "No Telp Harus Diisi"},
					tmp_lahirayh: {required: "Tempat Lahir Ayah Harus Diisi"},
					tgl_lahirayh: {required: "Tanggal Lahir Ayah Harus Diisi"},
					tmp_lahiribu: {required: "Tempat Lahir Ibu Harus Diisi"},
					tgl_lahiribu: {required: "Tanggal Lahir Ibu Harus Diisi"},
					kerja_ayh: {required: "Pekerjaan Ayah Harus Diisi"},
					hasil: {required: "Penghasilan Ayah Harus Diisi"},
					kerja_ibu: {required: "Pekerjaan Ibu Harus Diisi"},
					pend_ayh: {required: "Pendidikan Ayah Harus Diisi"},
					pend_ibu: {required: "Pendidikan Ibu Harus Diisi"},
					agama_ayh: {required: "Agama Ayah Harus Diisi"},
					agama_ibu: {required: "Agama Ibu Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#ortu").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var nmayh = $("input[name=nmayh]").val();
			var nmibu = $("input[name=nmibu]").val();
			var alamat = $("input[name=alamat]").val();
			var notelp = $("input[name=notelp]").val();
			var tmp_lahirayh = $("input[name=tmp_lahirayh]").val();
			var tgl_lahirayh = $("input[name=tgl_lahirayh]").val();
			var tmp_lahiribu = $("input[name=tmp_lahiribu]").val();
			var tgl_lahiribu = $("input[name=tgl_lahiribu]").val();
			var kerja_ayh = $("input[name=kerja_ayh]").val();
			var hasil = $("input[name=hasil]").val();
			var kerja_ibu = $("input[name=kerja_ibu]").val();
			var pend_ayh = $("input[name=pend_ayh]").val();
			var pend_ibu = $("input[name=pend_ibu]").val();
			var agama_ayh = $("input[name=agama_ayh]").val();
			var agama_ibu = $("input[name=agama_ibu]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_ortu/ortu_action.php",
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

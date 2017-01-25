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
include 'js/dtpicker.js';
$sql = mysql_query("SELECT * FROM psb_formulir WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
$row = mysql_fetch_array($sql);

?>
<div id="info" align="center"></div>
<form action="#" method="post" id="biodata">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="4" bgcolor="#33CC33"><b>A. DATA PRIBADI SISWA</b></td>
	  </tr>
	  <input name="id_formulir" type="hidden" id="id_formulir" value="<?= $row['id_formulir']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">Nama Lengkap Calon</td>
		<td width="5">:</td>
		<td colspan="4"><input class="form-control" style="width: 260px" name="nmlkp" type="text" id="nmlkp" value="<?= $row['nmlkp']?>" size="12" maxlength="10" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td><label>Nama Panggilan</label></td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="nmpgl" type="text" id="nmpgl" value="<?= $row['nmpgl']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>NISN/No Ijazah<label></td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="nisn" type="text" id="nisn" value="<?= $row['nisn']?>" size="30" readonly="true"/></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahir" type="text" id="tmp_lahir" value="<?= $row['tmp_lahir']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl_lahir" type="text" id="tanggal" value="<?= $row['tgl_lahir']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>Alamat</label></td>
		<td>:</td>
		<td colspan="4"><textarea rows="4" cols="50" class="form-control" style="width: 190px" name="alamat" type="text" id="alamat" value="<?= $row['alamat']?>" size="30"> </textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>No Telp/HP</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 165px" name="hp_siswa" type="text" id="hp_siswa" value="<?= $row['hp_siswa']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="kelamin" id="kelamin" value="Pria" /> <label> Pria</label>
		  <input style="width: 25px" type="radio" name="kelamin" id="kelamin" value="Wanita"> <label> Wanita</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Ukuran Seragam</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="S" /> <label> S</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="M"> <label> M</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="L"> <label> L</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="XL"> <label> XL</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="XXL"> <label> XXL</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="/Kg" style="width: 50px" name="brtbdn" type="text" id="brtbdn" value="<?= $row['brtbdn']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="/Cm" style="width: 50px" name="tgibdn" type="text" id="tgibdn" value="<?= $row['tgibdn']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td colspan="4">
		<?
		if($row['sts_bio']==1){
			JKelamin('psb_biodata','nisn');
		}
		else{
		?>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="O" /> <label> O</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="A"> <label> A</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="B" /> <label> B</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="AB"> <label> AB</label>
		<?}?>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Penyakit Yang Pernah Di derita</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="pykt" type="text" id="pykt" value="<?= $row['pykt']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Kelainan Jasmani Lainnya</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="jasman" type="text" id="jasman" value="<?= $row['jasman']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Agama</td>
		<td>:</td>
		<td colspan="4">
		<select class="form-control" style="width: 100px" name="agama" id="agama">
		<?
		if($row['sts_bio']==1){
			Agama('psb_biodata','nisn');
		}
		else{
		?>
		  <option value="">-- Pilih Agama --</option>
		  <option value="islam">Islam</option>
		  <option value="katolik">Katolik</option>
		  <option value="protestan">Protestan</option>
		  <option value="hindu">Hindu</option>
		  <option value="budha">Budha</option>
		</select>
		<?}?>
		</td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Kewarganegaraan</td>
		<td>:</td>
		<td colspan="4">
		<?
		if($row['sts_bio']==1){
			JKelamin('psb_biodata','nisn');
		}
		else{
		?>
		<input style="width: 25px" type="radio" name="kkn" id="kkn" value="WNI" /> <label> WNI</label>
		  <input style="width: 25px" type="radio" name="kkn" id="kkn" value="WNA"> <label> WNA</label>
		<?}?>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Anak Ke</td>
		<td>:</td>
		<td width="230"><input class="form-control" style="width: 80px" name="urut_anak" type="text" id="urut_anak" value="<?= $row['ank_ke']?>" size="5" /></td>
		<td width="32">&nbsp;Dari</td>
		<td width="3">:</td>
		<td width="250"><input class="form-control" style="width: 80px" name="urut_anak1" type="text" id="urut_anak1" value="<?= $row['jml_saudara']?>" size="5" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Status Anak</td>
		<td>:</td>
		<td colspan="4">
		<?
		if($row['sts_bio']==1){
			JKelamin('psb_biodata','nisn');
		}
		else{
		?>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Kandung" /> <label> Kandung</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Piatu"> <label> Piatu</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Tiri" /> <label> Tiri</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Yatim Piatu"> <label> Yatim Piatu</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Angkat" /> <label> Angkat</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Yatim"> <label> Yatim</label>
		<?}?>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Bahasa Keseharian</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="bhs" type="text" id="bhs" value="<?= $row['bhs']?>" size="15" /></td>
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
	$("#biodata").validate({
			rules: {		
					id_formulir: {required: true},
					nisn: {required: true,number: true,maxlength: 10},
					nmlkp: {required: true},
					tmp_lahir: {required: true},
					tgl_lahir: {required: true},
					kelamin: {required: true},
					agama: {required: true},
					urut_anak: {required: true,number:true,maxlength:1},
					urut_anak1: {required: true,number:true,maxlength:1},
					status_anak: {required: true},
					hp_siswa: {required: true, number: true, minlength: 11, maxlength: 12},
					nmpgl: {required: true},
					brtbdn: {required: true,number: true,minlength: 2,maxlength: 3},	
					tgibdn: {required: true,number: true,minlength: 3,maxlength: 3},
					goldar: {required: true},
					pykt: {required: true},
					jasman: {required: true},
					kkn: {required: true},
					seragam: {required: true},
					bhs: {required: true}
					},
		messages:	{
					id_formulir: {required: "Nama Siswa Harus Diisi"},
					nisn: {required: "NISN Harus Diisi",number: "NISN Harus Angka",maxlength: "Maksimal 10 Digit"},
					nmlkp: {required: "Nama Siswa Harus Diisi"},
					tmp_lahir: {required: "Tempat Lahir Harus Diisi"},
					tgl_lahir: {required: "Tanggal Lahir Harus Diisi"},
					kelamin: {required: "Jenis Kelamin Harus Diisi"},
					agama: {required: "Agama Harus Diisi"},
					urut_anak: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					urut_anak1: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					status_anak: {required: "Status Anak Harus Diisi"},
					hp_siswa: {required: "Nomor HP Harus Diisi",number: "Nomor HP Hanya Boleh Angka",minlength: "Nomor HP Minimal 11 Digit",maxlength: "Nomor HP Maksimal 12 Digit"},
					alamat: {required: "Alamat Siswa Harus Diisi"},
					goldar: {required: "Harus Diisi"},
					jasman: {required: "Harus Diisi"},	
					brtbdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 2 Digit",maxlength: "Maksimal 3 Digit"},	
					tgibdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 3 Digit",maxlength: "Maksimal 3 Digit"},	
					nmpgl: {required: "Harus Diisi"},
					pykt: {required: "Harus Diisi"},	
					kkn: {required: "Harus Diisi"},
					seragam: {required: "Seragam Harus Diisi"},
					bhs: {required: "Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#biodata").serialize();
			var id_formulir = $("input[name=id_formulir]").val();
			var nisn = $("input[name=nisn]").val();
			var nmlkp = $("input[name=nmlkp]").val();
			var tmp_lahir = $("input[name=tmp_lahir]").val();
			var tgl_lahir = $("input[name=tgl_lahir]").val();
			var kelamin = $("input[name=kelamin]").val();
			var agama = $("input[name=agama]").val();
			var urut_anak = $("input[name=urut_anak]").val();
			var urut_anak1 = $("input[name=urut_anak1]").val();
			var status_anak = $("input[name=status_anak]").val();
			var hp_siswa = $("input[name=hp_siswa]").val();
			var alamat = $("input[name=alamat]").val();
			var goldar = $("input[name=goldar]").val();
			var jasman = $("input[name=jasman]").val();
			var brtbdn = $("input[name=brtbdn]").val();
			var tgibdn = $("input[name=tgibdn]").val();
			var nmpgl = $("input[name=nmpgl]").val();
			var pykt = $("input[name=pykt]").val();
			var kkn = $("input[name=kkn]").val();
			var bhs = $("input[name=bhs]").val();
			var seragam = $("input[name=seragam]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_biodata/biodata_action.php",
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

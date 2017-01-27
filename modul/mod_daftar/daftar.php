<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php
include_once( 'includes/meta.php'); ?>
</head>

<body>
<?php include_once( 'includes/nav.php'); ?>

<!-- Page content -->
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Daftar Sebagai Peserta</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Daftar</li>
          </ol>
        </div>
        <div class="col-lg-12">
	<form class="navbar-form navbar-center" method="post" action="#" id="daftar">
  		<table width="100%" border="0" align="center">
    		<!-- <tr>
     			<td width="23%">Nama Lengkap Calon PDB </td>
      			<td width="1%">:</td>
      			<td width="500%"><input type="text" class="form-control" name="nama" id="nama" style="width: 300px"/></td>
    		</tr>
			<tr>
			<td><br></td>
			</tr> -->
        <!-- <tr>
          <td width="23%">No Formulir</td>
            <td width="1%">:</td>
            <td width="500%"><input type="text" class="form-control" name="noformulir" id="noformulir" style="width: 300px"/></td>
        </tr>
      <tr>
      <td><br></td>
      </tr> -->
    		<tr>
     			<td>No. Induk Siswa Nasional (NISN) </td>
      			<td>:</td>
      			<td><input type="text" class="form-control" name="nisn" id="nisn" style="width: 120px"/><span id="pesan"></span></td>
    		</tr>
    		<tr>
			<td><br></td>
			</tr>
    		<!-- <tr>
      			<td>Asal Sekolah (SMP/ Sederajat) </td>
      			<td>:</td>
      			<td><input type="text" class="form-control" name="asal_skl" id="asal_skl" style="width: 250px"/></td>
    		</tr>
    		<tr>
			<td><br></td>
			</tr> -->
        <tr>
            <td>Program Keahlian </td>
            <td>:</td>
            <td><select name="prog" class="form-control" style="width: 300px">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
              </select></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
    		<tr>
      			<td>Email</td>
     				<td>:</td>
     			   <td><input type="text" class="form-control" name="email" id="email" style="width: 250px"/></td>
    		</tr>
    		<tr>
			<td><br></td>
			</tr>
        <tr>
            <td>No Handphone</td>
            <td>:</td>
             <td><input type="text" class="form-control" name="nohp" id="nohp" style="width: 250px"/></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
    		<tr>
      			<td>Gambar Verifikasi </td>
      			<td>:</td>
      			<td><img src='captcha.php' class='img-rounded'></td>
    		</tr>
    		<tr>
	  				<td><br></td>
	  		</tr>
    		<tr>
     			<td>&nbsp;</td>
     			<td>&nbsp;</td>
      			<td>(Masukan 6 kode diatas)</td>
    		</tr>
   		<tr>
      			<td>&nbsp;</td>
      			<td>&nbsp;</td>
     			   <td><input type="text" class="form-control" name="captcha" id="captcha" style="width: 165px"/></td>
   		</tr>
  		<tr>
			<td><button type="submit" id="submit" class="btn btn-primary"><i class="small fa fa-pencil"></i> Daftar</button>
    <input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=home')" type="button" value="BATAL" /></td>
			<td>&nbsp;</td>
    			<td>&nbsp;</td>	
		</tr>
    		<tr>
      			<td colspan="3"><label></label></td>
    		</tr>
    		<tr>
      			<td colspan="3">&nbsp;</td>
    		</tr>
    		<tr>
      			<td colspan="3">&nbsp;</td>
    		</tr>
  		</table>
		</form>
	</div>
</div>
</div>
</div>
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
</html>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
  $("#nisn").change(function(){ 
  $('#pesan').html("<img src='images/loader.gif' /> checking ...");
    var nisn = $("#nisn").val(); 
  $.ajax({
   type:"POST",
   url:"modul/mod_daftar/daftar_checking.php",
   data: "nisn=" + nisn,
   success: function(data){
     if(data==0){
       if(nisn.length == 0 || nisn.length < 10 || nisn.length > 10){
         $('#pesan').html("");
         $('#nisn').css('border', '1px #C33 solid');
       }
       else{
         $("#pesan").html('<img src="images/tick.png"> NISN belum digunakan');
         $('#nisn').css('border', '1px #090 solid'); 
         $("#submit").fadeIn();
       }
     }  
     else{
       $("#pesan").html('<img src="images/cross.png"> NISN sudah dipakai');       
       $('#nisn').css('border', '1px #C33 solid'); 
       $("#submit").fadeOut();
     }
   }
  });
  })
  $("#daftar").validate({
    rules: {  
        nisn: {required: true,number: true, minlength: 10, maxlength:10},   
        // asal_skl: {required: true},
        // noformulir: {required: true},
        prog: {required: true},
        nohp: {required: true,number: true},
        email: {required: true,email: true},
        captcha:{required: true}
        },
    messages: {
        nisn: {required: "NISN harus diisi",number: "NISN harus Angka",minlength: "Minimal 10 Digit",maxlength: "Maksimal 10 Digit"},
        // asal_skl: {required: "Alamat Sekolah harus diisi",},
        // noformulir: {required: "No Formulir harus diisi"},
        prog: {required: "Program Sekolah harus diisi"},
        nohp: {required: "No Handphone harus diisi",number: "No Handphone harus Angka"},
        email: {required: "E-mail harus diisi",email: "Masukkan E-mail yang valid"},
        captcha:  "Captcha harus diisi"
        },
    errorPlacement: function(error, element) {
        error.appendTo(element.parent("td"));
        },
    submitHandler: function(form) {
        var dataForm = $("#daftar").serialize();
        var nisn = $("input[name=nisn]").val();
        // var asal_skl = $("input[name=asal_skl]").val();
        // var test = $("input[name=test]").val();
        var email = $("input[name=email]").val();
        // var noformulir = $("input[name=noformulir]").val();
        var prog = $("input[name=prog]").val();
        var nohp = $("input[name=nohp]").val();
        $.ajax({
          type:"POST",
          url:"modul/mod_daftar/daftar_action.php",
          data:dataForm,
          success: function(data){
            if(data=='berhasil'){
              window.location.href = '?module=register&id='+nisn;
            }
            else{
              // window.location.href = '?module=register&id='+nisn;
              $("#info").html(data);
              $("#info").fadeOut(5000);
            }
          }
        });
      return false;
    }
  })
});
</script>

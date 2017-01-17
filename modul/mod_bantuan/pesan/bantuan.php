<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php include_once( 'includes/meta.php'); ?>
</head>

<body>
<?php include_once( 'includes/nav.php'); ?>
<!-- Page content -->
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Form Kirim Pesan</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Bantuan</li>
          </ol>
        </div>
        <div class="col-lg-12">
	<form class="navbar-form navbar-center" method="post" action="#" id="bantuan">
	<table width="100%" border="0" align="center">
	  <tr>
		<td width="80">Nama</td>
		<td width="5">:</td>
		<td width="515" colspan="2"><input type="text" class="form-control" name="nama" id="nama" style="width: 250px"/></td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td>:</td>
		<td colspan="2"><input type="text" class="form-control" name="email" id="email" style="width: 250px"/></td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr>		
	    <td>Subjek</td>
        <td>:</td>
	    <td colspan="2"><input type="text" class="form-control" name="subjek" id="subjek" style="width: 250px"/></td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr>
		<td valign="top">Pesan</td>
		<td valign="top">:</td>
		<td colspan="2">
		<textarea name="pesan" class="form-control" id="pesan" style="width: 400px; height: 100px;"></textarea>		
		</td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
	    <td>&nbsp;</td>
	    <td><img src='captcha.php' class="img-rounded"></td>
	    <td>&nbsp;</td>
     </tr>
     <tr>
	  <td><br></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(Masukkan 6 kode diatas)</td>
        <td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="kode" class="form-control" type="text" id="kode" style="width: 165px;" /></td>
        <td>&nbsp;</td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr>
	  	  <td>&nbsp;</td>
        <td><br></br></td>
	     <td colspan="1"><input name="submit" id="submit" class="btn btn-primary" type="submit" value="SIMPAN" />
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=akun')" type="button" value="BATAL" /></td>
      </tr>
	</table>
</form>
</div>
</div>
</div>
<hr>
<?php include_once( 'includes/footer.php'); ?>
<?php include_once( 'includes/js.php'); ?>
</body>
</html>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#bantuan").validate({
		rules: {
				nama: {required: true},		
				email: {required: true,email: true},
				subjek: {required: true},	
				pesan: {required: true},
				kode:{required: true}
				},
		messages: {
				nama: {required: "Nama Harus Diisi"},		
				email: {required: "Email Harus Diisi",email: "Email Tidak VAlid"},
				subjek: {required: "Subjek Harus Diisi"},	
				pesan: {required: "Pesan Harus Diisi"},
				kode:{required: "Kode Harus Diisi"}
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				var dataForm = $("#bantuan").serialize();
				var nama = $("input[name=nama]").val();
				var email = $("input[name=email]").val();
				var subjek = $("input[name=subjek]").val();
				var pesan = $("input[name=pesan]").val();
				
				$.ajax({
					type:"POST",
					url:"modul/mod_bantuan/pesan/bantuan_action.php",
					data:dataForm,
					success: function(data){
						if(data=='berhasil'){
							$("#info").html("Pesan Telah Terkirim");
							$("#info").fadeOut(5000);
						}
						else{
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

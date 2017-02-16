<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php
include_once( 'includes/meta.php'); 
// include "modul/mod_konfirmasi/konfirmasi_action.php";
?>

</head>

<body>
<?php include_once( 'includes/nav.php'); ?>
<?
$result = mysql_query("SELECT * FROM psb_formulir ORDER BY id_formulir")or die(mysql_error());
// $row = mysql_fetch_array($sql);
?>
<!-- Page content -->
&nbsp;
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Konfirmasi Pembayaran</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Konfirmasi</li>
          </ol>
        </div>
        <div class="col-lg-12">
	<form class="navbar-form navbar-center" method="post" action="modul/mod_konfirmasi/konfirmasi_action.php" id="konfirmasi" enctype="multipart/form-data" name="konfirmasi" onSubmit="return validasi(this)">
  		<table width="100%" border="0" align="center">
      <tr>
          <td>No. Pendaftar Peserta </td>
            <td>:</td>
            <td><input type="text" class="form-control" name="nopes" id="nopes" style="width: 120px"/><span id="pesan"></span></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <tr>
          <td>No. Formulir </td>
            <td>:</td>
            <td><select name="noform" class="form-control" style="width: 200px">
                  <?php while($row= mysql_fetch_assoc($result)) { ?>
                      <option <?php if ($row['no_formulir']) { ?>selected="selected"<?php } ?>>
                          <?php echo htmlspecialchars($row['no_formulir']); ?>
                      </option>
                  <?php } ?>
                </select><span id="pesan"></span></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
        <tr>
            <td>Jenis Pembayaran </td>
            <td>:</td>
            <td><select name="jns" class="form-control" style="width: 300px">
                <option value="Formulir Pendaftaran">Formulir Pendaftaran</option>
                <option value="Biaya Lainnya">Biaya Lainnya</option>
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
            <td>Nama Bank</td>
            <td>:</td>
             <td><input type="text" class="form-control" name="nabank" id="nabank" style="width: 250px"/></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <tr>
            <td>Nama Pengirim</td>
            <td>:</td>
             <td><input type="text" class="form-control" name="narim" id="narim" style="width: 250px"/></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <tr>
            <td>No Rekening</td>
            <td>:</td>
             <td><input type="text" class="form-control" name="norek" id="norek" style="width: 250px"/></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <tr>
            <td>Total Pembayaran</td>
            <td>:</td>
             <td><input type="text" class="form-control" name="tobay" id="tobay" style="width: 250px"/></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <tr>
    <td>Tanggal Pembayaran</td>
    <td>:</td>
    <td colspan="4"><input class="form-control" style="width: 120px" name="tgl" type="text" id="tanggal" value="" size="15"/></td>
    </tr>
    <tr>
    <td><br></td>
    </tr>
    <tr>
      <td>Bukti Transfer</td>
      <td>:</td>
       <td><input class="form-control" style="width: 210px" name="data_upload" id="data_upload" type="file" size="15" /></td>
        </tr>
        <tr>
      <td><br></td>
      </tr>
      <!-- <tr>
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
   		</tr> -->
  		<tr>
			<td><button type="submit" id="submit" class="btn btn-primary"><i class="small fa fa-pencil"></i> Konfirmasi</button></td>
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
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
  $("#nopes").change(function(){ 
  $('#pesan').html("<img src='images/loader.gif' /> checking ...");
    var nopes = $("#nopes").val(); 
  $.ajax({
   type:"POST",
   url:"modul/mod_konfirmasi/konfirmasi_checking.php",
   data: "nopes=" + nopes,
   success: function(data){
     if(data==0){
       if(nopes.length == 0 || nopes.length < 9 || nopes.length > 9){
         $('#pesan').html("");
         $('#nopes').css('border', '1px #C33 solid');
       }
       else{
         $("#pesan").html('<img src="images/cross.png"> No Peserta Tidak Ada');
         $('#nopes').css('border', '1px #C33 solid'); 
         $("#submit").fadeIn();
       }
     }  
     else{
       $("#pesan").html('<img src="images/tick.png"> No Peserta Ada');       
       $('#nopes').css('border', '1px #090 solid'); 
         $("#submit").fadeIn();
     }
   }
  });
  })
});
</script>
<script language="javascript">
function validasi(form){
  var number=/^[0-9]+$/;

  if (form.nopes.value == ""){
    alert("Anda belum mengisikan No Peserta.");
    form.nopes.focus();
    return (false);
  }
  if (form.noform.value == ""){
    alert("Anda belum mengisikan No Formulir.");
    form.noform.focus();
    return (false);
  }
  if (form.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form.email.focus();
    return (false);
  }
  if (form.nabank.value == ""){
    alert("Anda belum mengisikan Nama Bank.");
    form.nabank.focus();
    return (false);
  }
  if (form.narim.value == ""){
    alert("Anda belum mengisikan Nama Pengirim.");
    form.narim.focus();
    return (false);
  }
  if (form.norek.value == "" || form.norek.value == null){
    alert("Anda belum mengisikan No Rekening.");
    form.norek.focus();
    return (false);
  }
  if (!form.norek.value.match(number)){
    alert("Anda harus mengisikan No Rekening dengan angka.");
    form.norek.focus();
    return (false);
  }
  if (form.tobay.value == "" || form.tobay.value == null){
    alert("Anda belum mengisikan Total Bayar.");
    form.tobay.focus();
    return (false);
  }
  if (!form.tobay.value.match(number)){
    alert("Anda harus mengisikan Total Bayar dengan angka.");
    form.tobay.focus();
    return (false);
  }   
  if (form.data_upload.value == ""){
    alert("Anda belum mengisikan Total Bayar.");
    form.data_upload.focus();
    return (false);
  }     
  if (form.tgl.value == ""){
    alert("Anda belum mengisikan Password.");
    form.tgl.focus();
    return (false);
  }
  return (true);
}
</script>
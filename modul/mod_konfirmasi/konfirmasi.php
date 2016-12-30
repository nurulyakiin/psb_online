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
<?
$result = mysql_query("SELECT * FROM psb_formulir ORDER BY id_formulir")or die(mysql_error());
// $row = mysql_fetch_array($sql);
?>
<!-- Page content -->
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
	<form class="navbar-form navbar-center" method="post" action="#" id="konfirmasi">
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
                <option value="MOS">MOS</option>
                <option value="SPP">SPP</option>
                <option value="Seragam">Seragam</option>
                <option value="LKS Semester 1">LKS Semester 1</option>
                <option value="Atribut">Atribut</option>
                <option value="Cover Ijazah">Cover Ijazah</option>
                <option value="Kartu Pelajar & Photo">Kartu Pelajar & Photo</option>
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
			<td><button type="submit" id="submit" class="btn btn-primary"><i class="small fa fa-pencil"></i> Daftar</button></td>
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

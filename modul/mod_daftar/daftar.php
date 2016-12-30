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

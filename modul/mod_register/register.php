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
include "config/koneksi.php";

$nisn = $_GET['id'];

$sql = mysql_query("select*from psb_formulir where nisn='$nisn'")or die(mysql_error());
$row=mysql_fetch_array($sql);

?>

<!-- Page content -->
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Selamat ! Pendaftaran Sukses</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Daftar</li>
          </ol>
        </div>
        <div class="col-lg-12">
	<form class="navbar-form navbar-center" method="POST" action="#" id="bantuan" name="bantuan">
	<table width="100%" border="0" align="center">
  	<tr>
    		<td width="5%"><img src="images/warn.png" width="16" height="16" /></td>
    		<td colspan="5"><span class="style1">Catat no peserta dan password dibawah ini, untuk melanjutkan klik</span> <a href="?module=login">Login </a></td>
  	</tr>
  	<tr>
    		<td><img src="images/warn.png" width="16" height="16" /></td>
    		<td colspan="5"><span class="style1">Daftar sekali saja. Untuk mengubah/ edit data masuk lewat login dengan no peserta dan password dibawah ini </span></td>
  	</tr>
  	<tr>
    		<td colspan="6">&nbsp;</td>
  	</tr>
  	<tr>
    		<td >No Formulir</td>
    		<td width="11%">&nbsp;</td>
    		<td width="1%">:</td>
    		<td width="81%"><?= $row['no_formulir']?></td>
    		<td colspan="2">&nbsp;</td>
  	</tr>
  	<tr>
    		<td colspan="2">No. Peserta </td>
    		<td>:</td>
    		<td><?= $row['no_peserta']?></td>
    		<td colspan="2">&nbsp;</td>
  	</tr>
  	<tr>
    		<td colspan="2">Password:</td>
   		<td>:</td>
    		<td><?= $row['pass_view']?></td>
    		<td colspan="2">&nbsp;</td>
  	</tr>
  	<tr>
    		<td colspan="4">&nbsp;</td>
    		<td width="1%">&nbsp;</td>
  	</tr>
  	<tr>
    		<td><img src="images/right_16.png" width="16" height="16" /></td>
    		<td colspan="5">Silahkan login dan melengkapi persyaratan selanjutnya </td>
  	</tr>
  	<tr>
    		<td><img src="images/right_16.png" width="16" height="16" /></td>
    		<td colspan="5">Jangan lupa mencatat nomor peserta dan password </td>
  	</tr>
</table>
</form>
</div>
</div>
</div>
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
<html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

</head>

<body>
<?php include 'includes/nav.php'; ?>
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Login Peserta</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Login</li>
          </ol>
        </div>
	<div id="info" align="center"></div>
        <div class="col-lg-12">
	   <form class="navbar-form navbar-center" method="post" action="#" id="login">
  		<table width="500" border="0">
		<tr>
	  		<td width="75">Nomor Peserta</td>
	  		<td width="3">:</td>
	  		<td width="144"><input type="text" class="form-control" name="no_peserta" id="no_peserta" style="width: 200px" placeholder="Masukkan Nomor Peserta" /></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
	  		<td width="75">Kata Sandi</td>
	  		<td width="3">:</td>
	  		<td width="144"><input type="password" class="form-control" name="password" id="password" style="width: 200px" placeholder="Masukkan Kata Sandi" /></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
    			<td>&nbsp;</td>	
			<td><button name="submit" type="submit" id="submit" class="btn btn-primary">Login</button></td>
		</tr>
  		</table>
	   </form>
	</div>
      </div>
</div>
<hr>
<?php include_once( 'includes/footer.php'); ?>
</body>
</html>

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
          <h1 class="page-header">Cetak Surat</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Cetak</li>
          </ol>
        </div>
        <div class="col-lg-12">
		<div class="container">
			<div class="col-lg-12 col-md-3 intro-marketing-box" align="center">
				<p class="center"><a href="modul/mod_surat/f_surat.php?id=<?= $_SESSION[no_peserta] ?>" class="btn btn-primary fa fa-5x fa-border fa-print"></a>
				<h4 class="center">Cetak Surat Pernyataan</span></h4>
				<p class="center">Anda dapat mencetak dokumen setelah mengisi biodata. </p><br/>
			</div>
		</div>
	</div>
</div>
</div>
<hr>

<?php include_once( 'includes/footer.php'); ?>
<?php include_once( 'includes/js.php'); ?>
</body>

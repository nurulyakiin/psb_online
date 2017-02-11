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
          <h1 class="page-header">Jadwal Sementara</h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Jadwal</li>
          </ol>
        </div>
        <div class="col-lg-12">

  	                <!-- <div class="col-lg-4 col-md-4 "> -->
                    <!-- Begin MailChimp Signup Form -->
                    <!-- <div id="mc_embed_signup">
                       	<form method="GET" action='<?php echo $_SERVER['PHP_SELF'];?>'>
             	      		<input type="hidden" name="module" value="pendaftar"/>
                            <div class="input-group">
					        	<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkkan nama..." required>
					            <span class="input-group-btn"><button type="submit" id="cari" class="btn btn-primary">&nbsp;<i class="small fa fa-search"></i>&nbsp;</button></span>
                            </div>
                        </form>
                    <div><br></div>
                    </div> -->
                    <!-- End MailChimp Signup Form -->
                <!-- </div> -->
	<div>

	<div><br></div>
	</div>
	<table class="table table-bordered table-hover">
	<thead>
	    <tr class="active">
		<th style="text-align: center" scope="col">No</th>
		<th style="text-align: center" scope="col">Kelas</th>
		<th style="text-align: center" scope="col">Jadwal</th>
	    </tr>
	</thead>
	<tbody>
	<?
 	if (empty($_GET['nama'])){
	 $page		= new Paging;
	 $batas 	= 10;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_jadwalsementara AS a JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa JOIN psb_formulir AS c ON b.id_formulir=c.id_formulir WHERE c.no_peserta='$_SESSION[no_peserta]' ORDER BY id_jadwal ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		// if  ($items['sts_verifikasi']==0){
		// 	$ver = "Belum";
		// }
		// else{
		// 	$ver = "Sudah";
		// }
		echo "<tr>
					<td style='text-align: center'>$no</td>
					<td style='text-align: center'>$items[kelas]</td>
					<td style='text-align: justify'>$items[jadwal]</td>
			 </tr>";
		$no++;
	 } 

	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_jadwalsementara"));
	$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
	?>
	<?
	}
	else{
	$page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_jadwalsementara WHERE nama LIKE '%$_GET[nama]%' ORDER BY id_jadwal ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		if  ($items['sts_verifikasi']==0){
			$ver = "Belum";
		}
		else{
			$ver = "Sudah";
		}
		echo "<tr>
					<td style='text-align: center'>$no</td>
					<td style='text-align: center'>$items[no_peserta]</td>
					<td>".BesarKalimat($items['nama'])."</td>
					<td>".BesarKalimat($items['asal_skl'])."</td>
					<td style='text-align: center'>$ver</td>
			 </tr>";
		$no++;
	 } 
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM psb_jadwalsementara WHERE nama LIKE '%$_GET[nama]%'"));
	 $jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	 $linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
	}
	?>
	</tbody>
	</table>
	
	<!-- <div class="col-lg-12" align="center">
		<div class='btn-group'>
            <div class="btn-group"><a class="btn btn-default disabled"><?php CPendaftar('psb_jadwalsementara');?>&nbsp;Pendaftar</a></div>
            <div class="btn-group"><a class="btn btn-default disabled"><?php SVerifikasi('psb_jadwalsementara');?>&nbsp; Sudah Verifikasi</a></div>
            <div class="btn-group"><a class="btn btn-default disabled"><?php BVerifikasi('psb_jadwalsementara');?>&nbsp; Belum Verifikasi</a></div>
   		</div>
		<div><br></div>
		<? echo "$linkhalaman";?>
    </div>
    <div><br></div> -->
</div>	
</div>
</div>
</div>
<hr>
<?php include_once( 'includes/footer.php'); ?>
<?php include_once( 'includes/js.php'); ?>
</body>
</html>

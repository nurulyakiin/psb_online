<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML Starter Templates and Themes for Bootstrap - Up to date for Bootstrap 3! An even faster way to develop websites in Bootstrap!">

<?php include_once( 'includes/meta.php'); ?>
</head>

<body>

<?php include_once( 'includes/nav.php'); ?>

    <!-- Masthead -->
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
		    <h1 id="logo" class="text-center">
			<img class="img-polaroid" src="images/logo.png" alt="">
		    </h1>
                    <h1>SMA Mitra Bintaro</h1>
                    <h3>Sistem Informasi Penerimaan Peserta Didik Baru Online</h3>
                    <p>Dukungan penuh memudahkan bagi Calon Peserta Didik Baru untuk mendaftarkan diri, mengisi formulir dan mengikuti tes seleksi.</a>
                    </p>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?include "msg.php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro home page content -->
    <div class="intro-marketing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 intro-marketing-box">
                    <h2><i class="fa fa-users"></i> Lihat Pendaftar</h2>
                    <p>Daftar Peserta yang telah mendaftar untuk mengikuti seleksi Peserta Didik Baru.<a href="#"> Lihat Pendaftar</a></p>
                </div>
		        <div class="col-lg-4 col-md-4 intro-marketing-box">
                    <h2><i class="fa fa-envelope"></i> Bantuan Pendaftaran</h2>
                    <p>Tanya jawab Online seputar pendaftaran dengan panitia Penerimaan Peserta Didik Baru.<a href="?module=pesan"> Kirim Pesan</a></p>
                </div>
                <div class="col-lg-4 col-md-4 intro-marketing-box">
                    <h2><i class="fa fa-user"></i> Sudah Punya Akun</h2>
                    <p>Setelah melakukan pendaftaran dan memiliki akun, kamu dapat mengatur data pribadi.<a href="media.php?module=login"> Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="templates">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h2 class="page-header">Informasi Pendaftaran :</h2>
                </div>

                <div class="col-md-4">
                    <div class="preview">
                        <a class="thumbnail" href="grayscale.php">
                            <img src="img/grayscale.jpg" class="img-responsive" alt="Free Bootstrap Responsive One Page Theme">
                        </a>
                        <h3>Brosur Kurikulum</h3>
                        <p>Kurikulum tahun ajaran 2014-2015 SMA Mitra Bintaro . dengan standar kompetensi Dikti dan Mendagri</p>
                        <div class="btn-group"><a class="btn btn-primary" href="grayscale.php">Lihat &amp; Unduh</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="preview">
                        <a class="thumbnail" href="sb-admin-v2.php">
                            <img src="img/sb-admin-v2.jpg" class="img-responsive" alt="Free Bootstrap Admin Template for Bootstrap 3">
                        </a>
                        <h3>Brosur Biaya Pendaftaran</h3>
                        <p>A <em>SMK Duta Merlin </em> memberikan biaya pendidikan yang terjangkau.</p>
                        <div class="btn-group"><a class="btn btn-primary" href="sb-admin-v2.php">Lihat &amp; Unduh</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="preview">
                        <a class="thumbnail" href="landing-page.php">
                            <img src="img/landing-page.jpg" class="img-responsive" alt="Free Landing Page Template for Bootstrap 3">
                        </a>
                        <h3>Brosur Bidang Kompetensi</h3>
                        <p>Dengan Pembelajaran kepada kompetensi unggul, diharapkan lulusan memiliki keahlian dibidangnya.</p>
                        <div class="btn-group"><a class="btn btn-primary" href="landing-page.php">Lihat &amp; Unduh</a></div>
                    </div>
                </div>

            </div>

        </div>
    </div>

<hr>

<?php include_once( 'includes/footer.php'); ?>
<?php include_once( 'includes/js.php'); ?>

</body>

</html>

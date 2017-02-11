-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Feb 2017 pada 23.55
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_admin`
--

CREATE TABLE `psb_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `name` int(11) NOT NULL,
  `alamat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `islogin` int(11) NOT NULL,
  `isenable` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `psb_admin`
--

INSERT INTO `psb_admin` (`admin_id`, `username`, `password`, `name`, `alamat`, `last_login`, `islogin`, `isenable`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'bandung', '2017-02-11 12:48:41', 1, 1),
(22, 'opix', 'adb81d738d2dccc004ab8773beb8a226', 1, 'Jl. Antapani No.10 Bandung', '2012-05-26 23:15:24', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_dataorangtua`
--

CREATE TABLE `psb_dataorangtua` (
  `id_dataorangtua` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `nama_ayah` varchar(35) NOT NULL,
  `nama_ibu` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `ttl_ayah` varchar(50) NOT NULL,
  `ttl_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(35) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(35) NOT NULL,
  `pendidikan_ayah` varchar(15) NOT NULL,
  `pendidikan_ibu` varchar(15) NOT NULL,
  `agama_ayah` varchar(15) NOT NULL,
  `agama_ibu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_dataorangtua`
--

INSERT INTO `psb_dataorangtua` (`id_dataorangtua`, `id_keterangansiswa`, `nama_ayah`, `nama_ibu`, `alamat`, `no_telp`, `ttl_ayah`, `ttl_ibu`, `pekerjaan_ayah`, `penghasilan`, `pekerjaan_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `agama_ayah`, `agama_ibu`) VALUES
(12, 5, 'sdvfsd', 'vsd', ' vfv', '324345', 'sdfdsf, 2017-01-25', 'dsfds, 2017-01-25', 'sdfs', '34235', 'sdfds', 'sdsf', 'sdfs', 'fsff', 'dff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_dokumen`
--

CREATE TABLE `psb_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filesize` bigint(20) NOT NULL,
  `filetype` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_dokumen`
--

INSERT INTO `psb_dokumen` (`id_dokumen`, `id_keterangansiswa`, `filename`, `filesize`, `filetype`, `location`) VALUES
(1, 5, '1.jpg', 1039736, 'image/jpeg', '/psb_online/images/document/1.jpg'),
(2, 5, '6.jpg', 2060153, 'image/jpeg', '/psb_online/images/document/6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_formulir`
--

CREATE TABLE `psb_formulir` (
  `id_formulir` int(11) NOT NULL,
  `no_peserta` int(50) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `no_formulir` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `program_keahlian` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pass_view` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` int(11) NOT NULL,
  `sts_verifikasi` int(11) NOT NULL DEFAULT '0',
  `sts_seleksi` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `psb_formulir`
--

INSERT INTO `psb_formulir` (`id_formulir`, `no_peserta`, `nisn`, `no_formulir`, `program_keahlian`, `no_hp`, `email`, `password`, `pass_view`, `tgl_daftar`, `status`, `sts_verifikasi`, `sts_seleksi`) VALUES
(100, 201701002, 1233465789, '002/PSB/SMA/2017', 'IPS', '0987654997', 'imanoog0@gmail.coom', '331b3641997f20c152024e2ecb014c26', 'V3sFCjRn', '2017-01-25', 1, 1, 0),
(99, 201701001, 2234432421, '001/PSB/SMA/2017', 'IPA', '0987654997', 'iibnusalam0@gmail.com', '541ffb9fd5aa6260b27fbe4e003c5e99', '0TzLlAok', '2017-01-25', 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_info`
--

CREATE TABLE `psb_info` (
  `info_id` int(11) NOT NULL,
  `info` text COLLATE latin1_general_ci NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `psb_info`
--

INSERT INTO `psb_info` (`info_id`, `info`, `aktif`) VALUES
(1, '<p><strong>Jadwal</strong> Sementara bisa di lihat di bagian <strong>HOME</strong>, jika tidak muncul dalam <strong>3 hari</strong>, harap kirim <strong>pesan / bantuan</strong>. Dengan catatan sudah melengkapi semua data dan dokumen.</p>\n', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_jadwalsementara`
--

CREATE TABLE `psb_jadwalsementara` (
  `id_jadwal` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `jadwal` text NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_jadwalsementara`
--

INSERT INTO `psb_jadwalsementara` (`id_jadwal`, `id_keterangansiswa`, `jadwal`, `kelas`, `aktif`) VALUES
(1, 5, '<p>fdddf</p>\n\n<p>dfd</p>\n\n<p>df</p>\n\n<p>f</p>\n\n<p>f</p>\n', 'X2', 1),
(2, 4, '<p><strong>PROSEDUR PSB SMA Mitra Bintaro</strong></p>\n\n<p>Agar terjadi tertib dalam pelaksanaan Penerimaan Siswa Baru di SMA Mitra Bintaro, maka proses pendaftaran diatur dengan langkah-langkah sebagai berikut:</p>\n\n<ol>\n	<li>Kunjungi laman <a href="http://psb-smamitrabintaro.web.id">http://psb-smamitrabintaro.web.id</a></li>\n	<li>Pilih menu Daftar untuk mengisi data pendaftaran, saat berhasil daftar Anda akan menerima email resmi dari pihak sekolah yang berisi No. Formulir, No. Peserta dan Password</li>\n	<li>Lakukan pembayaran FORMULIR sebesar Rp 100.000;- via ATM ke nomor rekening BNI 301868760 a.n. SMA MITRA BINTARO untuk dapat login dan pengisian data pendaftaran.</li>\n	<li>Lakukan Konfirmasi Pembayaran pada menu Konfirmasi</li>\n	<li>Setelah berhasil Login, isi data dan syarat pendaftaran secara lengkap.</li>\n	<li>&nbsp;Diharuskan untuk melunasi biaya-biaya pendaftaran Lainnya sebesar Rp. 1.025.000;- via ATM ke nomor rekening BNI 301868760 a.n. SMA MITRA BINTARO sebagai syarat pembagian kelas dan untuk mendapatkan jadwal sementara.</li>\n	<li>&nbsp;Kembali lakukan Konfirmasi Pembayaran Biaya-biaya lain.</li>\n	<li>&nbsp;Jadwal Sementara dapat berubah dengan pemberitahuan dari pihak sekolah disusul dengan jadwal MOS (Masa Orientasi Siswa).</li>\n</ol>\n', 's', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_keterangansiswa`
--

CREATE TABLE `psb_keterangansiswa` (
  `id_keterangansiswa` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `nama_penggilan` varchar(10) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `tempat_tgllahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `seragam` varchar(5) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tinggi_badan` varchar(4) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `riwayat_penyakit` varchar(50) NOT NULL,
  `kelainan_jasmani` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `anak_ke` varchar(3) NOT NULL,
  `jumlah_saudara` varchar(3) NOT NULL,
  `status_anak` varchar(15) NOT NULL,
  `bahasa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_keterangansiswa`
--

INSERT INTO `psb_keterangansiswa` (`id_keterangansiswa`, `id_formulir`, `nama_lengkap`, `nama_penggilan`, `nisn`, `tempat_tgllahir`, `alamat`, `no_telp`, `jenis_kelamin`, `seragam`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `riwayat_penyakit`, `kelainan_jasmani`, `agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `status_anak`, `bahasa`) VALUES
(4, 99, 'fdsfds', 'fsdfse', '2234432421', 'sefd 2017-01-25', ' dsfsdf', '43543646345', 'Pria', 'S', '12', '123', 'O', 'sdwf', 'efe', 'islam', 'WNI', '1', '2', 'Kandung', 'sdfdsf'),
(5, 100, 'dsvfdsv', 'sdfvsd', '1233465789', 'sfsdv 2017-01-01', ' dsvdsv', '343534536546', 'Pria', 'S', '12', '123', 'O', 'dsfds', 'sdfsv', 'islam', 'WNI', '1', '2', 'Kandung', 'sdfvsdfv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_konfirmasi`
--

CREATE TABLE `psb_konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `no_perserta` int(50) NOT NULL,
  `no_formulir` varchar(50) NOT NULL,
  `nama_pembayaran` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `jenis_pembayarn` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `tgl_pembayaran` varchar(30) NOT NULL,
  `bukti_tf` text NOT NULL,
  `detail` text NOT NULL,
  `folder` text NOT NULL,
  `dateupload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_konfirmasi`
--

INSERT INTO `psb_konfirmasi` (`id_konfirmasi`, `no_perserta`, `no_formulir`, `nama_pembayaran`, `nama_bank`, `total_pembayaran`, `jenis_pembayarn`, `no_rek`, `tgl_pembayaran`, `bukti_tf`, `detail`, `folder`, `dateupload`) VALUES
(6, 201701002, '002/PSB/SMA/2017', 'fsd', 'bsd', 150000, 'MOS', '43546', '2017-02-08', '', '', '', ''),
(7, 201701002, '002/PSB/SMA/2017', 'dsfvdfb', 'dsvfdfs', 100000, 'Formulir Pendaftaran', '345435', '2017-02-08', '', '', '', ''),
(8, 201701002, '002/PSB/SMA/2017', 'dsf', 'sdfdsf', 10250000, 'Biaya Lainnya', '43534', '2017-02-11', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_kontak`
--

CREATE TABLE `psb_kontak` (
  `ktk_id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tggl` date NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `psb_kontak`
--

INSERT INTO `psb_kontak` (`ktk_id`, `nama`, `email`, `subjek`, `pesan`, `tggl`, `aktif`) VALUES
(1, 'opix', 'fxcs_dispose@yahoo.com', 'Alur PDB', 'Bagaimana bla bla bla', '2011-10-10', 1),
(2, 'Widya', 'widya@yahoo.com', 'Verifikasi', 'Bagaimana Cara Verifikasi?', '2011-10-11', 1),
(8, 'fxcs', 'fxcs@opix.com', 'maknyusss', 'minta sourcenya dung', '2012-03-27', 1),
(9, 'asdasd', 'asdasd@dfsfsf.dfgd', 'fgdgsdghsdhs', 'hsghsghghsdhg', '2012-04-16', 1),
(10, 'Ibnu', 'iibnusalam0@gmail.com', 'Test', 'retre', '2016-12-26', 0),
(11, 'Test', 'iibnusalam0@gmail.com', 'sfdf', 'fvds', '2016-12-26', 1),
(12, 'Ibnu', 'iibnusalam0@gmail.com', 'Test', 'dssd', '2016-12-26', 1),
(13, 'Ibnu Salam', 'iibnusalam0@gmail.com', 'Test', 'dsfds', '2017-01-20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_menu`
--

CREATE TABLE `psb_menu` (
  `main_id` int(5) NOT NULL,
  `menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status_in` int(11) NOT NULL,
  `status_out` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_menu`
--

INSERT INTO `psb_menu` (`main_id`, `menu`, `link`, `aktif`, `status_in`, `status_out`) VALUES
(1, 'Home', '?module=home', 'Y', 1, 1),
(2, 'Daftar', '?module=daftar', 'Y', 0, 1),
(4, 'Pengumuman', '?module=pengumuman', 'N', 1, 1),
(5, 'Akun', '?module=akun', 'Y', 1, 0),
(6, 'Login', '?module=login', 'Y', 0, 1),
(12, 'Logout', '?module=logout', 'Y', 1, 0),
(7, 'Bantuan', '?module=pesan', 'Y', 1, 1),
(9, 'Konfirmasi', '?module=konfirmasi', 'Y', 0, 1),
(8, 'Surat Pernyataan', '?module=surat', 'Y', 1, 0),
(11, 'Status Pembayaran', '?module=pay', 'Y', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_pendidikan`
--

CREATE TABLE `psb_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tanggal_sttb` varchar(25) NOT NULL,
  `lama_belajar` varchar(10) NOT NULL,
  `tanggal_diterima` varchar(25) NOT NULL,
  `pindahan_dari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_pendidikan`
--

INSERT INTO `psb_pendidikan` (`id_pendidikan`, `id_keterangansiswa`, `asal_sekolah`, `tanggal_sttb`, `lama_belajar`, `tanggal_diterima`, `pindahan_dari`) VALUES
(6, 5, 'sdfdsf', 'sdfvsdv, 12,212,', '2', '2017-01-25', 'sdvfdsv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_submenu`
--

CREATE TABLE `psb_submenu` (
  `sub_id` int(5) NOT NULL,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `main_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_submenu`
--

INSERT INTO `psb_submenu` (`sub_id`, `nama_sub`, `link_sub`, `main_id`) VALUES
(1, 'Lengkapi Biodata', '?module=biodata', 5),
(2, 'Alamat', '?module=alamat', 5),
(3, 'Pendidikan', '?module=pendidikan', 5),
(10, 'Alur PPDB', '?module=alur', 15),
(11, 'Persyaratan', '?module=syarat', 15),
(12, 'Kirim Pesan', '?module=pesan', 7),
(4, 'Orang Tua', '?module=ortu', 5),
(5, 'Wali', '?module=wali', 5),
(13, 'Document', '?module=docu', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_tempattinggal`
--

CREATE TABLE `psb_tempattinggal` (
  `id_tempattinggal` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `tinggal_dengan` varchar(10) NOT NULL,
  `jarak` varchar(10) NOT NULL,
  `berangkat_dengan` varchar(25) NOT NULL,
  `referensi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_tempattinggal`
--

INSERT INTO `psb_tempattinggal` (`id_tempattinggal`, `id_keterangansiswa`, `tinggal_dengan`, `jarak`, `berangkat_dengan`, `referensi`) VALUES
(4, 5, 'Orang Tua', '12', 'Umum', 'sdfdsv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psb_wali`
--

CREATE TABLE `psb_wali` (
  `id_wali` int(11) NOT NULL,
  `id_keterangansiswa` int(11) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_wali`
--

INSERT INTO `psb_wali` (`id_wali`, `id_keterangansiswa`, `nama_wali`, `alamat_wali`, `no_telp`, `ttl`, `pekerjaan`) VALUES
(4, 5, 'dsfds', ' rv', '32435435', 'dsfsdf, 2017-01-25', 'sdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psb_admin`
--
ALTER TABLE `psb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `psb_dataorangtua`
--
ALTER TABLE `psb_dataorangtua`
  ADD PRIMARY KEY (`id_dataorangtua`);

--
-- Indexes for table `psb_dokumen`
--
ALTER TABLE `psb_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `psb_formulir`
--
ALTER TABLE `psb_formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `psb_info`
--
ALTER TABLE `psb_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `psb_jadwalsementara`
--
ALTER TABLE `psb_jadwalsementara`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `psb_keterangansiswa`
--
ALTER TABLE `psb_keterangansiswa`
  ADD PRIMARY KEY (`id_keterangansiswa`);

--
-- Indexes for table `psb_konfirmasi`
--
ALTER TABLE `psb_konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `psb_kontak`
--
ALTER TABLE `psb_kontak`
  ADD PRIMARY KEY (`ktk_id`);

--
-- Indexes for table `psb_menu`
--
ALTER TABLE `psb_menu`
  ADD PRIMARY KEY (`main_id`);

--
-- Indexes for table `psb_pendidikan`
--
ALTER TABLE `psb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `psb_submenu`
--
ALTER TABLE `psb_submenu`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `psb_tempattinggal`
--
ALTER TABLE `psb_tempattinggal`
  ADD PRIMARY KEY (`id_tempattinggal`);

--
-- Indexes for table `psb_wali`
--
ALTER TABLE `psb_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psb_admin`
--
ALTER TABLE `psb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `psb_dataorangtua`
--
ALTER TABLE `psb_dataorangtua`
  MODIFY `id_dataorangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `psb_dokumen`
--
ALTER TABLE `psb_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `psb_formulir`
--
ALTER TABLE `psb_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `psb_info`
--
ALTER TABLE `psb_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `psb_jadwalsementara`
--
ALTER TABLE `psb_jadwalsementara`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `psb_keterangansiswa`
--
ALTER TABLE `psb_keterangansiswa`
  MODIFY `id_keterangansiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `psb_konfirmasi`
--
ALTER TABLE `psb_konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `psb_kontak`
--
ALTER TABLE `psb_kontak`
  MODIFY `ktk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `psb_menu`
--
ALTER TABLE `psb_menu`
  MODIFY `main_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `psb_pendidikan`
--
ALTER TABLE `psb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `psb_submenu`
--
ALTER TABLE `psb_submenu`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `psb_tempattinggal`
--
ALTER TABLE `psb_tempattinggal`
  MODIFY `id_tempattinggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `psb_wali`
--
ALTER TABLE `psb_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

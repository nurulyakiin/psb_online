-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2017 pada 01.43
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'bandung', '2017-01-21 08:32:11', 1, 1),
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
(2, 3, 'dsfdsf', 'df', ' dsf', '35435', 'sdfsdf 2016-12-07', 'sdfdsf 2016-12-04', 'sdfd', '345', 'sdfds', '0', 'sdf', 'sdf', 'sdf'),
(4, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(5, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(6, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(7, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(8, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(9, 0, '', '', '', '', ', ', ', ', '', '', '', '', '', '', ''),
(10, 6, 'dscds', 'sdc', 'dsdr', '456456', 'dfdf, 2017-01-20', 'dscfdsv, 2017-01-01', 'fdvdf', 'dfvbdf', 'dfb', 'dfb', 'dfv', 'dfvb', 'dfv'),
(11, 6, 'dscds', 'sdc', 'dsdr', '456456', 'dfdf, 2017-01-20', 'dscfdsv, 2017-01-01', 'fdvdf', 'dfvbdf', 'dfb', 'dfb', 'dfv', 'dfvb', 'dfv');

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
(2, 3, 'Share.jpg', 244112, 'image/jpeg', '/psb-baru/images/document/Share.jpg'),
(3, 3, 'Cetak KTMS.jpg', 68355, 'image/jpeg', '/psb-baru/images/document/Cetak KTMS.jpg'),
(4, 3, 'IMG_20160903_105941.jpg', 70580, 'image/jpeg', '/psb-baru/images/document/IMG_20160903_105941.jpg'),
(5, 3, 'IMG_20160903_105941.jpg', 70580, 'image/jpeg', '/psb-baru/images/document/IMG_20160903_105941.jpg'),
(6, 6, 'WhatsApp Image 2017-01-16 at 14.02.01.jpeg', 115445, 'image/jpeg', '/psb_online/images/document/WhatsApp Image 2017-01-16 at 14.02.01.jpeg'),
(7, 6, 'WhatsApp Image 2017-01-16 at 12.35.46.jpeg', 103286, 'image/jpeg', '/psb_online/images/document/WhatsApp Image 2017-01-16 at 12.35.46.jpeg'),
(8, 6, 'screenshot-member.idwebhost.com 2017-01-15 12-34-10.jpeg', 655013, 'image/jpeg', '/psb_online/images/document/screenshot-member.idwebhost.com 2017-01-15 12-34-10.jpeg'),
(9, 6, 'screenshot-member.idwebhost.com 2017-01-15 12-11-44.jpeg', 436912, 'image/jpeg', '/psb_online/images/document/screenshot-member.idwebhost.com 2017-01-15 12-11-44.jpeg'),
(10, 6, 'New Doc - Page 1.jpg', 602594, 'image/jpeg', '/psb_online/images/document/New Doc - Page 1.jpg'),
(11, 6, 'CVREKRUTMEN2017.docx', 35159, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '/psb_online/images/document/CVREKRUTMEN2017.docx'),
(12, 6, 'WhatsApp Image 2017-01-16 at 14.02.01.jpeg', 115445, 'image/jpeg', '/psb_online/images/document/WhatsApp Image 2017-01-16 at 14.02.01.jpeg');

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
(98, 201701002, 1234567865, '002/PSB/SMA/2017', 'IPA', '0987654997', 'imanoog0@gmail.coom', '615f165f031c2b13139d0d7c6e201a19', 'fMv2ZmrY', '2017-01-19', 1, 1, 0),
(96, 201612002, 2234432421, '002/PSB/SMA/2016', 'IPA', '07877456456', 'iibnusalam0@gmail.com', '337801ba2077415b722bdd9a6bab125a', 'HE507NSw', '2016-12-04', 0, 1, 0);

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
(7, 3, '<ol>\n	<li>Klik pada tombol&nbsp;<strong>Beli</strong> pada produk yang ingin Anda pesan.</li>\n	<li>Produk yang Anda pesan akan masuk ke dalam <strong>Keranjang Belanja</strong>. Anda dapat melakukan perubahan jumlah produk yang diinginkan dengan mengganti angka di kolom <strong>Jumlah</strong>, kemudian klik tombol <strong>Update</strong>. Sedangkan untuk menghapus sebuah produk dari Keranjang Belanja, klik tombol Kali yang berada di kolom paling kanan.</li>\n	<li>Jika sudah selesai, klik tombol <strong>Selesai Belanja</strong>, maka akan tampil form untuk pengisian data kustomer/pembeli.</li>\n	<li>Setelah data pembeli selesai diisikan, klik tombol <strong>Proses</strong>, maka akan tampil data pembeli beserta produk yang dipesannya (jika diperlukan catat nomor ordernya). Dan juga ada total pembayaran serta nomor rekening pembayaran.</li>\n	<li>Apabila telah melakukan pembayaran, lalu pembeli konfirmasi pembayaran secara online, menu konfirmasi akan tampil setelah pelanggan masuk/login, maka produk/barang akan segera kami kirimkan.</li>\n</ol>\n', 'X1', 1),
(8, 3, '<ol>\n	<li>Klik pada tombolÂ <strong>Beli</strong> pada produk yang ingin Anda pesan.</li>\n	<li>Produk yang Anda pesan akan masuk ke dalam <strong>Keranjang Belanja</strong>. Anda dapat melakukan perubahan jumlah produk yang diinginkan dengan mengganti angka di kolom <strong>Jumlah</strong>, kemudian klik tombol <strong>Update</strong>. Sedangkan untuk menghapus sebuah produk dari Keranjang Belanja, klik tombol Kali yang berada di kolom paling kanan.</li>\n	<li>Jika sudah selesai, klik tombol <strong>Selesai Belanja</strong>, maka akan tampil form untuk pengisian data kustomer/pembeli.</li>\n	<li>Setelah data pembeli selesai diisikan, klik tombol <strong>Proses</strong>, maka akan tampil data pembeli beserta produk yang dipesannya (jika diperlukan catat nomor ordernya). Dan juga ada total pembayaran serta nomor rekening pembayaran.</li>\n	<li>Apabila telah melakukan pembayaran, lalu pembeli konfirmasi pembayaran secara online, menu konfirmasi akan tampil setelah pelanggan masuk/login, maka produk/barang akan segera kami kirimkan.</li>\n</ol>\n', 'X1', 1);

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
(3, 96, 'dsfdsf', 'sdf', '2234432421', 'sdf 2016-12-04', ' sdf', '35345', 'Pria', '', '12', '123', 'A', 'dsfsdsdf', 'sdf', 'islam', 'WNI', '2', '2', 'Kandung', 'cxvf');

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
  `tgl_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psb_konfirmasi`
--

INSERT INTO `psb_konfirmasi` (`id_konfirmasi`, `no_perserta`, `no_formulir`, `nama_pembayaran`, `nama_bank`, `total_pembayaran`, `jenis_pembayarn`, `no_rek`, `tgl_pembayaran`) VALUES
(2, 201612002, '002/PSB/SMA/2016', 'fdb', 'dvdf', 100222, 'a', '3456', '2016-12-18'),
(3, 201701002, '002/PSB/SMA/2017', 'fdb', 'dvdf', 100000000, 'Formulir Pendaftaran', '3456', '2016-12-18');

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
(1, 3, 'fddr', '09/09/2007, ddr', '2013', '2017-01-07', 'dssd'),
(2, 6, 'dfsd', 'sdsd, 43543', '2', '2017-01-20', 'drydj'),
(3, 3, 'sdcds', 'dsv, 4645', '3', '2017-01-20', 'dvfdv'),
(4, 6, 'sfdsf', 'sdf, 4354', '3', '2017-01-20', 'dsfdsf'),
(5, 6, 'dfdr', 'dr, 345', '3', '2017-01-20', 'dsfds');

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
(1, 3, 'Orang Tua', '12', 'Umum', 'sdds'),
(2, 6, 'Orang Tua', '12', 'Umum', 'sdcfdsv'),
(3, 6, 'Orang Tua', '12', 'Umum', 'd');

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
(1, 3, 'sefsd', ' sdvds', '47568768', 'dxvd, 2017-01-07', 'dss'),
(2, 6, 'dfdf', ' jfd', '45436', 'dff, 2017-01-20', 'ffjj'),
(3, 6, 'dsf', ' df', '4543', 'dfd, 2017-01-20', 'dsf');

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
  MODIFY `id_dataorangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `psb_dokumen`
--
ALTER TABLE `psb_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `psb_formulir`
--
ALTER TABLE `psb_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `psb_info`
--
ALTER TABLE `psb_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `psb_jadwalsementara`
--
ALTER TABLE `psb_jadwalsementara`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `psb_keterangansiswa`
--
ALTER TABLE `psb_keterangansiswa`
  MODIFY `id_keterangansiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `psb_konfirmasi`
--
ALTER TABLE `psb_konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `psb_submenu`
--
ALTER TABLE `psb_submenu`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `psb_tempattinggal`
--
ALTER TABLE `psb_tempattinggal`
  MODIFY `id_tempattinggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `psb_wali`
--
ALTER TABLE `psb_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

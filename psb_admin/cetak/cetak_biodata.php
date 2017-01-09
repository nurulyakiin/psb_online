<?php
session_start();
include "../../config/koneksi.php";
include "../config/functions_all.php";

$sql = mysql_query("SELECT * FROM psb_formulir AS a
  JOIN psb_keterangansiswa AS b ON a.id_formulir=b.id_formulir
  JOIN psb_pendidikan AS c ON b.id_keterangansiswa=c.id_keterangansiswa
  JOIN psb_tempattinggal AS d ON c.id_keterangansiswa=d.id_keterangansiswa
  JOIN psb_wali AS e ON d.id_keterangansiswa=e.id_keterangansiswa
  JOIN psb_dataorangtua AS f ON e.id_keterangansiswa=f.id_keterangansiswa
  WHERE a.nisn = '$_GET[id]'")or die(mysql_error());
$res=mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.style13 {font-size: 12px}
.style14 {font-size: 10px}
.style23 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style24 {font-size: 10}
.style25 {font-weight: bold}
.style26 {font-weight: bold; font-size: 40px;}
</style>
</head>

<body><table width="73%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="11"></td>
  </tr>
  <tr>
    <td colspan="11" align="center"><span class="style26">FORMULIR PENDAFTARAN</span></td>
  </tr>
  <tr><td>&nbsp;&nbsp;</td></tr>
  <tr>
    <td width="13%">No. Formulir     : <span class="style25"><?=$res['no_formulir']?></span></td>&nbsp;
    <td colspan="7">Program Keahlian : <span class="style25"><?=$res['program_keahlian']?></span></td>&nbsp;
  </tr>
  <tr><td>&nbsp;&nbsp;</td></tr>
  <tr>
    <td colspan="11" style="text-decoration: underline; font-weight: bold;">KETERANGAN PRIBADI DAN ORANG TUA / WALI</td>
  </tr>
  <tr><td>&nbsp;&nbsp;</td></tr>
  <tr>
    <td colspan="10"><span class="style25">A. KETERANGAN SISWA </span></td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">1. Nama Lengkap Calon</span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nama_lengkap'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">&nbsp;&nbsp;&nbsp;&nbsp;Nama Panggilan</span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nama_penggilan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">&nbsp;&nbsp;&nbsp;&nbsp;NISN / No. IJAZAH</span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=$res['nisn']?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">2. Tempat dan Tanggal Lahir</span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tempat_tgllahir'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. Alamat Lengkap</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['alamat'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">4. No. Telp / HP</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['no_telp'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">5. Jenis Kelamin</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['jenis_kelamin'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">6. Berat Badan</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['berat_badan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">7. Tinggi Badan</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tinggi_badan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">8. Golongan Darah</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['golongan_darah'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">9. Penyakit Yang Pernah Di derita</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['riwayat_penyakit'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">10. Kelainan Jasmani Lainnya</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['kelainan_jasmani'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">11. Agama</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['agama'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">12. Kewarganegaraan</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['kewarganegaraan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">13. Anak Keberapa</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['anak_ke'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">14. Jumlah Saudara</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['jumlah_saudara'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">15. Status Anak</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['status_anak'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">16. Bahasa Sehari-hari di Rumah</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['bahasa'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">B. KETERANGAN TEMPAT TINGGAL</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">1. Tinggal Dengan</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tinggal_dengan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">2. Jarak Tempat Tinggal dengan SMA Mitra Bintaro</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['jarak'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. Berangkat Ke Sekolah dengan Kendaraan</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['berangkat_dengan'])?></span></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td><span class="style14">4. Referensi SMA Mitra Bintaro dari</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['referensi'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">C. KETERANGAN PENDIDIKAN SEBELUMNYA</span> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">1. Asal Sekolah</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['asal_sekolah'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">2. Tanggal dan Nomor STTB</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tanggal_sttb'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. Lama Belajar</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['lama_belajar'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. Diterima di Sekolah Ini Tanggal</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tanggal_diterima'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Pindahan dari Sekolah</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['pindahan_dari'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">D. KETERANGAN ORANG TUA</span> </td>
  </tr>
  <tr>
    <td><span class="style14">1. Nama lengkap Ayah</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nama_ayah'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">2. Nama lengkap Ibu</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nama_ibu'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. Alamat Tempat Tinggal</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['alamat'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">4. No. Telp / Handphone</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['no_telp'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">5. Tempat Tanggal Lahir Ayah</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['ttl_ayah'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">6. Tempat Tanggal Lahir Ibu</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['ttl_ibu'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">7. Pekerjaan Ayah</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['pekerjaan_ayah'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">8. Penghasilan per Bulan</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['penghasilan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">9. Pekerjaan Ibu</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['pekerjaan_ibu'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">10. Pendidikan Tertinggi</span></td>
    <td>:</td>
    <td colspan="7">Ayah : <span class="style14"><?=BesarKalimat($res['pendidikan_ayah'])?></span></td>
    <td colspan="7">Ibu : <span class="style14"><?=BesarKalimat($res['pendidikan_ibu'])?></span></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td><span class="style14">11. Agama</span></td>
    <td>:</td>
    <td colspan="7">Ayah : <span class="style14"><?=BesarKalimat($res['agama_ayah'])?></span></td>
    <td colspan="7">Ibu : <span class="style14"><?=BesarKalimat($res['agama_ibu'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">E. KETERANGAN WALI</span> </td>
  </tr>
  <tr>
    <td><span class="style14">1. Nama Wali</span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nama_wali'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">2. Alamat Wali</span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['alamat_wali'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">3. No. Telp / HP</span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['no_telp'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">4. Tempat Tanggal Lahir</span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['ttl'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">5. Pekerjaan</span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['pekerjaan'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Tangerang, .............................. 20 ....</td>
  </tr>
  <tr>
    <td class="style14">Mengetahui</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">&nbsp;</td>
  </tr>
  <tr>
    <td class="style14">Orang Tua Siswa / Wali </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Calon Siswa</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">
      
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="16%" align="center"><span class="style14">
      <?=BesarKalimat($res['nama_lengkap'])?><hr />
    </span></td>
    <td width="22%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><span class="style14">
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>

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
<!--
.style13 {font-size: 12px}
.style14 {font-size: 10px}
.style23 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style24 {font-size: 10}
.style25 {font-weight: bold}
.style26 {font-weight: bold; font-size: 40px;}
-->
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
    <td colspan="7"><span class="style14"><?=$res['nama_lengkap']?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">&nbsp;&nbsp;&nbsp;&nbsp;Nama Panggilan</span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=$res['nama_penggilan']?></span></td>
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
    <td colspan="7"><span class="style14"><?=$res['tempat_tgllahir']?></span></td>
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
    <td colspan="10"><span class="style13">B. KETERANGAN TEMPAT TINGGAL SISWA </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Peserta Didik </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_siswa'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Selama bersekolah tinggal dengan </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['tmpt_siswa'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Ke Sekolah menggunakan </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kendaraan'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">C. KETERANGAN JASMANI</span> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Berat Badan </span></td>
    <td><span class="style14">:</span></td>
    <td width="7%"><span class="style14">
      <?=$res['brt_badan']?>
    </span></td>
    <td width="7%" align="right"><span class="style14">Tinggi Badan </span></td>
    <td width="1%"><span class="style14">:</span></td>
    <td width="2%"><span class="style14">
      <?=$res['tgi_badan']?>
    </span></td>
    <td width="6%" align="right"><span class="style14">Golongan Darah </span></td>
    <td width="1%"><span class="style14">:</span></td>
    <td colspan="2"><span class="style14">
      <?=BesarKalimat($res['gol_darah'])?>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">D. KETERANGAN TENTANG PENDIDIKAN SEBELUMNYA</span> </td>
  </tr>
  <tr>
    <td><span class="style14">Nama Sekolah Asal </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['asl_sekolah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Sekolah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_sekolah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Kelas di SMP </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['asl_kls_smp'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">E. KETERANGAN TENTANG ORANG TUA</span> </td>
  </tr>
  <tr>
    <td><span class="style14">Nama Ayah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['nm_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Nama Ibu </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['nm_ibu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Orang Tua </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_ortu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Pekerjaan Ayah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kerja_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Pekerjaan Ibu </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kerja_ibu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Penghasilan Orang Tua </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=FormatRupiah($res['hasil_ortu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Tanggungan Biaya </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['tgung_biaya'])?>
    </span></td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Bandung,</td>
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
    <td class="style14">Orang Tua Siswa, </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Siswa,</td>
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
      <?=BesarKalimat($res['nm_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="16%" align="center"><span class="style14">
      <?=BesarKalimat($res['nm_siswa'])?><hr />
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
      <?=$res['nisn']?>
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>

<?php
session_start();
include "../config/koneksi.php";
include "../config/functions_all.php";

$sql = mysql_query("SELECT a.nm_siswa AS nama, a.nisn AS nisn, a.asl_sekolah AS sekolah, 
							a.kpl_sekolah AS kepala, g.no_peserta AS no_peserta, g.tgl_daftar AS tgl_daftar,
							b.sem_1 AS bind_1, b.sem_2 AS bind_2, b.sem_3 AS bind_3, b.sem_4 AS bind_4, b.sem_5 AS bind_5, b.rata_rata AS bind,
							c.sem_1 AS bing_1, c.sem_2 AS bing_2, c.sem_3 AS bing_3, c.sem_4 AS bing_4, c.sem_5 AS bing_5, c.rata_rata AS bing,
							d.sem_1 AS ipa_1, d.sem_2 AS ipa_2, d.sem_3 AS ipa_3, d.sem_4 AS ipa_4, d.sem_5 AS ipa_5, d.rata_rata AS ipa,
							e.sem_1 AS ips_1, e.sem_2 AS ips_2, e.sem_3 AS ips_3, e.sem_4 AS ips_4, e.sem_5 AS ips_5,e.rata_rata AS ips,
							f.sem_1 AS mat_1, f.sem_2 AS mat_2, f.sem_3 AS mat_3, f.sem_4 AS mat_4, f.sem_5 AS mat_5, f.rata_rata AS mat
					FROM  psb_biodata AS a, psb_bind AS b, psb_bing AS c, psb_ipa AS d,
						  psb_ips AS e, psb_mat AS f, psb_formulir AS g
					WHERE
						  a.nisn = '$_SESSION[nisn]' AND b.nisn = '$_SESSION[nisn]' AND c.nisn = '$_SESSION[nisn]' AND
						  d.nisn = '$_SESSION[nisn]' AND e.nisn = '$_SESSION[nisn]' AND f.nisn = '$_SESSION[nisn]' AND
						  g.nisn = '$_SESSION[nisn]'")or die(mysql_error());
$res=mysql_fetch_array($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<page>
<body>

<table width="65%" height="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td colspan="5" align="center"><h2 class="style57">NILAI RAPOR PDB </h2></td>
  </tr>
  <tr>
    <td colspan="5"><HR /></td>
    </tr>
  <tr>
    <td width="26%" align="left">Nama Calon Peserta Didik</td>
    <td width="0%" align="left">:</td>
    <td width="74%" align="left">
      <?=BesarKalimat($res['nama'])?>    </td>
    </tr>
  <tr>
    <td align="left">Nomor Induk Siswa Nasional </td>
    <td align="left">:</td>
    <td align="left">
      <?=$res['nisn']?>    </td>
    </tr>
  <tr>
    <td align="left">Sekolah Asal </td>
    <td align="left">:</td>
    <td align="left">
      <?=BesarKalimat($res['sekolah'])?>    </td>
    </tr>
  <tr>
    <td align="left">Kepala Sekolah </td>
    <td align="left">:</td>
    <td align="left">
      <?=BesarKalimat($res['kepala'])?>    </td>
    </tr>
  <tr>
    <td align="left">No Daftar </td>
    <td align="left">:</td>
    <td align="left">
      <?=$res['no_peserta']?>    </td>
    </tr>
  <tr>
    <td align="left">Tanggal Daftar </td>
    <td align="left"></td>
    <td align="left">
      <?=tgl_indo($res['tgl_daftar'])?>    </td>
    </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="5" align="center"><table width="488" height="128" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">No.</td>
        <td align="center">Mata Pelajaran </td>
        <td align="center">Sem1</td>
        <td align="center">Sem2</td>
        <td align="center">Sem3</td>
        <td align="center">Sem4</td>
        <td align="center">Sem5</td>
        <td align="center">Rata-Rata</td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td align="left">Bahasa Indonesia </td>
        <td align="center" >
          <?=$res['bind_1']?>        </td>
        <td align="center" >
          <?=$res['bind_2']?>        </td>
        <td align="center" >
          <?=$res['bind_3']?>        </td>
        <td align="center" >
          <?=$res['bind_4']?>        </td>
        <td align="center" >
          <?=$res['bind_5']?>        </td>
        <td align="center" >
          <?=$res['bind']?>        </td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="left">Bahasa Inggris </td>
        <td align="center" >
          <?=$res['bing_1']?>        </td>
        <td align="center" >
          <?=$res['bing_2']?>        </td>
        <td align="center" >
          <?=$res['bing_3']?>        </td>
        <td align="center" >
          <?=$res['bing_4']?>        </td>
        <td align="center" >
          <?=$res['bing_5']?>        </td>
        <td align="center" >
          <?=$res['bing']?>        </td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="left">Matematika</td>
        <td align="center" >
          <?=$res['mat_1']?>        </td>
        <td align="center" >
          <?=$res['mat_2']?>        </td>
        <td align="center" >
          <?=$res['mat_3']?>        </td>
        <td align="center" >
          <?=$res['mat_4']?>        </td>
        <td align="center" >
          <?=$res['mat_5']?>        </td>
        <td align="center" >
          <?=$res['mat']?>        </td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td align="left">Ilmu Pengetahuan Alam </td>
        <td align="center" >
          <?=$res['ipa_1']?>        </td>
        <td align="center" >
          <?=$res['ipa_2']?>        </td>
        <td align="center" >
          <?=$res['ipa_3']?>        </td>
        <td align="center" >
          <?=$res['ipa_4']?>        </td>
        <td align="center" >
          <?=$res['ipa_5']?>        </td>
        <td align="center" >
          <?=$res['ipa']?>        </td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td align="left">Ilmu Pengetahuan Sosial </td>
        <td align="center" >
          <?=$res['ips_1']?>        </td>
        <td align="center" >
          <?=$res['ips_2']?>        </td>
        <td align="center" >
          <?=$res['ips_3']?>        </td>
        <td align="center" >
          <?=$res['ips_4']?>        </td>
        <td align="center" >
          <?=$res['ips_5']?>        </td>
        <td align="center" >
          <?=$res['ips']?>        </td>
      </tr>
    </table>      </td>
  </tr>
  </table>
</body>
 </page>
</html>


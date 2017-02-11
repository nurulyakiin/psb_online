<?php
include "../../config/koneksi.php";

$sql1 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Formulir Pendaftaran'")or die(mysql_error());
$row1=mysql_fetch_array($sql1);

$sql2 = mysql_query("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta WHERE b.no_peserta = '$_SESSION[no_peserta]' AND a.jenis_pembayarn = 'Biaya Lainnya'")or die(mysql_error());
$row2=mysql_fetch_array($sql2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" method="post" id="pay">
  <table width="75%" border="0" align="center">
    <tr>
    <td colspan="8" bgcolor="#33CC33"><span class="style1"><b>DATA PEMBAYARAN SISWA</b></span></td>
    </tr>
    <tr>
    <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
    <td width="173">No Formulir</td>
    <td width="5">:</td>
    <td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row1['no_formulir'] ?>" readonly="true" /></td>
    <td width="173">No Peserta</td>
    <td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row1['no_peserta'] ?>" readonly="true" /></td>
    </tr>
    <tr>
    <td colspan="8">&nbsp;
    <hr />  
    </td>
    </tr>
    <tr>
    <td width="173">FORMULIR PENDAFTARAN</td>
    <td width="5">:</td>
    <td colspan="4"><input name="form3" type="text" id="form3" value="<?= $row1['sts_verifikasi']==1 ? 'Sudah Verifikasi' : 'BELUM Verifikasi' ?>" readonly="true" />&nbsp;*Rp. 100.000.-</td>
    <td colspan="4"><input name="from4" type="text" id="from4" value="<?= $row1['jenis_pembayarn']=='Formulir Pendaftaran' && $row1['total_pembayaran']>=100000 ? 'LUNAS' : $row1['total_pembayaran'] ?>" readonly="true" />&nbsp; **Rp. <?= $row1['total_pembayaran'] ?> ,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>MOS</td>
    <td>:</td>
    <td colspan="4"><input name="mos" type="text" id="mos" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>SPP</td>
    <td>:</td>
    <td colspan="4"><input name="spp" type="text" id="spp" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=135000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 135.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>Seragam</td>
    <td>:</td>
    <td colspan="4"><input name="srm" type="text" id="srm" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=350000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 350.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>LKS Semester 1</td>
    <td>:</td>
    <td colspan="4"><input name="lks" type="text" id="lks" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 150.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>Atribut</td>
    <td>:</td>
    <td colspan="4"><input name="atrib" type="text" id="atrib" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>Cover Ijazah</td>
    <td>:</td>
    <td colspan="4"><input name="cover" type="text" id="cover" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=100000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 100.000,-</td>
    </tr>
    <tr>
      <td>
      &nbsp;
      </td>
    </tr>
    <tr>
    <td>Kartu Pelajar & Photo</td>
    <td>:</td>
    <td colspan="4"><input name="kts" type="text" id="kts" readonly="true" value="<?= $row2['jenis_pembayarn']=='Biaya Lainnya' && $row2['total_pembayaran']>=70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" />&nbsp;*Rp. 70.000,-</td>
    <td><p class="center"><a target="_blank" href="modul/mod_pay/f_pay.php?id=<?= $_SESSION[no_peserta] ?>" class="btn btn-primary fa fa-1x fa-border fa-print"></a></p></td>
    <td><p>* Yang harus dibayar</p>
    <p>** Yang dibayar</p></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
    <td colspan="6"></td>
    </tr>
  </table>
</form>
</body>
</html>

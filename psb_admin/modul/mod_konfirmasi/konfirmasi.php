<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">No Formulir</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="noform" type="text" id="noform" size="30" /></td>
  </tr>
  <tr>
    <td align="right">Nama</td>
    <td align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" clASs="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?php
$tab = TabView('KonfirmASi Peserta','','',''); echo"$tab";
$noform = @$_GET['noform'];
$nama = @$_GET['nama'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 if(isset($noform) && $noform != '') $args[] = "a.no_formulir = '$noform'";
	 if(isset($nama) && $nama != '') $args[] = "b.nama_lengkap like '%%$nama%%'";
	 
		if(count($args)>1){
			$arg = " where ".$args[0];
			$i = 1;
			while ($i < count($args)){
				$arg .= " and ".$args[$i];
				$i++;
			}
		}
		elseif (count($args)==1){
			$arg = " where ".$args[0];
		}
	 
	 $res = mysql_query ("SELECT a.no_perserta AS no_perserta, 
						  a.no_formulir AS no_formulir, 
						  a.nama_pembayaran AS 	nama_pembayaran, 
						  b.nama_lengkap AS nama_lengkap, 
						  a.nama_bank AS nama_bank, 
						  a.total_pembayaran AS total_pembayaran, 
						  a.jenis_pembayarn AS jenis_pembayarn,
						  a.no_rek AS no_rek,
						  a.tgl_pembayaran AS tgl_pembayaran
						  FROM psb_konfirmasi AS a 
						  LEFT OUTER JOIN psb_formulir AS b on a.no_perserta=b.no_peserta 
						  $arg ORDER BY a.id_konfirmasi ASC LIMIT $posisi,$batAS");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT a.no_perserta AS no_perserta, 
											a.no_formulir AS no_formulir, 
											a.nama_pembayaran AS 	nama_pembayaran, 
											b.nama_lengkap AS nama_lengkap, 
											a.nama_bank AS nama_bank, 
											a.total_pembayaran AS total_pembayaran, 
											a.jenis_pembayarn AS jenis_pembayarn,
											a.no_rek AS no_rek,
											a.tgl_pembayaran AS tgl_pembayaran
											FROM psb_konfirmasi AS a 
											LEFT OUTER JOIN psb_formulir AS b on a.no_perserta=b.no_peserta $arg"));
}
else{
	 $page		= new Paging;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 $res = mysql_query ("SELECT * FROM psb_konfirmasi AS a JOIN psb_formulir AS b ON a.no_perserta=b.no_peserta JOIN psb_keterangansiswa AS c ON b.id_formulir=c.id_formulir ORDER BY a.id_konfirmasi ASC LIMIT $posisi,$batAS");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_konfirmasi AS a, psb_formulir AS b where a.no_perserta=b.no_peserta "));
}

?>

<form action='' method="GET" name="tabel" id='tabel'>
	<span clASs="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  clASs="tbl"  >
	<thead>
		<tr>
		  <th clASs="tbl-header ">No</th>
		  <th clASs="tbl-header ">Nama Peserta</th>
		  <th clASs="tbl-header ">No Peserta</th>
		  <th clASs="tbl-header ">No Formulir</th>
		  <th clASs="tbl-header ">Nama Pengirim</th>
		  <th clASs="tbl-header ">Nama Bank</th>
		  <th clASs="tbl-header ">Total Pembayaran</th>
		  <th clASs="tbl-header ">Jenis Pembayaran</th>
		  <th clASs="tbl-header ">No Rekening</th>
		  <th clASs="tbl-header ">Tanggal Transfer</th>
		  <th clASs="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){
	// var_dump($items);
	$nama_pembayaran		=	$items['nama_pembayaran'];
	$no_perserta	=	$items['no_perserta'];
	$no_formulir	=	$items['no_formulir'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
	$nama_bank		=	$items['nama_bank'];
	$total_pembayaran		=	$items['total_pembayaran'];
	$jenis_pembayarn		=	$items['jenis_pembayarn'];
	$no_rek		=	$items['no_rek'];
	$tgl_pembayaran		=	$items['tgl_pembayaran'];
	$i++;

	// if  ($items['sts_verifikASi']==0){if  ($status == 0){$ver = "<font color=red>Belum</font>";}
	// else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Belum</a>";}}
	// else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Sudah</a>";}

	// if  ($items['sts_seleksi']==0){if  ($verif == 0){$sel = "<font color=red>Tidak Lulus</font>";}
	// else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Tidak Lulus</a>";}}
	// else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Lulus</a>";}
	
	// if  ($status == 0){$sts = "<font color=red>Belum Lengkap</font>";}else{$sts = "Sudah Lengkap";}
?>

<tr clASs="tbl-row tbl-row-even">
	<td clASs="tbl-num"><?=$i?></td>
	<td clASs="tbl-cell"><?=$nama_lengkap?></td>
	<td clASs="tbl-num"><?=$no_perserta?></td>
	<td clASs="tbl-num"><?=$no_formulir?></td>
	<td clASs="tbl-num"><?=$nama_pembayaran?></td>
	<td clASs="tbl-cell"><?=$nama_bank?></td>
	<td clASs="tbl-cell"><?=$total_pembayaran?></td>
	<td clASs="tbl-cell"><?=$jenis_pembayarn?></td>
	<td clASs="tbl-cell"><?=$no_rek?></td>
	<td clASs="tbl-cell"><?=$tgl_pembayaran?></td>
	<td clASs="tbl-controls">
		<!-- <?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?> -->
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$nisn","$nama_lengkap","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batAS);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr clASs="tbl-footer">
	<td clASs="tbl-nav" colspan="11">
		<table width="100%" clASs="tbl-footer">
			<tbody>
			<tr>
				<td width="33%" clASs="tbl-pages">
				<?=$linkhalaman?>
				</td>
			</tr>
			</tbody>
		</table>
	</td>
</tr>
</table>
</form>
</div>




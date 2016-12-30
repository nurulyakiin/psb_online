<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">NISN</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="asal_skl" type="text" id="asal_skl" size="30" /></td>
  </tr>
  <tr>
    <td align="right">Nama</td>
    <td align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?php
$tab = TabView('Pendidikan Peserta','','',''); echo"$tab";
$asal_skl = @$_GET['asal_skl'];
$nama = @$_GET['nama'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($asal_skl) && $asal_skl != '') $args[] = "a.asal_sekolah = '$asal_skl'";
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
	 
	 $res = mysql_query ("SELECT a.asal_sekolah AS asal_sekolah, 
						  a.tanggal_sttb AS tanggal_sttb, 
						  a.no_peserta AS lama_belajar, 
						  b.nama_lengkap AS nama_lengkap, 
						  a.tanggal_diterima AS tanggal_diterima, 
						  a.pindahan_dari AS pindahan_dari
						  FROM psb_pendidikan AS a 
						  LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa 
						  $arg ORDER BY a.id_keterangansiswa ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT a.asal_sekolah AS asal_sekolah, 
										  	a.tanggal_sttb AS tanggal_sttb, 
										  	a.no_peserta AS lama_belajar, 
										  	b.nama_lengkap AS nama_lengkap, 
										  	a.tanggal_diterima AS tanggal_diterima, 
										  	a.pindahan_dari AS pindahan_dari
											FROM psb_pendidikan AS a 
											LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa $arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_pendidikan AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa ORDER BY a.id_keterangansiswa ASC LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_pendidikan AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa "));
}

?>

<form action='' method="GET" name="tabel" id='tabel'>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header ">No</th>
		  <th class="tbl-header ">Nama Peserta</th>
		  <th class="tbl-header ">Asal Sekolah</th>
		  <th class="tbl-header ">Tanggal STTB</th>
		  <th class="tbl-header ">Lama Belajar</th>
		  <th class="tbl-header ">Tanggal Diterima</th>
		  <th class="tbl-header ">Pindahan dari</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$asal_sekolah		=	$items['asal_sekolah'];
	$tanggal_sttb	=	$items['tanggal_sttb'];
	$lama_belajar	=	$items['lama_belajar'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
	$tanggal_diterima		=	$items['tanggal_diterima'];
	$pindahan_dari		=	$items['pindahan_dari'];
	$i++;

	// if  ($items['sts_verifikasi']==0){if  ($status == 0){$ver = "<font color=red>Belum</font>";}
	// else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Belum</a>";}}
	// else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Sudah</a>";}

	// if  ($items['sts_seleksi']==0){if  ($verif == 0){$sel = "<font color=red>Tidak Lulus</font>";}
	// else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Tidak Lulus</a>";}}
	// else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Lulus</a>";}
	
	// if  ($status == 0){$sts = "<font color=red>Belum Lengkap</font>";}else{$sts = "Sudah Lengkap";}
?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$nama_lengkap?></td>
	<td class="tbl-num"><?=$asal_sekolah?></td>
	<td class="tbl-num"><?=$tanggal_sttb?></td>
	<td class="tbl-cell"><?=$lama_belajar?> Tahun / Bulan</td>
	<td class="tbl-cell"><?=$tanggal_diterima?></td>
	<td class="tbl-cell"><?=$pindahan_dari?></td>
	<td class="tbl-controls">
		<!-- <?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?> -->
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_keterangansiswa","$nama_lengkap","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="8">
		<table width="100%" class="tbl-footer">
			<tbody>
			<tr>
				<td width="33%" class="tbl-pages">
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




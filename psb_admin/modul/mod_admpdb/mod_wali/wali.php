<form method='post' action='<?php $_SERVER['PHP_SELF']; ?>' name="form1" target="_self">
<table border="0" align="center">
  <tr>
    <td align="right">Nama Wali / Calon Siswa</td>
    <input type="hidden" name="module" value="wali" />
    <td align="left"><input name="txtKataKunci" value="<?php echo $dataKataKunci; ?>" type="text" id="txtKataKunci" size="30" /></td>
  </tr>
  <tr>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?php
$tab = TabView('Wali Peserta','','',''); echo"$tab";
$arg = "";

if (isset($_POST['submit'])){
	$txtKataKunci = trim($_POST['txtKataKunci']);

	$arg = "WHERE a.nama_wali = '$txtKataKunci' OR b.nama_lengkap LIKE '%$txtKataKunci%' ";
	// var_dump($arg);

	$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';
	// var_dump($dataKataKunci);

	 $page		= new Paging9;
	 $batas 	= 1;
	 $posisi	= $page->cariPosisi($batas);
	 
	 $res = mysql_query ("SELECT * FROM psb_wali AS a JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa $arg ORDER BY a.id_wali ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows($res);
}
else{
	 $page		= new Paging;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 $res = mysql_query ("SELECT * FROM psb_wali AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa ORDER BY a.id_wali ASC LIMIT $posisi,$batAS");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_wali AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa "));
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
		  <th clASs="tbl-header ">Nama Wali</th>
		  <th clASs="tbl-header ">Alamat</th>
		  <th clASs="tbl-header ">Pekerjaan</th>
		  <th clASs="tbl-header ">Tempat, Tanggal Lahir</th>
		  <th clASs="tbl-header ">No. Handphone</th>
		  <th clASs="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$nama_wali		=	$items['nama_wali'];
	$alamat_wali	=	$items['alamat_wali'];
	$no_telp	=	$items['no_telp'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
	$ttl		=	$items['ttl'];
	$pekerjaan		=	$items['pekerjaan'];
	$id_wali		=	$items['id_wali'];
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
	<td clASs="tbl-num"><?=$nama_lengkap?></td>
	<td clASs="tbl-num"><?=$nama_wali?></td>
	<td clASs="tbl-num"><?=$alamat_wali?></td>
	<td clASs="tbl-cell"><?=$pekerjaan?></td>
	<td clASs="tbl-cell"><?=$ttl?></td>
	<td clASs="tbl-cell"><?=$no_telp?></td>
	<td clASs="tbl-controls">
		<?$edit=Edit("?module=$_GET[module]&act=edit_wali&id=$id_wali","Edit"); echo"$edit";?>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_wali","$nama_lengkap","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batAS);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr clASs="tbl-footer">
	<td clASs="tbl-nav" colspan="8">
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




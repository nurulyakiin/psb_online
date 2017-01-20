<form method='post' action='<?php $_SERVER['PHP_SELF']; ?>' name="form1" target="_self">
<table border="0" align="center">
  <tr>
    <td align="right">NAMA / ALAMAT</td>
    <input type="hidden" name="module" value="biodata" />
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
$tab = TabView('Alamat Peserta','','',''); echo"$tab";
$arg = "";

if (isset($_POST['submit'])){
	 $txtKataKunci = trim($_POST['txtKataKunci']);

	$arg = "WHERE b.nama_lengkap = '$txtKataKunci' OR b.alamat LIKE '%$txtKataKunci%' ";
	// var_dump($arg);

	$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';
	// var_dump($dataKataKunci);

	 $page		= new Paging9;
	 $batas 	= 1;
	 $posisi	= $page->cariPosisi($batas);
	
	 
	$res = mysql_query ("SELECT * FROM psb_formulir AS a
		JOIN psb_keterangansiswa AS b ON a.id_formulir=b.id_formulir
		JOIN psb_tempattinggal AS c ON b.id_keterangansiswa=c.id_keterangansiswa
		$arg ORDER BY a.nisn ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows($res);
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_tempattinggal AS a, psb_keterangansiswa as b where a.id_keterangansiswa=b.id_keterangansiswa ORDER BY a.id_keterangansiswa ASC LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_tempattinggal AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa "));
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
		  <th class="tbl-header ">Tinggal Dengan</th>
		  <th class="tbl-header ">Jarak</th>
		  <th class="tbl-header ">berangkat_dengan</th>
		  <th class="tbl-header ">Referensi</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$tinggal_dengan		=	$items['tinggal_dengan'];
	$jarak	=	$items['jarak'];
	$berangkat_dengan	=	$items['berangkat_dengan'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
	$referensi		=	$items['referensi'];
	$id_tempattinggal		=	$items['id_tempattinggal'];
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
	<td class="tbl-num"><?=$tinggal_dengan?></td>
	<td class="tbl-num"><?=$jarak?> Km</td>
	<td class="tbl-num"><?=$berangkat_dengan?></td>
	<td class="tbl-cell"><?=$referensi?></td>
	<td class="tbl-controls">
		<!-- <?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?> -->
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_tempattinggal","$nama_lengkap","Hapus"); echo"$hapus";?>	
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




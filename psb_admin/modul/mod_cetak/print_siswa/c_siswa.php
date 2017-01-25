<form method='post' action='<?php $_SERVER['PHP_SELF']; ?>' name="form1" target="_self">
<table border="0" align="center">
  <tr>
    <td align="right">NISN / Program Keahlian</td>
    <input type="hidden" name="module" value="c_bidata" />
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
<?
$tab = TabView('Cetak Laporan','','',''); echo"$tab";
$arg = "";

if (isset($_POST['submit'])){
	$txtKataKunci = trim($_POST['txtKataKunci']);

	$arg = "WHERE b.nisn = '$txtKataKunci' OR a.program_keahlian LIKE '%$txtKataKunci%' ";
	// var_dump($arg);

	$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';
	// var_dump($dataKataKunci);

	 $page		= new Paging9;
	 $batas 	= 1;
	 $posisi	= $page->cariPosisi($batas);
	 	 
	 $res = mysql_query ("SELECT * FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir $arg ORDER BY B.nisn ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows($res);
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir ORDER BY B.nisn ASC LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_formulir AS A JOIN psb_keterangansiswa AS B ON A.id_formulir=B.id_formulir"));
}
	
?>
<div id="aaa" align="center"></div>
<form action='' method="GET" name="tabel" id='tabel'>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center" class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header">No</th>
		  <th class="tbl-header">NISN</th>
		  <th class="tbl-header">Nama Peserta</th>
		  <th class="tbl-header">Jenis Kelamin</th>
		  <th class="tbl-header">Agama</th>
		  <th class="tbl-header">Kewarganegaraan</th>
		  <th class="tbl-header">Tempat, Tanggal Lahir</th>
		  <th class="tbl-header">No Handphone</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){
// var_dump($items);
	$kewarganegaraan		=	$items[kewarganegaraan];
	$nama_lengkap	=	BesarKalimat($items[nama_lengkap]);
	$nisn			=	$items[nisn];
	$jenis_kelamin		=	BesarKalimat($items[jenis_kelamin]);
	$agama		=	BesarKalimat($items[agama]);
	$tempat_tgllahir		= 	$items[tempat_tgllahir];
	$no_telp	= 	$items[no_telp];
	$program_keahlian	= 	$items[program_keahlian];
	$i++;

?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$nisn?></td>
	<td class="tbl-cell"><?=$nama_lengkap?></td>
	<td class="tbl-cell"><?=$jenis_kelamin?></td>
	<td class="tbl-cell"><?=$agama?></td>
	<td class="tbl-num"><?=$kewarganegaraan?></td>
	<td class="tbl-cell"><?=$tempat_tgllahir?></td>
	<td class="tbl-cell"><?=$no_telp?></td>
	<!-- <td class="tbl-controls">
		<?$cetak=Cetak("./cetak/f_biodata.php?id=$nisn","Cetak"); echo"$cetak";?>
	</td> -->
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET[halaman],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="10">
		<table width="100%" class="tbl-footer">
			<tbody>
			<tr>
				<td width="33%" class="tbl-pages">
				<?=$linkhalaman?>
				</td>
			</tr>
			<tr>
			<td align="right" style="text-align: right;" class="tbl-controls">
				<?$cetak=Cetak("./cetak/f_siswa.php?id=$program_keahlian","Cetak"); echo"$cetak";?>
			</td>
			</tr>
			</tbody>
		</table>
	</td>
</tr>
</table>
</form>
</ul>
</span>
</div>

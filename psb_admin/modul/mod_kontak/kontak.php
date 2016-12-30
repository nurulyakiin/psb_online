<?php
$tab = TabView('Kontak Pesan','','',''); echo"$tab";
$page	= new Paging;
$batas 	= 5;
$posisi	= $page->cariPosisi($batas);
$res = mysql_query ("SELECT * FROM psb_kontak WHERE aktif=1 ORDER BY ktk_id ASC LIMIT $posisi,$batas");
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_kontak WHERE aktif=1"));

?>
<div id="aaa" align="center"></div>
<form action='' method="POST" name="tabel" id='tabel'>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header ">No</th>
		  <th class="tbl-header ">Nama</th>
		  <th class="tbl-header ">Email</th>
		  <th class="tbl-header ">Subjek</th>
		  <th class="tbl-header ">Tanggal</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$ktk_id		=	$items[ktk_id];
	$nama		=	BesarKalimat($items[nama]);
	$email		=	$items[email];
	$subjek		=	BesarKalimat($items[subjek]);
	$pesan		=	BesarKalimat($items[pesan]);
	$tggl		=	$items[tggl];
	$aktif		=	$items[aktif];
	$lnk_email = "<a href='?module=$_GET[module]&act=balesemail&id=$ktk_id'>$email</a>";
	$i++;


?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-cell"><?=$nama?></td>
	<td class="tbl-cell"><?=$lnk_email?></td>
	<td class="tbl-cell"><?=$subjek?></td>
	<td class="tbl-num"><?=$tggl?></td>
	<td class="tbl-controls">
		<?$balas=Balas("?module=$_GET[module]&act=balesemail&id=$ktk_id","Balas Email"); echo"$balas";?>
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET[halaman],$jmlhalaman);

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




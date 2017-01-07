<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">NISN</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="nisn" type="text" id="nisn" size="30" /></td>
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
$tab = TabView('Document Peserta','','',''); echo"$tab";
$nisn = @$_GET['nisn'];
$nama_lengkap = @$_GET['nama_lengkap'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 if(isset($nisn) && $nisn != '') $args[] = "a.nisn = '$nisn'";
	 if(isset($nama_lengkap) && $nama_lengkap != '') $args[] = "a.nama_lengkap like '%%$nama_lengkap%%'";
	 
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
	 
	 $res = mysql_query ("SELECT a.filename AS filename, 
						  a.filesize AS filesize, 
						  a.filetype AS filetype, 
						  b.nama_lengkap AS nama_lengkap, 
						  a.location AS location
						  FROM psb_dokumen AS a 
						  LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa 
						  $arg ORDER BY a.id_dokumen ASC LIMIT $posisi,$batAS");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT a.filename AS filename, 
											a.filesize AS filesize, 
											a.filetype AS filetype, 
											b.nama_lengkap AS nama_lengkap, 
											a.location AS location
											FROM psb_dokumen AS a 
											LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa $arg"));
}
else{
	 $page		= new Paging;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 $res = mysql_query ("SELECT * FROM psb_dokumen AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa ORDER BY a.id_dokumen ASC LIMIT $posisi,$batAS");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_dokumen AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa "));
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
		  <th clASs="tbl-header ">File</th>
		  <th clASs="tbl-header ">Size</th>
		  <th clASs="tbl-header ">Type</th>
		  <th clASs="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$filename		=	$items['filename'];
	$filesize	=	$items['filesize'];
	$filetype	=	$items['filetype'];
	$location	=	$items['location'];
	$id_dokumen	=	$items['id_dokumen'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
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
	<td clASs="tbl-num"><img src="<?=$location?>" border="0" width="100" height="100"/></td>
	<td clASs="tbl-num"><?=$filesize?></td>
	<td clASs="tbl-cell"><?=$filetype?></td>
	<td clASs="tbl-controls">
		<!-- <?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?> -->
		<a href="<?php echo $location;?>"><img src="images/download.gif" border="0"/></a>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_dokumen","$nama_lengkap","Hapus"); echo"$hapus";?>
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




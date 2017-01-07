<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">NISN</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="ref" type="text" id="ref" size="30" /></td>
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
$tab = TabView('Alamat Peserta','','',''); echo"$tab";
$ref = @$_GET['ref'];
$nama = @$_GET['nama'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($ref) && $ref != '') $args[] = "a.referensi = '$ref'";
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
	 
	 $res = mysql_query ("SELECT a.tinggal_dengan AS tinggal_dengan, 
						  a.jarak AS jarak, 
						  a.berangkat_dengan AS berangkat_dengan, 
						  b.nama_lengkap AS nama_lengkap, 
						  a.referensi AS referensi
						  FROM psb_tempattinggal AS a 
						  LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa 
						  $arg ORDER BY a.id_keterangansiswa ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT a.tinggal_dengan AS tinggal_dengan, 
										  	a.jarak AS jarak, 
										  	a.berangkat_dengan AS berangkat_dengan, 
										  	b.nama_lengkap AS nama_lengkap, 
										  	a.referensi AS referensi
											FROM psb_formulir AS a 
											LEFT OUTER JOIN psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa $arg"));
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




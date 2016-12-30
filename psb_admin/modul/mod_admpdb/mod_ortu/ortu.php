<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">Nama Ayah</td>
    <input type="hidden" name="module" value="ortu" />
    <td align="left"><input name="nmay" type="text" id="nmay" size="30" /></td>
  </tr>
  <tr>
    <td align="right">Nama Peserta</td>
    <td align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" clASs="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?php
$tab = TabView('Orang Tua Peserta','','',''); echo"$tab";
$nmay = @$_GET['nmay'];
$nama = @$_GET['nama'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 if(isset($nmay) && $nmay != '') $args[] = "a.nama_ayah = '$nmay'";
	 if(isset($nama) && $nama != '') $args[] = "a.nama_lengkap like '%%$nama%%'";
	 
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
	 
	 $res = mysql_query ("SELECT a.nama_ayah AS nama_ayah, 
						  a.nama_ibu AS nama_ibu, 
						  a.alamat AS alamat, 
						  a.nama_lengkap AS nama_lengkap, 
						  a.no_telp AS no_telp, 
						  a.pekerjaan_ayah AS pekerjaan_ayah, 
						  a.penghASilan AS penghASilan
						  FROM psb_dataorangtua AS a 
						  left outer join psb_keterangansiswa AS b ON a.id_keterangansiswa=b.id_keterangansiswa 
						  $arg ORDER BY a.id_dataorangtua ASC LIMIT $posisi,$batAS");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT a.nama_ayah AS nama_ayah, 
											a.nama_ibu AS nama_ibu, 
											a.alamat AS alamat, 
											a.nama_lengkap AS nama_lengkap, 
											a.no_telp AS no_telp, 
											a.pekerjaan_ayah AS pekerjaan_ayah, 
											a.penghASilan AS penghASilan	
											FROM psb_dataorangtua AS a 
											LEFT OUTER JOIN psb_keterangansiswa AS b on a.id_keterangansiswa=b.id_keterangansiswa $arg"));
}
else{
	 $page		= new Paging;
	 $batAS 	= 5;
	 $posisi	= $page->cariPosisi($batAS);
	 $res = mysql_query ("SELECT * FROM psb_dataorangtua AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa ORDER BY a.id_dataorangtua ASC LIMIT $posisi,$batAS");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_dataorangtua AS a, psb_keterangansiswa AS b where a.id_keterangansiswa=b.id_keterangansiswa "));
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
		  <th clASs="tbl-header ">Nama Ayah</th>
		  <th clASs="tbl-header ">Nama Ibu</th>
		  <th clASs="tbl-header ">Pekerjaan Ayah</th>
		  <th clASs="tbl-header ">Alamat</th>
		  <th clASs="tbl-header ">No Handphone</th>
		  <th clASs="tbl-header ">Penghasilan</th>
		  <th clASs="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$nama_ayah		=	$items['nama_ayah'];
	$nama_ibu	=	$items['nama_ibu'];
	$penghasilan	=	$items['penghasilan'];
	$nama_lengkap		=	BesarKalimat($items['nama_lengkap']);
	$pekerjaan_ayah		=	$items['pekerjaan_ayah'];
	$alamat		=	$items['alamat'];
	$no_telp		=	$items['no_telp'];
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
	<td clASs="tbl-num"><?=$nama_ayah?></td>
	<td clASs="tbl-num"><?=$nama_ibu?></td>
	<td clASs="tbl-cell"><?=$pekerjaan_ayah?></td>
	<td clASs="tbl-cell"><?=$alamat?></td>
	<td clASs="tbl-cell"><?=$no_telp?></td>
	<td clASs="tbl-cell"><?=$penghasilan?></td>
	<td clASs="tbl-controls">
		<!-- <?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?> -->
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_keterangansiswa","$nama_lengkap","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batAS);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr clASs="tbl-footer">
	<td clASs="tbl-nav" colspan="9">
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




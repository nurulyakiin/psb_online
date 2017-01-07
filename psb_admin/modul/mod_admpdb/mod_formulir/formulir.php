<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">No Peserta</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="nopes" type="text" id="nopes" size="30" /></td>
  </tr>
  <tr>
    <td align="right">No Formulir</td>
    <td align="left"><input name="noform" type="text" id="noform" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?php
$tab = TabView('Data Formulir','','',''); echo"$tab";
$nopes = @$_GET['nopes'];
$noform = @$_GET['noform'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($nopes) && $nopes != '') $args[] = "a.no_peserta = '$no_peserta'";
	 if(isset($noform) && $noform != '') $args[] = "a.no_formulir like '%%$noform%%'";
	 
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
	 
	 $res = mysql_query ("SELECT *
						  FROM psb_formulir
						  $arg ORDER BY no_formulir AS LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT *
											FROM psb_formulir
											$arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT * FROM psb_formulir ORDER BY id_formulir ASC LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_formulir"));
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
		  <th class="tbl-header ">No Peserta</th>
		  <th class="tbl-header ">No Formulir</th>
		  <th class="tbl-header ">NISN</th>
		  <th class="tbl-header ">Email</th>
		  <th class="tbl-header ">No Handphone</th>
		  <th class="tbl-header ">Tgl Daftar</th>
		  <th class="tbl-header ">Program Keahlian</th>
		  <th class="tbl-header ">Status</th>
		  <th class="tbl-header ">Status Pembayaran Formulir</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$adm_id		=	$items['adm_id'];
	$no_peserta	=	$items['no_peserta'];
	$no_formulir=	$items['no_formulir'];
	$id_formulir=	$items['id_formulir'];
	$status=	$items['sts_verifikasi'];
	$nisn		=	$items['nisn'];
	$email		=	$items['email'];
	$no_hp		=	$items['no_hp'];
	$tgl_daftar		=	$items['tgl_daftar'];
	$program_keahlian		=	$items['program_keahlian'];
	$verif		=	$items['status'];
	$i++;

	if  ($items['status']==0){if  ($status == 0){$ver = "<font color=red>Offline</font>";}
	else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Offline</a>";}}
	else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Online</a>";}

?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$no_peserta?></td>
	<td class="tbl-num"><?=$no_formulir?></td>
	<td class="tbl-num"><?=$nisn?></td>
	<td class="tbl-num"><?=$email?></td>
	<td class="tbl-num"><?=$no_hp?></td>
	<td class="tbl-num"><?=$tgl_daftar?></td>
	<td class="tbl-num"><?=$program_keahlian?></td>
	<td class="tbl-cell"><?=$ver?></td>
	<td class="tbl-cell"><?= $status==1 ? 'LUNAS' : 'BELUM LUNAS' ?></td>
	<td class="tbl-controls">
		<?$edit=Edit("?module=$_GET[module]&act=edit_form&id=$id_formulir","Edit"); echo"$edit";?>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$id_formulir","$id_formulir","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="11">
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




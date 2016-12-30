<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">Nama Menu</td>
    <input type="hidden" name="module" value="modul" />
    <td align="left"><input name="menu" type="text" id="menu" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?
$tab = TabView('Manage Menu','','',''); echo"$tab";
$menu = @$_GET['menu'];
if (isset($submit) == 'Cari'){
	 $page		= new PagingMenu;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($menu) && $menu != '') $args[] = "menu like '%%$menu%%'";
		if(count($args)>1){
			$arg = ' where '.$args[0];
			$i = 1;
			while ($i < count($args)){
				$arg .= ' and '.$args[$i];
				$i++;
			}
		}
		elseif (count($args)==1){
			$arg = ' where '.$args[0];
		}
	 
	 $res = mysql_query ("select * from psb_menu $arg ORDER BY main_id ASC LIMIT $posisi,$batas");		  
	 $jmldata = mysql_num_rows(mysql_query("select * from psb_menu $arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM psb_menu ORDER BY main_id LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM psb_menu "));
}
?>
<div id="aaa" align="center"></div>
<form action='' method="GET" name="tabel" id='tabel';>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header ">No</th>
		  <th class="tbl-header ">Menu</th>
		  <th class="tbl-header ">Link</th>
		  <th class="tbl-header ">Publish</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$main_id	=	$items['main_id'];
	$menu   	=	BesarKalimat($items['menu']);
	$link		=	$items['link'];
	$aktif		=	$items['aktif'];
	$i++;

	if  ($aktif=='N'){
		$ver = "<a href='?module=$_GET[module]&act=aktif&a=$aktif&id=$main_id'>N</a>";
	}
	else{
		$ver = "<a href='?module=$_GET[module]&act=aktif&a=$aktif&id=$main_id'>Y</a>";
	}


?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>  
	<td class="tbl-cell"><?=$menu?></td>
	<td class="tbl-cell"><?=$link?></td>
	<td class="tbl-cell" align="center"><?=$ver?></td>
	
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
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p>*) Apabila Waktu Pendaftaran telah ditutup, pada menu DAFTAR, LOGIN, dan AKUN beritanda 'N' pada PUBLISH</p></td>
      </tr>
      <tr>
        <td><p>**) Apabila waktu pendaftaran masih dibuka, hanya pada menu PENGUMUMAN yang diberi tanda 'N' di PUBLISH</p></td>
      </tr>
    </table>
  <p>&nbsp;</p>
</form>
</div>




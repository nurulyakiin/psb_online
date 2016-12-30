<?
 $tab = TabView('Manage User','','',''); echo"$tab";
 $page		= new Paging;
 $batas 	= 5;
 $posisi	= $page->cariPosisi($batas);
 $res = mysql_query ("SELECT * FROM psb_admin ORDER BY admin_id DESC LIMIT $posisi,$batas");
 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM psb_admin"));
?>
<div id="aaa" align="center"></div>
<form action='' method="POST" name="tabel" id='tabel'>
	<span class="tbl-create">
	<? $button = addControl("?module=$_GET[module]&act=add_user","Tambah Data","images/32/add.png",true);echo"$button";?>
	</span>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header ">No</th>
		  <th class="tbl-header ">Username</th>
		  <th class="tbl-header ">Status</th>
		  <th class="tbl-header ">Alamat</th>
		  <th class="tbl-header ">Login Terakhir</th>
		  <th class="tbl-header ">User Aktif</th>
		  <th class="tbl-header ">Hak Akses</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$admin_id		=	$items['admin_id'];
	$username		=	BesarKalimat($items['username']);
	$password		=	$items['password'];
	$name			=	$items['name'];
	$alamat			=	BesarKalimat($items['alamat']);
	$last_login		=	$items['last_login'];
	$islogin		=	$items['islogin'];
	$isenable		=	$items['isenable'];
	$i++;
	
	if($name==0){$name = "Administrator";}else{$name= "Operator";}
	
	if($islogin==0){$log = "Logout";}else{$log = "Login";}
	
	if($isenable==0){$enb = "<a href='?module=$_GET[module]&act=enb&b=$isenable&id=$admin_id'>Y</a>";}else{$enb = "<a href='?module=$_GET[module]&act=enb&b=$isenable&id=$admin_id'>N</a>";}
	
?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-cell"><?=$username?></td>
	<td class="tbl-cell"><?=$name?></td>
	<td class="tbl-cell"><?=$alamat?></td>
	<td class="tbl-num"><?=$last_login?></td>
	<td class="tbl-cell" align="center"><?=$log?></td>
	<td class="tbl-cell" align="center"><?=$enb?></td>
	<td class="tbl-controls">
		<?$edit=Edit("?module=$_GET[module]&act=edit_user&id=$admin_id","Edit"); echo"$edit";?>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$admin_id","$username","Hapus"); echo"$hapus";?>	
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




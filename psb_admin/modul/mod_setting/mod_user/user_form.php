<?
$tab = TabView('',$id,'Tambah User','Edit User'); echo"$tab";
$id		= @$_GET['id'];
$act 	= @$_GET['act'];
$sql = mysql_query("SELECT*FROM psb_admin WHERE admin_id = '$id'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" name="user" id="user">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="6">
			<input type="hidden" name="id" value="<?= $row['admin_id']?>" />
		</td>
	  </tr>
	  <tr>
		<td width="173"><label>Username</label></td>
		<td width="5">:</td>
		<?if($act=='edit_user'){$lock='disabled';}?>
		<td colspan="4"><input name="username" type="text" id="username" value="<?= $row['username']?>" size="30" <?='$lock'?>/></td>
	  </tr>
	  <tr>
		<td>Password</td>
		<td>:</td>
		<td colspan="4">
		<input name="password" type="password" id="password" value="<?= $row['password']?>" size="30" maxlength="8"  />
		</td>
	  </tr>
	  <tr>
		<td>Status</td>
		<td>:</td>
		<td colspan="4">
		<select name="name" id="name">
		<?
			if($_GET['act']=='edit_user'){
				Status('psb_admin','admin_id');
			}
			else{
		?>
		  <option value="">-- Pilih Status --</option>
		  <option value="0">Administrator</option>
		  <option value="1">Operator</option>
		</select>
		<?}?>
		</td>
	  </tr>
	  <tr>
	    <td>Alamat</td>
        <td>:</td>
	    <td colspan="4"><input name="alamat" type="text" id="alamat" value="<?= $row['alamat']?>" size="50" /></td>
	  </tr>
	  <tr>
		<td>Hak Akses </td>
		<td>:</td>
		<td colspan="4">
		<?
			if($_GET['act']=='edit_user'){
				IsEnable('psb_admin','admin_id');
			}
			else{
		?>
			<label><input name="isenable" id="isenable" type="radio" value="1" />Y</label>
			<label><input name="isenable" id="isenable" type="radio" value="0" />N</label>
		<?}?>
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="265" colspan="3">&nbsp;</td>
		<td width="250">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<?if($_GET['act']=='edit_user'){$ide='ubah';}else{$ide='tambah';}?>
	    <td colspan="6">
			<input name="<?=$ide?>" id="<?=$ide?>" class="button" type="submit" value="SIMPAN" />
			<input name="button" type="button" class="button" onclick="history.go(-1)" value="BATAL"/></td>
      </tr>
	  <tr>
	    <td colspan="6">&nbsp;</td>
      </tr>
	  <tr>
		<?if($_GET['act']=='edit_user'){?>
	    <td colspan="6"><img src="images/right_16.png" width="16" height="16" /> Apabila Password Tidak dirubah abaikan saja. </td>
		<?}?>
	  </tr>
	  <tr>
	    <td colspan="6">&nbsp;</td>
      </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
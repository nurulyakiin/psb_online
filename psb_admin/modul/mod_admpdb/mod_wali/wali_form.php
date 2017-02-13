<?php
$tab = TabView('Edit Wali','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM psb_wali WHERE id_wali = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="wali">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="9" bgcolor="#33CC33"><b>D. KETERANGAN WALI</b></td>
	  </tr>
	  <input name="id_wali" type="hidden" id="id_wali" value="<?= $row['id_wali']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Nama Wali</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmwali" type="text" id="nmwali" value="<?= $row['nama_wali']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>Alamat Tempat Tinggal</label></td>
		<td>:</td>
		<td colspan="4"><textarea rows="4" cols="50" class="form-control" style="width: 190px" name="alamat" type="text" id="alamat" value="" size="30"><?= $row['alamat_wali']?> </textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>No Telp</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="notelp" type="text" id="notelp" value="<?= $row['no_telp']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tempat Tanggal Lahir Wali</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahirwali" type="text" id="tmp_lahirwali" value="<?= $row['ttl']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="kerja" type="text" id="kerja" value="<?= $row['pekerjaan']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="1"><input name="submit" id="submit" class="btn btn-primary" type="submit" value="SIMPAN" />
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=akun')" type="button" value="BATAL" /></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
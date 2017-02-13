<?php
$tab = TabView('Edit Orang Tua','','',''); echo"$tab";
$sql = mysql_query("SELECT * FROM psb_dataorangtua WHERE id_dataorangtua = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="ortu">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="7" bgcolor="#33CC33"><b>D. KETERANGAN ORANG TUA</b></td>
	  </tr>
	  <input name="id_dataorangtua" type="hidden" id="id_dataorangtua" value="<?= $row['id_dataorangtua']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Nama Lengkap Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmayh" type="text" id="nmayh" value="<?= $row['nama_ayah']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Nama Lengkap Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="nmibu" type="text" id="nmibu" value="<?= $row['nama_ibu']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>Alamat Tempat Tinggal</label></td>
		<td>:</td>
		<td colspan="4"><textarea rows="4" cols="50" class="form-control" style="width: 190px" name="alamat" type="text" id="alamat" value="" size="30"><?= $row['alamat']?> </textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>No. Telp/Hp</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 150px" name="notelp" type="text" id="notelp" value="<?= $row['no_telp']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tempat Tanggal Lahir Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahirayh" type="text" id="tmp_lahirayh" value="<?= $row['ttl_ayah']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tanggal Tanggal Lahir Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahiribu" type="text" id="tmp_lahiribu" value="<?= $row['ttl_ibu']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="kerja_ayh" type="text" id="kerja_ayh" value="<?= $row['pekerjaan_ayah']?>" size="15"  /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Penghasilan per Bulan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="hasil" type="text" id="hasil" value="<?= $row['penghasilan']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="kerja_ibu" type="text" id="kerja_ibu" value="<?= $row['pekerjaan_ibu']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Pendidikan Tertinggi</td>
		<td>:</td>
		<td colspan="4">Ayah<input class="form-control" style="width: 190px" name="pend_ayh" type="text" id="pend_ayh" value="<?= $row['pendidikan_ayah']?>" size="15" /></td>
		<td colspan="4">Ibu<input class="form-control" style="width: 190px" name="pend_ibu" type="text" id="pend_ibu" value="<?= $row['pendidikan_ibu']?>" size="15"  /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Agama</td>
		<td>:</td>
		<td colspan="4">Ayah<input class="form-control" style="width: 200px" name="agama_ayh" type="text" id="agama_ayh" value="<?= $row['agama_ayah']?>" size="15" /></td>
		<td colspan="4">Ibu<input class="form-control" style="width: 200px" name="agama_ibu" type="text" id="agama_ibu" value="<?= $row['agama_ibu']?>" size="15" /></td>
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
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=ortu')" type="button" value="BATAL" /></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
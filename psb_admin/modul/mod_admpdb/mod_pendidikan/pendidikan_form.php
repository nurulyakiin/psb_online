<?php
$tab = TabView('Edit Biodata','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM psb_pendidikan WHERE id_pendidikan = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="pendidikan">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><b>C. KETERANGAN PENDIDIKAN SEBELUMNYA</b></td>
	  </tr>
	  <input name="id_pendidikan" type="hidden" id="id_pendidikan" value="<?= $row['id_pendidikan']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
		<tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 210px" name="asal" type="text" id="asal" value="<?= $row['asal_sekolah']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Tanggal dan Nomor STTB</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="dd/mm/yyyy, 75657***" style="width: 180px" name="sttb" type="text" id="sttb" value="<?= $row['tanggal_sttb']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Lama Belajar</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="tahun" style="width: 100px" name="lama" type="text" id="lama" value="<?= $row['lama_belajar']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Diterima di Sekolah ini Tanggal</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="tgl" type="text" id="tanggal" value="<?= $row['tanggal_diterima']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<!-- <tr>
		<td>Pindahan dari Sekolah</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="pindah" type="text" id="pindah" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr> -->
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
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=pendidikan')" type="button" value="BATAL" /></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
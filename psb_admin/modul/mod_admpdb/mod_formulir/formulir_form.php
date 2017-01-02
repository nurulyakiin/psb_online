<?php
$tab = TabView('Edit Formulir','','',''); echo"$tab";
$sql = mysql_query("SELECT * FROM psb_formulir WHERE id_formulir = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="formulir">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1"><b>Edit Formulir Pembayaran</b></span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">NISN</td>
		<td width="5">:</td>
		<td colspan="4"><input name="nisn" type="text" id="nisn" value="<?= $row['nisn']?>" size="12" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><label>No Peserta</label></td>
		<td>:</td>
		<td colspan="4"><input name="no_peserta" type="text" id="no_peserta" value="<?= $row['no_peserta']?>" size="30" readonly="true"/></td>
	  </tr>
	  <tr>
		<td>No Formulir</td>
		<td>:</td>
		<td colspan="4"><input name="no_formulir" type="text" id="no_formulir" value="<?= $row['no_formulir']?>" size="30" readonly="true"/></td>
	  </tr>
	  <tr>
		<td>Status Pembayaran Formulir</td>
		<td>:</td>
		<td colspan="4">
		<select name="status" id="status">
		  <option value="">-- Pilih Status Pembayaran --</option>
		  <option value="0">BELUM LUNAS</option>
		  <option value="1">LUNAS</option>
		</select>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="3"><input name="submit" id="submit" class="button" type="submit" value="SIMPAN" />
	    <input class="button" type="button" value="BATAL" onclick="history.go(-1)"/></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
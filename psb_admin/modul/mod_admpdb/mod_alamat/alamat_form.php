<?php
$tab = TabView('Edit Alamat','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM psb_tempattinggal WHERE id_tempattinggal = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="alamat">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="5" bgcolor="#33CC33"><b>B. KETERANGAN TEMPAT TINGGAL</b></td>
	  </tr>
	  <input name="id_tempattinggal" type="hidden" id="id_tempattinggal" value="<?= $row['id_tempattinggal']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Tinggal Dengan</td>
		<td>:</td>
		<td colspan="4">
		
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Orang Tua" /> <label> Orang Tua</label>
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Kos"> <label> Kos</label>
		<input style="width: 25px" type="radio" name="tempat" id="tempat" value="Asrama"> <label> Asrama</label>
		
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Jarak Tempat Tinggal dengan SMA Mitra Bintaro</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="Km" style="width: 50px" name="jarak" type="text" id="jarak" value="" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Berangkat Sekolah dengan Kendaraan</td>
		<td>:</td>
		<td colspan="4">
		
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Umum" /> <label> Umum</label>
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Motor"> <label> Motor</label>
		<input style="width: 25px" type="radio" name="kendar" id="kendar" value="Antar Jemput"> <label> Antar Jemput</label>
		
		</td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Referensi SMA Mitra Bintaro dari</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="ref" type="text" id="ref" value="" size="15" /></td>
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
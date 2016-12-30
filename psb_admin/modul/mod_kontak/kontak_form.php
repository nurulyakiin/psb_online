<?
$tab = TabView('Balas Email','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM psb_kontak WHERE aktif=1 and ktk_id = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="POST" name="kontak" id="kontak">
	<table width="75%" border="0" align="center">
	  <td colspan="6"><input name="id" type="hidden" id="id" value="<?= $row[ktk_id]?>"  /></td>
	  </tr>
	  <tr>
		<td width="173"><label>Kepada</label></td>
		<td width="5">:</td>
		<td width="515" colspan="4"><input name="email" type="text" id="email" value="<?= $row[email]?>" size="30" /></td>
	  </tr>
	  <tr>
		<td>Subjek</td>
		<td>:</td>
		<td colspan="4">
		<input name="subjek" type="text" id="subjek" value="Re: <?= $row[subjek]?>" size="30"  /></td>
	  </tr>
	  <tr>
		<td>Pesan</td>
		<td>:</td>
		<td colspan="4">
		<textarea name="pesan" id="pesan" style="width: 400px; height: 100px;"><?=$row['pesan']?></textarea>
		</td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
	    <td colspan="6"><input name="submit" id="submit" class="button" type="submit" value="KIRIM" />
          <input name="button" type="button" class="button" onclick="history.go(-1)" value="BATAL"/></td>
      </tr>
	  <tr>
	    <td colspan="6">&nbsp;</td>
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
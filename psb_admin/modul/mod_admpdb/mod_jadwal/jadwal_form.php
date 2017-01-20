<?php
$tab = TabView('Isi Jadwal','','',''); echo"$tab";
$sql = mysql_query("SELECT * FROM psb_jadwalsementara WHERE id_keterangansiswa = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="GET" enctype="multipart/form-data" name="info" id="info">
	<table width="85%" border="0" align="center">
	  <tr>
		<td>
		<input type="hidden" name="id_keterangansiswa" value="<?= $row['id_keterangansiswa']?>" />
		</td>
	  </tr>
	  <tr>
		<td width="125">Informasi</td>
	    <td colspan="2">:</td>
	    <td width="576">
		<textarea name="isi" id="isi" class="ckeditor" style="width: 600px; height: 400px;"><?=$row['info']?></textarea>
		</td>
	  </tr>
	  <tr>
		<td >Aktif</td>
	    <td width="3">:</td>
	    <td colspan="2">
		<?IAktif('psb_info','info_id');
		?>
	  </td>
	  </tr>
	  <tr>
	    <td colspan="6">&nbsp;</td>
      </tr>
	  <tr>
	    <td colspan="6"><input name="submit" id="submit" class="button" type="submit" value="UPDATE" />
          <input name="button" type="reset" class="button"  value="BATAL"/></td>
      </tr>
	  <tr>
	    <td colspan="6">&nbsp;</td>
      </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
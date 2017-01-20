<?php
$tab	= TabView('Isi Jadwal','','',''); echo"$tab";
$id		= @$_GET['id'];
$sql	= mysql_query("SELECT * FROM psb_jadwalsementara WHERE id_keterangansiswa = '$id'")or die(mysql_error());
$row	= mysql_fetch_array($sql);
?>
<form action="#" method="POST" enctype="multipart/form-data" name="jadwal" id="jadwal">
	<table width="85%" border="0" align="center">
	  <tr>
		<td>
		<input type="hidden" name="id_keterangansiswa" value="<?= $id ?>" />
		</td>
	  </tr>
	  <tr>
		<td width="125">Kelas</td>
	    <td colspan="2">:</td>
	    <td width="576">
		<input type="text" name="kelas" id="kelas" value="<?=$row['kelas']?>">
		</td>
	  </tr>
	  <tr>
		<td width="125">Jadwal</td>
	    <td colspan="2">:</td>
	    <td width="576">
		<textarea name="isi" id="isi" class="ckeditor" style="width: 600px; height: 400px;"><?=$row['jadwal']?></textarea>
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
	    <td colspan="6"><input name="submit" id="submit" class="button" type="submit" value="SIMPAN" />
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
<?
$tab = TabView('Informasi','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM psb_info where info_id=1")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<P class='msg' align='center'></p>
<form action="#" method="GET" enctype="multipart/form-data" name="info" id="info">
	<table width="75%" border="0" align="center">
	  <tr>
		<td>
		<input type="hidden" name="id" value="<?= $row['info_id']?>" />
		</td>
	  </tr>
	  <tr>
		<td width="125">Informasi</td>
	    <td colspan="2">:</td>
	    <td width="576">
		<textarea name="isi" id="isi" style="width: 400px; height: 100px;"><?=$row['info']?></textarea>
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
</div>
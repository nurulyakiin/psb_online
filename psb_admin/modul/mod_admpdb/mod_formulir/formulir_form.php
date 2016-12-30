<?php
$tab = TabView('Edit Biodata','','',''); echo"$tab";
$sql = mysql_query("SELECT*FROM ppdb_biodata WHERE nisn = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="biodata">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1"><b>A. DATA PRIBADI SISWA</b></span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">NISN</td>
		<td width="5">:</td>
		<td colspan="4"><input name="nisn" type="text" id="nisn" value="<?= $row['nisn']?>" size="12" maxlength="10" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><label>Nama Siswa</label></td>
		<td>:</td>
		<td colspan="4"><input name="nm_siswa" type="text" id="nm_siswa" value="<?= $row['nm_siswa']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td colspan="4"><input name="tmp_lahir" type="text" id="tmp_lahir" value="<?= $row['tmp_lahir']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td colspan="4"><input name="tgl_lahir" type="text" id="tanggal" value="<?= $row['tgl_lahir']?>" size="15" readonly="true" /></td>
	  </tr>
	  <tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td colspan="4">
		<?
		if($row['sts_bio']==1){
			JKelamin('ppdb_biodata','nisn');
		}
		else{
		?>
		<input type="radio" name="kelamin" id="kelamin" value="Pria"/>
		  <label> Pria</label>
		  <input type="radio" name="kelamin" id="kelamin" value="Wanita">
		<label> Wanita</label>
		<?}?>		</td>
	  </tr>
	  <tr>
		<td>Agama</td>
		<td>:</td>
		<td colspan="4">
		<select name="agama" id="agama">
		<?
		if($row['sts_bio']==1){
			Agama('ppdb_biodata','nisn');
		}
		else{
		?>
		  <option value="">-- Pilih Agama --</option>
		  <option value="islam">Islam</option>
		  <option value="katolik">Katolik</option>
		  <option value="protestan">Protestan</option>
		  <option value="hindu">Hindu</option>
		  <option value="budha">Budha</option>
		</select>
		<?}?>		</td>
	  </tr>
	  <tr>
		<td>Anak Ke</td>
		<td>:</td>
		<td width="230"><input name="urut_anak" type="text" id="urut_anak" value="<?= $row['ank_ke']?>" size="5" /></td>
		<td width="32">&nbsp;Dari</td>
		<td width="3">:</td>
		<td width="250"><input name="urut_anak1" type="text" id="urut_anak1" value="<?= $row['jml_saudara']?>" size="5" /></td>
	  </tr>
	  <tr>
		<td>Status Anak</td>
		<td>:</td>
		<td colspan="4">
		<select name="status_anak" id="status_anak">
		<?
		if($row['sts_bio']==1){
			SAnak('ppdb_biodata','nisn');
		}
		else{
		?>
		  <option value="">-- Pilih Status Anak --</option>
		  <option value="kandung">Kandung</option>
		  <option value="tiri">Tiri</option>
		  <option value="asuh">Asuh</option>
		  <option value="pungut">Pungut</option>
		</select>
		<?}?>		</td>
	  </tr>
	  <tr>
		<td>No HP</td>
		<td>:</td>
		<td colspan="4"><input name="hp_siswa" type="text" id="hp_siswa" value="<?= $row['hp_siswa']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1">
		  <H><b>B. KETERANGAN TEMPAT TINGGAL SISWA</b></H>
		  </span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Alamat Siswa</td>
		<td>:</td>
		<td colspan="4"><input name="almt_siswa" type="text" id="almt_siswa" value="<?= $row['almt_siswa']?>" size="50" /></td>
	  </tr>
	  <tr>
		<td>Selama bersekolah tinggal dengan</td>
		<td>:</td>
		<td colspan="4"><input name="tmpt_siswa" type="text" id="tmpt_siswa" value="<?= $row['tmpt_siswa']?>" size="25" /></td>
	  </tr>
	  <tr>
		<td>Kendaraan</td>
		<td>&nbsp;</td>
		<td colspan="4">
		<select name="kendaraan" id="kendaraan">
		<?
		if($row['sts_bio']==1){
			Kendaraan('ppdb_biodata','nisn');
		}
		else{
		?>
		  <option value="">-- Pilih Kendaraan --</option>
		  <option value="mobil">Mobil</option>
		  <option value="motor">Motor</option>
		  <option value="sepeda">Sepeda</option>
		  <option value="angkot">Angkot</option>
		</select>
		<?}?>		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1">
		  <H><b>C. KETERANGAN JASMANI</b></H>
		  </span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td colspan="4"><input name="berat_bdn" type="text" id="berat_bdn" value="<?= $row['brt_badan']?>" size="5" /> 
		Kg </td>
	  </tr>
	  <tr>
		<td><label>Tinggi Badan</label></td>
		<td>:</td>
		<td colspan="4"><input name="tggi_bdn" type="text" id="tggi_bdn" value="<?= $row['tgi_badan']?>" size="5" /> 
		Cm </td>
	  </tr>
	  <tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td colspan="4">
		<select name="darah" id="darah">
		<?
		if($row['sts_bio']==1){
			GDarah('ppdb_biodata','nisn');
		}
		else{
		?>
		  <option value="">-- Pilih Golongan Darah --</option>
		  <option value="a">A</option>
		  <option value="b">B</option>
		  <option value="ab">AB</option>
		  <option value="o">O</option>
		</select>
		<?}?>		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1">
		  <H><b>D. KETERANGAN PENDIDIKAN SEBELUMNYA</b></H>
		  </span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td colspan="4"><input name="asal_sklh" type="text" id="asal_sklh" value="<?= $row['asl_sekolah']?>" size="25" /></td>
	  </tr>
	  <tr>
		<td>Alamat Sekolah</td>
		<td>:</td>
		<td colspan="4"><input name="almt_sklh" type="text" id="almt_sklh" value="<?= $row['almt_sekolah']?>" size="50" /></td>
	  </tr>
	  <tr>
		<td>Nama Kepala Sekolah </td>
		<td>:</td>
		<td colspan="4"><input name="kpl_sekolah" type="text" id="kpl_sekolah" value="<?= $row['kpl_sekolah']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td>Asal Kelas di SMP</td>
		<td>:</td>
		<td colspan="4"><input name="asal_kls" type="text" id="asal_kls" value="<?= $row['asl_kls_smp']?>" size="8" /></td>
	  </tr>
	  <tr>
		<td>No Telp </td>
		<td>:</td>
		<td colspan="4"><input name="tlp_sklh" type="text" id="tlp_sklh" value="<?= $row['tlp_skl']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6" bgcolor="#33CC33"><span class="style1">
		  <H><b>E. KETERANGAN TENTANG ORANG TUA</b></H>
		  </span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td><label>Nama Ayah</label></td>
		<td>:</td>
		<td colspan="4"><input name="nm_ayah" type="text" id="nm_ayah" value="<?= $row['nm_ayah']?>" size="25" /></td>
	  </tr>
	  <tr>
		<td><label>Nama Ibu</label></td>
		<td>:</td>
		<td colspan="4"><input name="nm_ibu" type="text" id="nm_ibu" value="<?= $row['nm_ibu']?>" size="25" /></td>
	  </tr>
	  <tr>
		<td>Alamat Orang Tua</td>
		<td>:</td>
		<td colspan="4"><input name="almt_ortu" type="text" id="almt_ortu" value="<?= $row['almt_ortu']?>" size="50" /></td>
	  </tr>
	  <tr>
		<td>No. HP </td>
		<td>:</td>
		<td colspan="4"><input name="hp_ortu" type="text" id="hp_ortu" value="<?= $row['hp_ortu']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td colspan="4"><input name="kerja_ayah" type="text" id="kerja_ayah" value="<?= $row['kerja_ayah']?>" size="20" /></td>
	  </tr>
	  <tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td colspan="4"><input name="kerja_ibu" type="text" id="kerja_ibu" value="<?= $row['kerja_ibu']?>" size="20" /></td>
	  </tr>
	  <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td colspan="4"><input name="hasil_ortu" type="text" id="hasil_ortu" value="<?= $row['hasil_ortu']?>" size="25" /></td>
	  </tr>
	  <tr>
		<td>Tanggungan Biaya</td>
		<td>:</td>
		<td colspan="4"><input name="biaya" type="text" id="biaya" value="<?= $row['tgung_biaya']?>" size="20" /></td>
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
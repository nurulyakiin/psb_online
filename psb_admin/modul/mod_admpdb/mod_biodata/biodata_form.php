<?php
$tab = TabView('Edit Biodata','','',''); echo"$tab";
$sql = mysql_query("SELECT * FROM psb_keterangansiswa WHERE nisn = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="biodata">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="4" bgcolor="#33CC33"><b>A. DATA PRIBADI SISWA</b></td>
	  </tr>
	  <input name="id_formulir" type="hidden" id="id_formulir" value="<?= $row['id_formulir']?>"/>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">Nama Lengkap Calon</td>
		<td width="5">:</td>
		<td colspan="4"><input class="form-control" style="width: 260px" name="nmlkp" type="text" id="nmlkp" value="<?= $row['nama_lengkap']?>" size="12" maxlength="10" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td><label>Nama Panggilan</label></td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="nmpgl" type="text" id="nmpgl" value="<?= $row['nama_penggilan']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>NISN/No Ijazah<label></td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 120px" name="nisn" type="text" id="nisn" value="<?= $row['nisn']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 180px" name="tmp_lahir" type="text" id="tmp_lahir" value="<?= $row['tempat_tgllahir']?>" size="30" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td><label>Alamat</label></td>
		<td>:</td>
		<td colspan="4"><textarea rows="4" cols="50" class="form-control" style="width: 190px" name="alamat" type="text" id="alamat" value="" size="30"><?= $row['alamat']?></textarea></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>No Telp/HP</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 165px" name="hp_siswa" type="text" id="hp_siswa" value="<?= $row['no_telp']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <!-- <tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="kelamin" id="kelamin" value="Pria" /> <label> Pria</label>
		  <input style="width: 25px" type="radio" name="kelamin" id="kelamin" value="Wanita"> <label> Wanita</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr> -->
		<tr>
		<td>Ukuran Seragam</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="S" /> <label> S</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="M"> <label> M</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="L"> <label> L</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="XL"> <label> XL</label>
		<input style="width: 25px" type="radio" name="seragam" id="seragam" value="XXL"> <label> XXL</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="/Kg" style="width: 50px" name="brtbdn" type="text" id="brtbdn" value="<?= $row['berat_badan']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" placeholder="/Cm" style="width: 50px" name="tgibdn" type="text" id="tgibdn" value="<?= $row['tinggi_badan']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <!-- <tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td colspan="4">
		<?
		if($row['sts_bio']==1){
			JKelamin('psb_biodata','nisn');
		}
		else{
		?>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="O" /> <label> O</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="A"> <label> A</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="B" /> <label> B</label>
		<input style="width: 25px" type="radio" name="goldar" id="goldar" value="AB"> <label> AB</label>
		<?}?>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr> -->
	  <tr>
		<td>Penyakit Yang Pernah Di derita</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="pykt" type="text" id="pykt" value="<?= $row['riwayat_penyakit']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Kelainan Jasmani Lainnya</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="jasman" type="text" id="jasman" value="<?= $row['kelainan_jasmani']?>" size="15" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Agama</td>
		<td>:</td>
		<td colspan="4">
		<select class="form-control" style="width: 100px" name="agama" id="agama">
		<option value="">-- Pilih Agama --</option>
		  <option value="islam">Islam</option>
		  <option value="katolik">Katolik</option>
		  <option value="protestan">Protestan</option>
		  <option value="hindu">Hindu</option>
		  <option value="budha">Budha</option>
		</select>
		</td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Kewarganegaraan</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="kkn" id="kkn" value="WNI" /> <label> WNI</label>
		  <input style="width: 25px" type="radio" name="kkn" id="kkn" value="WNA"> <label> WNA</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Anak Ke</td>
		<td>:</td>
		<td width="230"><input class="form-control" style="width: 80px" name="urut_anak" type="text" id="urut_anak" value="<?= $row['anak_ke']?>" size="5" /></td>
		<td width="32">&nbsp;Dari</td>
		<td width="3">:</td>
		<td width="250"><input class="form-control" style="width: 80px" name="urut_anak1" type="text" id="urut_anak1" value="<?= $row['jumlah_saudara']?>" size="5" /></td>
	  </tr>
	  <tr>
		<td><br></td>
		</tr>
	  <tr>
		<td>Status Anak</td>
		<td>:</td>
		<td colspan="4">
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Kandung" /> <label> Kandung</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Piatu"> <label> Piatu</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Tiri" /> <label> Tiri</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Yatim Piatu"> <label> Yatim Piatu</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Angkat" /> <label> Angkat</label>
		<input style="width: 25px" type="radio" name="status_anak" id="status_anak" value="Yatim"> <label> Yatim</label>
		</td>
	  </tr><tr>
		<td><br></td>
		</tr>
		<tr>
		<td><br></td>
		</tr>
		<tr>
		<td>Bahasa Keseharian</td>
		<td>:</td>
		<td colspan="4"><input class="form-control" style="width: 200px" name="bhs" type="text" id="bhs" value="<?= $row['bahasa']?>" size="15" /></td>
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
		<input name="reset" id="reset" class="btn btn-warning" onclick="window.location.replace('?module=biodata')" type="button" value="BATAL" /></td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>
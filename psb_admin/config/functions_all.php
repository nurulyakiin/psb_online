<?php
function TabView($Name,$Action,$Tval,$Eval)
{
	if (empty($Name)){
		if (empty($Action)){
			$val = $Tval;
		}
		else{
			$val = $Eval;
		}
		$value = '<div id="tabsview"></div>
				  <div id="tab1" class="tab_sel" align="center">&nbsp; '. $val .' &nbsp;</div>
				  <div class="tab_bdr"></div><div class="panel" id="panel1" style="display:block;">
				  <span><ul>';
	}
	else{
		$value = '<div id="tabsview"></div>
				  <div id="tab1" class="tab_sel" align="center">&nbsp; '. $Name .' &nbsp;</div>
				  <div class="tab_bdr"></div><div class="panel" id="panel1" style="display:block;">
				  <span><ul>';
	}
	return $value;
}

function Balas($action,$text)
{
	$img_src='images/email.jpeg';
	$action = 'href="' . $action . '"';
	$balas = '<a ' . $action . '><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $balas;
}

function IAktif($tabel, $value){
	$aktif=mysql_query("SELECT * FROM $tabel WHERE $value=1")or die(mysql_error());
	while ($res=mysql_fetch_array($aktif))
	{
		if ($res['aktif']=='1')
		{
			$view = "<input type='radio' name='aktif' id='aktif' value='1' checked/><label>Y</label>
					  <input type='radio' name='aktif' id='aktif' value='0' /><label>N</label>";
		}
		else
		{
			$view = "<input type='radio' name='aktif' id='aktif' value='1' /><label>Y</label>
					  <input type='radio' name='aktif' id='aktif' value='0' checked/><label>N</label>";
		}
	}
	echo "$view";
}
function IsEnable($tabel, $value){
	$hak=mysql_query("SELECT * FROM $tabel WHERE $value='$_GET[id]'")or die(mysql_error());
	while ($res=mysql_fetch_array($hak))
	{
		if ($res['isenable']=='1')
		{
			$view = "<input type='radio' name='isenable' id='isenable' value='1' checked/><label>Y</label>
					  <input type='radio' name='isenable' id='isenable' value='0' /><label>N</label>";
		}
		else
		{
			$view = "<input type='radio' name='isenable' id='isenable' value='1' /><label>Y</label>
				      <input type='radio' name='isenable' id='isenable' value='0' checked/><label>N</label>";
		}
	}
	echo "$view";
}
function Status($tabel, $value){
	$status=mysql_query("SELECT * FROM $tabel WHERE $value='$_GET[id]'")or die(mysql_error());
	$items=array("0","1");
	while ($res=mysql_fetch_array($status))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['name']==$items[$i])
			{
				if($items[$i]==0)
					$view .= "<option value=\"$items[$i]\" selected>Administrator</option>";
				else
					$view .= "<option value=\"$items[$i]\" selected>Operator</option>";
			}
			else
			{
				if($items[$i]==0)
					$view .= "<option value=\"$items[$i]\" >Administrator</option>";
				else
					$view .= "<option value=\"$items[$i]\" >Operator</option>";
			}
		}
	}
	echo "$view";
}
function Edit($action,$text)
{
	$img_src='images/edit.gif';
	$action = 'href="' . $action . '"';
	$edit = '<a ' . $action . '><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $edit;
}

function Hapus($action,$confirm,$text)
{
	$img_src='images/delete.gif';
	$confirm= 'onclick='.'"return confirm('."'Apakah data $confirm akan dihapus?'".')"';
	$action = 'href="' . $action . '"';
	$hapus = '<a ' . $action . $confirm.'><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $hapus;
}

function Unduh($action,$confirm,$text)
{
	$img_src='images/download.gif';
	$confirm= 'onclick='.'"return confirm('."'Apakah data $confirm akan didownload?'".')"';
	$action = 'href="' . $action . '"';
	$hapus = '<a ' . $action . $confirm.'><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $hapus;
}

function Cetak($action,$text)
{
	$img_src='images/print.gif';
	$action = 'href="' . $action . '"' . 'target='."'_blank'";
	$cetak = '<a ' . $action . '><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $cetak;
}

function Detail($action,$text)
{
	$img_src='images/details.gif';
	$action = 'href="' . $action . '"';
	$detail = '<a ' . $action . '><img src="' . $img_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';

	return $detail;
}

function addControl($action, $text, $image_src = '', $bool)
{
	$action = 'href="' . $action . '"';
	switch($bool){
		case true:
			$add = '<a ' . $action . '><img src="' . $image_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image"></a>';
			break;
		case false:
			$add = '<img src="' . $image_src . '" alt="' . $text . '" title="' . $text . '" class="tbl-control-image">';
			break;
	}	
		return $add;
}
function GDarah($tabel, $value){
	$darah=mysql_query("select * from $tabel where $value='$_GET[id]'")or die(mysql_error());
	$items=array("A","B","AB","O");
	while ($res=mysql_fetch_array($darah))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['gol_darah']==$items[$i])
			{
				$view .= "<option value=\"$items[$i]\" selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value=\"$items[$i]\">$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function Kendaraan($tabel, $value){
	$kendaraan=mysql_query("select * from $tabel where $value='$_GET[id]'")or die(mysql_error());
	$items=array("Mobil","Motor","Sepeda","Angkot");
	while ($res=mysql_fetch_array($kendaraan))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['kendaraan']==$items[$i])
			{
				$view .= "<option value=\"$items[$i]\" selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value=\"$items[$i]\">$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function SAnak($tabel, $value){
	$status_ank=mysql_query("select * from $tabel where $value='$_GET[id]'")or die(mysql_error());
	$items=array("Kandung","Tiri","Asuh","Pungut");
	while ($res=mysql_fetch_array($status_ank))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['sts_siswa']==$items[$i])
			{
				$view .= "<option value=\"$items[$i]\" selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value=\"$items[$i]\">$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function Agama($tabel, $value){
	$agama=mysql_query("select agama from psb_formulir where nisn='$_GET[id]'")or die(mysql_error());
	$items=array("islam","katolik","protestan","hindu","budha");
	while ($res=mysql_fetch_array($agama))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['agama']==$items[$i])
			{
				$view .= "<option value=\"$items[$i]\" selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value=\"$items[$i]\">$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function JKelamin($tabel, $value){
	$kelamin=mysql_query("select * from $tabel where $value='$_GET[id]'")or die(mysql_error());
	while ($res=mysql_fetch_array($kelamin))
	{
		if ($res['jns_kelamin']=='Pria')
		{
			$view = "<input type='radio' name='kelamin' id='kelamin' value='Pria' checked/><label>Pria</label>
				  <input type='radio' name='kelamin' id='kelamin' value='Wanita' /><label>Wanita</label>";
		}
		else
		{
			$view = "<input type='radio' name='kelamin' id='kelamin' value='Pria' /><label>Pria</label>
				  <input type='radio' name='kelamin' id='kelamin' value='Wanita' checked/><label>Wanita</label>";
		}
	}
	echo "$view";
}

function CPendaftar($tabel){
	$sql = "select count(*) from $tabel";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	echo $row[0];
}

function SVerifikasi($tabel){
	$sql = "SELECT count(*) FROM $tabel WHERE sts_verifikasi=1";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	echo $row[0];
}

function BVerifikasi($tabel){
	$sql = "SELECT count(*) FROM $tabel WHERE sts_verifikasi=0";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	echo $row[0];
}

function BesarKalimat($str){
	$kalimat = strtoupper($str);
	return $kalimat;
}

function FormatRupiah($angka){
  $rupiah=number_format($angka,0,',','.');
  return $rupiah;
}

function tgl_indo($tgl){
		$tanggal = substr($tgl,8,2);
		$bulan = getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;		 
}	

function getBulan($bln){
	switch ($bln){
		case 1: 
			return 'Januari';
			break;
		case 2:
			return 'Februari';
			break;
		case 3:
			return 'Maret';
			break;
		case 4:
			return 'April';
			break;
		case 5:
			return 'Mei';
			break;
		case 6:
			return 'Juni';
			break;
		case 7:
			return 'Juli';
			break;
		case 8:
			return 'Agustus';
			break;
		case 9:
			return 'September';
			break;
		case 10:
			return 'Oktober';
			break;
		case 11:
			return 'November';
			break;
		case 12:
			return 'Desember';
			break;
	}
} 
?>
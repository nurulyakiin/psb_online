<?
function GDarah($tabel, $value){
	$darah=mysql_query("select * from $tabel where $value='$_SESSION[nisn]'")or die(mysql_error());
	$items=array('A','B','AB','O');
	while ($res=mysql_fetch_array($darah))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['gol_darah']==$items[$i])
			{
				$view .= "<option value='$items[$i]' selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value='$items[$i]'>$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function Kendaraan($tabel, $value){
	$kendaraan=mysql_query("select * from $tabel where $value='$_SESSION[nisn]'")or die(mysql_error());
	$items=array('Mobil','Motor','Sepeda','Angkot');
	while ($res=mysql_fetch_array($kendaraan))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['kendaraan']==$items[$i])
			{
				$view .= "<option value='$items[$i]' selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value='$items[$i]'>$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function SAnak($tabel, $value){
	$status_ank=mysql_query("select * from $tabel where $value='$_SESSION[nisn]'")or die(mysql_error());
	$items=array('Kandung','Tiri','Asuh','Pungut');
	while ($res=mysql_fetch_array($status_ank))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['sts_siswa']==$items[$i])
			{
				$view .= "<option value='$items[$i]' selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value='$items[$i]'>$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function Agama($tabel, $value){
	$agama=mysql_query("select agama from psb_biodata where nisn='$_SESSION[nisn]'")or die(mysql_error());
	$items=array('islam','katolik','protestan','hindu','budha');
	while ($res=mysql_fetch_array($agama))
	{
		for($i=0;$i<count($items);$i++)
		{
			if ($res['agama']==$items[$i])
			{
				$view .= "<option value='$items[$i]' selected>$items[$i]</option>";
			}
			else
			{
				$view .= "<option value='$items[$i]'>$items[$i]</option>";
			}
		}
	}
	echo "$view";
}

function JKelamin($tabel, $value){
	$kelamin=mysql_query("select * from $tabel where $value='$_SESSION[nisn]'")or die(mysql_error());
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
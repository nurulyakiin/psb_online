<?php
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=1>&laquo;</a>
                    	<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$prev>Sebelumnya</a>";
}
else{ 
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary'>&laquo;</a>
					  	<a class='btn btn-primary'>Sebelumnya</a>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? "<a class='btn btn-primary'> ... </a>" : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i>$i</a>";
  }
	  $angka .= "<a class='btn btn-primary active'>$halaman_aktif</a>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i>$i</a>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<a class='btn btn-primary'> ... </a><a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman>$jmlhalaman</a></span> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$next>Berikutnya</a>
                     <a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman>&raquo;</a> ";
}
else{
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary'>Berikutnya</a>
					  	<a class='btn btn-primary'>&raquo;</a>
					  </div>";
}
return $link_halaman;
}
}


class Paging9{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=1&nama=$_GET[nama]>&laquo;</a> 
                    	<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$prev&nama=$_GET[nama]>Sebelumnya</a>";
}
else{ 
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary'>&laquo;</a>
					  	<a class='btn btn-primary'>Sebelumnya</a>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? "<a class='btn btn-primary'> ... </a>" : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i&nama=$_GET[nama]>$i</a>";
  }
	  $angka .= " <a class='btn btn-primary active'>$halaman_aktif</a>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i&nama=$_GET[nama]>$i</a>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<a class='btn btn-primary'> ... </a><a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman&nama=$_GET[nama]>$jmlhalaman</a> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$next&nama=$_GET[nama]>Berikutnya</a>
                     <a class='btn btn-primary' href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman&nama=$_GET[nama]>&raquo;</a> ";
}
else{
	$link_halaman .= "<div class='btn-group'>
						<a class='btn btn-primary'>Berikutnya</a>
					  	<a class='btn btn-primary'>&raquo;</a>
					  </div>";
}
return $link_halaman;
}
}

?>

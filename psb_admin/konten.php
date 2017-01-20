<?php
include '../config/koneksi.php';
include 'config/class_paging.php';
include 'config/functions_all.php';


if ($_GET['module']=='home'){
   include 'modul/mod_home/home.php';
}
elseif ($_GET['module']=='kontak'){
  include 'modul/mod_kontak/circuit.php';
}
elseif ($_GET['module']=='modul'){
  include 'modul/mod_setting/mod_modul/circuit.php';
}
elseif ($_GET['module']=='user'){
  include 'modul/mod_setting/mod_user/circuit.php';
}
elseif ($_GET['module']=='info'){
  include 'modul/mod_setting/mod_info/circuit.php';
}
elseif ($_GET['module']=='formulir'){
  include 'modul/mod_admpdb/mod_formulir/circuit.php';
}
elseif ($_GET['module']=='biodata'){
  include 'modul/mod_admpdb/mod_biodata/circuit.php';
}
elseif ($_GET['module']=='jadwal'){
  include 'modul/mod_admpdb/mod_jadwal/circuit.php';
}
elseif ($_GET['module']=='alamat'){
  include 'modul/mod_admpdb/mod_alamat/circuit.php';
}
elseif ($_GET['module']=='pendidikan'){
  include 'modul/mod_admpdb/mod_pendidikan/circuit.php';
}
elseif ($_GET['module']=='ortu'){
  include 'modul/mod_admpdb/mod_ortu/circuit.php';
}
elseif ($_GET['module']=='wali'){
  include 'modul/mod_admpdb/mod_wali/circuit.php';
}
elseif ($_GET['module']=='docu'){
  include 'modul/mod_admpdb/mod_docu/circuit.php';
}
elseif ($_GET['module']=='konfirmasi'){
  include 'modul/mod_konfirmasi/circuit.php';
}
elseif ($_GET['module']=='nilai'){
  include 'modul/mod_admpdb/mod_nilai/circuit.php';
}
elseif ($_GET['module']=='c_bidata'){
  include 'modul/mod_cetak/print_biodata/circuit.php';
}
else
{
  echo "<meta http-equiv='refresh' content='0 url=?module=home' />";
}
?>

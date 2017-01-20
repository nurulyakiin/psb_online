<?php 
include 'js/menu.js';
if ($_GET['module']=='home'){
}
elseif ($_GET['module']=='formulir'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_formulir/formulir_jquery.js';
}
elseif ($_GET['module']=='biodata'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_biodata/biodata_jquery.js';
}
elseif ($_GET['module']=='jadwal'){
	include 'js/dtpicker.js';
	include 'modul/mod_jadwal/jadwal_jquery.js';
}
elseif ($_GET['module']=='alamat'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_alamat/alamat_jquery.js';
}
elseif ($_GET['module']=='pendidikan'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_pendidikan/pendidikan_jquery.js';
}
elseif ($_GET['module']=='ortu'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_ortu/ortu_jquery.js';
}
elseif ($_GET['module']=='wali'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_wali/wali_jquery.js';
}
elseif ($_GET['module']=='docu'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_docu/docu_jquery.js';
}
elseif ($_GET['module']=='konfirmasi'){
	include 'js/dtpicker.js';
	include 'modul/mod_konfirmasi/konfirmasi_jquery.js';
}
elseif ($_GET['module']=='nilai'){
	include 'js/avg.js';
	include 'modul/mod_admpdb/mod_nilai/nilai_jquery.js';
}
elseif ($_GET['act']=='add_user'){
	include 'modul/mod_setting/mod_user/adduser_jquery.js';
}
elseif ($_GET['act']=='edit_user'){
	include 'modul/mod_setting/mod_user/edituser_jquery.js';
}
elseif ($_GET['module']=='info'){
	include 'modul/mod_setting/mod_info/info_jquery.js';
}
elseif ($_GET['module']=='kontak'){
	include 'modul/mod_kontak/kontak_jquery.js';
}
elseif ($_GET['module']=='logout'){
  include 'modul/mod_logout/logout.php';
}
?>
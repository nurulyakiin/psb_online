<?php
include 'js/message.js';

if ($_GET['module']=='home'){
	include 'modul/mod_login/login_jquery.js';
	include 'modul/mod_pass/dialog_jquery.js';
}
elseif ($_GET['module']=='biodata'){
	include 'js/dtpicker.js';
	include 'modul/mod_biodata/biodata_jquery.js';
}
elseif ($_GET['module']=='alamat'){
	include 'js/dtpicker.js';
	include 'modul/mod_alamat/alamat_jquery.js';
}
elseif ($_GET['module']=='pendidikan'){
	include 'js/dtpicker.js';
	include 'modul/mod_pendidikan/pendidikan_jquery.js';
}
elseif ($_GET['module']=='ortu'){
	include 'js/dtpicker.js';
	include 'modul/mod_ortu/ortu_jquery.js';
}
elseif ($_GET['module']=='wali'){
	include 'js/dtpicker.js';
	include 'modul/mod_wali/wali_jquery.js';
}
elseif ($_GET['module']=='konfirmasi'){
	include 'js/dtpicker.js';
	include 'modul/mod_konfirmasi/konfirmasi_jquery.js';
}
elseif ($_GET['module']=='rapor'){
	include 'js/avg.js';
	include 'modul/mod_rapor/rapor_jquery.js';
}
elseif ($_GET['module']=='daftar'){	
	include 'modul/mod_daftar/daftar_jquery.js';
}
elseif ($_GET['module']=='login'){	
	include 'modul/mod_login/login_jquery.js';
	include 'modul/mod_pass/dialog_jquery.js';
}
elseif ($_GET['module']=='pesan'){
	include 'modul/mod_bantuan/pesan/bantuan_jquery.js';
}
elseif ($_GET['module']=='logout'){	
	include 'modul/mod_logout/logout_action.php';
}

?>
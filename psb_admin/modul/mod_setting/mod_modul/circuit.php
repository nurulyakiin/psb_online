<?php
switch(@$_GET['act']){
  default:
		include 'modul.php';
    break;
  case 'aktif':
		include 'modul_action.php';
    break;  
  case 'del':
		include 'modul_action.php';
	break;
}
?>

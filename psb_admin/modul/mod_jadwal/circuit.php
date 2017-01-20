<?php
switch(@$_GET['act']){
  default:
		include 'jadwal.php';
    break;
  case 'edit_bio':
		include 'jadwal_form.php';
    break;  
  case 'v_edit':
		include 'jadwal_action.php';
    break;  
  case 's_edit':
		include 'jadwal_action.php';
    break;
  case 'add':
		include 'jadwal_form.php';
  break;
  case 'del':
		include 'jadwal_action.php';
  break;
}
?>

<?php
switch(@$_GET['act']){
  default:
		include 'konfirmasi.php';
    break;
  case 'edit_konfirmasi':
		include 'konfirmasi_form.php';
    break;  
  case 'v_edit':
		include 'konfirmasi_action.php';
    break;  
  case 's_edit':
		include 'konfirmasi_action.php';
    break;
  case 'add':
		include 'konfirmasi_form.php';
  break;
  case 'del':
		include 'konfirmasi_action.php';
  break;
}
?>

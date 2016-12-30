<?php
switch(@$_GET['act']){
  default:
		include 'alamat.php';
    break;
  case 'edit_bio':
		include 'alamat_form.php';
    break;  
  case 'v_edit':
		include 'alamat_action.php';
    break;  
  case 's_edit':
		include 'alamat_action.php';
    break;
  case 'add':
		include 'alamat_form.php';
  break;
  case 'del':
		include 'alamat_action.php';
  break;
}
?>

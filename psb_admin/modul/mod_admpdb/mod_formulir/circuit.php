<?php
switch(@$_GET['act']){
  default:
		include 'formulir.php';
    break;
  case 'edit_bio':
		include 'formulir_form.php';
    break;  
  case 'v_edit':
		include 'formulir_action.php';
    break;  
  case 's_edit':
		include 'formulir_action.php';
    break;
  case 'add':
		include 'formulir_form.php';
  break;
  case 'del':
		include 'formulir_action.php';
  break;
}
?>

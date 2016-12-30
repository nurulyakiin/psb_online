<?php
switch(@$_GET['act']){
  default:
		include 'ortu.php';
    break;
  case 'edit_bio':
		include 'ortu_form.php';
    break;  
  case 'v_edit':
		include 'ortu_action.php';
    break;  
  case 's_edit':
		include 'ortu_action.php';
    break;
  case 'add':
		include 'ortu_form.php';
  break;
  case 'del':
		include 'ortu_action.php';
  break;
}
?>

<?php
switch(@$_GET['act']){
  default:
		include 'docu.php';
    break;
  case 'edit_bio':
		include 'docu_form.php';
    break;  
  case 'v_edit':
		include 'docu_action.php';
    break;  
  case 's_edit':
		include 'docu_action.php';
    break;
  case 'add':
		include 'docu_form.php';
  break;
  case 'del':
		include 'docu_action.php';
  break;
}
?>

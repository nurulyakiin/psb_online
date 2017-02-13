<?php
switch(@$_GET['act']){
  default:
		include 'wali.php';
    break;
  case 'edit_wali':
		include 'wali_form.php';
    break;  
  case 'v_edit':
		include 'wali_action.php';
    break;  
  case 's_edit':
		include 'wali_action.php';
    break;
  case 'add':
		include 'wali_form.php';
  break;
  case 'del':
		include 'wali_action.php';
  break;
}
?>

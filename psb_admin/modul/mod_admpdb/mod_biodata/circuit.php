<?php
switch(@$_GET['act']){
  default:
		include 'biodata.php';
    break;
  case 'edit_bio':
		include 'biodata_form.php';
    break;  
  case 'v_edit':
		include 'biodata_action.php';
    break;  
  case 's_edit':
		include 'biodata_action.php';
    break;
  case 'add':
		include 'biodata_form.php';
  break;
  case 'del':
		include 'biodata_action.php';
  break;
}
?>

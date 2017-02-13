<?php
switch(@$_GET['act']){
  default:
		include 'pendidikan.php';
    break;
  case 'edit_pen':
		include 'pendidikan_form.php';
    break;  
  case 'v_edit':
		include 'pendidikan_action.php';
    break;  
  case 's_edit':
		include 'pendidikan_action.php';
    break;
  case 'add':
		include 'pendidikan_form.php';
  break;
  case 'del':
		include 'pendidikan_action.php';
  break;
}
?>

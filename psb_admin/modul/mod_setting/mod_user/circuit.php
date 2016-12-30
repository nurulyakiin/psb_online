<?php
switch(@$_GET['act']){
  default:
		include 'user.php';
    break;
  case 'edit_user':
		include 'user_form.php';
    break;  
  case 'add_user':
		include 'user_form.php';
  break;
  case 'enb':
		include 'user_action.php';
  break;
  case 'del':
		include 'user_action.php';
  break;
}
?>

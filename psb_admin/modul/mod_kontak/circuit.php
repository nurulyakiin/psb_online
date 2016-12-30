<?php
switch($_GET[act]){
  default:
		include "kontak.php";
    break;
  case "balesemail":
		include "kontak_form.php";
    break;  
}
?>

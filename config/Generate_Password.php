<?php
function GeneratePassword($length)
{
  //inisialisasi password kosong
	$password = "";

	//daftar karakter-karakter yang di perbolehkan
  $possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 

	//buat awal penghitung
  $i = 0; 

	//tambahkan karakter acak sampai $length terpenuhi
  while ($i < $length) { 
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);

	//jika karakter sudah ada, tidak boleh digunakan lagi	
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }
  }
 return $password;
}

?>
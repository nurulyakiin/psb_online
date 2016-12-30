<?php
error_reporting(0);
$server = 'localhost';
$username = 'u405970059_musr';
$password = '0p9o8i7u6y5t';
$database = 'u405970059_mbint';

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die('Koneksi gagal');
mysql_select_db($database) or die('Database tidak bisa dibuka');
?>

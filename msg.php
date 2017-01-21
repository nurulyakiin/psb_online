<?php
include 'config/koneksi.php';
$sql=mysql_query("SELECT * FROM psb_info where info_id=1 and aktif=1")or die(mysql_error());
$row=mysql_fetch_array($sql);

echo "<center>$row[info]</center>";
?>
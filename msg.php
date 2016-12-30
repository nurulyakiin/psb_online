<?php
include 'config/koneksi.php';
$sql=mysql_query("select*from psb_info where info_id=1 and aktif=1")or die(mysql_error());
$row=mysql_fetch_array($sql);

echo "$row[info]";
?>
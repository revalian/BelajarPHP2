<?php 
$value = 'achmatim';
$value = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value, time()+3600); /* expire in 1 hour */

echo "<h1>Ini halaman pengetesan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
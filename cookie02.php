<?php

if(isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ADA. Isinya : " .$_COOKIE 
    ['username']."</h1>";
} else {
    echo "<h1>Cookie 'username' TIDAK ADA.</h1>";
}
if(isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ADA. Isinya : " .$_COOKIE 
    ['namalengkap']."</h1>";
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ADA.</h1>";
}

echo "<h2>Klik <a href='cookie01.php'>disini</a> untuk penciptaan cookies";
?>
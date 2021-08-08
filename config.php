<?php

/*$db_username    = 'root';
$db_password    = '';
$db_name        = 'sparks_bank';
$db_host        = 'localhost';*/
$db_username    = 'id17378938_sparks';
$db_password    = 'Vdighe@161292';
$db_name        = 'id17378938_sparks_bank';
$db_host        = 'localhost';
$db = new mysqli($db_host, $db_username, $db_password,$db_name);

if(!$db) {

echo 'connection failed'; exit;

}
?>

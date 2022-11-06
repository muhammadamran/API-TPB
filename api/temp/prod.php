<?php
// Server Prod
$dbhost = '103.82.240.55';
$dbusername = 'inxmiles_tpb';
$dbpassword = 'Flatrone2241TPB';
$dbname = 'inxmiles_tpb';
$dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());
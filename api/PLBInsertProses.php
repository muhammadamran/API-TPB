<?php
include "db.php";

if (function_exists($_GET['function'])) {
    $_GET['function']();
}

function post_header()
{
    global $db;
    $insert = $_GET['DATA'];
    $update = $db->query($insert);

    if ($update) {
        echo 200;
    } else {
        echo 300;
    }
}
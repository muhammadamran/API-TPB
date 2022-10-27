<?php

include "db.php";

$sql = $db->query("SELECT UKURAN FROM plb_barang WHERE ID=39");
$row = mysqli_fetch_array($sql);

$test = $row['UKURAN'];
$test2 = explode('X', $test);

// echo $test2[0];
// echo ""
// echo $test2[1];
$ltr = str_replace("Ltr", "", $test2[1]);
echo $ltr;
echo "<br>";
$ubah = str_replace(",", ".", $ltr);
echo $ubah;
echo "<br>";
$new = $ubah * 100;
echo $new;
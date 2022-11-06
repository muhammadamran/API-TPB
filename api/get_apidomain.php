<?php
include "db.php";
include "get_api.php";

$content = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_bahan_baku');
$data = json_decode($content, true);
echo $dataAJUGB['status'];

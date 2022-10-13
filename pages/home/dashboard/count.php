<?php
$count_table = $db->query("SELECT * FROM view_count_tpb");
$data_count_table = $count_table->fetch_assoc();
// BC
$count_bc = $db->query("SELECT COUNT(*) AS total_bc FROM tpb_header WHERE KODE_DOKUMEN_PABEAN IS NOT NULL");
$data_count_bc = $count_bc->fetch_assoc();
if ($data_count_bc === NULL) {
    $databc = 0;
} else {
    $databc = $data_count_bc['total_bc'];
}
// BC 2.3
$count_23 = $db->query("SELECT COUNT(*) AS total_bc23 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=23");
$data_count_23 = $count_23->fetch_assoc();
if ($data_count_23 === NULL) {
    $data23 = 0;
} else {
    $data23 = $data_count_23['total_bc23'];
}
// BC 2.5
$count_25 = $db->query("SELECT COUNT(*) AS total_bc25 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=25");
$data_count_25 = $count_25->fetch_assoc();
if ($data_count_25 === NULL) {
    $data25 = 0;
} else {
    $data25 = $data_count_25['total_bc25'];
}
// BC 2.6.1
$count_261 = $db->query("SELECT COUNT(*) AS total_bc261 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=261");
$data_count_261 = $count_261->fetch_assoc();
if ($data_count_261 === NULL) {
    $data261 = 0;
} else {
    $data261 = $data_count_261['total_bc261'];
}
// BC 2.7
$count_27 = $db->query("SELECT COUNT(*) AS total_bc27 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=27");
$data_count_27 = $count_27->fetch_assoc();
if ($data_count_27 === NULL) {
    $data27 = 0;
} else {
    $data27 = $data_count_27['total_bc27'];
}
// BC 4.0
$count_40 = $db->query("SELECT COUNT(*) AS total_bc40 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=40");
$data_count_40 = $count_40->fetch_assoc();
if ($data_count_40 === NULL) {
    $data40 = 0;
} else {
    $data40 = $data_count_40['total_bc40'];
}
// BC 4.1
$count_41 = $db->query("SELECT COUNT(*) AS total_bc41 FROM tpb_header WHERE KODE_DOKUMEN_PABEAN=41");
$data_count_41 = $count_41->fetch_assoc();
if ($data_count_41 === NULL) {
    $data41 = 0;
} else {
    $data41 = $data_count_41['total_bc41'];
}
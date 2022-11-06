<?php
include "db.php";

// tpb_header
$contenttpb_header = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_header');
$datatpb_header = json_decode($contenttpb_header, true);
// echo $datatpb_header['status'];
// tpb_bahan_baku
$contenttpb_bahan_baku = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_bahan_baku');
$datatpb_bahan_baku = json_decode($contenttpb_bahan_baku, true);
// echo $datatpb_bahan_baku['status'];
// tpb_bahan_baku_dokumen
$contenttpb_bahan_baku_dokumen = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_bahan_baku_dokumen');
$datatpb_bahan_baku_dokumen = json_decode($contenttpb_bahan_baku_dokumen, true);
// echo $datatpb_bahan_baku_dokumen['status'];
// tpb_bahan_baku_tarif
$contenttpb_bahan_baku_tarif = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_bahan_baku_tarif');
$datatpb_bahan_baku_tarif = json_decode($contenttpb_bahan_baku_tarif, true);
// echo $datatpb_bahan_baku_tarif['status'];
// tpb_barang
$contenttpb_barang = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_barang');
$datatpb_barang = json_decode($contenttpb_barang, true);
// echo $datatpb_barang['status'];
// tpb_barang_dokumen
$contenttpb_barang_dokumen = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_barang_dokumen');
$datatpb_barang_dokumen = json_decode($contenttpb_barang_dokumen, true);
// echo $datatpb_barang_dokumen['status'];
// tpb_barang_penerima
$contenttpb_barang_penerima = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_barang_penerima');
$datatpb_barang_penerima = json_decode($contenttpb_barang_penerima, true);
// echo $datatpb_barang_penerima['status'];
// tpb_barang_tarif
$contenttpb_barang_tarif = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_barang_tarif');
$datatpb_barang_tarif = json_decode($contenttpb_barang_tarif, true);
// echo $datatpb_barang_tarif['status'];
// tpb_detil_status
$contenttpb_detil_status = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_detil_status');
$datatpb_detil_status = json_decode($contenttpb_detil_status, true);
// echo $datatpb_detil_status['status'];
// tpb_dokumen
$contenttpb_dokumen = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_dokumen');
$datatpb_dokumen = json_decode($contenttpb_dokumen, true);
// echo $datatpb_dokumen['status'];
// tpb_jaminan
$contenttpb_jaminan = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_jaminan');
$datatpb_jaminan = json_decode($contenttpb_jaminan, true);
// echo $datatpb_jaminan['status'];
// tpb_kemasan
$contenttpb_kemasan = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_kemasan');
$datatpb_kemasan = json_decode($contenttpb_kemasan, true);
// echo $datatpb_kemasan['status'];
// tpb_kontainer
$contenttpb_kontainer = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_kontainer');
$datatpb_kontainer = json_decode($contenttpb_kontainer, true);
// echo $datatpb_kontainer['status'];
// tpb_npwp_billing
$contenttpb_npwp_billing = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_npwp_billing');
$datatpb_npwp_billing = json_decode($contenttpb_npwp_billing, true);
// echo $datatpb_npwp_billing['status'];
// tpb_penerima
$contenttpb_penerima = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_penerima');
$datatpb_penerima = json_decode($contenttpb_penerima, true);
// echo $datatpb_penerima['status'];
// tpb_pungutan
$contenttpb_pungutan = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_pungutan');
$datatpb_pungutan = json_decode($contenttpb_pungutan, true);
// echo $datatpb_pungutan['status'];
// tpb_respon
$contenttpb_respon = get_content($resultAPI['url_api'] . 'dataTPB.php?function=tpb_respon');
$datatpb_respon = json_decode($contenttpb_respon, true);
// echo $datatpb_respon['status'];

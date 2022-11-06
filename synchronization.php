<?php
// CEK DATA LOCAL
// tpb_header
$datatpb_header = $db->query("SELECT * FROM tpb_header ORDER BY ID DESC LIMIT 1");
$resulttpb_header = mysqli_fetch_array($datatpb_header);
// tpb_bahan_baku
$datatpb_bahan_baku = $db->query("SELECT * FROM tpb_bahan_baku ORDER BY ID DESC LIMIT 1");
$resulttpb_bahan_baku = mysqli_fetch_array($datatpb_bahan_baku);
// tpb_bahan_baku_dokumen
$datatpb_bahan_baku_dokumen = $db->query("SELECT * FROM tpb_bahan_baku_dokumen ORDER BY ID DESC LIMIT 1");
$resulttpb_bahan_baku_dokumen = mysqli_fetch_array($datatpb_bahan_baku_dokumen);
// tpb_bahan_baku_tarif
$datatpb_bahan_baku_tarif = $db->query("SELECT * FROM tpb_bahan_baku_tarif ORDER BY ID DESC LIMIT 1");
$resulttpb_bahan_baku_tarif = mysqli_fetch_array($datatpb_bahan_baku_tarif);
// tpb_barang
$datatpb_barang = $db->query("SELECT * FROM tpb_barang ORDER BY ID DESC LIMIT 1");
$resulttpb_barang = mysqli_fetch_array($datatpb_barang);
// tpb_barang_dokumen
$datatpb_barang_dokumen = $db->query("SELECT * FROM tpb_barang_dokumen ORDER BY ID DESC LIMIT 1");
$resulttpb_barang_dokumen = mysqli_fetch_array($datatpb_barang_dokumen);
// tpb_barang_penerima
$datatpb_barang_penerima = $db->query("SELECT * FROM tpb_barang_penerima ORDER BY ID DESC LIMIT 1");
$resulttpb_barang_penerima = mysqli_fetch_array($datatpb_barang_penerima);
// tpb_barang_tarif
$datatpb_barang_tarif = $db->query("SELECT * FROM tpb_barang_tarif ORDER BY ID DESC LIMIT 1");
$resulttpb_barang_tarif = mysqli_fetch_array($datatpb_barang_tarif);
// tpb_detil_status
$datatpb_detil_status = $db->query("SELECT * FROM tpb_detil_status ORDER BY ID DESC LIMIT 1");
$resulttpb_detil_status = mysqli_fetch_array($datatpb_detil_status);
// tpb_dokumen
$datatpb_dokumen = $db->query("SELECT * FROM tpb_dokumen ORDER BY ID DESC LIMIT 1");
$resulttpb_dokumen = mysqli_fetch_array($datatpb_dokumen);
// tpb_jaminan
$datatpb_jaminan = $db->query("SELECT * FROM tpb_jaminan ORDER BY ID DESC LIMIT 1");
$resulttpb_jaminan = mysqli_fetch_array($datatpb_jaminan);
// tpb_kemasan
$datatpb_kemasan = $db->query("SELECT * FROM tpb_kemasan ORDER BY ID DESC LIMIT 1");
$resulttpb_kemasan = mysqli_fetch_array($datatpb_kemasan);
// tpb_kontainer
$datatpb_kontainer = $db->query("SELECT * FROM tpb_kontainer ORDER BY ID DESC LIMIT 1");
$resulttpb_kontainer = mysqli_fetch_array($datatpb_kontainer);
// tpb_npwp_billing
$datatpb_npwp_billing = $db->query("SELECT * FROM tpb_npwp_billing ORDER BY ID DESC LIMIT 1");
$resulttpb_npwp_billing = mysqli_fetch_array($datatpb_npwp_billing);
// tpb_penerima
$datatpb_penerima = $db->query("SELECT * FROM tpb_penerima ORDER BY ID DESC LIMIT 1");
$resulttpb_penerima = mysqli_fetch_array($datatpb_penerima);
// tpb_pungutan
$datatpb_pungutan = $db->query("SELECT * FROM tpb_pungutan ORDER BY ID DESC LIMIT 1");
$resulttpb_pungutan = mysqli_fetch_array($datatpb_pungutan);
// tpb_respon
$datatpb_respon = $db->query("SELECT * FROM tpb_respon ORDER BY ID DESC LIMIT 1");
$resulttpb_respon = mysqli_fetch_array($datatpb_respon);
// END CEK DATA LOCAL

// CEK API
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
// END CEK API

// VALIDASI DATA
// tpb_header
$checkCon_tpb_header = $datatpb_header['status'];
if ($checkCon_tpb_header == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_header = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_header = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_header['result'] as $row) {
    $listtpb_header = $row['NOMOR_AJU'];
  }
  if ($listtpb_header == $resulttpb_header['NOMOR_AJU']) {
    $btnContpb_header = 'synchron';
  } else {
    $btnContpb_header = 'unsynchron';
  }
}

// tpb_bahan_baku
$checkCon_tpb_bahan_baku = $datatpb_bahan_baku['status'];
if ($checkCon_tpb_bahan_baku == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_bahan_baku = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_bahan_baku = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_bahan_baku['result'] as $row) {
    $listtpb_bahan_baku = $row['ID_HEADER'];
  }
  if ($listtpb_bahan_baku == $resulttpb_bahan_baku['ID_HEADER']) {
    $btnContpb_bahan_baku = 'synchron';
  } else {
    $btnContpb_bahan_baku = 'unsynchron';
  }
}

// tpb_bahan_baku_dokumen
$checkCon_tpb_bahan_baku_dokumen = $datatpb_bahan_baku_dokumen['status'];
if ($checkCon_tpb_bahan_baku_dokumen == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_bahan_baku_dokumen = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_bahan_baku_dokumen = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_bahan_baku_dokumen['result'] as $row) {
    $listtpb_bahan_baku_dokumen = $row['ID_HEADER'];
  }
  if ($listtpb_bahan_baku_dokumen == $resulttpb_bahan_baku_dokumen['ID_HEADER']) {
    $btnContpb_bahan_baku_dokumen = 'synchron';
  } else {
    $btnContpb_bahan_baku_dokumen = 'unsynchron';
  }
}

// tpb_bahan_baku_tarif
$checkCon_tpb_bahan_baku_tarif = $datatpb_bahan_baku_tarif['status'];
if ($checkCon_tpb_bahan_baku_tarif == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_bahan_baku_tarif = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_bahan_baku_tarif = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_bahan_baku_tarif['result'] as $row) {
    $listtpb_bahan_baku_tarif = $row['ID_HEADER'];
  }
  if ($listtpb_bahan_baku_tarif == $resulttpb_bahan_baku_tarif['ID_HEADER']) {
    $btnContpb_bahan_baku_tarif = 'synchron';
  } else {
    $btnContpb_bahan_baku_tarif = 'unsynchron';
  }
}

// tpb_barang
$checkCon_tpb_barang = $datatpb_barang['status'];
if ($checkCon_tpb_barang == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_barang = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_barang = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_barang['result'] as $row) {
    $listtpb_barang = $row['ID_HEADER'];
  }
  if ($listtpb_barang == $resulttpb_barang['ID_HEADER']) {
    $btnContpb_barang = 'synchron';
  } else {
    $btnContpb_barang = 'unsynchron';
  }
}

// tpb_barang_dokumen
$checkCon_tpb_barang_dokumen = $datatpb_barang_dokumen['status'];
if ($checkCon_tpb_barang_dokumen == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_barang_dokumen = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_barang_dokumen = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_barang_dokumen['result'] as $row) {
    $listtpb_barang_dokumen = $row['ID_HEADER'];
  }
  if ($listtpb_barang_dokumen == $resulttpb_barang_dokumen['ID_HEADER']) {
    $btnContpb_barang_dokumen = 'synchron';
  } else {
    $btnContpb_barang_dokumen = 'unsynchron';
  }
}

// tpb_barang_penerima
$checkCon_tpb_barang_penerima = $datatpb_barang_penerima['status'];
if ($checkCon_tpb_barang_penerima == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_barang_penerima = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_barang_penerima = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_barang_penerima['result'] as $row) {
    $listtpb_barang_penerima = $row['ID_HEADER'];
  }
  if ($listtpb_barang_penerima == $resulttpb_barang_penerima['ID_HEADER']) {
    $btnContpb_barang_penerima = 'synchron';
  } else {
    $btnContpb_barang_penerima = 'unsynchron';
  }
}

// tpb_barang_tarif
$checkCon_tpb_barang_tarif = $datatpb_barang_tarif['status'];
if ($checkCon_tpb_barang_tarif == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_barang_tarif = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_barang_tarif = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_barang_tarif['result'] as $row) {
    $listtpb_barang_tarif = $row['ID_HEADER'];
  }
  if ($listtpb_barang_tarif == $resulttpb_barang_tarif['ID_HEADER']) {
    $btnContpb_barang_tarif = 'synchron';
  } else {
    $btnContpb_barang_tarif = 'unsynchron';
  }
}

// tpb_detil_status
$checkCon_tpb_detil_status = $datatpb_detil_status['status'];
if ($checkCon_tpb_detil_status == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_detil_status = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_detil_status = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_detil_status['result'] as $row) {
    $listtpb_detil_status = $row['ID_HEADER'];
  }
  if ($listtpb_detil_status == $resulttpb_detil_status['ID_HEADER']) {
    $btnContpb_detil_status = 'synchron';
  } else {
    $btnContpb_detil_status = 'unsynchron';
  }
}

// tpb_dokumen
$checkCon_tpb_dokumen = $datatpb_dokumen['status'];
if ($checkCon_tpb_dokumen == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_dokumen = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_dokumen = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_dokumen['result'] as $row) {
    $listtpb_dokumen = $row['ID_HEADER'];
  }
  if ($listtpb_dokumen == $resulttpb_dokumen['ID_HEADER']) {
    $btnContpb_dokumen = 'synchron';
  } else {
    $btnContpb_dokumen = 'unsynchron';
  }
}

// tpb_jaminan
$checkCon_tpb_jaminan = $datatpb_jaminan['status'];
if ($checkCon_tpb_jaminan == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_jaminan = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_jaminan = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_jaminan['result'] as $row) {
    $listtpb_jaminan = $row['ID_HEADER'];
  }
  if ($listtpb_jaminan == $resulttpb_jaminan['ID_HEADER']) {
    $btnContpb_jaminan = 'synchron';
  } else {
    $btnContpb_jaminan = 'unsynchron';
  }
}

// tpb_kemasan
$checkCon_tpb_kemasan = $datatpb_kemasan['status'];
if ($checkCon_tpb_kemasan == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_kemasan = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_kemasan = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_kemasan['result'] as $row) {
    $listtpb_kemasan = $row['ID_HEADER'];
  }
  if ($listtpb_kemasan == $resulttpb_kemasan['ID_HEADER']) {
    $btnContpb_kemasan = 'synchron';
  } else {
    $btnContpb_kemasan = 'unsynchron';
  }
}

// tpb_kontainer
$checkCon_tpb_kontainer = $datatpb_kontainer['status'];
if ($checkCon_tpb_kontainer == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_kontainer = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_kontainer = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_kontainer['result'] as $row) {
    $listtpb_kontainer = $row['ID_HEADER'];
  }
  if ($listtpb_kontainer == $resulttpb_kontainer['ID_HEADER']) {
    $btnContpb_kontainer = 'synchron';
  } else {
    $btnContpb_kontainer = 'unsynchron';
  }
}

// tpb_npwp_billing
$checkCon_tpb_npwp_billing = $datatpb_npwp_billing['status'];
if ($checkCon_tpb_npwp_billing == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_npwp_billing = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_npwp_billing = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_npwp_billing['result'] as $row) {
    $listtpb_npwp_billing = $row['ID_HEADER'];
  }
  if ($listtpb_npwp_billing == $resulttpb_npwp_billing['ID_HEADER']) {
    $btnContpb_npwp_billing = 'synchron';
  } else {
    $btnContpb_npwp_billing = 'unsynchron';
  }
}

// tpb_penerima
$checkCon_tpb_penerima = $datatpb_penerima['status'];
if ($checkCon_tpb_penerima == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_penerima = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_penerima = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_penerima['result'] as $row) {
    $listtpb_penerima = $row['ID_HEADER'];
  }
  if ($listtpb_penerima == $resulttpb_penerima['ID_HEADER']) {
    $btnContpb_penerima = 'synchron';
  } else {
    $btnContpb_penerima = 'unsynchron';
  }
}

// tpb_pungutan
$checkCon_tpb_pungutan = $datatpb_pungutan['status'];
if ($checkCon_tpb_pungutan == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_pungutan = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_pungutan = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_pungutan['result'] as $row) {
    $listtpb_pungutan = $row['ID_HEADER'];
  }
  if ($listtpb_pungutan == $resulttpb_pungutan['ID_HEADER']) {
    $btnContpb_pungutan = 'synchron';
  } else {
    $btnContpb_pungutan = 'unsynchron';
  }
}

// tpb_respon
$checkCon_tpb_respon = $datatpb_respon['status'];
if ($checkCon_tpb_respon == 404) {
  // JIKA API TIDAK CONNECT
  $btnContpb_respon = '404';
} else {
  // JIKA API CONNECT
  $btnContpb_respon = '200';
  // VALIDASI DATA TABEL
  foreach ($datatpb_respon['result'] as $row) {
    $listtpb_respon = $row['ID_HEADER'];
  }
  if ($listtpb_respon == $resulttpb_respon['ID_HEADER']) {
    $btnContpb_respon = 'synchron';
  } else {
    $btnContpb_respon = 'unsynchron';
  }
}
// END VALIDASI DATA

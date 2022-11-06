<?php

// API - 
include "get_api.php";
$content = get_content('https://itinventory-sarinah.com/api/databases.php');
$data = json_decode($content, true);

foreach ($data['result'] as $row) {

  if ($data['status'] == 404) {
    $apiDB = 'tpbdb';
  } else {
    $apiDB = $row['data'];
  }
}

$dbhost = "localhost";
// Local Main
$dbusername = "beacukai";
$dbpassword = "beacukai";
$dbname = $apiDB;

// Local Dev
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "tpb";
$db = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

class helpers
{
  function dateIndonesia($date)
  {
    $result = '';
    if (!empty($date) && $date !== '0000-00-00') {
      $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
      $tahun = substr($date, 0, 4);
      $bulan = substr($date, 5, 2);
      $tgl   = substr($date, 8, 2);

      $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
    }
    return $result;
  }

  function dateTimeIndonesia($date)
  {
    $result = '';
    if (!empty($date) && $date !== '0000-00-00 00:00:00') {
      $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
      $tahun = substr($date, 0, 4);
      $bulan = substr($date, 5, 2);
      $tgl   = substr($date, 8, 2);

      $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun . ' - ' . substr($date, 11, 19);
    }
    return $result;
  }

  function berita($content)
  {
    $isi = strip_tags($content);
    if (strlen($isi) > 80) {
      $berita = substr($isi, 0, 80) . ' ...';
    } else {
      $berita = $content;
    }

    return $berita;
  }

  function hargaRupiah($harga)
  {
    return "Rp. " . number_format($harga, 0, ',', '.');
  }
}

$helpers = new helpers();

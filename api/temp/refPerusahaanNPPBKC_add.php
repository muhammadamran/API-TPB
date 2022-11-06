<?php
include "db.php";

$ID     = $_GET['id'];
$NPWP   = $_GET['NPWP'];
$NPPBKC = $_GET['NPPBKC'];

$update = $db->query('UPDATE referensi_pengusaha SET NPPBKC="' . $NPPBKC . '" WHERE NPWP="' . $NPWP . '"');

if ($update) {
    echo
    "<script>window.location.href='https://itinventory-sarinah.com/ref_perusahaan.php?UpdateSuccess=true';</script>";
} else {
    echo
    "<script>window.location.href='https://itinventory-sarinah.com/ref_perusahaan.php?UpdateFailed=true';</script>";
}
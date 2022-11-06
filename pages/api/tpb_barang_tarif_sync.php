<?php
// ---------------ROLE DATABASE-------------------------
// $db      = LOCAL DATABASE CONNECTION
// $dbmain  = DOMAIN DATABASE CONNECTION
// ---------------END ROLE DATABASE---------------------

// ------------------DATETIME & USERS----------------------
// SHOW LOCAL SERVER DATETIME
$InputDate  = date('Y-m-d h:m:i');
// SHOW USERS
$meOK       = $_SESSION['nama'];
// ------------------END DATETIME & USERS------------------

// CHECK DATABASE LOCAL tpb_barang_tarif
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_barang_tarif
$dataTPB_L = $db->query("SELECT * FROM tpb_barang_tarif", 0);
// LIST COUNT TABLE  tpb_barang_tarif
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_barang_tarif
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_barang_tarif WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_barang_tarif FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_barang_tarif WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_barang_tarif FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_barang_tarif WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_barang_tarif
                                        (ID,ID_HEADER,FLAG_BMT_SEMENTARA,JENIS_TARIF,JUMLAH_SATUAN,KODE_FASILITAS,KODE_KOMODITI_CUKAI,KODE_SATUAN,KODE_SUB_KOMODITI_CUKAI,KODE_TARIF,NILAI_BAYAR,NILAI_FASILITAS,NILAI_SUDAH_DILUNASI,SERI_BARANG,TARIF,TARIF_FASILITAS,ID_BARANG)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[FLAG_BMT_SEMENTARA]','$list_L_to_D[JENIS_TARIF]','$list_L_to_D[JUMLAH_SATUAN]','$list_L_to_D[KODE_FASILITAS]','$list_L_to_D[KODE_KOMODITI_CUKAI]','$list_L_to_D[KODE_SATUAN]','$list_L_to_D[KODE_SUB_KOMODITI_CUKAI]','$list_L_to_D[KODE_TARIF]','$list_L_to_D[NILAI_BAYAR]','$list_L_to_D[NILAI_FASILITAS]','$list_L_to_D[NILAI_SUDAH_DILUNASI]','$list_L_to_D[SERI_BARANG]','$list_L_to_D[TARIF]','$list_L_to_D[TARIF_FASILITAS]','$list_L_to_D[ID_BARANG]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_barang_tarif&t=Data TPB Barang Tarif"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_barang_tarif&t=Data TPB Barang Tarif"</script>';
}

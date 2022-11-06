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

// CHECK DATABASE LOCAL tpb_bahan_baku_dokumen
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_bahan_baku_dokumen
$dataTPB_L = $db->query("SELECT * FROM tpb_bahan_baku_dokumen", 0);
// LIST COUNT TABLE  tpb_bahan_baku_dokumen
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_bahan_baku_dokumen
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_bahan_baku_dokumen WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_bahan_baku_dokumen FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_bahan_baku_dokumen WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_bahan_baku_dokumen FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_bahan_baku_dokumen WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_bahan_baku_dokumen
                                        (ID,ID_HEADER,KODE_ASAL_BAHAN_BAKU,SERI_DOKUMEN,ID_BAHAN_BAKU,ID_BARANG)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[KODE_ASAL_BAHAN_BAKU]','$list_L_to_D[SERI_DOKUMEN]','$list_L_to_D[ID_BAHAN_BAKU]','$list_L_to_D[ID_BARANG]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_bahan_baku_dokumen&t=Data TPB Bahan Baku Dokumen"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_bahan_baku_dokumen&t=Data TPB Bahan Baku Dokumen"</script>';
}

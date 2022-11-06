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

// CHECK DATABASE LOCAL tpb_dokumen
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_dokumen
$dataTPB_L = $db->query("SELECT * FROM tpb_dokumen", 0);
// LIST COUNT TABLE  tpb_dokumen
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_dokumen
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_dokumen WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_dokumen FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_dokumen WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_dokumen FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_dokumen WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_dokumen
                                        (ID,ID_HEADER,FLAG_URL_DOKUMEN,KODE_JENIS_DOKUMEN,NOMOR_DOKUMEN,SERI_DOKUMEN,TANGGAL_DOKUMEN,TIPE_DOKUMEN,URL_DOKUMEN)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[FLAG_URL_DOKUMEN]','$list_L_to_D[KODE_JENIS_DOKUMEN]','$list_L_to_D[NOMOR_DOKUMEN]','$list_L_to_D[SERI_DOKUMEN]','$list_L_to_D[TANGGAL_DOKUMEN]','$list_L_to_D[TIPE_DOKUMEN]','$list_L_to_D[URL_DOKUMEN]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_dokumen&t=Data TPB Dokumen"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_dokumen&t=Data TPB Dokumen"</script>';
}

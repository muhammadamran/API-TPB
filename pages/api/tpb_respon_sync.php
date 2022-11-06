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

// CHECK DATABASE LOCAL tpb_respon
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_respon
$dataTPB_L = $db->query("SELECT * FROM tpb_respon", 0);
// LIST COUNT TABLE  tpb_respon
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_respon
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_respon WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_respon FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_respon WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_respon FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_respon WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_respon
                                        (ID,BYTE_STREM_PDF,FLAG_BACA,KODE_RESPON,NOMOR_AJU,NOMOR_RESPON,TANGGAL_RESPON,WAKTU_RESPON,ID_HEADER)
                                        VALUES
                                        ('','$list_L_to_D[BYTE_STREM_PDF]','$list_L_to_D[FLAG_BACA]','$list_L_to_D[KODE_RESPON]','$list_L_to_D[NOMOR_AJU]','$list_L_to_D[NOMOR_RESPON]','$list_L_to_D[TANGGAL_RESPON]','$list_L_to_D[WAKTU_RESPON]','$list_L_to_D[ID_HEADER]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_respon&t=Data TPB Pungutan"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_respon&t=Data TPB Pungutan"</script>';
}

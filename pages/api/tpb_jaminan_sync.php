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

// CHECK DATABASE LOCAL tpb_jaminan
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_jaminan
$dataTPB_L = $db->query("SELECT * FROM tpb_jaminan", 0);
// LIST COUNT TABLE  tpb_jaminan
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_jaminan
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_jaminan WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_jaminan FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_jaminan WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_jaminan FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_jaminan WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_jaminan
                                        (ID,ID_HEADER,KODE_JENIS_JAMINAN,KODE_KANTOR,NILAI_JAMINAN,NOMOR_BPJ,NOMOR_JAMINAN,PENJAMIN,TANGGAL_BPJ,TANGGAL_JAMINAN,TANGGAL_JATUH_TEMPO)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[KODE_JENIS_JAMINAN]','$list_L_to_D[KODE_KANTOR]','$list_L_to_D[NILAI_JAMINAN]','$list_L_to_D[NOMOR_BPJ]','$list_L_to_D[NOMOR_JAMINAN]','$list_L_to_D[PENJAMIN]','$list_L_to_D[TANGGAL_BPJ]','$list_L_to_D[TANGGAL_JAMINAN]','$list_L_to_D[TANGGAL_JATUH_TEMPO]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_jaminan&t=Data TPB Jaminan"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_jaminan&t=Data TPB Jaminan"</script>';
}

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

// CHECK DATABASE LOCAL tpb_kontainer
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_kontainer
$dataTPB_L = $db->query("SELECT * FROM tpb_kontainer", 0);
// LIST COUNT TABLE  tpb_kontainer
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_kontainer
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_kontainer WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_kontainer FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_kontainer WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_kontainer FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_kontainer WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_kontainer
                                        (ID,ID_HEADER,KESESUAIAN_DOKUMEN,KETERANGAN,KODE_STUFFING,KODE_TIPE_KONTAINER,KODE_UKURAN_KONTAINER,FLAG_GATE_IN,FLAG_GATE_OUT,NO_POLISI,NOMOR_KONTAINER,NOMOR_SEGEL,SERI_KONTAINER,WAKTU_GATE_IN,WAKTU_GATE_OUT)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[KESESUAIAN_DOKUMEN]','$list_L_to_D[KETERANGAN]','$list_L_to_D[KODE_STUFFING]','$list_L_to_D[KODE_TIPE_KONTAINER]','$list_L_to_D[KODE_UKURAN_KONTAINER]','$list_L_to_D[FLAG_GATE_IN]','$list_L_to_D[FLAG_GATE_OUT]','$list_L_to_D[NO_POLISI]','$list_L_to_D[NOMOR_KONTAINER]','$list_L_to_D[NOMOR_SEGEL]','$list_L_to_D[SERI_KONTAINER]','$list_L_to_D[WAKTU_GATE_IN]','$list_L_to_D[WAKTU_GATE_OUT]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_kontainer&t=Data TPB Kontainer"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_kontainer&t=Data TPB Kontainer"</script>';
}

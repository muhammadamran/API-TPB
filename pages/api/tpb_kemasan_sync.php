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

// CHECK DATABASE LOCAL tpb_kemasan
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_kemasan
$dataTPB_L = $db->query("SELECT * FROM tpb_kemasan", 0);
// LIST COUNT TABLE  tpb_kemasan
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_kemasan
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_kemasan WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_kemasan FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_kemasan WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_kemasan FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_kemasan WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_kemasan
                                        (ID,ID_HEADER,JUMLAH_KEMASAN,KESESUAIAN_DOKUMEN,KETERANGAN,KODE_JENIS_KEMASAN,MERK_KEMASAN,NIP_GATE_IN,NIP_GATE_OUT,NO_POLISI,NOMOR_SEGEL,SERI_KEMASAN,WAKTU_GATE_IN,WAKTU_GATE_OUT)
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[JUMLAH_KEMASAN]','$list_L_to_D[KESESUAIAN_DOKUMEN]','$list_L_to_D[KETERANGAN]','$list_L_to_D[KODE_JENIS_KEMASAN]','$list_L_to_D[MERK_KEMASAN]','$list_L_to_D[NIP_GATE_IN]','$list_L_to_D[NIP_GATE_OUT]','$list_L_to_D[NO_POLISI]','$list_L_to_D[NOMOR_SEGEL]','$list_L_to_D[SERI_KEMASAN]','$list_L_to_D[WAKTU_GATE_IN]','$list_L_to_D[WAKTU_GATE_OUT]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_kemasan&t=Data TPB Kemasan"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_kemasan&t=Data TPB Kemasan"</script>';
}

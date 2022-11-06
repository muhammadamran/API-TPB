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

// CHECK DATABASE LOCAL tpb_bahan_baku
// ROLE SYNC: BASE ON ID_HEADER
// SHOW VALUE TABLE tpb_bahan_baku
$dataTPB_L = $db->query("SELECT * FROM tpb_bahan_baku", 0);
// LIST COUNT TABLE  tpb_bahan_baku
foreach ($dataTPB_L as $row_L) {
    if (@$row_L['ID_HEADER']) {
        $ID_HEADER = $row_L['ID_HEADER'];
        // CHECK DATABASE DOMAIN tpb_bahan_baku
        $dataTPB_D = $dbmain->query("SELECT * FROM tpb_bahan_baku WHERE ID_HEADER='$ID_HEADER'");
        $row_D = mysqli_fetch_array($dataTPB_D);
        // IF DATA ID_HEADER ALREADY INSERT ON DATABASE DOMAIN
        if ($row_D['ID_HEADER'] == NULL) {
            // COUNT ROW TABLES tpb_bahan_baku FROM DATABASE LOCAL
            $CountTPB_L_to_D    = $db->query("SELECT COUNT(*) total_row FROM tpb_bahan_baku WHERE ID_HEADER='$ID_HEADER'");
            $row_Count_L_to_D   = $CountTPB_L_to_D->fetch_assoc();
            $pcs                = $row_Count_L_to_D['total_row'];
            // ROW TABLES tpb_bahan_baku FROM DATABASE LOCAL
            $dataTPB_L_to_D     = $db->query("SELECT * FROM tpb_bahan_baku WHERE ID_HEADER='$ID_HEADER'");
            while ($list_L_to_D = $dataTPB_L_to_D->fetch_assoc()) {
                $query = $dbmain->query("INSERT INTO tpb_bahan_baku
                                        (ID,ID_HEADER,CIF,CIF_RUPIAH,HARGA_PENYERAHAN,HARGA_PEROLEHAN,JENIS_SATUAN,JUMLAH_SATUAN,KODE_ASAL_BAHAN_BAKU,KODE_BARANG,KODE_FASILITAS_DOKUMEN,KODE_JENIS_DOK_ASAL,KODE_KANTOR,KODE_SKEMA_TARIF,KODE_STATUS,MERK,NDPBM,NETTO,NOMOR_AJU_DOK_ASAL,NOMOR_DAFTAR_DOK_ASAL,POS_TARIF,SERI_BAHAN_BAKU,SERI_BARANG,SERI_IJIN,SERI_BARANG_DOK_ASAL,SPESIFIKASI_LAIN,TANGGAL_DAFTAR_DOK_ASAL,TIPE,UKURAN,URAIAN,ID_BARANG)
                                        
                                        
                                        
                                        VALUES
                                        ('','$list_L_to_D[ID_HEADER]','$list_L_to_D[CIF]','$list_L_to_D[CIF_RUPIAH]','$list_L_to_D[HARGA_PENYERAHAN]','$list_L_to_D[HARGA_PEROLEHAN]','$list_L_to_D[JENIS_SATUAN]','$list_L_to_D[JUMLAH_SATUAN]','$list_L_to_D[KODE_ASAL_BAHAN_BAKU]','$list_L_to_D[KODE_BARANG]','$list_L_to_D[KODE_FASILITAS_DOKUMEN]','$list_L_to_D[KODE_JENIS_DOK_ASAL]','$list_L_to_D[KODE_KANTOR]','$list_L_to_D[KODE_SKEMA_TARIF]','$list_L_to_D[KODE_STATUS]','$list_L_to_D[MERK]','$list_L_to_D[NDPBM]','$list_L_to_D[NETTO]','$list_L_to_D[NOMOR_AJU_DOK_ASAL]','$list_L_to_D[NOMOR_DAFTAR_DOK_ASAL]','$list_L_to_D[POS_TARIF]','$list_L_to_D[SERI_BAHAN_BAKU]','$list_L_to_D[SERI_BARANG]','$list_L_to_D[SERI_IJIN]','$list_L_to_D[SERI_BARANG_DOK_ASAL]','$list_L_to_D[SPESIFIKASI_LAIN]','$list_L_to_D[TANGGAL_DAFTAR_DOK_ASAL]','$list_L_to_D[TIPE]','$list_L_to_D[UKURAN]','$list_L_to_D[URAIAN]','$list_L_to_D[ID_BARANG]')
                                    ");
            }
        }
        // IF ALREADY SYNC NO ACTION
    }
}
if ($query) {
    echo '<script>alert("Data has been Added");location.href = "../../index.php?m=api&s=tpb_bahan_baku&t=Data TPB Bahan Baku"</script>';
} else {
    echo '<script>alert("Data failed Added");location.href = "../../index.php?m=api&s=tpb_bahan_baku&t=Data TPB Bahan Baku"</script>';
}

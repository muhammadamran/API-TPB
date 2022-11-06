<?php
if (isset($_POST['findLimit_D'])) {
    $data = $dbmain->query("SELECT * FROM tpb_barang ORDER BY ID DESC LIMIT " . $_POST['Limit_D'] . "", 0);
} else {
    $data = $dbmain->query("SELECT * FROM tpb_barang ORDER BY ID DESC LIMIT 100", 0);
}

$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
    <tr>
        <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
        <td style="text-align: center;"><?= $row['ID_HEADER']; ?></td>
        <td style="text-align: center;"><?= $row['ID']; ?></td>
        <td style="text-align: center;"><?= $row['ASURANSI']; ?></td>
        <td style="text-align: center;"><?= $row['CIF']; ?></td>
        <td style="text-align: center;"><?= $row['CIF_RUPIAH']; ?></td>
        <td style="text-align: center;"><?= $row['DISKON']; ?></td>
        <td style="text-align: center;"><?= $row['FLAG_KENDARAAN']; ?></td>
        <td style="text-align: center;"><?= $row['FOB']; ?></td>
        <td style="text-align: center;"><?= $row['FREIGHT']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_BARANG_LDP']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_INVOICE']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_PENYERAHAN']; ?></td>
        <td style="text-align: center;"><?= $row['HARGA_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['JENIS_KENDARAAN']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_BAHAN_BAKU']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_KEMASAN']; ?></td>
        <td style="text-align: center;"><?= $row['JUMLAH_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KAPASITAS_SILINDER']; ?></td>
        <td style="text-align: center;"><?= $row['KATEGORI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_ASAL_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_FASILITAS_DOKUMEN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_GUNA']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_JENIS_NILAI']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_KEMASAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_LEBIH_DARI4TAHUN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_NEGARA_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SATUAN']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_SKEMA_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_STATUS']; ?></td>
        <td style="text-align: center;"><?= $row['KONDISI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['MERK']; ?></td>
        <td style="text-align: center;"><?= $row['NETTO']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_INCOTERM']; ?></td>
        <td style="text-align: center;"><?= $row['NILAI_PABEAN']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_MESIN']; ?></td>
        <td style="text-align: center;"><?= $row['NOMOR_RANGKA']; ?></td>
        <td style="text-align: center;"><?= $row['POS_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_IJIN']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_POS_TARIF']; ?></td>
        <td style="text-align: center;"><?= $row['SPESIFIKASI_LAIN']; ?></td>
        <td style="text-align: center;"><?= $row['TAHUN_PEMBUATAN']; ?></td>
        <td style="text-align: center;"><?= $row['TIPE']; ?></td>
        <td style="text-align: center;"><?= $row['UKURAN']; ?></td>
        <td style="text-align: center;"><?= $row['URAIAN']; ?></td>
        <td style="text-align: center;"><?= $row['VOLUME']; ?></td>
        <td style="text-align: center;"><?= $row['ID_EKSPORTIR']; ?></td>
        <td style="text-align: center;"><?= $row['NAMA_EKSPORTIR']; ?></td>
        <td style="text-align: center;"><?= $row['ALAMAT_EKSPORTIR']; ?></td>
        <td style="text-align: center;"><?= $row['KODE_PERHITUNGAN']; ?></td>
        <td style="text-align: center;"><?= $row['SERI_BARANG_DOK_ASAL']; ?></td>
        <td style="text-align: center;"><?= $row['STATUS']; ?></td>
        <td style="text-align: center;"><?= $row['OPERATOR_ONE']; ?></td>
        <td style="text-align: center;"><?= $row['OPERATOR_TWO']; ?></td>
        <td style="text-align: center;"><?= $row['TGL_CEK']; ?></td>
        <td style="text-align: center;"><?= $row['CHECKING']; ?></td>
        <td style="text-align: center;"><?= $row['STATUS_CT']; ?></td>
        <td style="text-align: center;"><?= $row['DATE_CT']; ?></td>
        <td style="text-align: center;"><?= $row['BOTOL']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_BOTOL_AKHIR']; ?></td>
        <td style="text-align: center;"><?= $row['LITER']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_LITER_AKHIR']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_CT_AKHIR']; ?></td>
        <td style="text-align: center;"><?= $row['NETTO_AKHIR']; ?></td>
        <td style="text-align: center;"><?= $row['STATUS_GB']; ?></td>
        <td style="text-align: center;"><?= $row['OPERATOR_ONE_GB']; ?></td>
        <td style="text-align: center;"><?= $row['OPERATOR_TWO_GB']; ?></td>
        <td style="text-align: center;"><?= $row['TGL_CEK_GB']; ?></td>
        <td style="text-align: center;"><?= $row['CHECKING_GB']; ?></td>
        <td style="text-align: center;"><?= $row['STATUS_CT_GB']; ?></td>
        <td style="text-align: center;"><?= $row['DATE_CT_GB']; ?></td>
        <td style="text-align: center;"><?= $row['BOTOL_GB']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_BOTOL_AKHIR_GB']; ?></td>
        <td style="text-align: center;"><?= $row['LITER_GB']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_LITER_AKHIR_GB']; ?></td>
        <td style="text-align: center;"><?= $row['TOTAL_CT_AKHIR_GB']; ?></td>
        <td style="text-align: center;"><?= $row['NETTO_AKHIR_GB']; ?></td>
    </tr>
<?php } ?>
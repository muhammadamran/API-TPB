<?php
$data = $db->query("SELECT * FROM user ORDER BY role ASC, id ASC", 0);
$no = 0;
while ($row = $data->fetch_assoc()) {
    $no++;
?>
<tr>
    <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
    <td style="text-align: center;"><?= $row['username'] ?></td>
    <td style="text-align: center;"><?= $row['nama'] ?></td>
    <td style="text-align: center;"><?= $row['email'] ?></td>
    <td style="text-align: center;">
        <?= !empty($row['expired_date']) ? $row['expired_date'] : 'Tidak ada tanggal kadaluwarsa' ?>
    </td>
    <td style="text-align: center;">
        <?= $row['role'] == 'admin' ? 'Administrator' : 'Member' ?></td>
    <td style="text-align: center;">
        <div class="aksi-table">
            <a href="index.php?m=user&s=user_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-aksi btn-primary"
                title="Edit"><i class="fas fa-edit"></i></a>
            <a href="index.php?m=user&s=user_password&id=<?= $row['id'] ?>" class="btn btn-sm btn-aksi btn-secondary"
                title=" Change Password"><i class="fas fa-exchange-alt"></i></a>
            <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-aksi btn-danger"
                style="color:#fff;cursor:pointer" title="Delete"><i class="fas fa-trash"></i></a>
        </div>
    </td>
</tr>
<?php } ?>
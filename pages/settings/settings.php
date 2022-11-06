<?php
$data = $db->query('SELECT * FROM api_cloud WHERE id="1"');
$row = $data->fetch_assoc()
?>
<?php
// Saved
if (isset($_POST["SaveAPInDB"])) {

    $ID                = $_POST['ID'];
    $url_api           = $_POST['url_api'];
    $user_api          = $_POST['user_api'];
    $pass_api          = md5($_POST['pass_api']);
    $reload_api        = $_POST['reload_api'];

    $query = $db->query("UPDATE api_cloud SET url_api='$url_api',
                                           user_api='$user_api',
                                           pass_api='$pass_api',
                                           reload_api='$reload_api'
                            WHERE id='$ID'");
    if ($query) {
        echo '<script>alert("Data has been Added");location.href = "index.php?m=settings&s=settings&t=Settings - Configuration API"</script>';
    } else {
        echo '<script>alert("Data failed Added");location.href = "index.php?m=settings&s=settings&t=Settings - Configuration API"</script>';
    }
}

// Update
if (isset($_POST["EditAPInDB"])) {

    $ID                = $_POST['ID'];
    $url_api           = $_POST['url_api'];
    $user_api          = $_POST['user_api'];
    $pass_api          = md5($_POST['pass_api']);
    $reload_api        = $_POST['reload_api'];

    $query = $db->query("UPDATE api_cloud SET url_api='$url_api',
                                           user_api='$user_api',
                                           pass_api='$pass_api',
                                           reload_api='$reload_api'
                            WHERE id='$ID'");
    if ($query) {
        echo '<script>alert("Data has been Added");location.href = "index.php?m=settings&s=settings&t=Settings - Configuration API"</script>';
    } else {
        echo '<script>alert("Data failed Added");location.href = "index.php?m=settings&s=settings&t=Settings - Configuration API"</script>';
    }
}
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="assets/css/backend.css">
<style>
    .col-form-label {
        font-size: 14px;
    }
</style>
<div class="content">
    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-cog for-icon-page"></i>
                    <font class="font-title">Settings</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="tab-company-setting-vertical">
                <div class="containertab" style="display: block;">
                    <ul class="mk-setting-nav mk-nav mk-nav-pills flex-column m-0 py-3 px-2 h-100">
                        <li class="mk-nav-item" id="tab-header-1" panel_id="tab-1">
                            <div class="box-select mk-nav-link active">
                                <a href="index.php?m=settings&s=settings&t=Settings - Configuration API" class="a-settings">
                                    <i class="fas fa-code"></i>
                                    <font class="label-settings">Configuration API</font>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="containercontent" style="width: 79%;">
                    <div id="tab-1" class="active">
                        <?php
                        $data = $db->query("SELECT * FROM api_cloud");
                        $row = mysqli_fetch_array($data);
                        ?>
                        <?php if ($row['id'] == NULL) { ?>
                            <form action="" method="POST">
                                <fieldset>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">URL API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="url_api" value="<?= $row['url_api']; ?>" placeholder="URL API ...">
                                            <input type="hidden" class="form-control" name="ID" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">User API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="user_api" value="<?= $row['user_api']; ?>" placeholder="User API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Pass API</label>
                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="pass_api" value="<?= $row['pass_api']; ?>" placeholder="Pass API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Port API</label>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control" name="port_api" value="" placeholder="Port API ..." readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Database</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="database_module" value="" placeholder="Database ..." readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Reload API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="reload_api" value="<?= $row['reload_api']; ?>" placeholder="Reload API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7 offset-md-3">
                                            <button type="submit" class="btn btn-primary m-r-5" name="EditAPInDB"><i class="fa fa-save"></i> Simpan</button>
                                            <button type="submit" class="btn btn-success m-r-5" name="TestConnect"><i class="fa-solid fa-satellite-dish"></i> Test</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <?php } else { ?>
                            <form action="" method="POST">
                                <fieldset>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">URL API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="url_api" value="<?= $row['url_api']; ?>" placeholder="URL API ...">
                                            <input type="hidden" class="form-control" name="ID" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">User API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="user_api" value="<?= $row['user_api']; ?>" placeholder="User API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Pass API</label>
                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="pass_api" value="<?= $row['pass_api']; ?>" placeholder="Pass API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Port API</label>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control" name="port_api" value="" placeholder="Port API ..." readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Database</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="database_module" value="" placeholder="Database ..." readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-3 col-form-label">Reload API</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="reload_api" value="<?= $row['reload_api']; ?>" placeholder="Reload API ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7 offset-md-3">
                                            <button type="submit" class="btn btn-warning m-r-5" name="SaveAPInDB"><i class="fa fa-edit"></i> Update</button>
                                            <button type="submit" class="btn btn-success m-r-5" name="TestConnect"><i class="fa-solid fa-satellite-dish"></i> Test</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    function deleteData(id) {
        var r = confirm("Are you sure you want to delete this record?");
        if (r == true) {
            location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
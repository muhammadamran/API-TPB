<div class="content">

    <div class="page-header-title">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title-page">
                    <i class="icon-copy fas fa-users-cog for-icon-page"></i>
                    <font class="font-title">Users</font>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?t=Dashboard" class="breadcrumb-item-title">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">Add User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <!-- <h5 class="card-title">Add User</h5> -->
                    <font class="card-title"><i class="fas fa-plus-circle"></i> Add User</font>
                </div>
                <div class="card-body ">
                    <form action="pages/user/user_proses.php?aksi=insert" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDUsername" class="col-form-label">Username</label>
                                        <input id="IDUsername" name="username" type="text" class="form-control" placeholder="Username ...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="IDNama" class="col-form-label">Nama</label>
                                        <input id="IDNama" name="Nama" type="text" class="form-control" placeholder="Nama ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="IDEmail" class="col-form-label">Email</label>
                                        <input id="IDEmail" name="Email" type="email" class="form-control" placeholder="Email ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="IDRole" class="col-form-label">Role</label>
                                        <select id="IDRole" name="Role" class="form-control">
                                            <option>-- Select --</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="IDExpired" class="col-form-label">Expired Date</label>
                                        <input id="IDExpired" name="ExpiredDate" type="date" min="<?= date('Y-m-d') ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark" name="save"><i class="fas fa-save">
                                                Save</i></button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
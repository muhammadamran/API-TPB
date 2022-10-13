<style>
.card .card-header:not([data-background-color]) {
    /* background-color: transparent; */
    background-color: #f9f9f9;
}
</style>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header"
                    style="background-image: url('assets/img/register_bg_2.png');background-repeat: no-repeat, repeat;background-size: cover;">
                    <img src="assets/logo/logo.png" alt="Logo TPB Backend" width="200px" style="margin:30px 0;">
                    <h5 class="card-title">Admin Web TPB Backend</h5>
                </div>
                <div class="card-body ">
                    Selamat datang di TPB Backend
                    <div style="margin-top:30px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Count -->
    <?php include 'pages/home/dashboard/count.php'; ?>
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <!-- <div class="col-md-12">
                    <div class="card text-center">
                        <div class="dashboard-bar">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data_count_table['total_table']; ?>
                            </font>
                            <font style="font-weight: 200;">Total Table TPB</font>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="dashboard-bar">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data_count_bc['total_bc']; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <!-- BC 2.3 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data23; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 2.3</font>
                        </div>
                    </div>
                </div>
                <!-- BC 2.5 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data25; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 2.5</font>
                        </div>
                    </div>
                </div>
                <!-- BC 2.6.1 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data261; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 2.6.1</font>
                        </div>
                    </div>
                </div>
                <!-- BC 2.7 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data27; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 2.7</font>
                        </div>
                    </div>
                </div>
                <!-- BC 4.0 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data40; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 4.0</font>
                        </div>
                    </div>
                </div>
                <!-- BC 4.1 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="dashboard-bar-bc">
                            <font style="font-size: 30px;font-weight: 900;">
                                <?= $data41; ?>
                            </font>
                            <font style="font-weight: 200;">Total Data BC 4.1</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
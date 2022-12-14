<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon.png">
    <link rel="icon" type="image/png" href="assets/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?php if ($_GET['t'] == '' || $_GET['t'] == NULL) { ?>
            TPB Backend
        <?php } else { ?>
            <?= $_GET['t']; ?> | TPB Backend
        <?php } ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta property="image" content="assets/icon.png">
    <meta name="twitter:image" property="og.image" content="assets/icon.png">
    <link rel="shortcut icon" type="image/png" href="assets/icon.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <script src="assets/js/core/jquery.min.js"></script>
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- PRELOAD -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<style>
    body {
        color: #2c2c2c;
        font-size: 14px;
        font-family: "Poppins", "Helvetica Neue", Arial, sans-serif;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
    }

    .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 14px;
    }
</style>
<script>
    $(document).ready(function() {
        $(".preloader").fadeOut();
    })
</script>

<body class="">
    <div class="preloader">
        <div class="loading">
            <img src="assets/gif/3.gif" width="150">
            <p style="margin-left: 45px;" class="blink">Loading ...</p>
        </div>
    </div>
    <div class="wrapper ">
<?php

use App\Core\App;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='<?= public_url('/favicon.ico') ?>' type='image/ico' />
    <title>
        <?= ucfirst($pageTitle) . " | " . App::get('config')['app']['name']; ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= public_url('/assets/adminty/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/adminty/assets/icon/feather/css/feather.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/adminty/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/adminty/assets/css/jquery.mCustomScrollbar.css') ?>">

    <style>
        body {
            background-color: #eef1f4;
        }
    </style>

    <script src="<?= public_url('/assets/sprnva/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/bower_components/popper.js/js/popper.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/bower_components/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/bower_components/modernizr/js/modernizr.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/SmoothScroll.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/pcoded.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/vartical-layout.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/script.min.js') ?>"></script>
    <script src="<?= public_url('/assets/adminty/assets/js/pcoded.min.js') ?>"></script>
</head>

<body>
    <div class="container" style="margin-top: 3%;padding-bottom: 30px;">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="text-center mb-3">
                    <h4>Register</h4>
                </div>
                <div class="card mt-4" style="background-color: #fff; border: 0px; border-radius: 8px; box-shadow: 0 4px 5px 0 rgba(0,0,0,0.2);">
                    <div class="card-body">

                        <?= alert_msg(); ?>

                        <form method="POST" action="<?= route('/register') ?>">
                            <?= csrf() ?>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" autocomplete="off">
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="<?= route('/login'); ?>" style="font-size: 18px;">
                                    <small id="emailHelp" class="form-text text-muted mb-1">Already registered?</small>
                                </a>
                                <button type="submit" class="btn btn-secondary btn-sm text-rigth ml-2">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
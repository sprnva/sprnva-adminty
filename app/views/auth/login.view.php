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
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded load-height">
        <div class="pcoded-overlay-box"></div>
        <section class="login-block with-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->
                        <form class="md-float-material form-material m-t-40 m-b-40" method="POST" action="<?= route('/login') ?>">
                            <?= csrf() ?>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <?= msg('RESPONSE_MSG'); ?>
                                    <div class="form-group form-primary mt-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" autocomplete="off" autofocus>
                                    </div>
                                    <div class="form-group form-primary">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" autocomplete="off">
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="forgot-phone text-right f-right">
                                                <a href="<?= route('/forgot/password'); ?>" class="text-right f-w-600"> Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">LOGIN</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="card-body d-flex justify-content-center align-items-center">

                                            <small id="emailHelp" class="form-text text-muted mb-1">We'll never share your email with anyone else.</small>

                                            <a href="<?= route('/register'); ?>" class="ml-2" style="font-size: 14px;">Register</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Authentication card end -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>
            </div>
        </section>
    </div>

    <div class="footer bg-inverse">
        <p class="text-center">Powered by Sprnva, a PHP Framework.</p>
    </div>

</body>

</html>
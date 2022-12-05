<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/favicon.ico') ?>" />

    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/dark-style.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/transparent-style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/skin-modes.css') ?>" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="<?php echo base_url('assets/colors/color1.css') ?>" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="<?php echo base_url('assets/images/loader.svg') ?>" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="index.html"><img src="<?php echo base_url('assets/images/brand/logo-white.png') ?>"
                                class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                        <?php endif; ?>
                        <form class="login100-form validate-form" method="POST"
                            action="<?php echo base_url('auth/proses-login') ?>">
                            <span class="login100-form-title pb-5">
                                Login Admin
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input100 validate-input input-group"
                                            data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="email"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="password"
                                                placeholder="Password" name="password">
                                        </div>
                                        <div class="text-end pt-4">
                                            <p class="mb-0"><a href="forgot-password.html"
                                                    class="text-primary ms-1">Forgot Password?</a></p>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Not a member?<a
                                                    href="<?php echo base_url('auth/register') ?>"
                                                    class="text-primary ms-1">Sign UP</a></p>
                                        </div>
                                        <label class="login-social-icon"><span>Login with Social</span></label>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-google"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login text-center">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="<?php echo base_url('assets/js/show-password.min.js') ?>"></script>

    <!-- GENERATE OTP JS -->
    <script src="<?php echo base_url('assets/js/generate-otp.js') ?>"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?php echo base_url('assets/plugins/p-scroll/perfect-scrollbar.js') ?>"></script>

    <!-- Color Theme js -->
    <script src="<?php echo base_url('assets/js/themeColors.js') ?>"></script>

    <!-- CUSTOM JS -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url('assets/js/sweet-alert.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/sweet-alert/sweetalert.min.js') ?>"></script>

</body>

</html>
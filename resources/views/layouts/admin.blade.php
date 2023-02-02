<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrador - Instituto Clave de Sol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="/public/admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/owl.carousel.css">
    <link rel="stylesheet" href="/public/admin/css/owl.theme.css">
    <link rel="stylesheet" href="/public/admin/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/animate.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/jquery.dataTables.min.css">
    <!-- bootstrap select CSS
    ============================================ -->
        <link rel="stylesheet" href="/public/admin/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/dropzone/dropzone.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/wave/waves.min.css">
    <link rel="stylesheet" href="/public/admin/css/wave/button.css">
    <!-- dialog CSS
        ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="/public/admin/css/dialog/dialog.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/public/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/public/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>


                            <x-admin.messages />

                            <li class="nav-item nc-al"><a href="#" onclick="logout()" class="nav-link"><span><i class="notika-icon notika-next"></i></span></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <x-admin.menu :page=$page></x-admin.menu>
    <!-- Main Menu area End-->
    @yield('conteudo')
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="/public/admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/public/admin/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/public/admin/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/public/admin/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/public/admin/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/public/admin/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/public/admin/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="/public/admin/js/counterup/jquery.counterup.min.js"></script>
    <script src="/public/admin/js/counterup/waypoints.min.js"></script>
    <script src="/public/admin/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/public/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="/public/admin/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/public/admin/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/public/admin/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="/public/admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/public/admin/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="/public/admin/js/flot/jquery.flot.js"></script>
    <script src="/public/admin/js/flot/jquery.flot.resize.js"></script>
    <script src="/public/admin/js/flot/curvedLines.js"></script>
    <script src="/public/admin/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="/public/admin/js/knob/jquery.knob.js"></script>
    <script src="/public/admin/js/knob/jquery.appear.js"></script>
    <script src="/public/admin/js/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="/public/admin/js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="/public/admin/js/icheck/icheck.min.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="/public/admin/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/public/admin/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="/public/admin/js/rangle-slider/rangle-active.js"></script>
    <!-- Dialog
        ============================================ -->
    <script src="/public/admin/js/dialog/sweetalert2.min.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="/public/admin/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/public/admin/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="/public/admin/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="/public/admin/js/color-picker/farbtastic.min.js"></script>
    <script src="/public/admin/js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="/public/admin/js/notification/bootstrap-growl.min.js"></script>
    <script src="/public/admin/js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="/public/admin/js/summernote/summernote-updated.min.js"></script>
    <script src="/public/admin/js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="/public/admin/js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="/public/admin/js/wave/waves.min.js"></script>
    <script src="/public/admin/js/wave/wave-active.js"></script>
    <!--  chosen JS
		============================================ -->
    <script src="/public/admin/js/chosen/chosen.jquery.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="/public/admin/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/public/admin/js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="/public/admin/js/data-table/jquery.dataTables.min.js"></script>
    <script src="/public/admin/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/public/admin/js/autosize.min.js"></script>

    <script src="/public/admin/js/main.js"></script>

    @yield('configs')

    <script src="{{ asset('/public/js/admin.js') }}" defer></script>


</body>

</html>

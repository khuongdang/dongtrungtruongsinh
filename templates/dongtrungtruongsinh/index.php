<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đông Trùng Hạ Thảo Trường Sinh</title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="Responsive One Page HTML5/CSS3 Parallax Site Template" />
    <meta name="author" content="Creative-Ispiration">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/ico-16.ico">
    <link rel="apple-touch-icon" href="img/ico-57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/ico-72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/ico-114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/ico-144.png" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="css/isotope.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Primary color theme -->
    <link id="primary_color_scheme" href="css/color/orange.css" rel="stylesheet">

    <!-- GoogleFontFamily -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="75">

<!-- Intro loader -->
<div class="mask">
    <div id="intro-loader"></div>
</div>
<!-- Intro loader -->
<!-- Navbar -->
<jdoc:include type="modules" name="menu" />
<!-- Navbar -->

<jdoc:include type="message" />
<jdoc:include type="component" />

<!-- Back to top -->
<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
<div class="footer-v1">
    <div style="background-color: #f37820;height: 10px" class="footer_top_border "></div>
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- About -->
            <div class="col-md-4 map-img md-margin-bottom-40">
                <div class="headline"><h2>Công ty TNHH Herbal Nutrition Care ATD</h2></div>
                <address class="md-margin-bottom-40">
                    <b>ĐỊA CHỈ</b> : Số 305/8 Đường Tân Sơn Nhì, P Tân Sơn Nhì, Quận Tân Phú, TP HCMC <br>
                    <b>ĐIỆN THOẠI</b> : 08 5408 6690
                    Phone: 800 123 3456 <br>
                    <b>FAX</b> :  08 5408 6695 <br>
                    <b>HOTLINE</b> : 0909 939 538 <br>
                    <b>EMAIL</b> : info@dongtrunghathaotruongsinh.vn <br>
                </address>
            </div>
            <!-- End About -->

            <!-- Latest -->
            <div class="col-md-3 md-margin-bottom-40">
                <div class="posts">
                    <div class="headline"><h2>Về chúng tôi</h2></div>
                    <ul class="list-unstyled link-list">
                        <?php
                        $about = JKentlib::getArticleFromCategory(11);
                        foreach ($about as $obj) {
                        ?>
                        <li>
                            <a href="#"><?php echo $obj->title;?></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div><!--/col-md-3-->
            <!-- End Latest -->

            <!-- Link List -->
            <div class="col-md-2 md-margin-bottom-40">
                <div class="headline"><h2>Hỗ trợ</h2></div>
                <ul class="list-unstyled link-list">
                    <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div><!--/col-md-3-->
            <!-- End Link List -->

            <!-- Address -->
            <div class="col-md-2 map-img md-margin-bottom-40">
                <div class="headline"><h2>Khám phá</h2></div>
                <address class="md-margin-bottom-40">
                    25, Lorem Lis Street, Orange <br>
                    California, US <br>
                    Phone: 800 123 3456 <br>
                    Fax: 800 123 3456 <br>
                    Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                </address>
            </div><!--/col-md-3-->
            <!-- End Address -->
        </div>
    </div>
</div>
    <div class="footer_bottom_holder">
        <div class="container">
            <div class="container_inner">
                <div class="footer_bottom">
                    <div class="textwidget">Copyright 2016 ® Truong Sinh Co.,Ltd. Reg No. 0313474512. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Js Library -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.fitvids.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.pack.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-modal.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="js/jquery-countTo.js" type="text/javascript"></script>
<script src="js/jquery.appear.js" type="text/javascript"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/jquery.maximage.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/skrollr.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/jquery.hoverdir.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/portfolio_custom.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="js/google-map.js"></script>
<!-- Js Library -->

</body>
</html>
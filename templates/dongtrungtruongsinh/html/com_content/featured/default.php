<?php
defined('_JEXEC') or die;
?>

<!-- Home Section -->
<section id="home">

    <a id="slider_left" class="fullscreen-slider-arrow"><img src="img/arrow_left.png" alt="Slide Left" /></a>
    <a id="slider_right" class="fullscreen-slider-arrow"><img src="img/arrow_right.png" alt="Slide Right" /></a>

    <div id="fullscreen-slider">
        <!-- Slider item -->
        <?php
        $image_slide = JKentlib::getImageSliderHomepage(1);
        foreach ($image_slide as $obj) {
            $img = $obj->filename;

        ?>
        <div class="slider-item">
            <img src="images/phocagallery/<?php echo $img; ?>" alt="">
            <div class="pattern">
                <div class="slide-content">
                    <!-- Section title -->
                    <div class="section-title text-center">
                        <h1 class="slogan">Sức khỏe hoàn hảo<i>Cho cuộc sống viên mãn</i></h1>
                    </div>
                    <!-- Section title -->

                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Slider item -->

        <!-- Slider item -->
        <!--<div class="slider-item">
            <img src="images/slide2.jpg" alt="">
            <div class="pattern">
                <div class="slide-content">
                    <div class="section-title text-center">
                        <div>
                            <span class="line big"></span>
                            <span>Awesome Themes</span>
                            <span class="line big"></span>
                        </div>
                        <h1>Portfolio<i>Expand project</i></h1>
                        <p class="lead">
                            Parallax Effects, css3 Animation, Retina Ready, Timeline blog post and more!
                        </p>
                        <div class="mybutton ultra">
                            <a class="start-button" href="#about"> <span data-hover="Discover!">Are you ready?</span> </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>-->
        <!-- Slider item -->

    </div>
</section>
<!-- Home Section -->

<!-- About Section -->
<section id="about" class="section-content">
    <div class="container">

        <!-- Section title -->
        <div class="section-title text-center">
            <div>
                <span class="line big"></span>
                <span class="line big"></span>
            </div>
            <h1 class="item_right letter">Câu chuyện của Đông Trùng Hạ Thảo Việt</h1>
            <div>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <!--    <p class="lead">
                    Alpine is an advertising, media, and creative content agency that helps the new brands explore new and innovative marketing approaches.
                </p>-->
        </div>
        <!-- Section title -->
        <div class="row">
            <div class="bg_thungo"></div>
            <div class="col-md-4">
                <div class="element-line thungo">
                    <div class="item_left">
                        <p>Vào những năm 2005 - 2009, nhóm chúng tôi, là những nghiên cứu sinh chuyên ngành công nghệ sinh học, có may mắn tham gia vào các dự án nghiên cứu và bảo tồn các loại gen quí của Việt Nam do Viện Nghiên Cứu Khoa Học và Phát Triển tiến hành, với sự chỉ dẫn và giám sát của nhiều thầy cô giáo sư công tác ở Viện.</p>
                        <p>Trong quá trình thực địa thu thập và phân loại thực vật ở những vùng núi Tây Bắc, Bắc Trung Bộ, Nam Trung Bộ, Tây Nguyên … chúng tôi phát hiện được một số chi Đông Trùng Hạ Thảo.</p>
                        <img class="img_thungo" src="images/quoc1.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="element-line thungo">
                    <div class="item_left">
                        <p>Vốn biết rằng Đông Trùng Hạ Thảo là loại thảo dược quý từ ngàn xưa, chỉ được các dòng dõi vua chúa của Trung Quốc sử dụng, và duy nhất sinh trưởng ở vùng núi Himalaya ở Tây Tạng; chúng tôi đã rất sung sướng và tự hào rằng Việt Nam cũng có nguồn gen Đông Trùng Hạ Thảo ở tự nhiên.</p>
                        <p>Từ đó chúng tôi tiếp tục nghiên cứu và tìm tòi phương pháp nuôi trồng Đông Trùng Hạ Thảo ở phòng thí nghiệm.  Niềm đam mê của chúng tôi không chỉ dừng lại trong dự án nghiên cứu của quốc gia, mà trở thành nỗi khao khát và ám ảnh của mỗi thành viên trong nhóm.  Chúng tôi tiếp tục nghiên cứu và thử nghiệm nhiều phương pháp nuôi cấy Đông Trùng Hạ Thảo, cũng như lai tạo nguồn gen tìm được ở Việt Nam với các chủng gen từ Mỹ, Trung Quốc, Hà Quốc để tạo ra chủng giống có hoạt chất cao; cùng với sưự đồng hành, hỗ trợ của các thầy cô giáo sư trong Viện Nghiên Cứu Khoa Học và Phát Triển.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="element-line thungo">
                    <div class="item_left">
                        <p>Đến năm 2015, sau 6 năm làm việc miệt mài, chúng tôi may mắn thực hiện thành công kỹ thuật nuôi trồng Đông trùng hạ thảo trong phòng thí nghiệm, với chủng giống thuần chủng cho năng suất và tỉ lệ hoạt chất cao nhất so với các cơ quan nghiên cứu khác.</p>
                        <img class="img_thungo" src="images/quoc2.jpg" />
                        <p>Năm 2016, chúng tôi quyết định mang thành quả nghiên cứu khoa học của nhóm đến cho mọi người với thương hiệu Đông Trùng Hạ Thảo Trường Sinh. Chúng tôi tin rằng bạn sẽ có những trải nghiệm tuyệt vời với Đông trùng hạ thảo Trường Sinh như gia đình và những người thân quen của tôi. Sức khoẻ, hạnh phúc và thịnh vượng sẽ đến với bạn và gia đình bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->

<!-- Team Section -->
<section id="team" class="section-content">
    <div class="container">

        <!-- Section title -->
        <div class="section-title text-center">
            <div>
                <span class="line big"></span>
                <span class="line big"></span>
            </div>
            <h1 class="item_left letter">Giá trị y học</h1>
            <div>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <p class="lead">
                Đông trùng hạ thảo rất công dụng trong việc chữa trị một số loại bệnh...
            </p>
        </div>
        <!-- Section title -->

        <div class="row">

            <!-- Team item -->
            <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                <div class="element-line">
                    <div class="item_top">
                        <div class="img-rounded team-element zoom">
                            <div class="team-inner">
                                <div class="team-detail">
                                    <div class="team-content">
                                        <a href="#"><h3><strong>Đông Trùng Hạ Thảo cho người bị tiểu đường </strong></h3></a>
                                        <!--<ul>
                                            <li>
                                                <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                            <img src="images/tieuduong01.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team item -->

            <!-- Team item -->
            <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                <div class="element-line">
                    <div class="item_bottom">
                        <div class="img-rounded team-element zoom">
                            <div class="team-inner">
                                <div class="team-detail">
                                    <div class="team-content">
                                        <a href="#"><h3><strong>Đông Trùng Hạ Thảo cho người bị suy giảm chức năng thận</strong></h3></a>
                                    </div>
                                </div>
                            </div>
                            <img src="images/than01.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team item -->

            <!-- Team item -->
            <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                <div class="element-line">
                    <div class="item_top">
                        <div class="img-rounded team-element zoom">
                            <div class="team-inner">
                                <div class="team-detail">
                                    <div class="team-content">
                                        <a href="#"><h3><strong>Đông Trùng Hạ Thảo cho người bị viêm gan, xơ gan </strong></h3></a>
                                    </div>
                                </div>
                            </div>
                            <img src="images/gan01.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team item -->

            <!-- Team item -->
            <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                <div class="element-line">
                    <div class="item_bottom">
                        <div class="img-rounded team-element zoom">
                            <div class="team-inner">
                                <div class="team-detail">
                                    <div class="team-content">
                                        <a href="#"><h3><strong>Đông Trùng Hạ Thảo cho người bị viêm phổi và tắc nghẽn phổi</strong></h3></a>
                                    </div>
                                </div>
                            </div>
                            <img src="images/phoi01.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team item -->

        </div>
    </div>
</section>
<!-- Team Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="section-content">
    <div class="container">
        <!-- Section title -->
        <div class="section-title text-center">
            <div>
                <span class="line big"></span>
                <span class="line big"></span>
            </div>
            <h1 class="item_right letter">Sản phẩm</h1>
            <div>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <p class="lead">
                Chúng tôi mang lại những sản phẩm công dụng đặt biệt nhất cho quý khách hàng
            </p>
        </div>
        <!-- Section title -->
    </div>

    <div class="element-line">

        <div class="portfolio-top"></div>

    </div>

    <div id="portfolio-wrap">

        <!-- portfolio item -->
        <div class="portfolio-item web">
            <div class="portfolio">
                <a href="google.com.vn" class="zoom"> <img src="images/products.jpg" alt="">
                    <div class="hover-items">
                        <span> <i class="fa fa-pagelines fa-4x"></i> <em class="lead">Ducati Monster 620 Racer</em> <em>Photo slider</em> </span>
                    </div> </a>
            </div>
        </div>
        <!-- portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item web">
            <div class="portfolio">
                <a href="google.com.vn" class="zoom"> <img src="images/products.jpg" alt="">
                    <div class="hover-items">
                        <span> <i class="fa fa-pagelines fa-4x"></i> <em class="lead">Ducati Monster 620 Racer</em> <em>Photo slider</em> </span>
                    </div> </a>
            </div>
        </div>
        <!-- portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item web">
            <div class="portfolio">
                <a href="google.com.vn" class="zoom"> <img src="images/products.jpg" alt="">
                    <div class="hover-items">
                        <span> <i class="fa fa-pagelines fa-4x"></i> <em class="lead">Ducati Monster 620 Racer</em> <em>Photo slider</em> </span>
                    </div> </a>
            </div>
        </div>
        <!-- portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item web">
            <div class="portfolio">
                <a href="google.com.vn" class="zoom"> <img src="images/products.jpg" alt="">
                    <div class="hover-items">
                        <span> <i class="fa fa-pagelines fa-4x"></i> <em class="lead">Ducati Monster 620 Racer</em> <em>Photo slider</em> </span>
                    </div> </a>
            </div>
        </div>
        <!-- portfolio item -->

    </div>

    <!-- Ajax Portfolio content -->
    <div id="ajax-section">
        <div class="container clearfix">
            <div id="project-navigation" class="text-center">
                <ul>
                    <li id="prevProject">
                        <a href="#"><i class="fa fa-chevron-circle-left fa-2x"></i></a>
                    </li>
                    <li id="closeProject">
                        <a href="#loader"><i class="fa fa-times-circle fa-2x"></i></a>
                    </li>
                    <li id="nextProject">
                        <a href="#"><i class="fa fa-chevron-circle-right fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <!-- Ajax loader -->
            <div id="loader"></div>
            <!-- Ajax loader -->

            <div id="ajax-content-outer">
                <div id="ajax-content-inner"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Ajax content -->

</section>
<!-- Portfolio Section -->
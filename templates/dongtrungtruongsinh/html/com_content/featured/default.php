<?php
defined('_JEXEC') or die;
use JKentlib AS LIB;
$product_list = LIB::getAllProducts();
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
    </div>
</section>
<!-- Home Section -->

<!-- About Section -->
<section id="about" class="section-content">
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
                    <p>Vào những năm 2005 - 2009, nhóm chúng tôi, là những nghiên cứu sinh chuyên ngành công nghệ sinh học, có may mắn tham gia vào các dự án nghiên cứu và bảo tồn các loại gen quí của Việt Nam do Viện Môi trường và Phát triển bền vững Việt Nam tiến hành, với sự chỉ dẫn và giám sát của nhiều thầy cô giáo sư công tác ở Viện.</p>
                    <p>Trong quá trình thực địa thu thập và phân loại thực vật ở những vùng núi Tây Bắc, Bắc Trung Bộ, Nam Trung Bộ, Tây Nguyên … chúng tôi phát hiện được một số chi Đông Trùng Hạ Thảo.</p>
                    <img class="img_thungo" src="images/quoc1.jpg" />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="element-line thungo">
                <div class="item_left">
                    <p>Vốn biết rằng Đông Trùng Hạ Thảo là loại thảo dược quý từ ngàn xưa, chỉ được các dòng dõi vua chúa của Trung Quốc sử dụng, và duy nhất sinh trưởng ở vùng núi Himalaya ở Tây Tạng; chúng tôi đã rất sung sướng và tự hào rằng Việt Nam cũng có nguồn gen Đông Trùng Hạ Thảo ở tự nhiên.</p>
                    <p>Từ đó chúng tôi tiếp tục nghiên cứu và tìm tòi phương pháp nuôi trồng Đông Trùng Hạ Thảo ở phòng thí nghiệm.  Niềm đam mê của chúng tôi không chỉ dừng lại trong dự án nghiên cứu của quốc gia, mà trở thành nỗi khao khát và ám ảnh của mỗi thành viên trong nhóm.  Chúng tôi tiếp tục nghiên cứu và thử nghiệm nhiều phương pháp nuôi cấy Đông Trùng Hạ Thảo, cũng như lai tạo nguồn gen tìm được ở Việt Nam với các chủng gen từ Mỹ, Trung Quốc, Hà Quốc để tạo ra chủng giống có hoạt chất cao; cùng với sự đồng hành, hỗ trợ của các thầy cô giáo sư trong Viện Môi trường và Phát triển bền vững Việt Nam.</p>
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
</section>
<!-- About Section -->

<!-- Team Section -->
<section id="courses" class="section-content">
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
        </div>
        <!-- Section title -->
<?php
$use_for = JKentlib::getCategoryFromParent(9, 8);
?>
        <div class="row">
            <div class="element-line">
            <div class="col-md-12 padding-left">
                <?php
                foreach ($use_for as $obj) {
                    $title_use = $obj->title;
                    if (isset($obj->description) && !empty($obj->description)) {
                        $description_use = JKentlib::trimstr($obj->description, 300);
                    } else {
                        $description_use = "";
                    }
                    $image_use = JKentlib::getCategoryImage($obj->id);
                    $link = JRoute::_(ContentHelperRoute::getCategoryRoute($obj->id));
                ?>
                <div class="col-md-3 wow animated fadeInLeft margin-left animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <h4 class="item_left"><a href="<?php echo $link;?>" ><?php echo $title_use;?> </a></h4>
                    <img class="item_right" src="<?php echo $image_use;?>" alt="">
                    <p class="item_left giatri"><?php echo $description_use; ?> </p>
                    <a href="<?php echo $link;?>" alt="">Chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <?php }?>
            </div>
            </div>
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
        </div>
        <!-- Section title -->
    </div>

    <div class="element-line">

        <div class="portfolio-top"></div>

    </div>

    <div id="portfolio-wrap">
        <?php foreach ($product_list as $product) {
        $product_name = $product->product_name;
        $product_image = LIB::getProductImage($product->product_id);
        $product_image = LIB::PRODUCT_IMG_PATH . $product_image->file_path;
        $link = JRoute::_('index.php?option=com_sanpham&view=sanpham&id=' . $product->product_id);
        ?>
        <!-- portfolio item -->
            <div class="portfolio-item web">
                <div align="center" class="product_name"><?php echo $product_name;?></div>
                <div class="portfolio">
                    <a href="<?php echo $link;?>" class="zoom"> <img src="<?php echo $product_image; ?>" alt="">
                </div>
                <div class="product_title"><?php echo $product_name; ?></div>
            </div>
        <!-- portfolio item -->
        <?php } ?>
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
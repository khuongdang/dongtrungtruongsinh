<?php
$com_path = JPATH_SITE . '/components/com_content/';
require_once $com_path . 'helpers/route.php';
?>
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
            <p class="lead">
                <blockquote>
                Chìa khoá khiến Đông Trùng Hạ Thảo được mệnh danh là “thần dược” trong y học Trung Hoa chính là hoạt chất Cordycepin, hoạt chất có duy nhất ở Đông Trùng Hạ Thảo và chưa tổng hợp nhân tạo được.

                Tác dụng lớn nhất của Cordycepin là tăng cường sức mạnh của hệ miễn dịch thông qua việc ngăn chặn quá trình nhân đôi tế bào của virus, vi khuẩn, tế bào lạ, ác tính; nâng cao khả năng tự hồi phục của cơ thể, chống chọi và đẩy lùi các loại bệnh.

                Dựa trên cơ chế này,  Cordycepin đóng vai trò quan trọng trong hỗ trợ điều trị các bệnh về gan, thận, phổi, tim mạch, sinh lý, tiểu đường, điều hoà nội tiết tố nữ … và đặc biệt là hiện nay, Cordycepin được ứng dụng rộng rãi trong điều trị ung thư. Hoạt chất này ngăn chặn quá trình phân bào của tế bào ung thư, hỗ trợ điều trị ung thư, ngăn chặn quá trình di căn và xâm lấn của tế bào ung thư.
            </blockquote>
            </p>
        </div>
        <!-- Section title -->
        <?php
        $use_for = JKentlib::getCategoryFromParent(9);
        ?>
        <div class="row">
            <div class="element-line">
                <div class="col-md-12 padding-left">
                    <?php
                    foreach ($use_for as $obj) {
                        $title_use = $obj->title;
                        if (isset($obj->description) && !empty($obj->description)) {
                            $description_use = JKentlib::trimstr($obj->description, 200);
                        } else {
                            $description_use = "";
                        }
                        $image_use = JKentlib::getCategoryImage($obj->id);
                        if (!isset($image_use)) {
                            $image_use = 'images/no_image.png';
                        }
                        $link = JRoute::_(ContentHelperRoute::getCategoryRoute($obj->id));
                        ?>
                        <div class="col-md-3 wow animated fadeInLeft margin-left animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <h4 class="item_left"><a href="<?php echo $link;?>"> <?php echo $title_use;?></a> </h4>
                            <img class="item_right" src="<?php echo $image_use;?>" alt="">
                            <p class="item_left"><?php echo $description_use; ?> </p>
                            <a href="#" alt="">Chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
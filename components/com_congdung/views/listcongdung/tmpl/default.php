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
                Đông trùng hạ thảo rất công dụng trong việc chữa trị một số loại bệnh...
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
                        ?>
                        <div class="col-md-3 wow animated fadeInLeft margin-left animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <h4 class="item_left"><a href=""> <?php echo $title_use;?></a> </h4>
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
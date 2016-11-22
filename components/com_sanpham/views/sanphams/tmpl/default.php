<?php
use JKentlib AS LIB;
$product_list = LIB::getAllProducts();
?>

<section id="courses" class="section-content">
    <div class="container">
        <!-- Section title -->
        <div class="section-title text-center">
            <div>
                <span class="line big"></span>
                <span class="line big"></span>
            </div>
            <h1 class="item_left letter">Sản phẩm</h1>
            <div>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
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
                    <div class="hover-items">
                        <span> <i class="fa fa-pagelines fa-4x"></i> <em class="lead"><?php echo $product_name;?></em></span>
                    </div> </a>
            </div>
        </div>
        <!-- portfolio item -->
    <?php }?>

    </div>
</section>
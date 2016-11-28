<?php
$product_id = JRequest::getInt('id');
$product_info = JKentlib::getProductInfo($product_id);
$product_image = JKentlib::getProductImage($product_id);
$product_image  = JKentlib::PRODUCT_IMG_PATH . $product_image->file_path;
$product_desc = $product_info->product_description;
$other_products = JKentlib::getAllProducts(null, $product_id);
?>
<section id="product_details" class="section-content">
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
        <div class="product_detail">
            <div class="image_product">
                <img src="<?php echo $product_image;?>" />
            </div>
            <!-- Right Details-->
            <div class="product_content">
                    <h1 class="productname"><span class="bgnone"><?php echo $product_info->product_name; ?></span></h1>
                <div class="fb-like" data-href="<?php echo JURI::current();?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                <div class="hotline">
                    <i class="fa fa-phone" aria-hidden="true"></i> <span>0902 399 560</span>
                </div>
                    <div class="productdesc">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#description">Đặc điểm sản phẩm</a>
                            </li>
                            <li><a href="#specification">Lưu ý khi sử dụng</a>
                            </li>
                            <?php if ($product_info->category_id != 14 && $product_info->category_id !=15) { ?>
                            <li><a href="#review">Cách chế biến</a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php echo $product_desc?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</section>
<section id="related" class="row">
    <div class="container">
        <div class="col-md-12" >
            <h1 class="heading1"><span class="maintext">Các sản phẩm khác</span></h1>
            <div id="portfolio-wrap" style="margin-left:0;">
                <?php foreach ($other_products as $product) {
                    $product_name = $product->product_name;
                    $product_image = JKentlib::getProductImage($product->product_id);
                    $product_image = JKentlib::PRODUCT_IMG_PATH . $product_image->file_path;
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
                <?php }?>
            </div>
        </div>
    </div>
</section>

<!--<section id="related" class="row">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Sản phẩm liên quan</span></h1>
        <ul class="thumbnails">
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="http://www.pxcreate.com/template/simpleone/img/product1.jpg"></a>
                    <div class="shortlinks" style="display: none;">
                        <a class="details" href="#">DETAILS</a>
                        <a class="wishlist" href="#">WISHLIST</a>
                        <a class="compare" href="#">COMPARE</a>
                    </div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="http://www.pxcreate.com/template/simpleone/img/product2.jpg"></a>
                    <div class="shortlinks" style="display: none;">
                        <a class="details" href="#">DETAILS</a>
                        <a class="wishlist" href="#">WISHLIST</a>
                        <a class="compare" href="#">COMPARE</a>
                    </div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="http://www.pxcreate.com/template/simpleone/img/product1.jpg"></a>
                    <div class="shortlinks">
                        <a class="details" href="#">DETAILS</a>
                        <a class="wishlist" href="#">WISHLIST</a>
                        <a class="compare" href="#">COMPARE</a>
                    </div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="prdocutname" href="product.html">Product Name Here</a>
                <div class="thumbnail">
                    <a href="#"><img alt="" src="http://www.pxcreate.com/template/simpleone/img/product2.jpg"></a>
                    <div class="shortlinks">
                        <a class="details" href="#">DETAILS</a>
                        <a class="wishlist" href="#">WISHLIST</a>
                        <a class="compare" href="#">COMPARE</a>
                    </div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>-->

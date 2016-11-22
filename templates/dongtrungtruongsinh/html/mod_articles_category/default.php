<?php
defined('_JEXEC') or die;
$article = $list[0];
$cat_id = $article->catid;
$category_info = JKentlib::getCategoryInfo($cat_id);
?>
<div class="es-carousel-wrapper ">
    <h1 class="title ">
        <a href="javascript:void(0);" title="<?php echo $category_info->title ?>"><?php echo $category_info->title ?></a>
    </h1>
    <section class="carousel-<?php echo $cat_id;?> slider">
        <?php
            foreach ($list as $index=>$obj) {
                $image = json_decode($obj->images)->image_intro;
                $link = JRoute::_('index.php?option=com_sanpham&view=sanphams&id=' . $obj->id);
                ?>
                <div>
                    <img class="img_<?php  echo $cat_id;?>" title="<?php echo $obj->title;?>" src="<?php echo $image; ?>" />
                </div>
        <?php }?>
    </section>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.carousel-<?php echo $cat_id?>').slick({
            <?php if ($cat_id == 9) { ?>
            autoplay: true,
            autoplaySpeed: 2000,
            <?php }?>
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.slick-slide > .img_<?php  echo $cat_id;?>').each(function(){
            if ($(this).attr('title')){
                var slideCaption = $(this).attr('title');
                $(this).parent('.slick-slide').append('<figure class="p3"><div class="title_carousel"><h2 class="name">' + slideCaption + '</h2></div></figure>');
            }
        });
    });
</script>
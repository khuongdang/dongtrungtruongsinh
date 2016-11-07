<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$category_list = JKentlib::getMainMenu(8);
?>
<div class="breadcrumbs">
    <div class="container">
        <div id="breadcrumb">
            <ul class="crumbs">
                <li class="first"><a href="<?php echo JUri::root(); ?>" style="z-index:9;"><span></span>Trang chủ</a></li>
                <li><a href="#" style="z-index:8;"><?php echo $this->escape($this->category->title); ?></a></li>
            </ul>
        </div>
        <div class="btitle"><?php echo $this->escape($this->category->title); ?></div>
    </div><!--/container-->
</div>
<section id="portfolio">
    <div class="fullwidth-section kill-bottom-padding">
                <div class="row text-center">
            <div class="col-md-12"  id="isotope-filter">
                <a data-filter="*" href="#" class="btn btn-sm btn-outline btn-primary">Show All</a>
                <?php foreach($category_list as $category) {
                    if ($this->category->id == $category->id) {
                        $active = 'active';
                        ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.cat<?php echo $category->id;?>').trigger('click');
                        });
                    </script>
                        <?php
                    } else {
                        $active = '';
                    }
                    ?>
                    <a data-filter=".cat<?php echo $category->id;?>" href="#" class="btn btn-primary btn-sm btn-outline <?php echo $active;?>"><?php echo $category->title; ?></a>
                <?php }?>
                <!--  <a data-filter=".logos" href="#" class="btn btn-sm btn-outline btn-primary">Logos</a>
                  <a data-filter=".phone-apps" href="#" class="btn btn-sm btn-outline btn-primary">Phone Apps</a>-->
            </div>

        </div>
        <div class="row">
            <div id="isotope">
                <?php foreach($category_list as $category) {?>
                <?php foreach (JKentlib::getArticleFromCategory($category->id) as $item) {
                    $item_title = $item->title;
                    $images = json_decode($item->images);
                    $image = $images->image_intro;
                    $link =  JRoute::_(ContentHelperRoute::getArticleRoute($item->id, $category->id));
                    ?>
                        <?php if ($item) { ?>
                <div class="col-sm-3 cat<?php echo $category->id ?> ae">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-buttons">
                            <a href="<?php echo $link;?>">Xem chi tiết</a><a data-pp="prettyPhoto[portfolio]" href="<?php echo JUri::root().$image;?>" title=""><i class="im-expand2"></i></a></div></div>
                    <div class="img-thumb" style="background-image: url('<?php echo JUri::root().$image;?>');">
                    </div></div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
    </div>
            </div></div>
</section>

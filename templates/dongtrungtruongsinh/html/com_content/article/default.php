<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$title = $this->escape($this->item->title);
if (strlen($title) > 80) {
    $title = JKentlib::trimstr($title, 25);
}
$category_info = JKentlib::getCategoryInfo($this->item->catid);
$category_link = JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catid));
$artiles_cat = JKentlib::getArticleFromCategory($category_info->id);
$image_banner = JKentlib::getCategoryImage(20);
?>

<div class="container-fluid row clearfix">
    <div class="mainwidth clearfix container">
        <?php
        $document   = JFactory::getDocument();
        $params = array();
        $renderer   = $document->loadRenderer('module');
        $position='bread_crumbs';
        $contents = '';
        foreach (JModuleHelper::getModules($position) as $mod)  {
            $contents .= $renderer->render($mod, $params);
        }
        echo $contents;
        ?>
        <div class="banner_page margin_bottom_24">
            <a href="#">
                <img class="img-responsive" alt="TKC" src="<?php echo $image_banner; ?>" title="TKC">
            </a>
        </div>
        <div class="blog_left col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="menu_left clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title borderbottom00a651 paddingbottom_12 paddingtop_10"><?php echo $category_info->title; ?></div>
                <ul>
                    <?php foreach($artiles_cat as $obj) {
                        $class = '';
                        if ($this->item->id == $obj->id) {
                            $class = 'active';
                        }
                        ?>
                    <li><a class="<?php echo $class;?>" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute(  $obj->id,  $category_info->id ));?>"><?php echo $obj->title;?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="add_about clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title borderbottom00a651 paddingbottom_12 paddingtop_10">Sản phẩm in</div>
                <ul>

                </ul>
            </div>

        </div>
        <div class="productlist clearfix col-lg-9 col-md-9 col-sm-9 col-xs-12">

            <div class="productlist_title margin_bottom_30 col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1
                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $title;?> </h1>
                <h2 style="display:none;">Giới thiệu văn phòng </h2></div>
            <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo $this->item->event->beforeDisplayContent; ?>
                <?php echo $this->item->text; ?>
                <?php echo $this->item->event->afterDisplayContent; ?>

            </div>

            <div class="product_detail col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="image_detail_list clearfix">
                    <ul>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


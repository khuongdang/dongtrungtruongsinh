<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$jinput = JFactory::getApplication()->input;
$view = JRequest::getVar('view');
$id = (int)JRequest::getVar('id');
?>
<div id="breadcrumb">
    <ul class="crumbs">
        <li class="first"><a href="<?php JURI::base();?>" style="z-index:10;"><span></span>Trang chủ</a></li>
        <?php
        switch ($jinput->get('option')) {
            case "com_content":
                if ($view === 'article') {
                    $article =JTable::getInstance("content");
                    $article->load($id);
                    $title = $article->get('title');
                }
                echo '<li class="last"><a href="javascript:void(0);" style="z-index:8;">'.$title.'</a></li>';
            break;
            case "com_sanpham":
                if ($id == 0) {
                    $article = JKentlib::getArtileFromFirstCatParent();
                } else {
                    $article = JKentlib::getArticleInfo($id);
                }
                $article_info = JKentlib::getArticleInfo($article->id);
                $current_cat = JKentlib::getCategoryInfo($article_info->catid);
                $title = $current_cat->title;
                echo '<li><a href="javascript:void(0);" style="z-index:9;">Sản phẩm</a></li>';
                if (isset($current_cat) && !empty($current_cat)) {
                    echo '<li class="last"><a href="javascript:void(0);" style="z-index:8;">'.$title.'</a></li>';
                }
            break;
            case "com_gocsangtao":
                echo '<li class="last"><a href="javascript:void(0);" style="z-index:9;">Góc sáng tạo</a></li>';
            break;
        }
        ?>
    </ul>
</div>
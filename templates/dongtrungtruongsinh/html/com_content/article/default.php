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
switch ($this->item->id) {
    case 3:
        $class_bg = 'bg_aboutus';
        break;
    case 4:
        $class_bg = 'bg_hoatchat';
        break;
    default:
        $class_bg = '';
        break;
}
?>
<div id="<?php echo $class_bg;?>" class="<?php echo $class_bg;?>"></div>
<!-- Section title -->
<div class="section-title text-center">
    <div>
        <span class="line big"></span>
        <span class="line big"></span>
    </div>
    <h1 class="item_left letter article-content"><?php echo $title; ?></h1>
    <div>
        <span class="line"></span>
        <span class="line"></span>
    </div>
</div>
<!-- Section title -->
<div class="row"  id="row">
        <div class="container">
            <div class="article-content">
            <div class="col-md-12">
                <div class="element-line">
                    <?php echo $this->item->event->beforeDisplayContent; ?>
                    <?php echo $this->item->text; ?>
                    <?php echo $this->item->event->afterDisplayContent; ?>
                    </div>
                </div>
            </div>
        </div>
</div>
<br />



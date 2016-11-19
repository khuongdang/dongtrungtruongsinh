<?php
defined('_JEXEC') or die;
use JKentlib as LIB;

$article_list = LIB::getArticleFromCategory($this->category->id);
$category_info = LIB::getCategoryInfo($this->category->id);
$category_title = $category_info->title;
switch ($category_info->id) {
    case 10:
        $class_bg = 'bg_tieuduong';
        break;
    default:
        $class_bg = '';
        break;
}
?>

<section id="courses" class="section-content">
    <div class="section-title text-center">
        <div>
            <span class="line big"></span>
            <span class="line big"></span>
        </div>
        <h1 class="item_right letter"><?php echo $category_title; ?></h1>
        <div>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
        <div class="row">
            <div class="container">
                <div class="article-content">
                        <div class="element-line giatri-yhoc"><div class="<?php echo $class_bg;?>"></div>
                            <?php foreach ($article_list as $obj) {
                                $text = $obj->introtext . $obj->fulltext;
                                ?>
                                <?php echo $text; ?>
                            <?php } ?>
                        </div>
                </div>
            </div>
        </div>
</section>




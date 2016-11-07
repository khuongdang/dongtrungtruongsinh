<?php
defined('_JEXEC') or die;

$id = '';

if (($tagId = $params->get('tag_id', '')))
{
	$id = ' id="' . $tagId . '"';
}

?>
<div id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a id="brand" class="navbar-brand" href="#home"> <img src="img/logo.png" alt=""> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($list as $i => &$item)
                {
                    echo '<li>';
                    $text = $item->title;
                    $onclick = '';
                    $target = '';
                    $image = '';
                    $id      = empty($id) ? '' : (' id="' . $id . '"');
                    $target  = empty($target) ? '' : (' target="' . $target . '"');
                    $onclick = empty($onclick) ? '' : (' onclick="' . $onclick . '"');
                    $title   = empty($item->title) ? '' : (' title="' . $item->title . '"');
                    $text    = empty($text) ? '' : ('<span class="j-links-link">' . $text . '</span>');
                    $class = '';
                    $arrow = '';
                    if ($item->deeper) {
                        $class = 'class="dropdown-toggle" data-toggle="dropdown"';
                        $arrow = '<i class="fa fa-angle-down"></i>';
                    }
                ?>
                <a href="<?php echo JFilterOutput::ampReplace($item->flink); ?>"<?php echo $target . $onclick . $title . $class; ?>>
                    <span class="icon-<?php echo $image; ?>"></span> <?php echo $text; ?> <?php echo $arrow; ?>
                </a>

                <?php
                    // The next item is deeper.
                    if ($item->deeper)
                    {
                        echo '<ul class="dropdown-menu">';
                    }
                    // The next item is shallower.
                    elseif ($item->shallower)
                    {
                        echo '</li>';
                        echo str_repeat('</ul></li>', $item->level_diff);
                    }
                    // The next item is on the same level.
                    else
                    {
                        echo '</li>';
                    }
                    echo '</li>';
                }
                ?>

            </ul>
        </div>
    </div>
</div>
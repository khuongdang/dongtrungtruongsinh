<?php
/**
 * Created by PhpStorm.
 * User: Kent Dang
 * Date: 06/08/2016
 * Time: 4:24 CH
 */
defined('_JEXEC') or die;

final class JKentlib {
    const INTRO_ID = 1;
    public static function getCategoryImage($cat_id)
    {
        $category = JCategories::getInstance('Content')->get($cat_id);
        if ($category->getParams()->get('image')) {
            return $category->getParams()->get('image');
        }
        return ;
    }

    public static function getArtileFromFirstCatParent($cat_parent_first_id = 8)
    {
        $article_list = null;
        if (isset($cat_parent_first_id) && !empty($cat_parent_first_id)) {
            $db = JFactory::getDbo();

            $query = "SELECT * FROM #__categories WHERE parent_id = $cat_parent_first_id";
            $db->setQuery($query);
            $rows = $db->loadObjectList();
            foreach ($rows as $obj) {
                $cat_ids[] = $obj->id;
            }
            $cat_ids = implode(',', $cat_ids);
            $query_article = "SELECT * FROM #__content WHERE catid IN (" . $cat_ids . ") AND state = 1 ORDER BY id DESC";
            $db->setQuery($query_article);
            $article_list = $db->loadObjectList();
        }
        return $article_list[0];
    }

    public static function isProductPage($article)
    {
        $options    = array();
        $categories = JCategories::getInstance('Content', $options);
        $category   = $categories->get($article->catid);
        var_dump($category->getParent());die;
        return false;
    }

    public static function getCategoryFromParent($cat_id = 0, $limit = null)
    {
        if (isset($cat_id) && $cat_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__categories WHERE parent_id = $cat_id ORDER BY lft ASC";
            if (!is_null($limit) && is_numeric($limit)) {
                $query = "SELECT * FROM #__categories WHERE parent_id = $cat_id ORDER BY lft ASC LIMIT 0, $limit";
            }
            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }

    public static function getMainMenu()
    {
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $items          = $menu->getItems('menutype', 'mainmenu');
        return $items;
    }

    public static function getArticleInfo($article_id)
    {
        if (isset($article_id) && $article_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__content WHERE id = $article_id";
            $db->setQuery($query);
            return $db->loadObject();
        }
    }

    public static function getCategoryInfo($category_id)
    {
        if (isset($category_id) && $category_id != 0) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__categories WHERE id = $category_id";
            $db->setQuery($query);
            return $db->loadObject();
        }
    }

    public static function getArticleFromCategory($category_id, $article_id = 0)
    {
        if (isset($category_id) && $category_id != 0) {
            $db = JFactory::getDbo();
            if ($article_id != 0) {
                $query = "SELECT * FROM #__content WHERE catid = $category_id and id != $article_id";
            } else {
                $query = "SELECT * FROM #__content WHERE catid = $category_id";
            }

            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }

    public static function trimstr($string, $length = 25, $method = 'WORDS', $pattern = '...')
    {
        if (!is_numeric($length)) {
            $length = 25;
        }

        if (strlen($string) <= $length) {
            return rtrim($string) . $pattern;
        }

        $truncate = substr($string, 0, $length);

        if ($method != 'WORDS') {
            return rtrim($truncate) . $pattern;
        }

        if ($truncate[$length - 1] == ' ') {
            return rtrim($truncate) . $pattern;
        }
// we got ' ' right where we want it

        $pos = strrpos($truncate, ' ');
// lets find nearest right ' ' in the truncated string

        if (!$pos) {
            return $pattern;
        }
// no ' ' (one word) or it resides at the very begining
// of the string so the whole string goes to the toilet

        return rtrim(substr($truncate, 0, $pos)) . $pattern;
// profit
    }

    public static function isIpad()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    }

    public static function getImageSliderHomepage($catid)
    {
        if (isset($catid) && !empty($catid)) {
            $db = JFactory::getDbo();
            $query = "SELECT * FROM #__phocagallery WHERE catid = $catid and published = 1 order by ordering ASC";
            $db->setQuery($query);
            return $db->loadObjectList();
        }
    }
}
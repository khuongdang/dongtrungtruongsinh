<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Congdung
 * @author     kent <kent.dang1706t@gmail.com>
 * @copyright  Bản quyền (C) 2014. Các quyền đều được bảo vệ.
 * @license    bản quyền mã nguồn mở GNU phiên bản 2
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Congdung', JPATH_COMPONENT);
JLoader::register('CongdungController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Congdung');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Sanpham
 * @author     kent <kent.dang1706t@gmail.com>
 * @copyright  Bản quyền (C) 2014. Các quyền đều được bảo vệ.
 * @license    bản quyền mã nguồn mở GNU phiên bản 2
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Sanpham', JPATH_COMPONENT);
JLoader::register('SanphamController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Sanpham');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

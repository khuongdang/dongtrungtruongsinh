<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Sanpham
 * @author     kent <kent.dang1706t@gmail.com>
 * @copyright  Bản quyền (C) 2014. Các quyền đều được bảo vệ.
 * @license    bản quyền mã nguồn mở GNU phiên bản 2
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Sanpham controller class.
 *
 * @since  1.6
 */
class SanphamControllerSanpham extends JControllerForm
{
	/**
	 * Constructor
	 *
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->view_list = 'sanphams';
		parent::__construct();
	}
}

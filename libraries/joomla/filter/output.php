<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Filter
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

use Joomla\Filter\OutputFilter;

/**
 * JFilterOutput
 *
 * @since  11.1
 */
class JFilterOutput extends OutputFilter
{
	/**
	 * This method processes a string and replaces all instances of & with &amp; in links only.
	 *
	 * @param   string  $input  String to process
	 *
	 * @return  string  Processed string
	 *
	 * @since   11.1
	 */
	public static function linkXHTMLSafe($input)
	{
		$regex = 'href="([^"]*(&(amp;){0})[^"]*)*?"';

		return preg_replace_callback("#$regex#i", array('JFilterOutput', '_ampReplaceCallback'), $input);
	}

	/**
	 * This method processes a string and escapes it for use in JavaScript
	 *
	 * @param   string  $string  String to process
	 *
	 * @return  string  Processed text
	 */
	public static function stringJSSafe($string)
	{
		for ($i = 0, $l = strlen($string), $new_str = ''; $i < $l; $i++)
		{
			$new_str .= (ord(substr($string, $i, 1)) < 16 ? '\\x0' : '\\x') . dechex(ord(substr($string, $i, 1)));
		}

		return $new_str;
	}

	/**
	 * This method processes a string and replaces all accented UTF-8 characters by unaccented
	 * ASCII-7 "equivalents", whitespaces are replaced by hyphens and the string is lowercase.
	 *
	 * @param   string  $string    String to process
	 * @param   string  $language  Language to transilterate to
	 *
	 * @return  string  Processed string
	 *
	 * @since   11.1
	 */
	public static function stringURLSafe($string, $language = '')
	{
        $trans = array(
            "đ"=>"d","ă"=>"a","â"=>"a","á"=>"a","à"=>"a",
            "ả"=>"a","ã"=>"a","ạ"=>"a",
            "ấ"=>"a","ầ"=>"a","ẩ"=>"a","ẫ"=>"a","ậ"=>"a",
            "ắ"=>"a","ằ"=>"a","ẳ"=>"a","ẵ"=>"a","ặ"=>"a",
            "é"=>"e","è"=>"e","ẻ"=>"e","ẽ"=>"e","ẹ"=>"e",
            "ế"=>"e","ề"=>"e","ể"=>"e","ễ"=>"e","ệ"=>"e",
            "í"=>"i","ì"=>"i","ỉ"=>"i","ĩ"=>"i","ị"=>"i",
            "ư"=>"u","ô"=>"o","ơ"=>"o","ê"=>"e",
            "Ư"=>"u","Ô"=>"o","Ơ"=>"o","Ê"=>"e",
            "ú"=>"u","ù"=>"u","ủ"=>"u","ũ"=>"u","ụ"=>"u",
            "ứ"=>"u","ừ"=>"u","ử"=>"u","ữ"=>"u","ự"=>"u",
            "ó"=>"o","ò"=>"o","ỏ"=>"o","õ"=>"o","ọ"=>"o",
            "ớ"=>"o","ờ"=>"o","ở"=>"o","ỡ"=>"o","ợ"=>"o",
            "ố"=>"o","ồ"=>"o","ổ"=>"o","ỗ"=>"o","ộ"=>"o",
            "ú"=>"u","ù"=>"u","ủ"=>"u","ũ"=>"u","ụ"=>"u",
            "ứ"=>"u","ừ"=>"u","ử"=>"u","ữ"=>"u","ự"=>"u",
            "ý"=>"y","ỳ"=>"y","ỷ"=>"y","ỹ"=>"y","ỵ"=>"y",
            "Ý"=>"Y","Ỳ"=>"Y","Ỷ"=>"Y","Ỹ"=>"Y","Ỵ"=>"Y",
            "Đ"=>"D","Ă"=>"A","Â"=>"A","Á"=>"A","À"=>"A",
            "Ả"=>"A","Ã"=>"A","Ạ"=>"A",
            "Ấ"=>"A","Ầ"=>"A","Ẩ"=>"A","Ẫ"=>"A","Ậ"=>"A",
            "Ắ"=>"A","Ằ"=>"A","Ẳ"=>"A","Ẵ"=>"A","Ặ"=>"A",
            "É"=>"E","È"=>"E","Ẻ"=>"E","Ẽ"=>"E","Ẹ"=>"E",
            "Ế"=>"E","Ề"=>"E","Ể"=>"E","Ễ"=>"E","Ệ"=>"E",
            "Í"=>"I","Ì"=>"I","Ỉ"=>"I","Ĩ"=>"I","Ị"=>"I",
            "Ư"=>"U","Ô"=>"O","Ơ"=>"O","Ê"=>"E",
            "Ư"=>"U","Ô"=>"O","Ơ"=>"O","Ê"=>"E",
            "Ú"=>"U","Ù"=>"U","Ủ"=>"U","Ũ"=>"U","Ụ"=>"U",
            "Ứ"=>"U","Ừ"=>"U","Ử"=>"U","Ữ"=>"U","Ự"=>"U",
            "Ó"=>"O","Ò"=>"O","Ỏ"=>"O","Õ"=>"O","Ọ"=>"O",
            "Ớ"=>"O","Ờ"=>"O","Ở"=>"O","Ỡ"=>"O","Ợ"=>"O",
            "Ố"=>"O","Ồ"=>"O","Ổ"=>"O","Ỗ"=>"O","Ộ"=>"O",
            "Ú"=>"U","Ù"=>"U","Ủ"=>"U","Ũ"=>"U","Ụ"=>"U",
            "Ứ"=>"U","Ừ"=>"U","Ử"=>"U","Ữ"=>"U","Ự"=>"U",);

        //remove any '-' from the string they will be used as concatonater
        $str = str_replace('-', ' ', $string);

        $str = strtr($str, $trans);
        $lang =& JFactory::getLanguage();
        $str = $lang->transliterate($str);

        // remove any duplicate whitespace, and ensure all characters are alphanumeric
        $str = preg_replace(array('/\s+/','/[^A-Za-z0-9\-]/'), array('-',''), $str);

        // lowercase and trim
        $str = trim(strtolower($str));
        return $str;
	}

	/**
	 * Callback method for replacing & with &amp; in a string
	 *
	 * @param   string  $m  String to process
	 *
	 * @return  string  Replaced string
	 *
	 * @since   3.5
	 */
	public static function ampReplaceCallback($m)
	{
		$rx = '&(?!amp;)';

		return preg_replace('#' . $rx . '#', '&amp;', $m[0]);
	}

	/**
	 * Callback method for replacing & with &amp; in a string
	 *
	 * @param   string  $m  String to process
	 *
	 * @return  string  Replaced string
	 *
	 * @since       11.1
	 * @deprecated  4.0 Use JFilterOutput::ampReplaceCallback() instead
	 */
	public static function _ampReplaceCallback($m)
	{
		return static::ampReplaceCallback($m);
	}
}

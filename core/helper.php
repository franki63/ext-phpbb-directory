<?php
/**
*
* phpBB Directory extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 ErnadoO <http://www.phpbb-services.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace ernadoo\phpbbdirectory\core;

class helper
{
	/** @var \phpbb\extension\manager */
	protected $extension_manager;

	/** @var \phpbb\path_helper */
	protected $path_helper;

	/**
	* Constructor
	*
	* @param \phpbb\extension\manager 		$phpbb_extension_manager	Extension manager helper
	* @param \phpbb\controller\path_helper	$path_helper				Controller path helper object
	*/
	public function __construct(\phpbb\extension\manager $phpbb_extension_manager, \phpbb\path_helper $path_helper)
	{
		$this->extension_manager	= $phpbb_extension_manager;
		$this->path_helper			= $path_helper;
	}

	/**
	* Return path to resource image
	*
	* @param	string $type	is ressource type (flags|icons)
	* @param	string $image	is the resource to display
	* @return	string			The relative path to ressource
	*/
	public function get_img_path($type, $image = '')
	{
		$web_root_path 	= $this->path_helper->get_web_root_path();
		$ext_path 		= $this->extension_manager->get_extension_path('ernadoo/phpbbdirectory', false);

		$resource_url 	= $web_root_path . $ext_path . 'images/' . $type . '/' . $image;

		return $resource_url;
	}

	/**
	* Return path to banner
	*
	* @param	string	$banner	is the physical name
	* @return	string			The relative path to banner
	*/
	public function get_banner_path($banner = '')
	{
		$web_root_path 	= $this->path_helper->get_phpbb_root_path();
		$ext_path 		= $this->extension_manager->get_extension_path('ernadoo/phpbbdirectory', false);

		$ressource_url =  $web_root_path . 'files/' . $ext_path . 'banners/' . $banner;

		return $ressource_url;
	}
}

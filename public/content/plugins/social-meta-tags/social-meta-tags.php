<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @copyright	Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://github.com/bkader
 * @since 		Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Plugin Name: Social Meta Tags
 * Description: This plugin adds Open Graph and Twitter meta tags.
 * Version: 1.0.0
 * Author: Kader Bouyakoub
 * Author URI: https://github.com/bkader
 * Author Email: bkader@mail.com
 * Tags: skeleton, social, meta, tags
 * 
 * Social Head Plugin
 *
 * This is a another example plugin that demonstrate the plugins system.
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Plugins
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://github.com/bkader
 * @copyright	Copyright (c) 2018, Kader Bouyakoub (https://github.com/bkader)
 * @since 		Version 1.0.0
 * @version 	1.0.0
 */

// Action to do after plugin's activation.
add_action('plugin_activate_social-meta-tags', function() {
	return true;
});

// Action to do after plugin's deactivation.
add_action('plugin_deactivate_social-meta-tags', function() {
	return true;
});

/**
 * SEO plugin dummy class.
 */
class Social_meta_tags
{
	/**
	 * Initializing plugin's action.
	 */
	public static function init()
	{
		// Nothing to do on dashboard.
		if (is_controller('admin'))
		{
			return;
		}

		// Get instance of CI object.
		$CI =& get_instance();

		// Add some twitter meta tags.
		add_meta_tag('twitter:card',    'summary');
		add_meta_tag('twitter:site',    config_item('site_name'));
		add_meta_tag('twitter:creator', config_item('site_author'));

		// 
		add_meta_tag('og:url', current_url());
		add_meta_tag('og:title', $CI->theme->get_title());
		add_meta_tag('og:type', 'website');
		add_meta_tag('og:image', get_common_url('img/default.png'));
	}
}
// Action to do if the plugin is used.
add_action('plugin_install_social-meta-tags', 'Social_meta_tags::init', 0);

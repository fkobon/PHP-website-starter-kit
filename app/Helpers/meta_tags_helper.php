<?php
/**
 * Meta Tag Helper
 *
 * This helper is called in every controller.
 * You can remove it in app/Controllers/BaseController.php
 */

if (! function_exists('load_meta_tags'))
{
	/**
 	* Loads meta tags from view data
 	*/
	function load_meta_tags(array $metaTags = [])
	{
		$output = '';


		// if tags are not provided, try to load default values from .env
		if (empty($metaTags)) {

			if (! empty($_ENV['app.meta.description'])) {
				$output .= chr(9) .
					'<meta name="description" content="' . $_ENV['app.meta.description'] . '" />' .
					PHP_EOL;
			}

			return $output;
		}


		// foreach tags array if not empty
		foreach ($metaTags as $tag) {
			$output .= chr(9) . '<meta ';
			foreach ($tag as $attr => $val){
				$output .= $attr . '="' . $val . '" ';
			}
			$output .= '/>' . PHP_EOL;
		}

		return $output;
	}
}

<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_menu_router
{
public function write_buffer($data)
	{
	}

public function echo_export_string($data)
	{
	echo $this->create_export_string($data);
	}

private function create_export_string($data)
	{
		$i = 0;
		$content = 'data = {' . PHP_EOL;
		$content .= 'rows: [' . PHP_EOL;
		foreach ($data as $drupal_menu_router)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_menu_router->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_menu_router->get_include_file() . "'" . "," . "'" . $drupal_menu_router->get_weight() . "'" . "," . "'" . $drupal_menu_router->get_position() . "'" . "," . "'" . $drupal_menu_router->get_description() . "'" . "," . "'" . $drupal_menu_router->get_type() . "'" . "," . "'" . $drupal_menu_router->get_theme_arguments() . "'" . "," . "'" . $drupal_menu_router->get_theme_callback() . "'" . "," . "'" . $drupal_menu_router->get_title_arguments() . "'" . "," . "'" . $drupal_menu_router->get_title_callback() . "'" . "," . "'" . $drupal_menu_router->get_title() . "'" . "," . "'" . $drupal_menu_router->get_tab_root() . "'" . "," . "'" . $drupal_menu_router->get_tab_parent() . "'" . "," . "'" . $drupal_menu_router->get_context() . "'" . "," . "'" . $drupal_menu_router->get_number_parts() . "'" . "," . "'" . $drupal_menu_router->get_fit() . "'" . "," . "'" . $drupal_menu_router->get_delivery_callback() . "'" . "," . "'" . $drupal_menu_router->get_page_arguments() . "'" . "," . "'" . $drupal_menu_router->get_page_callback() . "'" . "," . "'" . $drupal_menu_router->get_access_arguments() . "'" . "," . "'" . $drupal_menu_router->get_access_callback() . "'" . "," . "'" . $drupal_menu_router->get_to_arg_functions() . "'" . "," . "'" . $drupal_menu_router->get_load_functions() . "'" . "," . "'" . $drupal_menu_router->get_path() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>

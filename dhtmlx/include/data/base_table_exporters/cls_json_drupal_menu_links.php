<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_drupal_menu_links
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
		foreach ($data as $drupal_menu_links)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $drupal_menu_links->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $drupal_menu_links->get_menu_name() . "'" . "," . "'" . $drupal_menu_links->get_mlid() . "'" . "," . "'" . $drupal_menu_links->get_plid() . "'" . "," . "'" . $drupal_menu_links->get_link_path() . "'" . "," . "'" . $drupal_menu_links->get_router_path() . "'" . "," . "'" . $drupal_menu_links->get_link_title() . "'" . "," . "'" . $drupal_menu_links->get_options() . "'" . "," . "'" . $drupal_menu_links->get_module() . "'" . "," . "'" . $drupal_menu_links->get_hidden() . "'" . "," . "'" . $drupal_menu_links->get_external() . "'" . "," . "'" . $drupal_menu_links->get_has_children() . "'" . "," . "'" . $drupal_menu_links->get_expanded() . "'" . "," . "'" . $drupal_menu_links->get_weight() . "'" . "," . "'" . $drupal_menu_links->get_depth() . "'" . "," . "'" . $drupal_menu_links->get_customized() . "'" . "," . "'" . $drupal_menu_links->get_p1() . "'" . "," . "'" . $drupal_menu_links->get_p2() . "'" . "," . "'" . $drupal_menu_links->get_p3() . "'" . "," . "'" . $drupal_menu_links->get_p4() . "'" . "," . "'" . $drupal_menu_links->get_p5() . "'" . "," . "'" . $drupal_menu_links->get_p6() . "'" . "," . "'" . $drupal_menu_links->get_p7() . "'" . "," . "'" . $drupal_menu_links->get_p8() . "'" . "," . "'" . $drupal_menu_links->get_p9() . "'" . "," . "'" . $drupal_menu_links->get_updated() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>

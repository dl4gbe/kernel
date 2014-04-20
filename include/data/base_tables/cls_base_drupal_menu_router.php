<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_menu_router extends cls_datatable_base
{
private static $p_cmmon;
private $p_include_file = null;
private $p_include_file_original = null;
private $p_weight = null;
private $p_weight_original = null;
private $p_position = null;
private $p_position_original = null;
private $p_description = null;
private $p_description_original = null;
private $p_type = null;
private $p_type_original = null;
private $p_theme_arguments = null;
private $p_theme_arguments_original = null;
private $p_theme_callback = null;
private $p_theme_callback_original = null;
private $p_title_arguments = null;
private $p_title_arguments_original = null;
private $p_title_callback = null;
private $p_title_callback_original = null;
private $p_title = null;
private $p_title_original = null;
private $p_tab_root = null;
private $p_tab_root_original = null;
private $p_tab_parent = null;
private $p_tab_parent_original = null;
private $p_context = null;
private $p_context_original = null;
private $p_number_parts = null;
private $p_number_parts_original = null;
private $p_fit = null;
private $p_fit_original = null;
private $p_delivery_callback = null;
private $p_delivery_callback_original = null;
private $p_page_arguments = null;
private $p_page_arguments_original = null;
private $p_page_callback = null;
private $p_page_callback_original = null;
private $p_access_arguments = null;
private $p_access_arguments_original = null;
private $p_access_callback = null;
private $p_access_callback_original = null;
private $p_to_arg_functions = null;
private $p_to_arg_functions_original = null;
private $p_load_functions = null;
private $p_load_functions_original = null;
private $p_path = null;
private $p_path_original = null;

private $p_include_file_is_dirty = false;
private $p_weight_is_dirty = false;
private $p_position_is_dirty = false;
private $p_description_is_dirty = false;
private $p_type_is_dirty = false;
private $p_theme_arguments_is_dirty = false;
private $p_theme_callback_is_dirty = false;
private $p_title_arguments_is_dirty = false;
private $p_title_callback_is_dirty = false;
private $p_title_is_dirty = false;
private $p_tab_root_is_dirty = false;
private $p_tab_parent_is_dirty = false;
private $p_context_is_dirty = false;
private $p_number_parts_is_dirty = false;
private $p_fit_is_dirty = false;
private $p_delivery_callback_is_dirty = false;
private $p_page_arguments_is_dirty = false;
private $p_page_callback_is_dirty = false;
private $p_access_arguments_is_dirty = false;
private $p_access_callback_is_dirty = false;
private $p_to_arg_functions_is_dirty = false;
private $p_load_functions_is_dirty = false;
private $p_path_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_menu_router';
}

public function get_table_fields()
{
	return array('id','include_file','weight','position','description','type','theme_arguments','theme_callback','title_arguments','title_callback','title','tab_root','tab_parent','context','number_parts','fit','delivery_callback','page_arguments','page_callback','access_arguments','access_callback','to_arg_functions','load_functions','path');
}

public function get_table_select($delimiter = '"')
{
	return 'select id as ' . $delimiter . 'drupal_menu_router.id' . $delimiter . ',include_file as ' . $delimiter . 'drupal_menu_router.include_file' . $delimiter . ',weight as ' . $delimiter . 'drupal_menu_router.weight' . $delimiter . ',position as ' . $delimiter . 'drupal_menu_router.position' . $delimiter . ',description as ' . $delimiter . 'drupal_menu_router.description' . $delimiter . ',type as ' . $delimiter . 'drupal_menu_router.type' . $delimiter . ',theme_arguments as ' . $delimiter . 'drupal_menu_router.theme_arguments' . $delimiter . ',theme_callback as ' . $delimiter . 'drupal_menu_router.theme_callback' . $delimiter . ',title_arguments as ' . $delimiter . 'drupal_menu_router.title_arguments' . $delimiter . ',title_callback as ' . $delimiter . 'drupal_menu_router.title_callback' . $delimiter . ',title as ' . $delimiter . 'drupal_menu_router.title' . $delimiter . ',tab_root as ' . $delimiter . 'drupal_menu_router.tab_root' . $delimiter . ',tab_parent as ' . $delimiter . 'drupal_menu_router.tab_parent' . $delimiter . ',context as ' . $delimiter . 'drupal_menu_router.context' . $delimiter . ',number_parts as ' . $delimiter . 'drupal_menu_router.number_parts' . $delimiter . ',fit as ' . $delimiter . 'drupal_menu_router.fit' . $delimiter . ',delivery_callback as ' . $delimiter . 'drupal_menu_router.delivery_callback' . $delimiter . ',page_arguments as ' . $delimiter . 'drupal_menu_router.page_arguments' . $delimiter . ',page_callback as ' . $delimiter . 'drupal_menu_router.page_callback' . $delimiter . ',access_arguments as ' . $delimiter . 'drupal_menu_router.access_arguments' . $delimiter . ',access_callback as ' . $delimiter . 'drupal_menu_router.access_callback' . $delimiter . ',to_arg_functions as ' . $delimiter . 'drupal_menu_router.to_arg_functions' . $delimiter . ',load_functions as ' . $delimiter . 'drupal_menu_router.load_functions' . $delimiter . ',path as ' . $delimiter . 'drupal_menu_router.path' . $delimiter . ' from drupal_menu_router';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}


public function get_include_file()
{
	return $this->p_include_file;
}

public function get_include_file_original()
{
	return $this->p_include_file_original;
}

public function set_include_file($value)
{
	if ($this->p_include_file === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_include_file_is_dirty = true;
	$this->p_include_file = $value;
}

public function set_include_file_original($value)
{
	$this->p_include_file_original = $value;
}

public function get_include_file_is_dirty()
{
	return $this->p_include_file_is_dirty;
}


public function get_weight()
{
	return $this->p_weight;
}

public function get_weight_original()
{
	return $this->p_weight_original;
}

public function set_weight($value)
{
	if ($this->p_weight === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_weight_is_dirty = true;
	$this->p_weight = $value;
}

public function set_weight_original($value)
{
	$this->p_weight_original = $value;
}

public function get_weight_is_dirty()
{
	return $this->p_weight_is_dirty;
}


public function get_position()
{
	return $this->p_position;
}

public function get_position_original()
{
	return $this->p_position_original;
}

public function set_position($value)
{
	if ($this->p_position === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_position_is_dirty = true;
	$this->p_position = $value;
}

public function set_position_original($value)
{
	$this->p_position_original = $value;
}

public function get_position_is_dirty()
{
	return $this->p_position_is_dirty;
}


public function get_description()
{
	return $this->p_description;
}

public function get_description_original()
{
	return $this->p_description_original;
}

public function set_description($value)
{
	if ($this->p_description === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_description_is_dirty = true;
	$this->p_description = $value;
}

public function set_description_original($value)
{
	$this->p_description_original = $value;
}

public function get_description_is_dirty()
{
	return $this->p_description_is_dirty;
}


public function get_type()
{
	return $this->p_type;
}

public function get_type_original()
{
	return $this->p_type_original;
}

public function set_type($value)
{
	if ($this->p_type === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_type_is_dirty = true;
	$this->p_type = $value;
}

public function set_type_original($value)
{
	$this->p_type_original = $value;
}

public function get_type_is_dirty()
{
	return $this->p_type_is_dirty;
}


public function get_theme_arguments()
{
	return $this->p_theme_arguments;
}

public function get_theme_arguments_original()
{
	return $this->p_theme_arguments_original;
}

public function set_theme_arguments($value)
{
	if ($this->p_theme_arguments === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_theme_arguments_is_dirty = true;
	$this->p_theme_arguments = $value;
}

public function set_theme_arguments_original($value)
{
	$this->p_theme_arguments_original = $value;
}

public function get_theme_arguments_is_dirty()
{
	return $this->p_theme_arguments_is_dirty;
}


public function get_theme_callback()
{
	return $this->p_theme_callback;
}

public function get_theme_callback_original()
{
	return $this->p_theme_callback_original;
}

public function set_theme_callback($value)
{
	if ($this->p_theme_callback === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_theme_callback_is_dirty = true;
	$this->p_theme_callback = $value;
}

public function set_theme_callback_original($value)
{
	$this->p_theme_callback_original = $value;
}

public function get_theme_callback_is_dirty()
{
	return $this->p_theme_callback_is_dirty;
}


public function get_title_arguments()
{
	return $this->p_title_arguments;
}

public function get_title_arguments_original()
{
	return $this->p_title_arguments_original;
}

public function set_title_arguments($value)
{
	if ($this->p_title_arguments === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_arguments_is_dirty = true;
	$this->p_title_arguments = $value;
}

public function set_title_arguments_original($value)
{
	$this->p_title_arguments_original = $value;
}

public function get_title_arguments_is_dirty()
{
	return $this->p_title_arguments_is_dirty;
}


public function get_title_callback()
{
	return $this->p_title_callback;
}

public function get_title_callback_original()
{
	return $this->p_title_callback_original;
}

public function set_title_callback($value)
{
	if ($this->p_title_callback === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_callback_is_dirty = true;
	$this->p_title_callback = $value;
}

public function set_title_callback_original($value)
{
	$this->p_title_callback_original = $value;
}

public function get_title_callback_is_dirty()
{
	return $this->p_title_callback_is_dirty;
}


public function get_title()
{
	return $this->p_title;
}

public function get_title_original()
{
	return $this->p_title_original;
}

public function set_title($value)
{
	if ($this->p_title === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_title_is_dirty = true;
	$this->p_title = $value;
}

public function set_title_original($value)
{
	$this->p_title_original = $value;
}

public function get_title_is_dirty()
{
	return $this->p_title_is_dirty;
}


public function get_tab_root()
{
	return $this->p_tab_root;
}

public function get_tab_root_original()
{
	return $this->p_tab_root_original;
}

public function set_tab_root($value)
{
	if ($this->p_tab_root === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_tab_root_is_dirty = true;
	$this->p_tab_root = $value;
}

public function set_tab_root_original($value)
{
	$this->p_tab_root_original = $value;
}

public function get_tab_root_is_dirty()
{
	return $this->p_tab_root_is_dirty;
}


public function get_tab_parent()
{
	return $this->p_tab_parent;
}

public function get_tab_parent_original()
{
	return $this->p_tab_parent_original;
}

public function set_tab_parent($value)
{
	if ($this->p_tab_parent === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_tab_parent_is_dirty = true;
	$this->p_tab_parent = $value;
}

public function set_tab_parent_original($value)
{
	$this->p_tab_parent_original = $value;
}

public function get_tab_parent_is_dirty()
{
	return $this->p_tab_parent_is_dirty;
}


public function get_context()
{
	return $this->p_context;
}

public function get_context_original()
{
	return $this->p_context_original;
}

public function set_context($value)
{
	if ($this->p_context === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_context_is_dirty = true;
	$this->p_context = $value;
}

public function set_context_original($value)
{
	$this->p_context_original = $value;
}

public function get_context_is_dirty()
{
	return $this->p_context_is_dirty;
}


public function get_number_parts()
{
	return $this->p_number_parts;
}

public function get_number_parts_original()
{
	return $this->p_number_parts_original;
}

public function set_number_parts($value)
{
	if ($this->p_number_parts === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_number_parts_is_dirty = true;
	$this->p_number_parts = $value;
}

public function set_number_parts_original($value)
{
	$this->p_number_parts_original = $value;
}

public function get_number_parts_is_dirty()
{
	return $this->p_number_parts_is_dirty;
}


public function get_fit()
{
	return $this->p_fit;
}

public function get_fit_original()
{
	return $this->p_fit_original;
}

public function set_fit($value)
{
	if ($this->p_fit === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_fit_is_dirty = true;
	$this->p_fit = $value;
}

public function set_fit_original($value)
{
	$this->p_fit_original = $value;
}

public function get_fit_is_dirty()
{
	return $this->p_fit_is_dirty;
}


public function get_delivery_callback()
{
	return $this->p_delivery_callback;
}

public function get_delivery_callback_original()
{
	return $this->p_delivery_callback_original;
}

public function set_delivery_callback($value)
{
	if ($this->p_delivery_callback === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_delivery_callback_is_dirty = true;
	$this->p_delivery_callback = $value;
}

public function set_delivery_callback_original($value)
{
	$this->p_delivery_callback_original = $value;
}

public function get_delivery_callback_is_dirty()
{
	return $this->p_delivery_callback_is_dirty;
}


public function get_page_arguments()
{
	return $this->p_page_arguments;
}

public function get_page_arguments_original()
{
	return $this->p_page_arguments_original;
}

public function set_page_arguments($value)
{
	if ($this->p_page_arguments === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_page_arguments_is_dirty = true;
	$this->p_page_arguments = $value;
}

public function set_page_arguments_original($value)
{
	$this->p_page_arguments_original = $value;
}

public function get_page_arguments_is_dirty()
{
	return $this->p_page_arguments_is_dirty;
}


public function get_page_callback()
{
	return $this->p_page_callback;
}

public function get_page_callback_original()
{
	return $this->p_page_callback_original;
}

public function set_page_callback($value)
{
	if ($this->p_page_callback === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_page_callback_is_dirty = true;
	$this->p_page_callback = $value;
}

public function set_page_callback_original($value)
{
	$this->p_page_callback_original = $value;
}

public function get_page_callback_is_dirty()
{
	return $this->p_page_callback_is_dirty;
}


public function get_access_arguments()
{
	return $this->p_access_arguments;
}

public function get_access_arguments_original()
{
	return $this->p_access_arguments_original;
}

public function set_access_arguments($value)
{
	if ($this->p_access_arguments === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_access_arguments_is_dirty = true;
	$this->p_access_arguments = $value;
}

public function set_access_arguments_original($value)
{
	$this->p_access_arguments_original = $value;
}

public function get_access_arguments_is_dirty()
{
	return $this->p_access_arguments_is_dirty;
}


public function get_access_callback()
{
	return $this->p_access_callback;
}

public function get_access_callback_original()
{
	return $this->p_access_callback_original;
}

public function set_access_callback($value)
{
	if ($this->p_access_callback === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_access_callback_is_dirty = true;
	$this->p_access_callback = $value;
}

public function set_access_callback_original($value)
{
	$this->p_access_callback_original = $value;
}

public function get_access_callback_is_dirty()
{
	return $this->p_access_callback_is_dirty;
}


public function get_to_arg_functions()
{
	return $this->p_to_arg_functions;
}

public function get_to_arg_functions_original()
{
	return $this->p_to_arg_functions_original;
}

public function set_to_arg_functions($value)
{
	if ($this->p_to_arg_functions === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_to_arg_functions_is_dirty = true;
	$this->p_to_arg_functions = $value;
}

public function set_to_arg_functions_original($value)
{
	$this->p_to_arg_functions_original = $value;
}

public function get_to_arg_functions_is_dirty()
{
	return $this->p_to_arg_functions_is_dirty;
}


public function get_load_functions()
{
	return $this->p_load_functions;
}

public function get_load_functions_original()
{
	return $this->p_load_functions_original;
}

public function set_load_functions($value)
{
	if ($this->p_load_functions === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_load_functions_is_dirty = true;
	$this->p_load_functions = $value;
}

public function set_load_functions_original($value)
{
	$this->p_load_functions_original = $value;
}

public function get_load_functions_is_dirty()
{
	return $this->p_load_functions_is_dirty;
}


public function get_path()
{
	return $this->p_path;
}

public function get_path_original()
{
	return $this->p_path_original;
}

public function set_path($value)
{
	if ($this->p_path === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_path_is_dirty = true;
	$this->p_path = $value;
}

public function set_path_original($value)
{
	$this->p_path_original = $value;
}

public function get_path_is_dirty()
{
	return $this->p_path_is_dirty;
}


public function reset_dirty($reset_values = false)
{
	$this->p_include_file_is_dirty = false;
	$this->p_weight_is_dirty = false;
	$this->p_position_is_dirty = false;
	$this->p_description_is_dirty = false;
	$this->p_type_is_dirty = false;
	$this->p_theme_arguments_is_dirty = false;
	$this->p_theme_callback_is_dirty = false;
	$this->p_title_arguments_is_dirty = false;
	$this->p_title_callback_is_dirty = false;
	$this->p_title_is_dirty = false;
	$this->p_tab_root_is_dirty = false;
	$this->p_tab_parent_is_dirty = false;
	$this->p_context_is_dirty = false;
	$this->p_number_parts_is_dirty = false;
	$this->p_fit_is_dirty = false;
	$this->p_delivery_callback_is_dirty = false;
	$this->p_page_arguments_is_dirty = false;
	$this->p_page_callback_is_dirty = false;
	$this->p_access_arguments_is_dirty = false;
	$this->p_access_callback_is_dirty = false;
	$this->p_to_arg_functions_is_dirty = false;
	$this->p_load_functions_is_dirty = false;
	$this->p_path_is_dirty = false;
	if ($reset_values)
	{
		$this->p_include_file = $this->p_include_file_original;
		$this->p_weight = $this->p_weight_original;
		$this->p_position = $this->p_position_original;
		$this->p_description = $this->p_description_original;
		$this->p_type = $this->p_type_original;
		$this->p_theme_arguments = $this->p_theme_arguments_original;
		$this->p_theme_callback = $this->p_theme_callback_original;
		$this->p_title_arguments = $this->p_title_arguments_original;
		$this->p_title_callback = $this->p_title_callback_original;
		$this->p_title = $this->p_title_original;
		$this->p_tab_root = $this->p_tab_root_original;
		$this->p_tab_parent = $this->p_tab_parent_original;
		$this->p_context = $this->p_context_original;
		$this->p_number_parts = $this->p_number_parts_original;
		$this->p_fit = $this->p_fit_original;
		$this->p_delivery_callback = $this->p_delivery_callback_original;
		$this->p_page_arguments = $this->p_page_arguments_original;
		$this->p_page_callback = $this->p_page_callback_original;
		$this->p_access_arguments = $this->p_access_arguments_original;
		$this->p_access_callback = $this->p_access_callback_original;
		$this->p_to_arg_functions = $this->p_to_arg_functions_original;
		$this->p_load_functions = $this->p_load_functions_original;
		$this->p_path = $this->p_path_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_menu_router.id":
					$this->set_id($val);
					break;
				case "drupal_menu_router.include_file":
					$this->set_include_file($val);
					$this->set_include_file_original($val);
					break;
				case "drupal_menu_router.weight":
					$this->set_weight($val);
					$this->set_weight_original($val);
					break;
				case "drupal_menu_router.position":
					$this->set_position($val);
					$this->set_position_original($val);
					break;
				case "drupal_menu_router.description":
					$this->set_description($val);
					$this->set_description_original($val);
					break;
				case "drupal_menu_router.type":
					$this->set_type($val);
					$this->set_type_original($val);
					break;
				case "drupal_menu_router.theme_arguments":
					$this->set_theme_arguments($val);
					$this->set_theme_arguments_original($val);
					break;
				case "drupal_menu_router.theme_callback":
					$this->set_theme_callback($val);
					$this->set_theme_callback_original($val);
					break;
				case "drupal_menu_router.title_arguments":
					$this->set_title_arguments($val);
					$this->set_title_arguments_original($val);
					break;
				case "drupal_menu_router.title_callback":
					$this->set_title_callback($val);
					$this->set_title_callback_original($val);
					break;
				case "drupal_menu_router.title":
					$this->set_title($val);
					$this->set_title_original($val);
					break;
				case "drupal_menu_router.tab_root":
					$this->set_tab_root($val);
					$this->set_tab_root_original($val);
					break;
				case "drupal_menu_router.tab_parent":
					$this->set_tab_parent($val);
					$this->set_tab_parent_original($val);
					break;
				case "drupal_menu_router.context":
					$this->set_context($val);
					$this->set_context_original($val);
					break;
				case "drupal_menu_router.number_parts":
					$this->set_number_parts($val);
					$this->set_number_parts_original($val);
					break;
				case "drupal_menu_router.fit":
					$this->set_fit($val);
					$this->set_fit_original($val);
					break;
				case "drupal_menu_router.delivery_callback":
					$this->set_delivery_callback($val);
					$this->set_delivery_callback_original($val);
					break;
				case "drupal_menu_router.page_arguments":
					$this->set_page_arguments($val);
					$this->set_page_arguments_original($val);
					break;
				case "drupal_menu_router.page_callback":
					$this->set_page_callback($val);
					$this->set_page_callback_original($val);
					break;
				case "drupal_menu_router.access_arguments":
					$this->set_access_arguments($val);
					$this->set_access_arguments_original($val);
					break;
				case "drupal_menu_router.access_callback":
					$this->set_access_callback($val);
					$this->set_access_callback_original($val);
					break;
				case "drupal_menu_router.to_arg_functions":
					$this->set_to_arg_functions($val);
					$this->set_to_arg_functions_original($val);
					break;
				case "drupal_menu_router.load_functions":
					$this->set_load_functions($val);
					$this->set_load_functions_original($val);
					break;
				case "drupal_menu_router.path":
					$this->set_path($val);
					$this->set_path_original($val);
					break;
			}
		}
	if ($reset)
	{
		$this->reset_dirty(false);
	}
}
public function get_by_id($id,$db_manager,$application = null)
{
	$sql = $this->get_table_select($db_manager->get_delimeter());
	$sql .= " where id = '" . $id . "'";
	$result = $db_manager->query($sql);
	if (!is_null($result))
	{
		require_once('include/data/table_factory/cls_table_factory.php');
		$drupal_menu_router = cls_table_factory::create_instance('drupal_menu_router');
		$row = $db_manager->fetch_row($result);
		$drupal_menu_router->fill($row);
		return $drupal_menu_router;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_menu_router.php');
		return cls_save_drupal_menu_router::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_menu_router.php');
		return cls_save_drupal_menu_router::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_menu_routers($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_menu_router',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_menu_router',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_menu_router = cls_table_factory::create_instance('drupal_menu_router');
				$drupal_menu_router->fill($row);
				$data[] = $drupal_menu_router;
			}
		return $data;
	}

public function get_table_test_data($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('table_test_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $table_test_data;
				}
				else
				{
					$data[] = $table_test_data;
				}
			}
		return $data;
	}

public function get_multi_table_test_data($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$table_test_data = cls_table_factory::create_instance('table_test_data');
				$table_test_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $table_test_data;
			}
		return $data;
	}

public function get_communication_reason($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('communication_reason',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $communication_reason;
				}
				else
				{
					$data[] = $communication_reason;
				}
			}
		return $data;
	}

public function get_multi_communication_reason($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$communication_reason = cls_table_factory::create_instance('communication_reason');
				$communication_reason->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $communication_reason;
			}
		return $data;
	}

public function get_data_change($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_change',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_change;
				}
				else
				{
					$data[] = $data_change;
				}
			}
		return $data;
	}

public function get_multi_data_change($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_change = cls_table_factory::create_instance('data_change');
				$data_change->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_change;
			}
		return $data;
	}

public function get_data_help($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_help',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_help;
				}
				else
				{
					$data[] = $data_help;
				}
			}
		return $data;
	}

public function get_multi_data_help($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_help = cls_table_factory::create_instance('data_help');
				$data_help->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_help;
			}
		return $data;
	}

public function get_data_location($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_location',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_location;
				}
				else
				{
					$data[] = $data_location;
				}
			}
		return $data;
	}

public function get_multi_data_location($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_location = cls_table_factory::create_instance('data_location');
				$data_location->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_location;
			}
		return $data;
	}

public function get_data_posting($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_posting',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_posting;
				}
				else
				{
					$data[] = $data_posting;
				}
			}
		return $data;
	}

public function get_multi_data_posting($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_posting = cls_table_factory::create_instance('data_posting');
				$data_posting->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_posting;
			}
		return $data;
	}

public function get_offer_event($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('offer_event',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $offer_event;
				}
				else
				{
					$data[] = $offer_event;
				}
			}
		return $data;
	}

public function get_multi_offer_event($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$offer_event = cls_table_factory::create_instance('offer_event');
				$offer_event->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $offer_event;
			}
		return $data;
	}

public function get_supplier_data($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('supplier_data',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $supplier_data;
				}
				else
				{
					$data[] = $supplier_data;
				}
			}
		return $data;
	}

public function get_multi_supplier_data($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$supplier_data = cls_table_factory::create_instance('supplier_data');
				$supplier_data->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $supplier_data;
			}
		return $data;
	}

public function get_address($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('address',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $address;
				}
				else
				{
					$data[] = $address;
				}
			}
		return $data;
	}

public function get_multi_address($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$address = cls_table_factory::create_instance('address');
				$address->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $address;
			}
		return $data;
	}

public function get_data_property($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_property;
			}
		return $data;
	}

public function get_data_translation($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_translation',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_translation;
				}
				else
				{
					$data[] = $data_translation;
				}
			}
		return $data;
	}

public function get_multi_data_translation($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_translation = cls_table_factory::create_instance('data_translation');
				$data_translation->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $data_translation;
			}
		return $data;
	}

public function get_dms($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('dms',$this->get_id(),'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $dms;
				}
				else
				{
					$data[] = $dms;
				}
			}
		return $data;
	}

public function get_multi_dms($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_menu_routers,'id_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$dms = cls_table_factory::create_instance('dms');
				$dms->fill($row);
				if (!array_key_exists($data[$row['id_data']]))
				{
					$data[$row['id_data']] = array();
				}
				$data[$row['id_data']][] = $dms;
			}
		return $data;
	}

public function get_data_relation_id_data1($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data1($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_menu_routers,'id_data1');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data1']]))
				{
					$data[$row['id_data1']] = array();
				}
				$data[$row['id_data1']][] = $data_relation;
			}
		return $data;
	}

public function get_data_relation_id_data2($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_relation',$this->get_id(),'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_relation;
				}
				else
				{
					$data[] = $data_relation;
				}
			}
		return $data;
	}

public function get_multi_data_relation_id_data2($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_menu_routers,'id_data2');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_relation = cls_table_factory::create_instance('data_relation');
				$data_relation->fill($row);
				if (!array_key_exists($data[$row['id_data2']]))
				{
					$data[$row['id_data2']] = array();
				}
				$data[$row['id_data2']][] = $data_relation;
			}
		return $data;
	}

public function get_data_property_id_link_data($drupal_menu_routers,$db_manager,$application,$use_key_value = false)
	{
		$result = $db_manager->get_records('data_property',$this->get_id(),'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if ($use_key_value)
				{
					$data[$row['id']] = $data_property;
				}
				else
				{
					$data[] = $data_property;
				}
			}
		return $data;
	}

public function get_multi_data_property_id_link_data($drupal_menu_routers,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_menu_routers,'id_link_data');
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$data_property = cls_table_factory::create_instance('data_property');
				$data_property->fill($row);
				if (!array_key_exists($data[$row['id_link_data']]))
				{
					$data[$row['id_link_data']] = array();
				}
				$data[$row['id_link_data']][] = $data_property;
			}
		return $data;
	}


}
?>

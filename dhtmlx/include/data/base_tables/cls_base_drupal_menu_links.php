<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_datatable_base.php');
require_once('include/data/cls_data_result.php');
abstract class cls_base_drupal_menu_links extends cls_datatable_base
{
private static $p_cmmon;
private $p_menu_name = null;
private $p_menu_name_original = null;
private $p_mlid = null;
private $p_mlid_original = null;
private $p_plid = null;
private $p_plid_original = null;
private $p_link_path = null;
private $p_link_path_original = null;
private $p_router_path = null;
private $p_router_path_original = null;
private $p_link_title = null;
private $p_link_title_original = null;
private $p_options = null;
private $p_options_original = null;
private $p_module = null;
private $p_module_original = null;
private $p_hidden = null;
private $p_hidden_original = null;
private $p_external = null;
private $p_external_original = null;
private $p_has_children = null;
private $p_has_children_original = null;
private $p_expanded = null;
private $p_expanded_original = null;
private $p_weight = null;
private $p_weight_original = null;
private $p_depth = null;
private $p_depth_original = null;
private $p_customized = null;
private $p_customized_original = null;
private $p_p1 = null;
private $p_p1_original = null;
private $p_p2 = null;
private $p_p2_original = null;
private $p_p3 = null;
private $p_p3_original = null;
private $p_p4 = null;
private $p_p4_original = null;
private $p_p5 = null;
private $p_p5_original = null;
private $p_p6 = null;
private $p_p6_original = null;
private $p_p7 = null;
private $p_p7_original = null;
private $p_p8 = null;
private $p_p8_original = null;
private $p_p9 = null;
private $p_p9_original = null;
private $p_updated = null;
private $p_updated_original = null;

private $p_menu_name_is_dirty = false;
private $p_mlid_is_dirty = false;
private $p_plid_is_dirty = false;
private $p_link_path_is_dirty = false;
private $p_router_path_is_dirty = false;
private $p_link_title_is_dirty = false;
private $p_options_is_dirty = false;
private $p_module_is_dirty = false;
private $p_hidden_is_dirty = false;
private $p_external_is_dirty = false;
private $p_has_children_is_dirty = false;
private $p_expanded_is_dirty = false;
private $p_weight_is_dirty = false;
private $p_depth_is_dirty = false;
private $p_customized_is_dirty = false;
private $p_p1_is_dirty = false;
private $p_p2_is_dirty = false;
private $p_p3_is_dirty = false;
private $p_p4_is_dirty = false;
private $p_p5_is_dirty = false;
private $p_p6_is_dirty = false;
private $p_p7_is_dirty = false;
private $p_p8_is_dirty = false;
private $p_p9_is_dirty = false;
private $p_updated_is_dirty = false;

public function _get_table_name()
{
	return 'drupal_menu_links';
}

public function get_table_fields()
{
	return array('menu_name','mlid','plid','link_path','router_path','link_title','options','module','hidden','external','has_children','expanded','weight','depth','customized','p1','p2','p3','p4','p5','p6','p7','p8','p9','updated','id');
}

public function get_table_select($delimiter = '"')
{
	return 'select menu_name as ' . $delimiter . 'drupal_menu_links.menu_name' . $delimiter . ',mlid as ' . $delimiter . 'drupal_menu_links.mlid' . $delimiter . ',plid as ' . $delimiter . 'drupal_menu_links.plid' . $delimiter . ',link_path as ' . $delimiter . 'drupal_menu_links.link_path' . $delimiter . ',router_path as ' . $delimiter . 'drupal_menu_links.router_path' . $delimiter . ',link_title as ' . $delimiter . 'drupal_menu_links.link_title' . $delimiter . ',options as ' . $delimiter . 'drupal_menu_links.options' . $delimiter . ',module as ' . $delimiter . 'drupal_menu_links.module' . $delimiter . ',hidden as ' . $delimiter . 'drupal_menu_links.hidden' . $delimiter . ',external as ' . $delimiter . 'drupal_menu_links.external' . $delimiter . ',has_children as ' . $delimiter . 'drupal_menu_links.has_children' . $delimiter . ',expanded as ' . $delimiter . 'drupal_menu_links.expanded' . $delimiter . ',weight as ' . $delimiter . 'drupal_menu_links.weight' . $delimiter . ',depth as ' . $delimiter . 'drupal_menu_links.depth' . $delimiter . ',customized as ' . $delimiter . 'drupal_menu_links.customized' . $delimiter . ',p1 as ' . $delimiter . 'drupal_menu_links.p1' . $delimiter . ',p2 as ' . $delimiter . 'drupal_menu_links.p2' . $delimiter . ',p3 as ' . $delimiter . 'drupal_menu_links.p3' . $delimiter . ',p4 as ' . $delimiter . 'drupal_menu_links.p4' . $delimiter . ',p5 as ' . $delimiter . 'drupal_menu_links.p5' . $delimiter . ',p6 as ' . $delimiter . 'drupal_menu_links.p6' . $delimiter . ',p7 as ' . $delimiter . 'drupal_menu_links.p7' . $delimiter . ',p8 as ' . $delimiter . 'drupal_menu_links.p8' . $delimiter . ',p9 as ' . $delimiter . 'drupal_menu_links.p9' . $delimiter . ',updated as ' . $delimiter . 'drupal_menu_links.updated' . $delimiter . ',id as ' . $delimiter . 'drupal_menu_links.id' . $delimiter . ' from drupal_menu_links';
}

public function get_search_fields()
{
	$search_fields = array();
	return $search_fields;
}

public function get_menu_name()
{
	return $this->p_menu_name;
}

public function get_menu_name_original()
{
	return $this->p_menu_name_original;
}

public function set_menu_name($value)
{
	if ($this->p_menu_name === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_menu_name_is_dirty = true;
	$this->p_menu_name = $value;
}

public function set_menu_name_original($value)
{
	$this->p_menu_name_original = $value;
}

public function get_menu_name_is_dirty()
{
	return $this->p_menu_name_is_dirty;
}


public function get_mlid()
{
	return $this->p_mlid;
}

public function get_mlid_original()
{
	return $this->p_mlid_original;
}

public function set_mlid($value)
{
	if ($this->p_mlid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_mlid_is_dirty = true;
	$this->p_mlid = $value;
}

public function set_mlid_original($value)
{
	$this->p_mlid_original = $value;
}

public function get_mlid_is_dirty()
{
	return $this->p_mlid_is_dirty;
}


public function get_plid()
{
	return $this->p_plid;
}

public function get_plid_original()
{
	return $this->p_plid_original;
}

public function set_plid($value)
{
	if ($this->p_plid === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_plid_is_dirty = true;
	$this->p_plid = $value;
}

public function set_plid_original($value)
{
	$this->p_plid_original = $value;
}

public function get_plid_is_dirty()
{
	return $this->p_plid_is_dirty;
}


public function get_link_path()
{
	return $this->p_link_path;
}

public function get_link_path_original()
{
	return $this->p_link_path_original;
}

public function set_link_path($value)
{
	if ($this->p_link_path === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_link_path_is_dirty = true;
	$this->p_link_path = $value;
}

public function set_link_path_original($value)
{
	$this->p_link_path_original = $value;
}

public function get_link_path_is_dirty()
{
	return $this->p_link_path_is_dirty;
}


public function get_router_path()
{
	return $this->p_router_path;
}

public function get_router_path_original()
{
	return $this->p_router_path_original;
}

public function set_router_path($value)
{
	if ($this->p_router_path === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_router_path_is_dirty = true;
	$this->p_router_path = $value;
}

public function set_router_path_original($value)
{
	$this->p_router_path_original = $value;
}

public function get_router_path_is_dirty()
{
	return $this->p_router_path_is_dirty;
}


public function get_link_title()
{
	return $this->p_link_title;
}

public function get_link_title_original()
{
	return $this->p_link_title_original;
}

public function set_link_title($value)
{
	if ($this->p_link_title === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_link_title_is_dirty = true;
	$this->p_link_title = $value;
}

public function set_link_title_original($value)
{
	$this->p_link_title_original = $value;
}

public function get_link_title_is_dirty()
{
	return $this->p_link_title_is_dirty;
}


public function get_options()
{
	return $this->p_options;
}

public function get_options_original()
{
	return $this->p_options_original;
}

public function set_options($value)
{
	if ($this->p_options === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_options_is_dirty = true;
	$this->p_options = $value;
}

public function set_options_original($value)
{
	$this->p_options_original = $value;
}

public function get_options_is_dirty()
{
	return $this->p_options_is_dirty;
}


public function get_module()
{
	return $this->p_module;
}

public function get_module_original()
{
	return $this->p_module_original;
}

public function set_module($value)
{
	if ($this->p_module === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_module_is_dirty = true;
	$this->p_module = $value;
}

public function set_module_original($value)
{
	$this->p_module_original = $value;
}

public function get_module_is_dirty()
{
	return $this->p_module_is_dirty;
}


public function get_hidden()
{
	return $this->p_hidden;
}

public function get_hidden_original()
{
	return $this->p_hidden_original;
}

public function set_hidden($value)
{
	if ($this->p_hidden === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_hidden_is_dirty = true;
	$this->p_hidden = $value;
}

public function set_hidden_original($value)
{
	$this->p_hidden_original = $value;
}

public function get_hidden_is_dirty()
{
	return $this->p_hidden_is_dirty;
}


public function get_external()
{
	return $this->p_external;
}

public function get_external_original()
{
	return $this->p_external_original;
}

public function set_external($value)
{
	if ($this->p_external === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_external_is_dirty = true;
	$this->p_external = $value;
}

public function set_external_original($value)
{
	$this->p_external_original = $value;
}

public function get_external_is_dirty()
{
	return $this->p_external_is_dirty;
}


public function get_has_children()
{
	return $this->p_has_children;
}

public function get_has_children_original()
{
	return $this->p_has_children_original;
}

public function set_has_children($value)
{
	if ($this->p_has_children === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_has_children_is_dirty = true;
	$this->p_has_children = $value;
}

public function set_has_children_original($value)
{
	$this->p_has_children_original = $value;
}

public function get_has_children_is_dirty()
{
	return $this->p_has_children_is_dirty;
}


public function get_expanded()
{
	return $this->p_expanded;
}

public function get_expanded_original()
{
	return $this->p_expanded_original;
}

public function set_expanded($value)
{
	if ($this->p_expanded === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_expanded_is_dirty = true;
	$this->p_expanded = $value;
}

public function set_expanded_original($value)
{
	$this->p_expanded_original = $value;
}

public function get_expanded_is_dirty()
{
	return $this->p_expanded_is_dirty;
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


public function get_depth()
{
	return $this->p_depth;
}

public function get_depth_original()
{
	return $this->p_depth_original;
}

public function set_depth($value)
{
	if ($this->p_depth === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_depth_is_dirty = true;
	$this->p_depth = $value;
}

public function set_depth_original($value)
{
	$this->p_depth_original = $value;
}

public function get_depth_is_dirty()
{
	return $this->p_depth_is_dirty;
}


public function get_customized()
{
	return $this->p_customized;
}

public function get_customized_original()
{
	return $this->p_customized_original;
}

public function set_customized($value)
{
	if ($this->p_customized === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_customized_is_dirty = true;
	$this->p_customized = $value;
}

public function set_customized_original($value)
{
	$this->p_customized_original = $value;
}

public function get_customized_is_dirty()
{
	return $this->p_customized_is_dirty;
}


public function get_p1()
{
	return $this->p_p1;
}

public function get_p1_original()
{
	return $this->p_p1_original;
}

public function set_p1($value)
{
	if ($this->p_p1 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p1_is_dirty = true;
	$this->p_p1 = $value;
}

public function set_p1_original($value)
{
	$this->p_p1_original = $value;
}

public function get_p1_is_dirty()
{
	return $this->p_p1_is_dirty;
}


public function get_p2()
{
	return $this->p_p2;
}

public function get_p2_original()
{
	return $this->p_p2_original;
}

public function set_p2($value)
{
	if ($this->p_p2 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p2_is_dirty = true;
	$this->p_p2 = $value;
}

public function set_p2_original($value)
{
	$this->p_p2_original = $value;
}

public function get_p2_is_dirty()
{
	return $this->p_p2_is_dirty;
}


public function get_p3()
{
	return $this->p_p3;
}

public function get_p3_original()
{
	return $this->p_p3_original;
}

public function set_p3($value)
{
	if ($this->p_p3 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p3_is_dirty = true;
	$this->p_p3 = $value;
}

public function set_p3_original($value)
{
	$this->p_p3_original = $value;
}

public function get_p3_is_dirty()
{
	return $this->p_p3_is_dirty;
}


public function get_p4()
{
	return $this->p_p4;
}

public function get_p4_original()
{
	return $this->p_p4_original;
}

public function set_p4($value)
{
	if ($this->p_p4 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p4_is_dirty = true;
	$this->p_p4 = $value;
}

public function set_p4_original($value)
{
	$this->p_p4_original = $value;
}

public function get_p4_is_dirty()
{
	return $this->p_p4_is_dirty;
}


public function get_p5()
{
	return $this->p_p5;
}

public function get_p5_original()
{
	return $this->p_p5_original;
}

public function set_p5($value)
{
	if ($this->p_p5 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p5_is_dirty = true;
	$this->p_p5 = $value;
}

public function set_p5_original($value)
{
	$this->p_p5_original = $value;
}

public function get_p5_is_dirty()
{
	return $this->p_p5_is_dirty;
}


public function get_p6()
{
	return $this->p_p6;
}

public function get_p6_original()
{
	return $this->p_p6_original;
}

public function set_p6($value)
{
	if ($this->p_p6 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p6_is_dirty = true;
	$this->p_p6 = $value;
}

public function set_p6_original($value)
{
	$this->p_p6_original = $value;
}

public function get_p6_is_dirty()
{
	return $this->p_p6_is_dirty;
}


public function get_p7()
{
	return $this->p_p7;
}

public function get_p7_original()
{
	return $this->p_p7_original;
}

public function set_p7($value)
{
	if ($this->p_p7 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p7_is_dirty = true;
	$this->p_p7 = $value;
}

public function set_p7_original($value)
{
	$this->p_p7_original = $value;
}

public function get_p7_is_dirty()
{
	return $this->p_p7_is_dirty;
}


public function get_p8()
{
	return $this->p_p8;
}

public function get_p8_original()
{
	return $this->p_p8_original;
}

public function set_p8($value)
{
	if ($this->p_p8 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p8_is_dirty = true;
	$this->p_p8 = $value;
}

public function set_p8_original($value)
{
	$this->p_p8_original = $value;
}

public function get_p8_is_dirty()
{
	return $this->p_p8_is_dirty;
}


public function get_p9()
{
	return $this->p_p9;
}

public function get_p9_original()
{
	return $this->p_p9_original;
}

public function set_p9($value)
{
	if ($this->p_p9 === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_p9_is_dirty = true;
	$this->p_p9 = $value;
}

public function set_p9_original($value)
{
	$this->p_p9_original = $value;
}

public function get_p9_is_dirty()
{
	return $this->p_p9_is_dirty;
}


public function get_updated()
{
	return $this->p_updated;
}

public function get_updated_original()
{
	return $this->p_updated_original;
}

public function set_updated($value)
{
	if ($this->p_updated === $value)
	{
		return;
	}
	$this->set_dirty(true);
	$this->p_updated_is_dirty = true;
	$this->p_updated = $value;
}

public function set_updated_original($value)
{
	$this->p_updated_original = $value;
}

public function get_updated_is_dirty()
{
	return $this->p_updated_is_dirty;
}



public function reset_dirty($reset_values = false)
{
	$this->p_menu_name_is_dirty = false;
	$this->p_mlid_is_dirty = false;
	$this->p_plid_is_dirty = false;
	$this->p_link_path_is_dirty = false;
	$this->p_router_path_is_dirty = false;
	$this->p_link_title_is_dirty = false;
	$this->p_options_is_dirty = false;
	$this->p_module_is_dirty = false;
	$this->p_hidden_is_dirty = false;
	$this->p_external_is_dirty = false;
	$this->p_has_children_is_dirty = false;
	$this->p_expanded_is_dirty = false;
	$this->p_weight_is_dirty = false;
	$this->p_depth_is_dirty = false;
	$this->p_customized_is_dirty = false;
	$this->p_p1_is_dirty = false;
	$this->p_p2_is_dirty = false;
	$this->p_p3_is_dirty = false;
	$this->p_p4_is_dirty = false;
	$this->p_p5_is_dirty = false;
	$this->p_p6_is_dirty = false;
	$this->p_p7_is_dirty = false;
	$this->p_p8_is_dirty = false;
	$this->p_p9_is_dirty = false;
	$this->p_updated_is_dirty = false;
	if ($reset_values)
	{
		$this->p_menu_name = $this->p_menu_name_original;
		$this->p_mlid = $this->p_mlid_original;
		$this->p_plid = $this->p_plid_original;
		$this->p_link_path = $this->p_link_path_original;
		$this->p_router_path = $this->p_router_path_original;
		$this->p_link_title = $this->p_link_title_original;
		$this->p_options = $this->p_options_original;
		$this->p_module = $this->p_module_original;
		$this->p_hidden = $this->p_hidden_original;
		$this->p_external = $this->p_external_original;
		$this->p_has_children = $this->p_has_children_original;
		$this->p_expanded = $this->p_expanded_original;
		$this->p_weight = $this->p_weight_original;
		$this->p_depth = $this->p_depth_original;
		$this->p_customized = $this->p_customized_original;
		$this->p_p1 = $this->p_p1_original;
		$this->p_p2 = $this->p_p2_original;
		$this->p_p3 = $this->p_p3_original;
		$this->p_p4 = $this->p_p4_original;
		$this->p_p5 = $this->p_p5_original;
		$this->p_p6 = $this->p_p6_original;
		$this->p_p7 = $this->p_p7_original;
		$this->p_p8 = $this->p_p8_original;
		$this->p_p9 = $this->p_p9_original;
		$this->p_updated = $this->p_updated_original;
	}
}
public function fill($row,$reset = true)
{
	foreach ($row as $key => $val)
		{
		switch ($key)
			{
				case "drupal_menu_links.menu_name":
					$this->set_menu_name($val);
					$this->set_menu_name_original($val);
					break;
				case "drupal_menu_links.mlid":
					$this->set_mlid($val);
					$this->set_mlid_original($val);
					break;
				case "drupal_menu_links.plid":
					$this->set_plid($val);
					$this->set_plid_original($val);
					break;
				case "drupal_menu_links.link_path":
					$this->set_link_path($val);
					$this->set_link_path_original($val);
					break;
				case "drupal_menu_links.router_path":
					$this->set_router_path($val);
					$this->set_router_path_original($val);
					break;
				case "drupal_menu_links.link_title":
					$this->set_link_title($val);
					$this->set_link_title_original($val);
					break;
				case "drupal_menu_links.options":
					$this->set_options($val);
					$this->set_options_original($val);
					break;
				case "drupal_menu_links.module":
					$this->set_module($val);
					$this->set_module_original($val);
					break;
				case "drupal_menu_links.hidden":
					$this->set_hidden($val);
					$this->set_hidden_original($val);
					break;
				case "drupal_menu_links.external":
					$this->set_external($val);
					$this->set_external_original($val);
					break;
				case "drupal_menu_links.has_children":
					$this->set_has_children($val);
					$this->set_has_children_original($val);
					break;
				case "drupal_menu_links.expanded":
					$this->set_expanded($val);
					$this->set_expanded_original($val);
					break;
				case "drupal_menu_links.weight":
					$this->set_weight($val);
					$this->set_weight_original($val);
					break;
				case "drupal_menu_links.depth":
					$this->set_depth($val);
					$this->set_depth_original($val);
					break;
				case "drupal_menu_links.customized":
					$this->set_customized($val);
					$this->set_customized_original($val);
					break;
				case "drupal_menu_links.p1":
					$this->set_p1($val);
					$this->set_p1_original($val);
					break;
				case "drupal_menu_links.p2":
					$this->set_p2($val);
					$this->set_p2_original($val);
					break;
				case "drupal_menu_links.p3":
					$this->set_p3($val);
					$this->set_p3_original($val);
					break;
				case "drupal_menu_links.p4":
					$this->set_p4($val);
					$this->set_p4_original($val);
					break;
				case "drupal_menu_links.p5":
					$this->set_p5($val);
					$this->set_p5_original($val);
					break;
				case "drupal_menu_links.p6":
					$this->set_p6($val);
					$this->set_p6_original($val);
					break;
				case "drupal_menu_links.p7":
					$this->set_p7($val);
					$this->set_p7_original($val);
					break;
				case "drupal_menu_links.p8":
					$this->set_p8($val);
					$this->set_p8_original($val);
					break;
				case "drupal_menu_links.p9":
					$this->set_p9($val);
					$this->set_p9_original($val);
					break;
				case "drupal_menu_links.updated":
					$this->set_updated($val);
					$this->set_updated_original($val);
					break;
				case "drupal_menu_links.id":
					$this->set_id($val);
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
		$drupal_menu_links = cls_table_factory::create_instance('drupal_menu_links');
		$row = $db_manager->fetch_row($result);
		$drupal_menu_links->fill($row);
		return $drupal_menu_links;
	}
}

public function save($db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_menu_links.php');
		return cls_save_drupal_menu_links::save_object($this,$db_manager,$application);
	}

public function save_array($data,$db_manager,$application)
	{
		require_once('include/data/base_table_savers/cls_save_drupal_menu_links.php');
		return cls_save_drupal_menu_links::save_array($data,$db_manager,$application);
	}

function save_data($data,$db_manager,$application)
	{
	}

public function get_drupal_menu_linkss($db_manager,$application,$search_values,$limit = 0,$offset = 0,$use_key_value = false)
	{
		$result = null;
		if (empty($seach_values))
		{
			$result = $db_manager->search_for_records('drupal_menu_links',null,null,$limit,$offset);
		}
		else
		{
			$result = $db_manager->search_for_records('drupal_menu_links',$this->get_search_fields(),$seach_values,$limit,$offset);
		}
		if (is_null($result)) return null;
		if (count($result) == 0) return null;
		require_once('include/data/table_factory/cls_table_factory.php');
		$data = array();
		while (($row=$db_manager->fetch_by_assoc($result)) !=null)
			{
				$drupal_menu_links = cls_table_factory::create_instance('drupal_menu_links');
				$drupal_menu_links->fill($row);
				$data[] = $drupal_menu_links;
			}
		return $data;
	}

public function get_address($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_address($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('address',$drupal_menu_linkss,'id_data');
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

public function get_communication_reason($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_communication_reason($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('communication_reason',$drupal_menu_linkss,'id_data');
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

public function get_data_change($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_change($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_change',$drupal_menu_linkss,'id_data');
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

public function get_data_help($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_help($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_help',$drupal_menu_linkss,'id_data');
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

public function get_data_location($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_location($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_location',$drupal_menu_linkss,'id_data');
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

public function get_data_posting($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_posting($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_posting',$drupal_menu_linkss,'id_data');
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

public function get_data_property($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_menu_linkss,'id_data');
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

public function get_offer_event($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_offer_event($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('offer_event',$drupal_menu_linkss,'id_data');
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

public function get_supplier_data($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_supplier_data($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('supplier_data',$drupal_menu_linkss,'id_data');
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

public function get_table_test_data($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_table_test_data($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('table_test_data',$drupal_menu_linkss,'id_data');
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

public function get_data_translation($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_translation($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_translation',$drupal_menu_linkss,'id_data');
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

public function get_dms($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_dms($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('dms',$drupal_menu_linkss,'id_data');
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

public function get_data_relation_id_data1($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data1($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_menu_linkss,'id_data1');
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

public function get_data_relation_id_data2($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_relation_id_data2($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_relation',$drupal_menu_linkss,'id_data2');
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

public function get_data_property_id_link_data($drupal_menu_linkss,$db_manager,$application,$use_key_value = false)
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

public function get_multi_data_property_id_link_data($drupal_menu_linkss,$db_manager,$application)
	{
		$result = $db_manager->get_records_by_ids('data_property',$drupal_menu_linkss,'id_link_data');
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

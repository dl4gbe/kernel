<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_menu_links_344e3924_8b3a_4a99_aec0_6552cebfda3c extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_drupal_menu_links = cls_table_factory::get_common_drupal_menu_links();
		$array_drupal_menu_links =  $common_drupal_menu_links->get_drupal_menu_linkss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_menu_links as $drupal_menu_links)
			{
			$drupal_menu_links_id = $drupal_menu_links->get_id();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.menu_name'] = $drupal_menu_links->get_menu_name();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.mlid'] = $drupal_menu_links->get_mlid();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.plid'] = $drupal_menu_links->get_plid();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.link_path'] = $drupal_menu_links->get_link_path();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.router_path'] = $drupal_menu_links->get_router_path();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.link_title'] = $drupal_menu_links->get_link_title();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.options'] = $drupal_menu_links->get_options();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.module'] = $drupal_menu_links->get_module();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.hidden'] = $drupal_menu_links->get_hidden();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.external'] = $drupal_menu_links->get_external();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.has_children'] = $drupal_menu_links->get_has_children();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.expanded'] = $drupal_menu_links->get_expanded();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.weight'] = $drupal_menu_links->get_weight();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.depth'] = $drupal_menu_links->get_depth();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.customized'] = $drupal_menu_links->get_customized();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p1'] = $drupal_menu_links->get_p1();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p2'] = $drupal_menu_links->get_p2();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p3'] = $drupal_menu_links->get_p3();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p4'] = $drupal_menu_links->get_p4();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p5'] = $drupal_menu_links->get_p5();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p6'] = $drupal_menu_links->get_p6();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p7'] = $drupal_menu_links->get_p7();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p8'] = $drupal_menu_links->get_p8();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.p9'] = $drupal_menu_links->get_p9();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.updated'] = $drupal_menu_links->get_updated();
			$result_array[$drupal_menu_links_id]['drupal_menu_links.id'] = $drupal_menu_links->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_menu_links.menu_name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_links.mlid']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_links.plid']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.link_path']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_links.router_path']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_links.link_title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_links.options']['type'] = 'bytea';
			$this->p_column_definitions['drupal_menu_links.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_links.hidden']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.external']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.has_children']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.expanded']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_links.depth']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.customized']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.p1']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p2']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p3']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p4']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p5']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p6']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p7']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p8']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.p9']['type'] = 'int8';
			$this->p_column_definitions['drupal_menu_links.updated']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_links.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

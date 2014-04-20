<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_menu_router_c234c861_0f69_4311_a948_55118ec67011 extends cls_table_view_base 
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
		$common_drupal_menu_router = cls_table_factory::get_common_drupal_menu_router();
		$array_drupal_menu_router =  $common_drupal_menu_router->get_drupal_menu_routers($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_menu_router as $drupal_menu_router)
			{
			$drupal_menu_router_id = $drupal_menu_router->get_id();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.path'] = $drupal_menu_router->get_path();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.load_functions'] = $drupal_menu_router->get_load_functions();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.to_arg_functions'] = $drupal_menu_router->get_to_arg_functions();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.access_callback'] = $drupal_menu_router->get_access_callback();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.access_arguments'] = $drupal_menu_router->get_access_arguments();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.page_callback'] = $drupal_menu_router->get_page_callback();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.page_arguments'] = $drupal_menu_router->get_page_arguments();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.delivery_callback'] = $drupal_menu_router->get_delivery_callback();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.fit'] = $drupal_menu_router->get_fit();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.number_parts'] = $drupal_menu_router->get_number_parts();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.context'] = $drupal_menu_router->get_context();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.tab_parent'] = $drupal_menu_router->get_tab_parent();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.tab_root'] = $drupal_menu_router->get_tab_root();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.title'] = $drupal_menu_router->get_title();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.title_callback'] = $drupal_menu_router->get_title_callback();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.title_arguments'] = $drupal_menu_router->get_title_arguments();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.theme_callback'] = $drupal_menu_router->get_theme_callback();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.theme_arguments'] = $drupal_menu_router->get_theme_arguments();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.type'] = $drupal_menu_router->get_type();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.description'] = $drupal_menu_router->get_description();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.position'] = $drupal_menu_router->get_position();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.weight'] = $drupal_menu_router->get_weight();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.include_file'] = $drupal_menu_router->get_include_file();
			$result_array[$drupal_menu_router_id]['drupal_menu_router.id'] = $drupal_menu_router->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_menu_router.path']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.load_functions']['type'] = 'bytea';
			$this->p_column_definitions['drupal_menu_router.to_arg_functions']['type'] = 'bytea';
			$this->p_column_definitions['drupal_menu_router.access_callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.access_arguments']['type'] = 'bytea';
			$this->p_column_definitions['drupal_menu_router.page_callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.page_arguments']['type'] = 'bytea';
			$this->p_column_definitions['drupal_menu_router.delivery_callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.fit']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_router.number_parts']['type'] = 'int2';
			$this->p_column_definitions['drupal_menu_router.context']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_router.tab_parent']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.tab_root']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.title_callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.title_arguments']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.theme_callback']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.theme_arguments']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.type']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_router.description']['type'] = 'text';
			$this->p_column_definitions['drupal_menu_router.position']['type'] = 'varchar';
			$this->p_column_definitions['drupal_menu_router.weight']['type'] = 'int4';
			$this->p_column_definitions['drupal_menu_router.include_file']['type'] = 'text';
			$this->p_column_definitions['drupal_menu_router.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

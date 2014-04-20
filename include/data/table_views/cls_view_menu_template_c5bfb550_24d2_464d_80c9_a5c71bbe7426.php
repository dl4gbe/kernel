<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_menu_template_c5bfb550_24d2_464d_80c9_a5c71bbe7426 extends cls_table_view_base 
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
		$common_menu_template = cls_table_factory::get_common_menu_template();
		$array_menu_template =  $common_menu_template->get_menu_templates($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_menu_template as $menu_template)
			{
			$menu_template_id = $menu_template->get_id();
			$result_array[$menu_template_id]['menu_template.id'] = $menu_template->get_id();
			$result_array[$menu_template_id]['menu_template.name'] = $menu_template->get_name();
			$result_array[$menu_template_id]['menu_template.creator_path'] = $menu_template->get_creator_path();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['menu_template.id']['type'] = 'uuid';
			$this->p_column_definitions['menu_template.name']['type'] = 'varchar';
			$this->p_column_definitions['menu_template.creator_path']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>

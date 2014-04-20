<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_authmap_d0f38ed1_5102_4164_bceb_4fe98d3ede9a extends cls_table_view_base 
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
		$common_drupal_authmap = cls_table_factory::get_common_drupal_authmap();
		$array_drupal_authmap =  $common_drupal_authmap->get_drupal_authmaps($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_authmap as $drupal_authmap)
			{
			$drupal_authmap_id = $drupal_authmap->get_id();
			$result_array[$drupal_authmap_id]['drupal_authmap.aid'] = $drupal_authmap->get_aid();
			$result_array[$drupal_authmap_id]['drupal_authmap.uid'] = $drupal_authmap->get_uid();
			$result_array[$drupal_authmap_id]['drupal_authmap.authname'] = $drupal_authmap->get_authname();
			$result_array[$drupal_authmap_id]['drupal_authmap.module'] = $drupal_authmap->get_module();
			$result_array[$drupal_authmap_id]['drupal_authmap.id'] = $drupal_authmap->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_authmap.aid']['type'] = 'int4';
			$this->p_column_definitions['drupal_authmap.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_authmap.authname']['type'] = 'varchar';
			$this->p_column_definitions['drupal_authmap.module']['type'] = 'varchar';
			$this->p_column_definitions['drupal_authmap.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

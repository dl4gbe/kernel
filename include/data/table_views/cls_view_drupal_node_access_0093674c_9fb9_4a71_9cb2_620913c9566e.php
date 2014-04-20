<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_node_access_0093674c_9fb9_4a71_9cb2_620913c9566e extends cls_table_view_base 
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
		$common_drupal_node_access = cls_table_factory::get_common_drupal_node_access();
		$array_drupal_node_access =  $common_drupal_node_access->get_drupal_node_accesss($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_node_access as $drupal_node_access)
			{
			$drupal_node_access_id = $drupal_node_access->get_id();
			$result_array[$drupal_node_access_id]['drupal_node_access.nid'] = $drupal_node_access->get_nid();
			$result_array[$drupal_node_access_id]['drupal_node_access.gid'] = $drupal_node_access->get_gid();
			$result_array[$drupal_node_access_id]['drupal_node_access.realm'] = $drupal_node_access->get_realm();
			$result_array[$drupal_node_access_id]['drupal_node_access.grant_view'] = $drupal_node_access->get_grant_view();
			$result_array[$drupal_node_access_id]['drupal_node_access.grant_update'] = $drupal_node_access->get_grant_update();
			$result_array[$drupal_node_access_id]['drupal_node_access.grant_delete'] = $drupal_node_access->get_grant_delete();
			$result_array[$drupal_node_access_id]['drupal_node_access.id'] = $drupal_node_access->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_node_access.nid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node_access.gid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node_access.realm']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_access.grant_view']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_access.grant_update']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_access.grant_delete']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_access.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

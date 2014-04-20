<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_node_cf1806e9_c80a_43e0_b14c_754a9869abed extends cls_table_view_base 
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
		$common_drupal_node = cls_table_factory::get_common_drupal_node();
		$array_drupal_node =  $common_drupal_node->get_drupal_nodes($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_node as $drupal_node)
			{
			$drupal_node_id = $drupal_node->get_id();
			$result_array[$drupal_node_id]['drupal_node.nid'] = $drupal_node->get_nid();
			$result_array[$drupal_node_id]['drupal_node.vid'] = $drupal_node->get_vid();
			$result_array[$drupal_node_id]['drupal_node.type'] = $drupal_node->get_type();
			$result_array[$drupal_node_id]['drupal_node.language'] = $drupal_node->get_language();
			$result_array[$drupal_node_id]['drupal_node.title'] = $drupal_node->get_title();
			$result_array[$drupal_node_id]['drupal_node.uid'] = $drupal_node->get_uid();
			$result_array[$drupal_node_id]['drupal_node.status'] = $drupal_node->get_status();
			$result_array[$drupal_node_id]['drupal_node.created'] = $drupal_node->get_created();
			$result_array[$drupal_node_id]['drupal_node.changed'] = $drupal_node->get_changed();
			$result_array[$drupal_node_id]['drupal_node.comment'] = $drupal_node->get_comment();
			$result_array[$drupal_node_id]['drupal_node.promote'] = $drupal_node->get_promote();
			$result_array[$drupal_node_id]['drupal_node.sticky'] = $drupal_node->get_sticky();
			$result_array[$drupal_node_id]['drupal_node.tnid'] = $drupal_node->get_tnid();
			$result_array[$drupal_node_id]['drupal_node.translate'] = $drupal_node->get_translate();
			$result_array[$drupal_node_id]['drupal_node.id'] = $drupal_node->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_node.nid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.vid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node.type']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.changed']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.comment']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.promote']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.sticky']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.tnid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node.translate']['type'] = 'int4';
			$this->p_column_definitions['drupal_node.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

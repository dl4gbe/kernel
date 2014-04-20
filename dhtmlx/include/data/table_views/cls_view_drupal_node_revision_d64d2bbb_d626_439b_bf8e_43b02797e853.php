<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_node_revision_d64d2bbb_d626_439b_bf8e_43b02797e853 extends cls_table_view_base 
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
		$common_drupal_node_revision = cls_table_factory::get_common_drupal_node_revision();
		$array_drupal_node_revision =  $common_drupal_node_revision->get_drupal_node_revisions($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_node_revision as $drupal_node_revision)
			{
			$drupal_node_revision_id = $drupal_node_revision->get_id();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.nid'] = $drupal_node_revision->get_nid();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.vid'] = $drupal_node_revision->get_vid();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.uid'] = $drupal_node_revision->get_uid();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.title'] = $drupal_node_revision->get_title();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.log'] = $drupal_node_revision->get_log();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.timestamp'] = $drupal_node_revision->get_timestamp();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.status'] = $drupal_node_revision->get_status();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.comment'] = $drupal_node_revision->get_comment();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.promote'] = $drupal_node_revision->get_promote();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.sticky'] = $drupal_node_revision->get_sticky();
			$result_array[$drupal_node_revision_id]['drupal_node_revision.id'] = $drupal_node_revision->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_node_revision.nid']['type'] = 'int8';
			$this->p_column_definitions['drupal_node_revision.vid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.title']['type'] = 'varchar';
			$this->p_column_definitions['drupal_node_revision.log']['type'] = 'text';
			$this->p_column_definitions['drupal_node_revision.timestamp']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.comment']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.promote']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.sticky']['type'] = 'int4';
			$this->p_column_definitions['drupal_node_revision.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

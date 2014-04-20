<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_comment_05b3ac04_e3da_4b6e_95bf_dc8c8c4e0249 extends cls_table_view_base 
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
		$common_drupal_comment = cls_table_factory::get_common_drupal_comment();
		$array_drupal_comment =  $common_drupal_comment->get_drupal_comments($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_comment as $drupal_comment)
			{
			$drupal_comment_id = $drupal_comment->get_id();
			$result_array[$drupal_comment_id]['drupal_comment.cid'] = $drupal_comment->get_cid();
			$result_array[$drupal_comment_id]['drupal_comment.pid'] = $drupal_comment->get_pid();
			$result_array[$drupal_comment_id]['drupal_comment.nid'] = $drupal_comment->get_nid();
			$result_array[$drupal_comment_id]['drupal_comment.uid'] = $drupal_comment->get_uid();
			$result_array[$drupal_comment_id]['drupal_comment.subject'] = $drupal_comment->get_subject();
			$result_array[$drupal_comment_id]['drupal_comment.hostname'] = $drupal_comment->get_hostname();
			$result_array[$drupal_comment_id]['drupal_comment.created'] = $drupal_comment->get_created();
			$result_array[$drupal_comment_id]['drupal_comment.changed'] = $drupal_comment->get_changed();
			$result_array[$drupal_comment_id]['drupal_comment.status'] = $drupal_comment->get_status();
			$result_array[$drupal_comment_id]['drupal_comment.thread'] = $drupal_comment->get_thread();
			$result_array[$drupal_comment_id]['drupal_comment.name'] = $drupal_comment->get_name();
			$result_array[$drupal_comment_id]['drupal_comment.mail'] = $drupal_comment->get_mail();
			$result_array[$drupal_comment_id]['drupal_comment.homepage'] = $drupal_comment->get_homepage();
			$result_array[$drupal_comment_id]['drupal_comment.language'] = $drupal_comment->get_language();
			$result_array[$drupal_comment_id]['drupal_comment.id'] = $drupal_comment->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_comment.cid']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.pid']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.nid']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.uid']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.subject']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.hostname']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.created']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.changed']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.status']['type'] = 'int4';
			$this->p_column_definitions['drupal_comment.thread']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.name']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.mail']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.homepage']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.language']['type'] = 'varchar';
			$this->p_column_definitions['drupal_comment.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

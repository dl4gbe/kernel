<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_file_managed_64a763d2_41a9_413e_bde4_f51d47a319ed extends cls_table_view_base 
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
		$common_drupal_file_managed = cls_table_factory::get_common_drupal_file_managed();
		$array_drupal_file_managed =  $common_drupal_file_managed->get_drupal_file_manageds($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_file_managed as $drupal_file_managed)
			{
			$drupal_file_managed_id = $drupal_file_managed->get_id();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.fid'] = $drupal_file_managed->get_fid();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.uid'] = $drupal_file_managed->get_uid();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.filename'] = $drupal_file_managed->get_filename();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.uri'] = $drupal_file_managed->get_uri();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.filemime'] = $drupal_file_managed->get_filemime();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.filesize'] = $drupal_file_managed->get_filesize();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.status'] = $drupal_file_managed->get_status();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.timestamp'] = $drupal_file_managed->get_timestamp();
			$result_array[$drupal_file_managed_id]['drupal_file_managed.id'] = $drupal_file_managed->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_file_managed.fid']['type'] = 'int4';
			$this->p_column_definitions['drupal_file_managed.uid']['type'] = 'int8';
			$this->p_column_definitions['drupal_file_managed.filename']['type'] = 'varchar';
			$this->p_column_definitions['drupal_file_managed.uri']['type'] = 'varchar';
			$this->p_column_definitions['drupal_file_managed.filemime']['type'] = 'varchar';
			$this->p_column_definitions['drupal_file_managed.filesize']['type'] = 'int8';
			$this->p_column_definitions['drupal_file_managed.status']['type'] = 'int2';
			$this->p_column_definitions['drupal_file_managed.timestamp']['type'] = 'int8';
			$this->p_column_definitions['drupal_file_managed.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

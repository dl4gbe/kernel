<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_drupal_registry_file_b225f778_f1c1_4804_ad77_15f36746f29f extends cls_table_view_base 
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
		$common_drupal_registry_file = cls_table_factory::get_common_drupal_registry_file();
		$array_drupal_registry_file =  $common_drupal_registry_file->get_drupal_registry_files($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_drupal_registry_file as $drupal_registry_file)
			{
			$drupal_registry_file_id = $drupal_registry_file->get_id();
			$result_array[$drupal_registry_file_id]['drupal_registry_file.filename'] = $drupal_registry_file->get_filename();
			$result_array[$drupal_registry_file_id]['drupal_registry_file.hash'] = $drupal_registry_file->get_hash();
			$result_array[$drupal_registry_file_id]['drupal_registry_file.id'] = $drupal_registry_file->get_id();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['drupal_registry_file.filename']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry_file.hash']['type'] = 'varchar';
			$this->p_column_definitions['drupal_registry_file.id']['type'] = 'uuid';
		}
		return $this->p_column_definitions;
	}
}
?>

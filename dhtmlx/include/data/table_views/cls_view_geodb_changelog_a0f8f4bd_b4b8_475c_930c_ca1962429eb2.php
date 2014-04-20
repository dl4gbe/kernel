<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_changelog_a0f8f4bd_b4b8_475c_930c_ca1962429eb2 extends cls_table_view_base 
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
		$common_geodb_changelog = cls_table_factory::get_common_geodb_changelog();
		$array_geodb_changelog =  $common_geodb_changelog->get_geodb_changelogs($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_changelog as $geodb_changelog)
			{
			$geodb_changelog_id = $geodb_changelog->get_id();
			$result_array[$geodb_changelog_id]['geodb_changelog.id'] = $geodb_changelog->get_id();
			$result_array[$geodb_changelog_id]['geodb_changelog.datum'] = $geodb_changelog->get_datum();
			$result_array[$geodb_changelog_id]['geodb_changelog.beschreibung'] = $geodb_changelog->get_beschreibung();
			$result_array[$geodb_changelog_id]['geodb_changelog.autor'] = $geodb_changelog->get_autor();
			$result_array[$geodb_changelog_id]['geodb_changelog.version'] = $geodb_changelog->get_version();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_changelog.id']['type'] = 'int4';
			$this->p_column_definitions['geodb_changelog.datum']['type'] = 'date';
			$this->p_column_definitions['geodb_changelog.beschreibung']['type'] = 'text';
			$this->p_column_definitions['geodb_changelog.autor']['type'] = 'varchar';
			$this->p_column_definitions['geodb_changelog.version']['type'] = 'varchar';
		}
		return $this->p_column_definitions;
	}
}
?>

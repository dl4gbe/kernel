<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_person_states_group_63328135_382a_4198_9e65_80ef2f05a067 extends cls_table_view_base 
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
		$common_person_states_group = cls_table_factory::get_common_person_states_group();
		$array_person_states_group =  $common_person_states_group->get_person_states_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_person_states_group as $person_states_group)
			{
			$person_states_group_id = $person_states_group->get_id();
			$result_array[$person_states_group_id]['person_states_group.id'] = $person_states_group->get_id();
			$result_array[$person_states_group_id]['person_states_group.type'] = $person_states_group->get_type();
			$result_array[$person_states_group_id]['person_states_group.name'] = $person_states_group->get_name();
			$result_array[$person_states_group_id]['person_states_group.location_independant'] = $person_states_group->get_location_independant();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['person_states_group.id']['type'] = 'uuid';
			$this->p_column_definitions['person_states_group.type']['type'] = 'bpchar';
			$this->p_column_definitions['person_states_group.name']['type'] = 'varchar';
			$this->p_column_definitions['person_states_group.location_independant']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>

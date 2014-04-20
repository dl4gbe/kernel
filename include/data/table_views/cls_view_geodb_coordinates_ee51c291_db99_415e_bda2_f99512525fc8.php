<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_geodb_coordinates_ee51c291_db99_415e_bda2_f99512525fc8 extends cls_table_view_base 
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
		$common_geodb_coordinates = cls_table_factory::get_common_geodb_coordinates();
		$array_geodb_coordinates =  $common_geodb_coordinates->get_geodb_coordinatess($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_geodb_coordinates as $geodb_coordinates)
			{
			$geodb_coordinates_id = $geodb_coordinates->get_id();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.loc_id'] = $geodb_coordinates->get_loc_id();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.coord_type'] = $geodb_coordinates->get_coord_type();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.lat'] = $geodb_coordinates->get_lat();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.lon'] = $geodb_coordinates->get_lon();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.coord_subtype'] = $geodb_coordinates->get_coord_subtype();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.valid_since'] = $geodb_coordinates->get_valid_since();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.date_type_since'] = $geodb_coordinates->get_date_type_since();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.valid_until'] = $geodb_coordinates->get_valid_until();
			$result_array[$geodb_coordinates_id]['geodb_coordinates.date_type_until'] = $geodb_coordinates->get_date_type_until();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['geodb_coordinates.loc_id']['type'] = 'int4';
			$this->p_column_definitions['geodb_coordinates.coord_type']['type'] = 'int4';
			$this->p_column_definitions['geodb_coordinates.lat']['type'] = 'float8';
			$this->p_column_definitions['geodb_coordinates.lon']['type'] = 'float8';
			$this->p_column_definitions['geodb_coordinates.coord_subtype']['type'] = 'int4';
			$this->p_column_definitions['geodb_coordinates.valid_since']['type'] = 'date';
			$this->p_column_definitions['geodb_coordinates.date_type_since']['type'] = 'int4';
			$this->p_column_definitions['geodb_coordinates.valid_until']['type'] = 'date';
			$this->p_column_definitions['geodb_coordinates.date_type_until']['type'] = 'int4';
		}
		return $this->p_column_definitions;
	}
}
?>

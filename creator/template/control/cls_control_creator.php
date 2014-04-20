<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('creator/base_classes/cls_control_creator_base.php');

class cls_control_creator extends cls_control_creator_base
{

	public function create_control_javascript()
	{
	
		$id_data_view = $this->get_data_view_id();
	
		if (!empty($id_data_view))
		{
			return $this->create_control_javascript_from_data_view();
		}

	}
	
	public function save_javascript()
	{
	
	
	}
	
	public function create_control_javascript_from_data_view()
	{
	
		$javascript = '';
		
		
		$position = 'label-left';
		$name = 'data';
		$label = 'Data';
	
		$table_columns = $this->get_all_table_columns();
	
		$id = $this->get_data_view_id();
		
		$db = $this->get_application()->get_db_manager();
		
		$data_columns = $db->get_data_view_columns($id);
		
		
		
		$label_width = 200;
		
		$javascript .= 'var frm = ' . $this->get_object_name_parent() . '.attachForm();' . PHP_EOL;

		$javascript .= '$KERNEL_VIEW.set_detail_form(frm);' . PHP_EOL;
		
		$javascript .= 'form_structure = [' . PHP_EOL;
		
		$javascript .= '{type:"settings",position:"' . $position . '", labelWidth: ' . $label_width . ' , formWidth : "*"},' . PHP_EOL;
		
		$javascript .= '{type: "fieldset",name:"' . $name . '", label: "' . $label . '", list:[' . PHP_EOL;
		
		$i = 0;
		foreach($data_columns as $data_column)
		{

		
		
		
		
			if (empty($data_column['table_column'])) continue; 

			if ($data_column['table_column'] == 'id') continue;

			if ($i!=0) $javascript .= ',';

			
			$key = $data_column['table_name'] . '.' . $data_column['table_column']; 
			
			$control_type = 'input';
			$control_name = $key; 
			$input_width = 500;
			
			if (array_key_exists($key,$table_columns))
			{
				$control_label = $table_columns[$key]['name'];
				$input_width = 	$table_columns[$key]['width'];
			}

			if ($input_width <= 0) $input_width = 500;


			if (empty($control_label)) $control_label = $key;

			$javascript .= '{type: "' . $control_type . '", name: "' . $control_name . '", label: "' . $control_label . '", width : "' . $input_width . '"}'  . PHP_EOL;

			$i++;
		}	
		
		$javascript .= ']}' . PHP_EOL;
		
		$javascript .= '];' . PHP_EOL;
		
		
		$javascript .= 'frm.loadStruct(form_structure, "json");' . PHP_EOL;
		
		$javascript .= PHP_EOL;
		
		$javascript .= 'frm.setFormReadOnly = function(readonly)' . PHP_EOL;
		$javascript .= '{'  . PHP_EOL;
		$javascript .= 'frm.is_readonly = readonly;' . PHP_EOL;
		foreach($data_columns as $data_column)
		{
		
			$key = $data_column['table_name'] . '.' . $data_column['table_column']; 
		
		
		
			$javascript .= 'this.setReadonly("' . $key . '",readonly);' . PHP_EOL;

		}		
		$javascript .= '}'  . PHP_EOL;
		
		
		return $javascript;
	
	
	}
	
	
}

?>
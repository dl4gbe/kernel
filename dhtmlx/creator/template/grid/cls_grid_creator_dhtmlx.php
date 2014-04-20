<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('creator/base_classes/cls_grid_creator_base.php');
require_once('creator/template/ribbonbar/cls_ribbonbar_creator_factory.php');
class cls_grid_creator_dhtmlx extends cls_grid_creator_base
{

	function __construct()
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) 
		{
            call_user_func_array(array($this,$f),$a);
        }
	}
	
	public function create_html_page()
	{

	
	
		$file = 'grid_pages/grid_' . $this->get_tablename() . '_' .  $this->get_grid_id() . '.html';

		//echo $file . '</br>';
		
		$form_creator = null;
	
		$template = $this->get_template_source();
	
		$content = $template;

		$javascript = '';
		
		$title = $this->get_all_data_views()[$this->get_grid_id()]['caption'];
		$id_ribbonbar = $this->get_all_data_views()[$this->get_grid_id()]['id_ribbonbar'];

		$id = $this->get_grid_id();
		
		$javascript_ribbonbar_scripts = '';
		
		$javascript_form = '';
		
		$application = $this->get_application();
				
		if (!empty($id_ribbonbar))
			{
			$ribbonbar_creator = cls_ribbonbar_creator_factory::create_ribbonbar_creator_by_id_ribbonbar($id_ribbonbar,$this->get_db_manager(),$this->get_application());




			if (!is_null($ribbonbar_creator))
				{
					$ribbonbar_creator->create_ribbonbar_javascript();
					$javascript_ribbonbar_scripts = $ribbonbar_creator->save_javascript();
				}
			}
		
		
		
		
		if (empty($title)) $title = $this->get_all_data_views()[$this->get_grid_id()]['name'];
		
		$view_data = $this->get_all_data_views()[$this->get_grid_id()];
		
		if (empty($title)) $title = 'Grid';
		
		$main_layout_variable = 'main_layout';
		$main_grid_variable = 'main_grid';


		$javascript_definitions = '';
		$javascript_definitions .= 'var ' . $main_layout_variable . ';' .  PHP_EOL;
		$javascript_definitions .= 'var ' . $main_grid_variable . ';' .  PHP_EOL;
		
		
		if ($view_data['has_edit_form'])
			{
			if (empty($id_ribbonbar))
				{
					$javascript .= $main_layout_variable . '= new dhtmlXLayoutObject(document.body, "2E");' . PHP_EOL;
					$cell_name_detail = 'a';
					$cell_name = 'c';

					$javascript .= 'var cell_detail = ' . $main_layout_variable . '.cells("' . $cell_name_detail . '");'  . PHP_EOL;
					$javascript .= 'var cell_grid = ' . $main_layout_variable . '.cells("' . $cell_name . '");'  . PHP_EOL;
					
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_detail . '").setWidth("*");' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_detail . '").setHeight("200");' . PHP_EOL; 

					
				}
				else
				{
					$javascript .= $main_layout_variable . '= new dhtmlXLayoutObject(document.body, "3E");' . PHP_EOL;
					$cell_name_top = 'a';
					$cell_name_detail = 'b';
					$cell_name = 'c';

					$javascript .= 'var cell_ribbonbar = ' . $main_layout_variable . '.cells("' . $cell_name_top . '");'  . PHP_EOL;
					$javascript .= 'var cell_detail = ' . $main_layout_variable . '.cells("' . $cell_name_detail . '");'  . PHP_EOL;
					$javascript .= 'var cell_grid = ' . $main_layout_variable . '.cells("' . $cell_name . '");'  . PHP_EOL;

					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").setWidth("*");' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").setHeight("85");' . PHP_EOL; 
					
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_detail . '").setWidth("*");' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_detail . '").setHeight("200");' . PHP_EOL; 
					
					
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").fixSize(false,true);' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").hideHeader();' . PHP_EOL; 
				}
			
				$javascript .= $main_layout_variable . '.cells("' . $cell_name_detail . '").setText("' . $title . '");' . PHP_EOL; 

				require_once('creator/template/control/cls_control_creator_factory.php');
				$form_creator = cls_control_creator_factory::create_control_creator_for_dataview($id,$this->get_db_manager(),$this->get_application());
				
				if (is_null($form_creator))
				{
					$application->display_error_and_die(__CLASS__, __FUNCTION__, 'form creator not defined');
				}

				$form_creator->set_data_view_id($this->get_grid_id());	

				$form_creator->set_object_name_parent('cell_detail');

				$javascript_form = $form_creator->create_control_javascript();
				
				
				
			}
		else
			{
			if (empty($id_ribbonbar))
				{
					$javascript .= $main_layout_variable . '= new dhtmlXLayoutObject(document.body, "1C");' . PHP_EOL;
					$cell_name = 'a';

					$javascript .= 'var cell_grid = ' . $main_layout_variable . '.cells("' . $cell_name . '");'  . PHP_EOL;
					
				
				}
				else
				{
					$javascript .= $main_layout_variable . '= new dhtmlXLayoutObject(document.body, "2E");' . PHP_EOL;
					$cell_name_top = 'a';
					$cell_name = 'b';

					$javascript .= 'var cell_ribbonbar = ' . $main_layout_variable . '.cells("' . $cell_name_top . '");'  . PHP_EOL;
					$javascript .= 'var cell_grid = ' . $main_layout_variable . '.cells("' . $cell_name . '");'  . PHP_EOL;
					
					
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").setWidth("*");' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").setHeight("85");' . PHP_EOL; 
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").fixSize(false,true);' . PHP_EOL;
					$javascript .= $main_layout_variable . '.cells("' . $cell_name_top . '").hideHeader();' . PHP_EOL; 
				}
			}

		if (!empty($id_ribbonbar))
		{
			$javascript .= 'var ribbon_bar = new cls_ribbonbar(' . $main_layout_variable . '.cells("' . $cell_name_top . '"),true,true);' . PHP_EOL;
			$javascript .= '$KERNEL_VIEW.set_ribbon_bar(ribbon_bar);' . PHP_EOL;

			
		}
		
		$javascript .= $main_layout_variable . '.cells("' . $cell_name . '").setWidth("*");' . PHP_EOL;
		$javascript .= $main_layout_variable . '.cells("' . $cell_name . '").setHeight("*");' . PHP_EOL; 
		$javascript .= $main_layout_variable . '.cells("' . $cell_name . '").setText("' . $title . '");' . PHP_EOL; 
		$javascript .= $main_grid_variable . ' = ' . $main_layout_variable . '.cells("' . $cell_name . '").attachGrid();' . PHP_EOL;
		$javascript .= $main_grid_variable . '.setImagePath("dhtmlx/imgs/");' . PHP_EOL;
		
		$id = $this->get_grid_id();
		
		if (!empty($javascript_form)) $javascript .= $javascript_form;
		

		
		$data_columns = $this->get_db_manager()->get_data_view_columns($id);
		
		
		//echo "Number of columns " . count($data_columns) . '</br>';		
		
		$javascript .= $main_grid_variable . '.setHeader("';
		
		$i = 0;
		foreach($data_columns as $data_column)
		{
			$key = $data_column['table_name'] . '.' . $data_column['table_column']; 

			if ($key == ($this->get_tablename() . '.id')) continue;
		
			if (!array_key_exists($key,$this->get_all_table_columns())) continue;
		
			$caption = $this->get_all_table_columns()[$key]['name'];
		
			if (empty($caption)) $caption = $key;
		
			if ($i != 0) $javascript .= ',';
		
			$javascript .= $caption;
			
			$i++;
		
		}
		
		$javascript .= '");' . PHP_EOL; 

		$javascript .= $main_grid_variable . '.setInitWidths("';
		
		$length = count($data_columns);
		$i = 0;
		foreach($data_columns as $data_column)
		{
			$key = $data_column['table_name'] . '.' . $data_column['table_column'];

			if ($key == ($this->get_tablename() . '.id')) continue;
			
			if (!array_key_exists($key,$this->get_all_table_columns())) continue;
			
			$width = $this->get_all_table_columns()[$key]['width'];
		
			if ($i != 0) $javascript .= ',';
			
			if (($i + 2) < $length)
			{
				$javascript .= $width;
			}
			else
			{
				$javascript .= '*';
			}
			
			
			$i++;
		}
		$javascript .= '");' . PHP_EOL; 

		$i = 0;

		$align = '';
		$column_sorting = '';
		$column_type = '';
		$column_searching = '';
		$column_ids = '';		
		foreach($data_columns as $data_column)
		{
			$key = $data_column['table_name'] . '.' . $data_column['table_column'];

			if ($key == ($this->get_tablename() . '.id')) continue;
			
			if (!array_key_exists($key,$this->get_all_table_columns())) continue;

			if (!array_key_exists($key,$this->get_all_columns())) continue;
			
			$type = $this->get_all_columns()[$key]['type'];

			if ($i != 0) 
			{
				$align .= ',';
				$column_sorting  .= ',';
				$column_type .= ',';
				$column_searching .= ',';
				$column_ids  .= ',';
			}
			
			$align .= $this->get_column_alignment($type);
			$column_sorting .= $this->get_column_sorting($type);
			$column_type .= $this->get_column_type($type);
			$column_ids .= $key;
			
			
			if ($this->get_search_mode() == GRID_SEARCH_MODE::GRID_SEARCH_HEADER)
			{
				$column_searching .= $this->get_column_searching($key,$type);
			}



			$i++;

		}

		$javascript .= $main_grid_variable . '.setColumnIds("' . $column_ids . '");' . PHP_EOL; 
		$javascript .= $main_grid_variable . '.setColAlign("' . $align . '");' . PHP_EOL;
		$javascript .= $main_grid_variable . '.setColSorting("' . $column_sorting . '");' . PHP_EOL;
		$javascript .= $main_grid_variable . '.setColTypes("' . $column_type . '");' . PHP_EOL;
		if ($this->get_search_mode() == GRID_SEARCH_MODE::GRID_SEARCH_HEADER)
		{
			$javascript .= $main_grid_variable . '.attachHeader("' . $column_searching . '");' . PHP_EOL;
		}
			
		$javascript .= $main_grid_variable . '.init();' . PHP_EOL;
		$javascript .= $main_grid_variable . '.setSkin("dhx_skyblue");' . PHP_EOL;
	
		$javascript .= '$KERNEL_VIEW.set_main_grid('. $main_grid_variable . ');'  . PHP_EOL;

		$javascript .= '$KERNEL_VIEW.init_view();'  . PHP_EOL;
		
	
		if ($this->get_load_data_onload())
		{
			$javascript .= $main_grid_variable . '.load("' .  $this->get_tablename() . '.php?v=' . $id . '&f=json","json");' . PHP_EOL;
		}
		
		$content = str_replace('@@javascript_grid_definition_var@@',$javascript_definitions,$content);
		
		$content = str_replace('@@javascript_grid_definition@@',$javascript,$content);
		 
		$content = str_replace('@@javascript_ribbonbar_scripts@@',$javascript_ribbonbar_scripts,$content); 
	
		file_put_contents($file, $content);

	}
	
	
	public function get_column_searching($column_name,$type)
	{

		switch (strtolower($type))
		{
			case 'bool';
				return '';
		
		}


		return '#text_search';
	}
	
	public function get_column_type($type)
	{
		switch (strtolower($type))
		{
			case 'bool';
				return 'ch';
		
		}
		
		return 'ed';
	}	

	public function get_column_alignment($type)
	{
	
		switch (strtolower($type))
		{
			case 'integer':
				return 'right';
				break;
			case 'money':
				return 'right';
				break;
		
		}
		
		return 'left';
	
	}
	
	public function get_column_sorting($type)
	{
		switch (strtolower($type))
		{
			case 'integer':
				return 'int';
				break;
			case 'money':
				return 'int';
				break;
		
		}
	
		return 'str';
	
	}
	
}








?>
<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('creator/base_classes/cls_menu_creator_base.php');

class cls_create_menu extends cls_menu_creator_base
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
	
	public function create_menu()
	{
		
		$language = $this->get_language();
		$menu = $this->get_menu();
		$application = $this->get_application();

		$template_file_name = "creator/template/menu/outlook.html";

		
		if (is_null($application))
		{
			echo 'application is not defined</br>';
			exit;
		}
		
		$db = $application->get_db_manager();
		
		if (is_null($db))
		{
			$application->display_error_and_die(__CLASS__, __FUNCTION__, 'db_manager not defined ' . $template_file_name);
		}
		
		if (is_null($menu)) 
		{
			$application->display_error_and_die(__CLASS__, __FUNCTION__, 'menu not defined ' . $template_file_name);
		}
		
		$menu_template = $this->get_menu_template();
		
		if (is_null($menu_template))
		{
			$application->display_error_and_die(__CLASS__, __FUNCTION__, 'menu_template not defined ' . $template_file_name);
		}	

		
		if (!file_exists($template_file_name))
		{
			$application->display_error_and_die(__CLASS__, __FUNCTION__, 'outlook template not found ' . $template_file_name);
		}
		
		$application->log(__CLASS__, __FUNCTION__, 'id of menu ' . $menu->get_id());
		
		
		
		$result = $menu->query_menu_data($db,$this->get_language());
		
		$javascript = '';
		
		$old_menu_group_name = '#';
		
		
		$panel_counter = 0;
		$panel_index = 1;
		
		while (($row=$db->fetch_by_assoc($result)) !=null) 
		{
			$menu_group_name = $row['menu_group.name'];
		
			$menu_item_image_path = $row['menu_item.imagepath'];
		
			$menu_item_name = $row['menu_item.name'];
		
			$table_name = $row['menu_item.table_name'];
		
			if (!empty($table_name))
			{
				$command = 'open_tab_table("' . $table_name . '","' . $menu_item_name . '");';
			}
		
			if (empty($command))
			{
				$command = 'open_tab_control("' . $row['menu_item.id_control'] . '");';
			}
		
			if ($menu_group_name != $old_menu_group_name)
			{
				if ($panel_counter > 0) 
					{
					$javascript .= "o.addPanel(p);" . PHP_EOL; 
					} 
			
				$javascript .= "p = new createPanel('p" . $panel_index . "','" . htmlspecialchars($menu_group_name)  ."');" . PHP_EOL;

				$old_menu_group_name = $menu_group_name;
				
				$panel_counter++;
				$panel_index++;				
			}	
		
			$javascript .= "p.addButton('" . '../images/menu_images/' . $menu_item_image_path . "','" . $menu_item_name . "','" . $command . "');". PHP_EOL;
		
		}
		
		if ($panel_counter > 0) 
		{
			$javascript .= "o.addPanel(p);" . PHP_EOL;

			$javascript .= 'function open_tab_control(id)' . PHP_EOL;
			$javascript .= '{' . PHP_EOL;
			$javascript .= "\t" . 'parent.$KERNEL_APPLICATION.open_tab_control(id);' . PHP_EOL;
			$javascript .= '}' . PHP_EOL;

			$javascript .= 'function open_tab_table(tablename,name)' . PHP_EOL;
			$javascript .= '{' . PHP_EOL;
			$javascript .= "\t" . 'parent.$KERNEL_APPLICATION.open_tab_table(tablename,name);' . PHP_EOL;
			$javascript .= '}' . PHP_EOL;


			
		}
	
		//echo $javascript;
	
		$template = file_get_contents($template_file_name);
		
		$template = str_replace('{{menu_javascript}}',$javascript,$template);

		$template_file_name = 'menu/' . $language . '_' .$menu->get_id() . '.html';
		
		file_put_contents($template_file_name, $template);
		
		return $template_file_name;
	
	
	
	}
	
	


}


?>
<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_grid_creator_factory
{

	static public function create_grid_creator($db,$application,$grid_template)
	{

		if (is_null($db))
		{
			echo 'fatal error no db_manager </br>';
			exit;
		}
		
		if (is_null($application))
		{
			echo 'fatal error no application </br>';
			exit;
		}

		
	
		require_once('creator/template/grid/cls_grid_creator_dhtmlx.php');
	
		$grid_creator = new cls_grid_creator_dhtmlx($db,$application,$grid_template);
	
		return $grid_creator;
	
	}
	

}


?>

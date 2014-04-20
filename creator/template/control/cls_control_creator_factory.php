<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_control_creator_factory
{


	private static $p_creators = null;

	public static function get_creators()
	{
		return self::$p_creators;
	}

		public static function set_creators($creators)
	{
		self::$p_creators = $creators;
	}


	
	public static function create_control_creator_for_dataview($id_data_view,$db_manager,$app)
	{

		$filename = 'creator/template/control/cls_control_creator.php';
	
	
		if (is_null(self::get_creators()))
		{
			self::set_creators(array());
		}
		
		if (array_key_exists($filename,self::get_creators()))
		{
			return self::get_creators()[$path];
		}

		if (empty($filename)) 
		{
			return null;
		}
		
		
		
		require_once($filename);
		
		$class_name = basename($filename, ".php");
		
		$creator = new $class_name;
			      
		$creator->set_application($app);
		$creator->set_data_view_id($id_data_view);
			
		self::get_creators()[$id_data_view] = $creator;	

		return $creator;
	
	}



}




?>
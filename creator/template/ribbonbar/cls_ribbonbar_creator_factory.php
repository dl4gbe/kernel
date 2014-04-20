<?php

if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');



class cls_ribbonbar_creator_factory
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

	
	public static function create_ribbonbar_creator_by_id_ribbonbar($id_ribbonbar,$db_manager,$app)
	{
	
		
	
		if (is_null(self::get_creators()))
		{
			self::set_creators(array());
		}
		
		if (array_key_exists($id_ribbonbar,self::get_creators()))
		{
			return self::get_creators()[$id_ribbonbar];
		}
		
		$ribbonbar_data = $db_manager->get_ribbonbar_by_id($id_ribbonbar);
		
		if (is_null($ribbonbar_data)) 
		{
			echo 'empty ribbonbar data '  . $id_ribbonbar . '</br>';	
			return null;
		}
			
		$filename = $ribbonbar_data['ribbonbar_template']['creator_path'];	

		
		
		if (empty($filename)) 
		{
			echo 'empty ribbonbar template ' . $id_ribbonbar . '</br>';
			return null;
		}
		
		require_once($filename);
		
		$class_name = basename($filename, ".php");
		
		$creator = new $class_name;
			      
		$creator->set_application($app);
		$creator->set_ribbonbar_id($id_ribbonbar);
			
		self::get_creators()[$id_ribbonbar] = $creator;	
			
			
		return $creator;
		
		
	}



}
?>
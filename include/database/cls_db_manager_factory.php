<?php
/**
* Short description for file
*
* Long description for file (if any)...
*
* LICENSE: Some license information
*
* @category   kernel
* @package    kernel
* @subpackage database
* @copyright  Copyright (c) 2014 Christoph Eisenmann (http://www.Kernel4ypou.com)
* @license    (http://www.Kernel4ypou.com/licence)   BSD License
* @version    $Id:$
* @link       http://www.Kernel4ypou.com/kernel/include/application/cls_db_manager_factory.php
* @since      File available since Release 1.0.0
*/


if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_db_manager_factory
{

	static $instances = array();
	
    /**
     * Disconnect all DB connections in the system
     */
    public static function disconnect_all()
    {
        foreach(self::$instances as $instance) {
            $instance->disconnect();
        }
        self::$instances = array();
    }

	
	/**
    * Returns a reference to the DB object of specific type
    *
    * @param  string $type DB type
    * @param array $config DB configuration
    * @return object DBManager instance
    */
	public static function get_type_instance($database_type, $config = array())
    {
	
		$instance = null;
	
		switch ($database_type)
		{
			case "mysql":
					$instance = new cls_db_manager_mysql();
					break;
			case "postgresql":
			
		
		
		}

	
		return $instance;
	
	}
	
	/**
	* Returns a reference to the DB object for instance $instanceName, or the default
    * instance if one is not specified
    *
    * @param  string $instanceName optional, name of the instance
    * @return object DBManager instance
    */
	
	public static function getInstance($instanceName = '')
    {

		$config = null;
	
	
		// [TODO] temporary implement the complete factory
	
		require_once('cls_db_manager.php');
	
		require_once('drivers/cls_db_manager_postgres.php');
	
		$instance = new cls_db_manager_postgres();
	
		$instance->connect($config, true);
	
	
		return $instance;
	
	
	

	}	
	
    protected static function scan_driver_directoy($dir, &$drivers, $validate = true)
    {
	    if(!is_dir($dir)) return;
		$scandir = opendir($dir);
		if($scandir === false) return;
		while(($name = readdir($scandir)) !== false) 
		{
			require_once("$dir/$name");
	
			if(!class_exists($name)) continue;
	
			$driver = new $classname;
	
            if(!$validate || $driver->valid()) 
				{
					if(empty($drivers[$driver->dbType])) 
					{
						$drivers[$driver->dbType] = array();
					}
					$drivers[$driver->dbType][] = $driver;
				}
		}
	}

}


?>
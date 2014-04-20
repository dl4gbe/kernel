
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
* @subpackage application
* @copyright  Copyright (c) 2014 Christoph Eisenmann (http://www.Kernel4ypou.com)
* @license    (http://www.Kernel4ypou.com/licence)   BSD License
* @version    $Id:$
* @link       http://www.Kernel4ypou.com/kernel/include/application/cls_application.php
* @since      File available since Release 1.0.0
*/


if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

define('DRUPAL_ROOT', 'drupal');


class cls_application
{

private $p_table_application = null;
private $p_table_application_template = null;
private $p_db_manager = null;
private $p_language = 'DE';
private $p_log_level = 1;
private $p_log_text = '';
private $p_main_page = null;
private $p_id_location = '00000000-0000-0000-0000-000000000000';
private $p_table_test = null;
private $p_id_user = '00000000-0000-0000-0000-000000000000';
private $p_allow_buffering = false;
private $p_kernel_root = '';

public function get_kernel_root()
{
	return $this->p_kernel_root;
}

public function get_allow_buffering()
{
	return $this->p_allow_buffering;
}

public function set_allow_buffering($allow_buffering)
{
	$this->p_allow_buffering = $allow_buffering;
}


public function get_id_user()
{
	return $this->p_id_user;
}

public function set_id_user($id_user)
{
	$this->p_id_user = $id_user;
}


public function get_table_test()
{
	return $this->p_table_test;
}

public function set_table_test($id_table_test)
{
	$this->p_table_test = $id_table_test;
}


public function get_id_location()
{
	return $this->p_id_location;
}

public function set_id_location($id_location)
{
	$this->p_id_location = $id_location;
}


public function get_server_path()
{

return $_SERVER['REQUEST_URI'] ;

}

function __construct()
{ 
	// save root directory
	$this->p_kernel_root = getcwd();
	

	if (!isset($_SERVER['HTTP_REFERER'])) 
	    {
			$_SERVER['HTTP_REFERER'] = '';
	    }

	if (!isset($_SERVER['SERVER_PROTOCOL']) || ($_SERVER['SERVER_PROTOCOL'] != 'HTTP/1.0' && $_SERVER['SERVER_PROTOCOL'] != 'HTTP/1.1')) 
	    {
			$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.0';
	    }

    if (isset($_SERVER['HTTP_HOST'])) 
		{
		// As HTTP_HOST is user input, ensure it only contains characters allowed
		// in hostnames. See RFC 952 (and RFC 2181).
		// $_SERVER['HTTP_HOST'] is lowercased here per specifications.
		$_SERVER['HTTP_HOST'] = strtolower($_SERVER['HTTP_HOST']);
		if (!self::kernel_valid_http_host($_SERVER['HTTP_HOST'])) 
			{
			  // HTTP_HOST is invalid, e.g. if containing slashes it may be an attack.
			  header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
			  exit;
			}
		}
	else 
		{
		// Some pre-HTTP/1.1 clients will not send a Host header. Ensure the key is
		// defined for E_ALL compliance.
		$_SERVER['HTTP_HOST'] = '';
		}


	// Enforce E_ALL, but allow users to set levels not part of E_ALL.
	error_reporting(E_ALL | error_reporting());

		
	// Override PHP settings required for Kernel to work properly.
	// sites/default/default.settings.php contains more runtime settings.
	// The .htaccess file contains settings that cannot be changed at runtime.

	// Don't escape quotes when reading files from the database, disk, etc.
	ini_set('magic_quotes_runtime', '0');
	// Use session cookies, not transparent sessions that puts the session id in
	// the query string.
	ini_set('session.use_cookies', '1');
	ini_set('session.use_only_cookies', '1');
	ini_set('session.use_trans_sid', '0');
	// Don't send HTTP headers using PHP's session handler.
	// An empty string is used here to disable the cache limiter.
	ini_set('session.cache_limiter', '');
	// Use httponly session cookies.
	ini_set('session.cookie_httponly', '1');

	// Set sane locale settings, to ensure consistent string, dates, times and
	// numbers handling.
	setlocale(LC_ALL, 'C');
	
	
	
}

/**
 * Sets appropriate server variables needed for command line scripts to work.
 *
 * This function can be called by command line scripts before bootstrapping
 * Kernel, to ensure that the page loads with the desired server parameters.
 * This is because many parts of Kernel assume that they are running in a web
 * browser and therefore use information from the global PHP $_SERVER variable
 * that does not get set when Kernel is run from the command line.
 *
 * In many cases, the default way in which this function populates the $_SERVER
 * variable is sufficient, and it can therefore be called without passing in
 * any input. However, command line scripts running on a multisite installation
 * (or on any installation that has settings.php stored somewhere other than
 * the sites/default folder) need to pass in the URL of the site to allow
 * Kernel to detect the correct location of the settings.php file. Passing in
 * the 'url' parameter is also required for functions like request_uri() to
 * return the expected values.
 *
 * Most other parameters do not need to be passed in, but may be necessary in
 * some cases; for example, if Kernel's ip_address() function needs to return
 * anything but the standard localhost value ('127.0.0.1'), the command line
 * script should pass in the desired value via the 'REMOTE_ADDR' key.
 *
 * @param $variables
 *   (optional) An associative array of variables within $_SERVER that should
 *   be replaced. If the special element 'url' is provided in this array, it
 *   will be used to populate some of the server defaults; it should be set to
 *   the URL of the current page request, excluding any $_GET request but
 *   including the script name (e.g., http://www.example.com/mysite/index.php).
 *
 * @see conf_path()
 * @see request_uri()
 * @see ip_address()
 */
function Kernel_override_server_variables($variables = array()) 
{
  // Allow the provided URL to override any existing values in $_SERVER.
  if (isset($variables['url'])) {
    $url = parse_url($variables['url']);
    if (isset($url['host'])) {
      $_SERVER['HTTP_HOST'] = $url['host'];
    }
    if (isset($url['path'])) {
      $_SERVER['SCRIPT_NAME'] = $url['path'];
    }
    unset($variables['url']);
  }
  // Define default values for $_SERVER keys. These will be used if $_SERVER
  // does not already define them and no other values are passed in to this
  // function.
  $defaults = array(
    'HTTP_HOST' => 'localhost',
    'SCRIPT_NAME' => NULL,
    'REMOTE_ADDR' => '127.0.0.1',
    'REQUEST_METHOD' => 'GET',
    'SERVER_NAME' => NULL,
    'SERVER_SOFTWARE' => NULL,
    'HTTP_USER_AGENT' => NULL,
  );
  // Replace elements of the $_SERVER array, as appropriate.
  $_SERVER = $variables + $_SERVER + $defaults;
}




public function curPageURL() 
{
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

public function get_main_page()
{
	return $this->p_main_page;
}

public function set_main_page($id_main_page)
{
	$this->p_main_page = $id_main_page;
}

public function get_log_text()
{
	return $this->p_log_text;
}
 
public function add_to_log_text($message)
{
	$this->p_log_text .= $message;

	echo $message . '</br>' . PHP_EOL;
	
} 
 
public function get_log_level()
{
	return $this->p_log_level;
}	
	
public function set_log_level($log_level)
{
	$this->p_log_level = $log_level;
}	
	
public function get_language()
{
	return $this->p_language;
}

public function set_language($language)
{
	$this->p_language = $language;
}

public function get_db_manager()
	{
	if($this->p_db_manager == null)
		{
	
		require_once('include/database/cls_db_manager_factory.php');
	
		$this->p_db_manager = cls_db_manager_factory::getInstance();

	
		}
	
	return $this->p_db_manager;
	}


public function get_table_application()
	{   
	if (is_null($this->p_table_application))
		{
		$db = $this->get_db_manager();
		$this->p_table_application = cls_table_factory::get_common_application()->get_by_id('2265837e-b0ee-11e3-a5e2-0800200c9a66',$db,$this);
		}
	return $this->p_table_application;
    }

public function get_table_application_template()
	{
	if (is_null($this->p_table_application_template))
		{
		$db = $this->get_db_manager();
		$this->p_table_application_template = cls_table_factory::get_common_application_template()->get_by_id($this->get_table_application()->get_id_application_template(),$db,$this);
		}
	return $this->p_table_application_template;
    }



public function start_session()
	{
	
	
	
	}

	
private function show_main_page()
{

	

	require_once('include/data/table_includes/cls_table_includes.php');
	
	require_once('include/data/table_factory/cls_table_factory.php');

	$db = $this->get_db_manager();
	$menu = cls_table_factory::get_common_menu()->get_by_id('1d7e96e0-b0ed-11e3-a5e2-0800200c9a66',$db);
	
	if (empty($menu))
	{
		return;
	}
		
	$this->log(__CLASS__, __FUNCTION__,'menu name : ' . $menu->get_name());
	$this->log(__CLASS__, __FUNCTION__,'menu id : ' . $menu->get_id());
	$this->log(__CLASS__, __FUNCTION__,'menu id_menu_template : ' . $menu->get_id_menu_template());
	
	$file_name_menu = 'menu/' . $this->get_language() . '_' . $menu->get_id() . '.html';
	
	if (!file_exists($file_name_menu))
	{	
		require_once('creator/cls_creator_base.php');
	
		cls_creator_base::create_menu($this,$menu);
	
	}
	
	$file_name_main_template = $this->get_table_application_template()->get_path(); 
	
	$this->log(__CLASS__, __FUNCTION__,'table_application_template : ' . $file_name_main_template);
	
	$template = file_get_contents($file_name_main_template);
	
		if (is_null($template))
		{
			$this->display_error_and_die(__CLASS__, __FUNCTION__, 'main template does not exist ' . $template_file_name);
		}	

		
	$application_caption = $this->get_table_application()->get_caption();

	$id_main_page = $this->get_table_application()->get_id_main_page();
	
	$this->set_main_page(cls_table_factory::get_common_main_page()->get_by_id($id_main_page,$db));
	
	if (is_null($this->get_main_page()))
	{
		$this->display_error_and_die(__CLASS__, __FUNCTION__, 'main_page does not exist ');
	}
	
	$path = $this->get_main_page()->get_path();
	
	if (empty($path)) 
	{
		$this->display_error_and_die(__CLASS__, __FUNCTION__, 'main_page path is empty ');
	}
	
	if (!file_exists($path))
	{
		$this->display_error_and_die(__CLASS__, __FUNCTION__, 'main page does not exist ' . $this->main_page->path);
	}
	
	
	
	$template = str_replace('{{application_caption}}' ,  $application_caption , $template) ; 	
		
	$template = str_replace('{{main_menu}}' , $file_name_menu, $template) ; 	
	
	$template = str_replace('{{main_page}}' , $this->get_main_page()->get_path(), $template) ;
	
	
	echo $template;
	
	
}
	
	
public function create_orm()
{

	$db = $this->get_db_manager();

	require_once('/creator/orm/cls_orm.php');
	
	$orm = new cls_orm($db,$this);
	
	$orm->write_base_classes();

}	

public function end_session()
	{
		session_destroy();
	}	
	
public function execute()
	{	

	$this->show_main_page();
	
	
	}	

// 0 = all
	
	
public function log($filename,$function_name ,$message,$level = 0)
{
	if ($level >= $this->get_log_level()) 
	{
		$this->add_to_log_text('log : ' . $filename . '.php ' . ' : ' . $function_name  . '() ' . $message  . '</br>');
	
	
	
	}
}	
	
public function display_error_and_die($filename, $function_name,$message)
{
	self::display_error($this,$filename,$function_name,$message,true);
} 	
	
public function display_error($app,$filename , $function_name, $message, $die = false)
{
	require_once('/include/error_handling/cls_error_handling.php');

	cls_error_handling::display_error($filename,$function_name,$message,$die);
}	

public function run_tests()
{
	require_once('include/data/table_test_run/cls_table_test_run.php');
	require_once('include/data/table_factory/cls_table_factory.php');
	
	
	$table_test = cls_table_factory::create_instance('table_test');
	
	$table_test->set_id_person($this->get_id_user());
	
	$table_test->set_remark('Test');
	
	$table_test->save($this->get_db_manager(),$this);
	
	
	$this->set_table_test($table_test);
	
	$testrun = new cls_table_test_run($this->get_db_manager(),$this);
	$testrun->run_tests();

	$this->set_table_test(null);
}

/**
 * Validates that a hostname (for example $_SERVER['HTTP_HOST']) is safe.
 *
 * @return
 *  TRUE if only containing valid characters, or FALSE otherwise.
 */
public static function kernel_valid_http_host($host)
{
  return preg_match('/^\[?(?:[a-zA-Z0-9-:\]_]+\.?)+$/', $host);
}



}


?>
<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_get_parameter
{

public $format = 'json';
public $id = null;
public $search_values = null;
public $limit = 0;
public $offset = 0;
public $mode = null;
public $view_name = null;
public $view_requested = false;
public $buffering = null;
public $database_type = 'mysql';

function __construct()
{ 
	$this->load();
}

public function load()
{

	foreach($_GET as $key => $value)
		{
		
		
		
			$key = strtolower($key);

			switch ($key)
			{
				case "f":
					$this->format = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "format":
					$this->format = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "id":
					$this->id = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "i":
					$this->id = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "search_values":
					$this->search_values = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "s":
					$this->search_values = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "limit":
					$this->limit = intval(filter_var($value,FILTER_SANITIZE_STRING));
					break;
				case "l":
					$this->limit = intval(filter_var($value,FILTER_SANITIZE_STRING));
					break;
				case "offset":
					$this->offset = intval(filter_var($value,FILTER_SANITIZE_STRING));
					break;
				case "o":
					$this->offset = intval(filter_var($value,FILTER_SANITIZE_STRING));
					break;
				case "m":
					$this->mode = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "mode":
					$this->mode = filter_var($value,FILTER_SANITIZE_STRING);
					break;
				case "view":
					$this->view_name = filter_var($value,FILTER_SANITIZE_STRING);
					$this->view_requested = true;
					break;
				case "v":
					$this->view_name = filter_var($value,FILTER_SANITIZE_STRING);
					$this->view_requested = true;
					break;
				case "buffer":
					$this->buffering = true;
					break;
				case "b":
					$this->buffering = true;
					break;
				case "database_type":
					$this->database_type = filter_var($value,FILTER_SANITIZE_STRING);
					break;	
				case "d":
					$this->database_type = filter_var($value,FILTER_SANITIZE_STRING);
					break;	
					
			}
		}

	if ($this->view_requested) 
	{	
		if (!empty($this->view_name))
			{
			if ($this->view_name == "default") $this->view_name = "";
			}
	}
}

}




?>
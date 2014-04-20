<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_table_test_result
{

	// 0 = OK
	// 1 = ERROR
	// 2 = NO Test
	// 3 = No file exists
	private $p_state = 1;

	private $p_tablename;

	public function get_state()
	{
		return $this->p_state;
	}

	public function set_state($state)
	{
		$this->p_state = $state;
	}

	public function get_tablename()
	{
		return $this->p_tablename;
	}

	public function set_tablename($tablename)
	{
		$this->p_tablename = $tablename;
	}

	
	function __construct()
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) 
		{
            call_user_func_array(array($this,$f),$a);
        }
	}
	
	public function __construct1($db_manager)
	{
		$this->set_tablename($db_manager);
	} 

	

}
?>
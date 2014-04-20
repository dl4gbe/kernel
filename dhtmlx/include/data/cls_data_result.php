<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

class cls_data_result
{

	// 0 = OK
	// 1 = ERROR
	// 2 = NO DATA
	
	private $p_state = 0;
	private $p_message = null;
	
	// 0 = OK
	// 1 Invalid Object;
	// 2 Invalid Data;
	
	private $p_message_no = 0;
	
	// 0 No Data
	// 1 Key Value Array
	// 2 Data Object
	
	private $p_data_result_type = 0;
	
	public function get_data_result_type()
	{
		return $this->p_data_result_type;
	}
	
	public function set_data_result_type($data_result_type)
	{
		$this->p_data_result_type = $data_result_type;
	}
	
	public function get_message_no()
	{
		return $this->p_message_no;
	}
	
	public function set_message_no($message_no)
	{
		$this->p_message_no = $message_no;
	}
	
	public function get_message()
	{
		return $this_>p_message;
	}
	
	public function set_message($message)
	{
		$this->p_message = $message;
	}
	
	public function get_state()
	{
		return $this->p_state;
	}

	public function set_state($state)
	{
		$this->p_state = $state;
	}


	
	public function translate_message($db_manager,$application)
	{
	
	}
	
	
	
}



?>
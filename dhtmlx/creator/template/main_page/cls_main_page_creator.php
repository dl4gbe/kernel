<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('creator/base_classes/cls_main_page_creator_base.php');

class cls_create_main_page
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
	

	
	
	public function create_main_page()
	{
	
	
	}
	
}
?>	
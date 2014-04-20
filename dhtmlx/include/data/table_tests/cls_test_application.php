<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_test_result.php');
require_once('include/data/cls_table_test_base.php');
require_once('include/utils/cls_utils.php');
class cls_test_application extends cls_table_test_base
{
	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function run_tests()
	{
		$class_methods = get_class_methods(__CLASS__);
		$found = false;
		foreach ($class_methods as $method_name)
		{
			if (cls_utils::starts_with($method_name,"run_"))
				{
					$found = true;
					break; 
				}
		}
		if (!$found)
		{
			$this->result->state = 2;
			return $this->result;
		}
	}
}
?>

<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

public class cls_test_result
{

// 0 = OK
// 1 = ERROR
private $p_state = 0;
private $p_name = null;
private $message = null;

public function get_state()
{
	$return $this->p_state;
}

public function set_state($state)
{
	$this->p_state = $state;
}




}
?>
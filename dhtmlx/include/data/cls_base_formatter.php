<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
abstract class cls_base_formatter extends cls_base_class
{

private $p_format_type = 'dhtmlx';

private $p_column_types = array();

public function get_column_types()
{
	return $this->p_column_types;
}

public function set_column_types($column_types)
{
	$this->p_column_types = $column_types;
}


public function get_format_type()
{
	return $this->p_format_type;
}

public function set_format_type($format_type)
{
	$this->p_format_type = $format_type;
}

public function write_buffer($buffer)
{

}


abstract public function format_data($data);



}

?>
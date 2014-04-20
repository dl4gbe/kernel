<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
abstract class cls_table_view_base extends cls_base_class
{

abstract public function query($search,$limit,$offset);


}
?>
<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/base_tables/cls_base_menu.php');
class cls_table_menu extends cls_base_menu
{

	public function query_menu_data($db,$language = 'DE')
	{
		
		$sql = "select * from getmenu('" . $this->get_id() . "','" . $language . "')";
		
		$result = $db->query($sql);
		
		return $result;
	
	}

}
?>

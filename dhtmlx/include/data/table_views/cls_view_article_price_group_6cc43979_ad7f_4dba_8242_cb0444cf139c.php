<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_price_group_6cc43979_ad7f_4dba_8242_cb0444cf139c extends cls_table_view_base 
{
	private $p_column_definitions = null;

	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if (method_exists($this,$f="__construct".$i))
		{
			call_user_func_array(array($this,$f),$a);
		}
	}
	public function query($search_values,$limit,$offset)
		{
		require_once('include/data/table_factory/cls_table_factory.php');
		$common_article_price_group = cls_table_factory::get_common_article_price_group();
		$array_article_price_group =  $common_article_price_group->get_article_price_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_article_price_group as $article_price_group)
			{
			$article_price_group_id = $article_price_group->get_id();
			$result_array[$article_price_group_id]['article_price_group.id'] = $article_price_group->get_id();
			$result_array[$article_price_group_id]['article_price_group.name'] = $article_price_group->get_name();
			$result_array[$article_price_group_id]['article_price_group.active'] = $article_price_group->get_active();
			$result_array[$article_price_group_id]['article_price_group.discount'] = $article_price_group->get_discount();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_price_group.id']['type'] = 'uuid';
			$this->p_column_definitions['article_price_group.name']['type'] = 'varchar';
			$this->p_column_definitions['article_price_group.active']['type'] = 'bool';
			$this->p_column_definitions['article_price_group.discount']['type'] = 'numeric';
		}
		return $this->p_column_definitions;
	}
}
?>

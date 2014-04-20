<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_table_view_base.php');
class cls_view_article_group_721e5b34_9834_4653_9b5e_3c3fc3900073 extends cls_table_view_base 
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
		$common_article_group = cls_table_factory::get_common_article_group();
		$array_article_group =  $common_article_group->get_article_groups($this->get_db_manager(),$this->get_application(),$search_values,$limit,$offset,false);

		$result_array = array();
		foreach($array_article_group as $article_group)
			{
			$article_group_id = $article_group->get_id();
			$result_array[$article_group_id]['article_group.id'] = $article_group->get_id();
			$result_array[$article_group_id]['article_group.name'] = $article_group->get_name();
			$result_array[$article_group_id]['article_group.insurance_article'] = $article_group->get_insurance_article();
			$result_array[$article_group_id]['article_group.showinpos'] = $article_group->get_showinpos();
			$result_array[$article_group_id]['article_group.showincontracts'] = $article_group->get_showincontracts();
			$result_array[$article_group_id]['article_group.offerarticle'] = $article_group->get_offerarticle();
			}
		return $result_array;
		}
	public function get_column_definitions()
	{
		if (!is_null($this->p_column_definitions)) return $this->p_column_definitions;
		{
			$this->p_column_definitions = array();
			$this->p_column_definitions['article_group.id']['type'] = 'uuid';
			$this->p_column_definitions['article_group.name']['type'] = 'varchar';
			$this->p_column_definitions['article_group.insurance_article']['type'] = 'bool';
			$this->p_column_definitions['article_group.showinpos']['type'] = 'bool';
			$this->p_column_definitions['article_group.showincontracts']['type'] = 'bool';
			$this->p_column_definitions['article_group.offerarticle']['type'] = 'bool';
		}
		return $this->p_column_definitions;
	}
}
?>

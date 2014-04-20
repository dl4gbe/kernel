<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
class cls_article_list_pos_helpers extends cls_base_class
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

	public function get_grid_page($get_parameter)
	{
		$app = $this->get_application();
		$file = '';
		if ($get_parameter->view_requested)
		{
			if (empty($get_parameter->view_name))
			{
				$file = 'grid_pages/grid_article_list_pos_457b11ff-de43-4f62-b8a5-1958bbb7ae0b.html';
			}
			else
			{
				switch ($get_parameter->view_name)
				{
				}
			}
		}
		else
		{
		}
		if (empty($file))
		{
			$app->display_error_and_die(__CLASS__,__FUNCTION__,'no view page found');
		}
		if (!file_exists($file))
		{
			$app->display_error_and_die(__CLASS__,__FUNCTION__,"$file view page not found");
		}
		$result = file_get_contents($file);
echo $result;
	}

	public function get_data($get_parameter)
	{
		$app = $this->get_application();
		if (!$get_parameter->view_requested)
		{
			require_once('include/data/table_factory/cls_table_factory.php');
			$common_article_list_pos = cls_table_factory::get_common_article_list_pos();
			$array_article_list_pos =  $common_article_list_pos->get_article_list_poss($app->get_db_manager(),$app,$get_parameter->search_values,$get_parameter->limit,$get_parameter->offset,false);
			if ($get_parameter->format == 'json')
			{
				require_once('include/data/base_table_exporters/cls_json_article_list_pos.php');
				$exporter = new cls_json_article_list_pos();
				if (!$get_parameter->buffering)
				{
					$exporter->echo_export_string($array_article_list_pos);
				}
				else
				{
					if ($app->get_allow_buffering())
					{
						$exporter->write_buffer($array_article_list_pos);
					}
					else
					{
						$app->display_error_and_die('article_list_pos.php','entrypoint','access error write buffer');
					}
				}
			}
		}
		else
		{
			$view = null;
			if (empty($get_parameter->view_name))
			{
				require_once('include/data/table_views/cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b.php');
				$view = new cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b($app->get_db_manager(),$app);
			}
			else
			{
				switch (strtolower($get_parameter->view_name))
				{
					case "standart view article_list_pos":
						require_once('include/data/table_views/cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b.php');
						$view = new cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b($app->get_db_manager(),$app);
						break;
					case "457b11ff-de43-4f62-b8a5-1958bbb7ae0b":
						require_once('include/data/table_views/cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b.php');
						$view = new cls_view_article_list_pos_457b11ff_de43_4f62_b8a5_1958bbb7ae0b($app->get_db_manager(),$app);
						break;
				}
			}
			if (is_null($view))
				{
					$app->display_error_and_die('article_list_pos.php','entrypoint','no view class found');
				}
			$data = $view->query($get_parameter->search_values,$get_parameter->limit,$get_parameter->offset);
			if (count($data) == 0) return  '';
			$formatter = null;

			switch ($get_parameter->format)
			{
				 case "json":
					require_once('include/data/base_formatters/cls_json_formatter.php');
					$formatter = new cls_json_formatter($app->get_db_manager(),$app);
					break;
			}

			if (is_null($formatter))
			{
				$app->display_error_and_die('article_list_pos.php','entrypoint',"no formatter class found for $format");
			}

			$formatter->set_column_types($view->get_column_definitions());
			$result = $formatter->format_data($data);

			if (!$get_parameter->buffering)
			{
				echo $result;
			}
			else
			{
				if ($app->get_allow_buffering())
				{
					$formatter->write_buffer($result);
				}
				else
				{
					$app->display_error_and_die('article_list_pos.php','entrypoint','access error write buffer');
				}
			}
		}
	}
}
?>

<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
class cls_posting_header_helpers extends cls_base_class
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
				$file = 'grid_pages/grid_posting_header_085e4ede-0abd-4023-8d75-a115f347b6e4.html';
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
			$common_posting_header = cls_table_factory::get_common_posting_header();
			$array_posting_header =  $common_posting_header->get_posting_headers($app->get_db_manager(),$app,$get_parameter->search_values,$get_parameter->limit,$get_parameter->offset,false);
			if ($get_parameter->format == 'json')
			{
				require_once('include/data/base_table_exporters/cls_json_posting_header.php');
				$exporter = new cls_json_posting_header();
				if (!$get_parameter->buffering)
				{
					$exporter->echo_export_string($array_posting_header);
				}
				else
				{
					if ($app->get_allow_buffering())
					{
						$exporter->write_buffer($array_posting_header);
					}
					else
					{
						$app->display_error_and_die('posting_header.php','entrypoint','access error write buffer');
					}
				}
			}
		}
		else
		{
			$view = null;
			if (empty($get_parameter->view_name))
			{
				require_once('include/data/table_views/cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4.php');
				$view = new cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4($app->get_db_manager(),$app);
			}
			else
			{
				switch (strtolower($get_parameter->view_name))
				{
					case "standart view posting_header":
						require_once('include/data/table_views/cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4.php');
						$view = new cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4($app->get_db_manager(),$app);
						break;
					case "085e4ede-0abd-4023-8d75-a115f347b6e4":
						require_once('include/data/table_views/cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4.php');
						$view = new cls_view_posting_header_085e4ede_0abd_4023_8d75_a115f347b6e4($app->get_db_manager(),$app);
						break;
				}
			}
			if (is_null($view))
				{
					$app->display_error_and_die('posting_header.php','entrypoint','no view class found');
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
				$app->display_error_and_die('posting_header.php','entrypoint',"no formatter class found for $format");
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
					$app->display_error_and_die('posting_header.php','entrypoint','access error write buffer');
				}
			}
		}
	}
}
?>

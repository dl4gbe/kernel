<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
class cls_offer_time_helpers extends cls_base_class
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
				$file = 'grid_pages/grid_offer_time_91a3b7d7-0e8d-46c0-a21b-42cf66e8fc3f.html';
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
			$common_offer_time = cls_table_factory::get_common_offer_time();
			$array_offer_time =  $common_offer_time->get_offer_times($app->get_db_manager(),$app,$get_parameter->search_values,$get_parameter->limit,$get_parameter->offset,false);
			if ($get_parameter->format == 'json')
			{
				require_once('include/data/base_table_exporters/cls_json_offer_time.php');
				$exporter = new cls_json_offer_time();
				if (!$get_parameter->buffering)
				{
					$exporter->echo_export_string($array_offer_time);
				}
				else
				{
					if ($app->get_allow_buffering())
					{
						$exporter->write_buffer($array_offer_time);
					}
					else
					{
						$app->display_error_and_die('offer_time.php','entrypoint','access error write buffer');
					}
				}
			}
		}
		else
		{
			$view = null;
			if (empty($get_parameter->view_name))
			{
				require_once('include/data/table_views/cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f.php');
				$view = new cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f($app->get_db_manager(),$app);
			}
			else
			{
				switch (strtolower($get_parameter->view_name))
				{
					case "standart view offer_time":
						require_once('include/data/table_views/cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f.php');
						$view = new cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f($app->get_db_manager(),$app);
						break;
					case "91a3b7d7-0e8d-46c0-a21b-42cf66e8fc3f":
						require_once('include/data/table_views/cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f.php');
						$view = new cls_view_offer_time_91a3b7d7_0e8d_46c0_a21b_42cf66e8fc3f($app->get_db_manager(),$app);
						break;
				}
			}
			if (is_null($view))
				{
					$app->display_error_and_die('offer_time.php','entrypoint','no view class found');
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
				$app->display_error_and_die('offer_time.php','entrypoint',"no formatter class found for $format");
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
					$app->display_error_and_die('offer_time.php','entrypoint','access error write buffer');
				}
			}
		}
	}
}
?>

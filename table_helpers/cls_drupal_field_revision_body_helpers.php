<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/cls_base_class.php');
class cls_drupal_field_revision_body_helpers extends cls_base_class
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
				$file = 'grid_pages/grid_drupal_field_revision_body_41972c3c-4cb9-4703-a9e5-a1a42146a7db.html';
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
			$common_drupal_field_revision_body = cls_table_factory::get_common_drupal_field_revision_body();
			$array_drupal_field_revision_body =  $common_drupal_field_revision_body->get_drupal_field_revision_bodys($app->get_db_manager(),$app,$get_parameter->search_values,$get_parameter->limit,$get_parameter->offset,false);
			if ($get_parameter->format == 'json')
			{
				require_once('include/data/base_table_exporters/cls_json_drupal_field_revision_body.php');
				$exporter = new cls_json_drupal_field_revision_body();
				if (!$get_parameter->buffering)
				{
					$exporter->echo_export_string($array_drupal_field_revision_body);
				}
				else
				{
					if ($app->get_allow_buffering())
					{
						$exporter->write_buffer($array_drupal_field_revision_body);
					}
					else
					{
						$app->display_error_and_die('drupal_field_revision_body.php','entrypoint','access error write buffer');
					}
				}
			}
		}
		else
		{
			$view = null;
			if (empty($get_parameter->view_name))
			{
				require_once('include/data/table_views/cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db.php');
				$view = new cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db($app->get_db_manager(),$app);
			}
			else
			{
				switch (strtolower($get_parameter->view_name))
				{
					case "standart view drupal_field_revision_body":
						require_once('include/data/table_views/cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db.php');
						$view = new cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db($app->get_db_manager(),$app);
						break;
					case "41972c3c-4cb9-4703-a9e5-a1a42146a7db":
						require_once('include/data/table_views/cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db.php');
						$view = new cls_view_drupal_field_revision_body_41972c3c_4cb9_4703_a9e5_a1a42146a7db($app->get_db_manager(),$app);
						break;
				}
			}
			if (is_null($view))
				{
					$app->display_error_and_die('drupal_field_revision_body.php','entrypoint','no view class found');
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
				$app->display_error_and_die('drupal_field_revision_body.php','entrypoint',"no formatter class found for $format");
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
					$app->display_error_and_die('drupal_field_revision_body.php','entrypoint','access error write buffer');
				}
			}
		}
	}
}
?>

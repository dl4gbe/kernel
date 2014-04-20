<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
require_once('include/data/cls_base_formatter.php');
require_once('include/utils/cls_utils.php');

class cls_json_formatter extends cls_base_formatter
{

	function __construct()
    { 
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) 
		{
            call_user_func_array(array($this,$f),$a);
        }
	}

	public function format_data($data)
	{
		
		return $this->format_data_dhtmlx($data);
		
	}	
	
	public function format_data_dhtmlx($data)
	{

		$result = '';
	
		$result .= 'data = {' . PHP_EOL;
		$result .= 'rows: [' . PHP_EOL;
	
		$i = 0;
		foreach ($data as $key => $row)
		{
		
			if ($i != 0) $result .= ',' . PHP_EOL;
		
			$j = 0;

			$result .= '{' . PHP_EOL;
			
			foreach ($row as $column_name => $value)
			{
				if (cls_utils::ends_with($column_name,'.id'))
				{
					$result .= 'id : ' . "'" . $value . "'," . PHP_EOL;
					$result .= 'data : ' ;					
					break;
				}
			}	
			
			$result .= '[';
			foreach ($row as $column_name => $value)
			{
			
				if (cls_utils::ends_with($column_name,'.id')) continue;
			
				if (!$j == 0) $result .= ',';
				$result .=  $this->format_data_source($column_name, $value);    
				//$result .= '"' . $value . '"';
				
				
				$j++;
			}
			$result .= ']' . PHP_EOL;
			$result .= '}' . PHP_EOL;
			$i++;
		}

		$result .= ']' . PHP_EOL;
		
		$result .= '}' . PHP_EOL;
		
		echo $result;
	
		return $result;
	
	}

	public function format_data_source($column_name, $value)
	{
		

		$type = $this->get_column_types()[$column_name];
		
		if (!empty($type))
		{
			switch ($type['type'])
			{
				case 'bool':
				
				
					$bool = $this->get_db_manager()->get_boolean($value); 

					if ($bool)
					{
						return 'true';
					}
					return 'false';
					
					break;
			
			
			}
		
		}
	
		return '"' . $value . '"';
	
	}

}

?>
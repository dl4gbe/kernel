<?php

class cls_error_handling
{

public static function display_error($filename , $function_name, $message, $die = false)
{

	echo '</br>';
	echo '</br>';
	if ($die)
		{
		echo 'F A T A L &nbsp;&nbsp;&nbsp;  E R R O R : ' . '</br>';
		}
	else
		{
		echo 'E R R O R : ' . '</br>';
		}
	echo '</br>';
	echo 'File Name :' . $filename . '.php</br>';
	echo 'Function Name :' . $function_name . '()</br>';
	echo 'Error : ' . $message . '</br>' ;
	echo '</br>';
	
	$ret = self::get_debug_print_backtrace(3);
	
	if (!is_null($ret))
	{
	
		foreach ($ret as $line)
			{
				echo $line . '</br>';
			}
	}
	
	
	if ($die)
	{
		exit();
	}
	
}	

public static function get_debug_print_backtrace($traces_to_ignore = 1)
{
	$traces = debug_backtrace(true);
	
	$ret = array();
	
	foreach($traces as $i => $call)
	{
	
        if ($i < $traces_to_ignore ) {
            continue;
        }
	
		$object = '';
        if (isset($call['class'])) 
		{
            $object = $call['class'].$call['type'];
            if (is_array($call['args'])) {
                foreach ($call['args'] as &$arg) 
				{
                    self::get_arg($arg);
                }
            }
        }       

        @$ret[] = '#'.str_pad($i - $traces_to_ignore, 3, ' ')
        .$object.$call['function'].'('.implode(', ', $call['args'])
        .') called at ['.$call['file'].':'.$call['line'].']';
	
	
	
	}

	return $ret;
	
}	

public static function get_arg(&$arg) 
{
    if (is_object($arg)) {
        $arr = (array)$arg;
        $args = array();
        foreach($arr as $key => $value) {
            if (strpos($key, chr(0)) !== false) 
			{
                $key = '';    // Private variable found
            }
            $args[] =  '['.$key.'] => ' . self::get_arg($value);
        }

        $arg = get_class($arg) . ' Object ('.implode(',', $args).')';
    }
}




}
?>
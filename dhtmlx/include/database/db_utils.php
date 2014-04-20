<?php

	if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
	
	function from_html($string, $encode=true) 
	{
		if (!is_string($string) || !$encode) 
		{
			return $string;
		}

		//[TODO] complete this function
		
		return $string;
	}
	
	function to_html($string, $encode=true)
	{
		if (empty($string)) 
		{
			return $string;
		}

		//[TODO] complete this function
		
		return $string;

	}
?>	
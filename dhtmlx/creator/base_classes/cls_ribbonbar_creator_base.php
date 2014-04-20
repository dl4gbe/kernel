<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

abstract class cls_ribbonbar_creator_base
{
	private $p_application = null;
	private $p_ribbonbar_id = null;
	private $p_ribbonbar_template = null;
	private $p_language = 'DE';
	private $p_javascript = '';
	private $p_ribbon_bar_items = null;
	private $p_actions = null;
	
	public function get_actions()
	{
		if (!is_null($this->p_actions)) return $p_actions;
		
		$db = $this->get_application()->get_db_manager();
		
		$this->p_actions = $db->get_actions();
	
		return $this->p_actions;
	
	}
	
	
	public function get_ribbon_bar_tabs()
	{
	
		$ribbonbar_id = $this->get_ribbonbar_id();
		$db = $this->get_application()->get_db_manager();
		
		if (is_null($this->p_ribbon_bar_items)) $this->p_ribbon_bar_items = array();

		if (!array_key_exists($this->get_ribbonbar_id(),$this->p_ribbon_bar_items))
		{
			$this->p_ribbon_bar_items[$ribbonbar_id] = $db->get_ribbonbar_tabs_by_ribbonbar_id($ribbonbar_id);
		}
		
		return $this->p_ribbon_bar_items[$this->get_ribbonbar_id()];
	}
	
	
	
	public function get_javascript()
	{
		return $this->p_javascript;
	}
	
	public function set_javascript($javascript)
	{
		$this->p_javascript = $javascript;
	}

	
	
	public function get_language()
	{
		return $this->p_language;
	}
	
	public function set_language($language)
	{
		$this->p_language = $language;
	}
	
	public function get_ribbonbar_id()
	{
		return $this->p_ribbonbar_id;
	}
	
	public function set_ribbonbar_id($ribbonbar_id)
	{
		$this->p_ribbonbar_id = $ribbonbar_id;
	}
	
	public function get_ribbonbar_template()
	{
		return $this->p_ribbonbar_template;
	}
		
	public function set_ribbonbar_template($ribbonbar_template)
	{	
		$this->p_ribbonbar_template = $ribbonbar_template;
	}
	
		
	public function get_application()
	{
		return $this->p_application;
	}

	public function set_application($application)
	{
		$this->p_application = $application;
	}

	public function __construct1($application)
	{
		$this->set_application($application);
	} 

	public function __construct2($application,$id_ribbonbar)
	{
		$this->set_application($application);
		$this->set_ribbonbar_id($id_ribbonbar);
	} 

	public function __construct3($application,$id_ribbonbar,$ribbonbar_template)
	{
		$this->set_application($application);
		$this->set_ribbonbar_id($id_ribbonbar);
		$this->set_ribbonbar_template($ribbonbar_template);	
	} 

	public function __construct4($application,$id_ribbonbar,$ribbonbar_template,$language)
	{
		$this->set_application($application);
		$this->set_ribbonbar_id($id_ribbonbar);
		$this->set_ribbonbar_template($ribbonbar_template);	
		$this->set_language($language);
	} 

	
	
	
	
	
	abstract public function create_ribbonbar_javascript();

	abstract public function save_javascript();
	

}
?>

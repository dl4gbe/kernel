<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');

require_once('creator/base_classes/cls_ribbonbar_creator_base.php');

class cls_create_ribbonbar extends cls_ribbonbar_creator_base
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

	public function create_ribbonbar_javascript()
	{
	
		$db = $this->get_application()->get_db_manager();
		$ribbonbar_data = $db->get_ribbonbar_by_id($this->get_ribbonbar_id());
	
		$actions = $this->get_actions();
	
		$javascript = '';
		$javascript .= 'function cls_ribbonbar(parent_object,show_feedback,show_development)' . PHP_EOL;
		$javascript .= '{' . PHP_EOL;
		$javascript .= "\t" . 'if (parent_object == undefined) return;' . PHP_EOL;
		$javascript .= "\t" . 'var tabbar = parent_object.attachTabbar();' . PHP_EOL;
		$javascript .= "\t" . 'var feedback_toolbar = null;' . PHP_EOL;
		$javascript .= "\t" . 'var development_toolbar = null;' . PHP_EOL;
		$javascript .= "\t" . 'var first_tab_id = "";'  . PHP_EOL;
		$javascript .= "\t" . 'var tab_id = "";'  . PHP_EOL;
		$javascript .= "\t" . 'var item_name = "";'  . PHP_EOL;
		$javascript .= "\t" . 'var actions = new Array();'  . PHP_EOL;
		$javascript .= "\t" . 'var btn = null;' . PHP_EOL;
		$javascript .= "\t" . 'tabbar.setSkin("dhx_skyblue");' . PHP_EOL;
		$javascript .= "\t" . 'tabbar.setImagePath("dhtmlx/imgs/");' . PHP_EOL;
		$javascript .= "\t" . 'tabbar.toolbars = new Array(); ' . PHP_EOL;
		
		$counter = 1;
		
		$ribbonbar_tabs = $this->get_ribbon_bar_tabs();
		
		if (count($ribbonbar_tabs) > 0)		
		{
			foreach ($ribbonbar_tabs as $key => &$ribbonbar_tab)
			{
				if (!$ribbonbar_tab['active']) continue;
			
				$javascript .= "\t" . 'tab_id = "T' . $counter . '";' . PHP_EOL; 
				$javascript .= "\t" . 'tabbar.addTab(tab_id, "' . $ribbonbar_tab['name'] . '", "100px");' . PHP_EOL;
				$javascript .= "\t" . 'var a'. $counter  . '_toolbar = tabbar.cells(tab_id).attachToolbar();' . PHP_EOL;
				$javascript .= "\t" . 'tabbar.toolbars.push(a'. $counter  . '_toolbar);' . PHP_EOL;
				$javascript .= "\t" . 'a'. $counter  . '_toolbar.setIconSize(48);' . PHP_EOL;
				$javascript .= "\t" . 'a'. $counter  . '_toolbar.setSkin("dhx_skyblue");' . PHP_EOL;
				$javascript .= "\t" . 'a'. $counter  . '_toolbar.setIconsPath("images/toolbar_images/");' . PHP_EOL;
				$javascript .= "\t" . 'if (first_tab_id == "") first_tab_id = tab_id;' . PHP_EOL;
				
				if (is_null($ribbonbar_tab['tab_groups'])) continue;
				
				$tab_groups = $ribbonbar_tab['tab_groups'];
				
				$counterGroups = 1;

				foreach ($tab_groups as $key => &$tab_group)
				{
				
					if (is_null($tab_group['items'])) continue;
					
					$items = $tab_group['items'];

					$counteritem = 1;
					
					foreach ($items as $key => &$item)
					{
					
						$imagepath = $item['imagepath']; 
					
						
						$action = '';
					
						$id_action = $item['id_action'];
						
						if (!empty($id_action))
						{
							if (array_key_exists($id_action,$actions))
							{
								$action = $actions[$id_action]['key'];
							}
						}
						
					
						$javascript .= "\t" . 'item_name = "a_' . $counter . '_' . $counterGroups . '_' . $counteritem . '";' . PHP_EOL;
						$javascript .= "\t" . 'a'. $counter  . '_toolbar.addButton(item_name, ' . $counteritem  . ',"' . htmlentities( $item['name'] ) . '", "/' . $imagepath . '", null);' . PHP_EOL;
						$javascript .= "\t" . 'actions[item_name]  = "' . $action .  '";' . PHP_EOL;
						
						
						
						$counteritem++;
					}
				
					$counterGroups++;
				}
				
				$counter++;
			}
		}
		
		$javascript .= "\t" . 'if (show_feedback)' . PHP_EOL;
		$javascript .= "\t" . '{' . PHP_EOL;
	
		$javascript .= "\t\t" . 'tabbar.addTab("FB", "Feedback", "100px");' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar = tabbar.cells("FB").attachToolbar();' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.setIconSize(48)' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.setSkin("dhx_skyblue");' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.setIconsPath("images/toolbar_images/");' . PHP_EOL;
		$javascript .= "\t\t" . 'if (first_tab_id == "") first_tab_id = "FB";' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.addButton("FB1", 1,"' . htmlentities( "Lob") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'actions["FB1"] = "FEETBACK_PRAISE";' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.addButton("FB2", 2,"' . htmlentities( "Kritik") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'actions["FB2"] = "FEETBACK_CRITISISM";' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.addButton("FB3", 3,"' . htmlentities( "Bug") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'actions["FB3"] = "FEETBACK_CRITISISM";' . PHP_EOL;
		$javascript .= "\t\t" . 'feedback_toolbar.addButton("FB4", 4,"' . htmlentities( "Meine Anfragen") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'actions["FB4"] = "FEETBACK_MY_DATA";' . PHP_EOL;
		$javascript .= "\t\t" . 'tabbar.toolbars.push(feedback_toolbar);' . PHP_EOL;
		$javascript .= "\t" . '}' . PHP_EOL;

		$javascript .= "\t" . 'if (show_development)' . PHP_EOL;
		$javascript .= "\t" . '{' . PHP_EOL;
	
		$javascript .= "\t\t" . 'tabbar.addTab("DE", "Entwicklung", "100px");' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar = tabbar.cells("DE").attachToolbar();' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.setIconSize(48)' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.setSkin("dhx_skyblue");' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.setIconsPath("images/toolbar_images");' . PHP_EOL;
		$javascript .= "\t\t" . 'if (first_tab_id == "") first_tab_id = "DE";' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE1", 1,"' . htmlentities("Neue Aufgabe") . '", "/copy.gif", null);' . PHP_EOL;


		$javascript .= "\t\t" . 'development_toolbar.addButton("DE2", 2,"' . htmlentities("Aufgaben") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE3", 3,"' . htmlentities("Dokument hinzufügen") . '",  "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE4", 4,"' . htmlentities("Dokumente") . '", "/copy.gif", null);' . PHP_EOL;
		
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE5", 5,"' . htmlentities("Tests") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE6", 6,"' . htmlentities("Tests ausführen") . '", "/copy.gif", null);' . PHP_EOL;
		
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE7", 7,"' . htmlentities("Kontrolle bearbeiten") . '", "/copy.gif", null);' . PHP_EOL;
		
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE8", 8,"' . htmlentities("Neue Buchung") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'development_toolbar.addButton("DE9", 9,"' . htmlentities("Buchungen") . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'tabbar.toolbars.push(development_toolbar);' . PHP_EOL;
		$javascript .= "\t" . '}' . PHP_EOL;

		$javascript .= "\t\t" . 'tabbar.addTab("HE", "Hilfe", "100px");' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar = tabbar.cells("HE").attachToolbar();' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar.setIconSize(48)' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar.setSkin("dhx_skyblue");' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar.setIconsPath("images/toolbar_images");' . PHP_EOL;
		$javascript .= "\t\t" . 'if (first_tab_id == "") first_tab_id = "HE";' . PHP_EOL;

		$javascript .= "\t\t" . 'help_toolbar.addButton("HE1", 1, "' . htmlentities('Hilfe') . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar.addButton("HE2", 2, "' . htmlentities('Knowledge Base') . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'help_toolbar.addButton("HE3", 3, "' . htmlentities('Über Kernel') . '", "/copy.gif", null);' . PHP_EOL;
		$javascript .= "\t\t" . 'tabbar.toolbars.push(help_toolbar);' . PHP_EOL;
		$javascript .= "\t" . 'if (first_tab_id != "") tabbar.setTabActive(first_tab_id ,false);' . PHP_EOL;
		
		$javascript .= PHP_EOL;
		
		$javascript .= "\t" . 'this.get_toolbars = function() { return tabbar.toolbars; }' . PHP_EOL;
		$javascript .= "\t" . 'this.get_actions = function() { return actions; }' . PHP_EOL;
		$javascript .= "\t" . 'this.get_tabbar = function() { return tabbar; }' . PHP_EOL;
		$javascript .= "\t" . 'this.get_feedback_toolbar = function() { return feedback_toolbar;}' . PHP_EOL;
		$javascript .= "\t" . 'this.get_development_toolbar = function() { return development_toolbar;}' . PHP_EOL;
	
		$javascript .= '}' . PHP_EOL;
	
		$this->set_javascript($javascript);
	
		return $javascript;
	
	}

	
	public function save_javascript()
	{
	
		$file = 'ribbonbar/ribbonbar_' . $this->get_language() . '_' . $this->get_ribbonbar_id() . '.js';
	
		//echo 'file : ' . $file . '</br>';		
	
	
		file_put_contents($file, $this->get_javascript());
	
		$javascript = '<script src="' . $file . '"></script>'  . PHP_EOL; 
	
		return $javascript;
	
	
	}

}
?>

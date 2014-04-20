function cls_ribbonbar(parent_object,show_feedback,show_development)
{
	if (parent_object == undefined) return;
	var tabbar = parent_object.attachTabbar();
	var feedback_toolbar = null;
	var development_toolbar = null;
	var first_tab_id = "";
	var tab_id = "";
	var item_name = "";
	var actions = new Array();
	var btn = null;
	tabbar.setSkin("dhx_skyblue");
	tabbar.setImagePath("dhtmlx/imgs/");
	tabbar.toolbars = new Array(); 
	tab_id = "T1";
	tabbar.addTab(tab_id, "Daten", "100px");
	var a1_toolbar = tabbar.cells(tab_id).attachToolbar();
	tabbar.toolbars.push(a1_toolbar);
	a1_toolbar.setIconSize(48);
	a1_toolbar.setSkin("dhx_skyblue");
	a1_toolbar.setIconsPath("images/toolbar_images/");
	if (first_tab_id == "") first_tab_id = tab_id;
	item_name = "a_1_1_1";
	a1_toolbar.addButton(item_name, 1,"Delete", "/copy.gif", null);
	actions[item_name]  = "RECORD_DELETE";
	item_name = "a_1_1_2";
	a1_toolbar.addButton(item_name, 2,"Edit", "/copy.gif", null);
	actions[item_name]  = "RECORD_EDIT";
	item_name = "a_1_1_3";
	a1_toolbar.addButton(item_name, 3,"Neu", "/copy.gif", null);
	actions[item_name]  = "RECORD_NEW";
	item_name = "a_1_1_4";
	a1_toolbar.addButton(item_name, 4,"Laden", "/copy.gif", null);
	actions[item_name]  = "DATA_REFRESH";
	item_name = "a_1_1_5";
	a1_toolbar.addButton(item_name, 5,"Export to Excel", "/copy.gif", null);
	actions[item_name]  = "EXPORT_EXCEL";
	item_name = "a_1_1_6";
	a1_toolbar.addButton(item_name, 6,"Drucken", "/copy.gif", null);
	actions[item_name]  = "GRID_PRINT";
	item_name = "a_1_1_7";
	a1_toolbar.addButton(item_name, 7,"Clipboard", "/copy.gif", null);
	actions[item_name]  = "GRID_TO_CLIPBOARD";
	if (show_feedback)
	{
		tabbar.addTab("FB", "Feedback", "100px");
		feedback_toolbar = tabbar.cells("FB").attachToolbar();
		feedback_toolbar.setIconSize(48)
		feedback_toolbar.setSkin("dhx_skyblue");
		feedback_toolbar.setIconsPath("images/toolbar_images/");
		if (first_tab_id == "") first_tab_id = "FB";
		feedback_toolbar.addButton("FB1", 1,"Lob", "/copy.gif", null);
		actions["FB1"] = "FEETBACK_PRAISE";
		feedback_toolbar.addButton("FB2", 2,"Kritik", "/copy.gif", null);
		actions["FB2"] = "FEETBACK_CRITISISM";
		feedback_toolbar.addButton("FB3", 3,"Bug", "/copy.gif", null);
		actions["FB3"] = "FEETBACK_CRITISISM";
		feedback_toolbar.addButton("FB4", 4,"Meine Anfragen", "/copy.gif", null);
		actions["FB4"] = "FEETBACK_MY_DATA";
		tabbar.toolbars.push(feedback_toolbar);
	}
	if (show_development)
	{
		tabbar.addTab("DE", "Entwicklung", "100px");
		development_toolbar = tabbar.cells("DE").attachToolbar();
		development_toolbar.setIconSize(48)
		development_toolbar.setSkin("dhx_skyblue");
		development_toolbar.setIconsPath("images/toolbar_images");
		if (first_tab_id == "") first_tab_id = "DE";
		development_toolbar.addButton("DE1", 1,"Neue Aufgabe", "/copy.gif", null);
		development_toolbar.addButton("DE2", 2,"Aufgaben", "/copy.gif", null);
		development_toolbar.addButton("DE3", 3,"Dokument hinzuf&uuml;gen",  "/copy.gif", null);
		development_toolbar.addButton("DE4", 4,"Dokumente", "/copy.gif", null);
		development_toolbar.addButton("DE5", 5,"Tests", "/copy.gif", null);
		development_toolbar.addButton("DE6", 6,"Tests ausf&uuml;hren", "/copy.gif", null);
		development_toolbar.addButton("DE7", 7,"Kontrolle bearbeiten", "/copy.gif", null);
		development_toolbar.addButton("DE8", 8,"Neue Buchung", "/copy.gif", null);
		development_toolbar.addButton("DE9", 9,"Buchungen", "/copy.gif", null);
		tabbar.toolbars.push(development_toolbar);
	}
		tabbar.addTab("HE", "Hilfe", "100px");
		help_toolbar = tabbar.cells("HE").attachToolbar();
		help_toolbar.setIconSize(48)
		help_toolbar.setSkin("dhx_skyblue");
		help_toolbar.setIconsPath("images/toolbar_images");
		if (first_tab_id == "") first_tab_id = "HE";
		help_toolbar.addButton("HE1", 1, "Hilfe", "/copy.gif", null);
		help_toolbar.addButton("HE2", 2, "Knowledge Base", "/copy.gif", null);
		help_toolbar.addButton("HE3", 3, "&Uuml;ber Kernel", "/copy.gif", null);
		tabbar.toolbars.push(help_toolbar);
	if (first_tab_id != "") tabbar.setTabActive(first_tab_id ,false);

	this.get_toolbars = function() { return tabbar.toolbars; }
	this.get_actions = function() { return actions; }
	this.get_tabbar = function() { return tabbar; }
	this.get_feedback_toolbar = function() { return feedback_toolbar;}
	this.get_development_toolbar = function() { return development_toolbar;}
}

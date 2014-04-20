var main_layout;
var tab_bar;
function do_on_load()
{
  
var main_layout = new dhtmlXLayoutObject(document.body, "1C");
main_layout.cells("a").setWidth("*"); 
main_layout.cells("a").setHeight("*"); 
 
main_layout.cells("a").setText("Hauptseite"); 

var tabbar = main_layout.cells("a").attachTabbar();

tabbar.setSkin("dhx_skyblue");
tabbar.setImagePath("../dhtmlx/imgs/");
 
 
//tabbar.setWidth("*"); 
//tabbar.setHeight("*"); 
 
$KERNEL_MAIN_PAGE.set_main_tab(tabbar); 
$KERNEL_MAIN_PAGE.set_main_layout(main_layout); 
}


function cls_main_page()
{

	var main_layout = null;

	var tab_ids_table = null; 

	var table_tab_counter = 0;
	
	var main_tab = null;

	this.get_main_tab = function()
	{
		return main_tab;
	}

	
	this.set_main_layout = function($main_layout)
	{
		main_layout = $main_layout;
	}
	
	this.set_main_tab = function($main_tab)
	{
	
		if ($main_tab == undefined) return;
	
		main_tab = $main_tab;
		
		
		main_tab.attachEvent("onXLS", function() 
		{
			//alert("onXLS");	
			return true;
		});

		main_tab.attachEvent("onXLE", function() 
		{
			//alert("onXLE");
			return true;
		});

		
		main_tab.attachEvent("onTabContentLoaded", function() 
		{
			//alert("onTabContentLoaded");
			return true;
		});
		
		
		
		
		main_tab.attachEvent("onTabClose", function(id)
		{


			if (tab_ids_table != null) 
			{
				var id_array = null;
				var tablename = null;
			
				for(var index in tab_ids_table) 
				{
					id_array = tab_ids_table[index];
				
					if (id_array == id)
					{
						tablename = index;
						break;
					}	
				}

				delete tab_ids_table[tablename];
				
			}

		
			  
			  
              return true;
        });
		
		
	}

	this.open_tab_control = function(id)
	{
	
		alert('cls_main_page open_tab_control ' + id);
	
	}
	
	this.open_tab_table = function(tablename,name)
	{
	
		var tabbar = this.get_main_tab();
		
		if ((tabbar == undefined) || (tabbar == null))
		{
			return;
		}
		
		
		tabbar.setHrefMode('iframes');
		
		tabbar.enableTabCloseButton(true);
		
		var tab_id = null;
		
		if (tab_ids_table == null ) 
		{
			tab_ids_table = new Array();
		}
		else
		{
			tab_id = tab_ids_table[tablename];
		}
		
		if ((tab_id != undefined) && (tab_id != null)) 
		{
			tabbar.setTabActive(tab_id);	
			return;
		}

		this.progress_on();
		
		var url = 'http:/kernel/' + tablename + '.php?v=default&m=grid';
		
		tab_id = 'table_' + table_tab_counter;


		
		tabbar.addTab(tab_id, name);
	
	
	
		tab_ids_table[tablename] = tab_id; 
	

	
		//alert(url);
		
		tabbar.setContentHref(tab_id,url);
	
		tabbar.setTabActive(tab_id);
	
		table_tab_counter++;
	
		this.progress_off();
	
	}
	
	this.progress_on = function()
	{


	if ((main_layout == undefined) || (main_layout == null))
		{
			return;
		}
	
	main_layout.progressOn();

	if (parent.$KERNEL_APPLICATION != undefined)
		{
			parent.$KERNEL_APPLICATION.progress_on();
		}

	
	}


	this.progress_off = function()
	{

		if ((main_layout == undefined) || (main_layout == null))
		{
			return;
		}
	
		main_layout.progressOff();	
	
		if (parent.$KERNEL_APPLICATION != undefined)
		{
			parent.$KERNEL_APPLICATION.progress_off();
		}
	
	}

	
}
 
$KERNEL_MAIN_PAGE = new cls_main_page(); 


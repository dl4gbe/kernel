function cls_view()
{
	var main_grid;
	
	var detail_form;
	
	var ribbon_bar;
	
	
	this.get_ribbon_bar = function()
	{
		return ribbon_bar;
	}
	
	this.set_ribbon_bar = function($ribbon_bar)
	{
		ribbon_bar = $ribbon_bar;
		
		//alert('ribbon panel settter');
		
		if(ribbon_bar == undefined) return ;

		var toolbars = ribbon_bar.get_toolbars(); 
		
		
		if (toolbars == undefined) return;
		
		var i = 0;
		var toolbar;
		
		for (i=0; i < toolbars.length ; i++)
		{	
			toolbar = toolbars[i];
		
		
			toolbar.attachEvent("onClick", function(id)
			{   
			
				//alert('click_button ' + id);
			
				click_button(id);    
			
			});
		}	
		
	}
	
	function click_button(id)
	{
		if(ribbon_bar == undefined) return ;
		
		var actions = ribbon_bar.get_actions();
				
		if(actions == undefined) return ;

		var action = '';
		
		action = actions[id];
		
		if (action == undefined)
		{
			show_error_message('No Action was defined for the Button with the ID ' + id,'Configuration Error');
			return;
		}

		if (action == '')
		{
			show_error_message('No Action was defined for the Button with the ID ' + id,'Configuration Error');
			return;
		}

		switch(action)
		{
			case "GRID_PRINT":
				print_grid();
				return;
				break;
			case "GRID_TO_CLIPBOARD":
				grid_to_clipboard();
				return;
				break;
			case "EXPORT_EXCEL":
				export_grid_to_excel();
				return;
				break;
			case "RECORD_EDIT":
				record_edit();
				return;
				break;
	
		}
	
		alert("Button " + id + " was clicked event " + action); 
	}
	
	function record_edit()
	{
		if ($KERNEL_VIEW == undefined)
		{
			show_error_message('No $KERNEL_VIEW defined!' ,'Configuration Error');
			return;
		}

		var detail_form = $KERNEL_VIEW.get_detail_form();

		if (detail_form == undefined)
		{
			show_error_message('No Detail Form defined!' ,'Configuration Error');
			return;
		}

		if (detail_form.is_readonly)
		{
			detail_form.setFormReadOnly(false);
		

		}
		else
		{
			detail_form.setFormReadOnly(true);



		}	
		
		
		
		
	}


	function record_new()
	{
		if ($KERNEL_VIEW == undefined)
		{
			show_error_message('No $KERNEL_VIEW defined!' ,'Configuration Error');
			return;
		}

		var detail_form = $KERNEL_VIEW.get_detail_form();

		if (detail_form == undefined)
		{
			show_error_message('No Detail Form defined!' ,'Configuration Error');
			return;
		}

		if (detail_form.is_readonly)
		{
			detail_form.setFormReadOnly(false);
		

		}
		else
		{
			detail_form.setFormReadOnly(true);



		}	
		
		
		
		
	}


	
	function export_grid_to_excel()
	{
	
		if ($KERNEL_VIEW == undefined)
		{
			show_error_message('No $KERNEL_VIEW defined!' ,'Configuration Error');
			return;
		}

		var grid = $KERNEL_VIEW.get_main_grid();

		if (grid == undefined)
		{
			show_error_message('No Main Grid defined!' ,'Configuration Error');
			return;
		}
	
		grid.toExcel('dhtmlx/grid_to_excel/generate.php');
	
	
	}
	
	function print_grid()
	{
	
		if ($KERNEL_VIEW == undefined)
		{
			show_error_message('No $KERNEL_VIEW defined!' ,'Configuration Error');
			return;
		}

		var grid = $KERNEL_VIEW.get_main_grid();

		if (grid == undefined)
		{
			show_error_message('No Main Grid defined!' ,'Configuration Error');
			return;
		}

		grid.printView();
	}
	
	function grid_to_clipboard()
	{
	
		if ($KERNEL_VIEW == undefined)
		{
			show_error_message('No $KERNEL_VIEW defined!' ,'Configuration Error');
			return;
		}

		var grid = $KERNEL_VIEW.get_main_grid();

		if (grid == undefined)
		{
			show_error_message('No Main Grid defined!' ,'Configuration Error');
			return;
		}
	
		grid.gridToClipboard();
	}
	
	
	function show_error_message(message,title)
	{
	
	dhtmlx.alert(
		{
		title: title,
		type:"alert-error",
		text: message
		}
	);
	
	}
	
	
	
	this.get_detail_form = function()
	{
		return detail_form;
	}

	this.set_detail_form = function($detail_form)
	{
		detail_form = $detail_form; 
	}
	
	this.get_main_grid = function()
	{
		return  main_grid;
	}

	this.set_main_grid = function($main_grid)
	{
		main_grid = $main_grid;
		
		if (main_grid == undefined) return;
		
		if (main_grid == null) return;
		
		
		main_grid.attachEvent("onRowSelect", function(id,ind)
		{
		
			if (detail_form == null) return;
			
		
			for (var i=0; i<main_grid.getColumnCount(); i++)
			{
			
				data = main_grid.cells(id,i).getValue();
		
				//alert('Bingo ' + main_grid.getColumnId(i)  + ' ' + data);
		
				detail_form.setItemValue(main_grid.getColumnId(i)  , data);
			
			
			}
			
			
		
		
		
		
		});
		
	}

	 
	this.init_view = function()
	{
		var grid = this.get_main_grid();
		var frm = this.get_detail_form();
		
		if (grid != undefined)
		{
			if (frm != undefined)
			{
				frm.setFormReadOnly(true);
			
			}
		}
		
	
	}

}

$KERNEL_VIEW = new cls_view();

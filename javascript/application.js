function cls_application()
{


	this.open_tab_control = function(id)
	{
	
	//alert('application open tab ' + id);

	window.frames['main'].$KERNEL_MAIN_PAGE.open_tab_control(id);

	}

	this.open_tab_table = function(tablename,name)
	{
	
	window.frames['main'].$KERNEL_MAIN_PAGE.open_tab_table(tablename,name);
	
	
	}
	

	this.progress_on = function()
	{
	
		
		//if (Pace != undefined)
		//{
		//	Pace.start();
		//}
		
	}


	this.progress_off = function()
	{
		
		//if (Pace != undefined)
		//{
		//	Pace.stop();
		//}
		
	
	}

	

}


$KERNEL_APPLICATION = new cls_application();

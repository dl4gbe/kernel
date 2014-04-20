var main_layout;

function do_on_load()
{
  
main_layout = new dhtmlXLayoutObject(document.body, "1C");
main_layout.cells("a").setWidth("*"); 
main_layout.cells("a").setHeight("*"); 
 
main_layout.cells("a").setText("Hauptseite"); 
 
}

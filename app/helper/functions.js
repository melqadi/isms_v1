/**
 * 
 * General function
 *  
 */

var sa_grade_id=0;
var submit_url="";
function switch_form(showed_form,hided_form,field_id,submit_path)
{	
	$(document).ready(function(){
		 console.log( "ready!" );
	
	        $(showed_form).show();
	        $(hided_form).hide();
	        console.log(field_id);
	        sa_grade_id=field_id;
	        submit_url=submit_path;
	});
	
	
	
}




$(document).ready(function(){
var error=0;
 $("#validate").submit(function(){

             $("#validate input").each(function(){

     if($(this).val() === '' && $(this).attr('id')!=="noval"){


                    $(this).css({'border':'1px solid red'});
 $('html, body').animate({
                    scrollTop: $(this).offset().top - 150
                }, 1500);

                    error= 1;
                                  return  false;

                }
                else{
                    
                    $(this).css({'border':'1px solid #438eb9'});
error=0;
                }
            });
//                if (!$('input[type=radio]:checked').val() ) { 
//                }
                if(error=="1")
                {
//      alert('Input can not be left blank');

                                                      return  false;

                }else
                {
                                                      return  true;

                }
      
        
        
    });
  $("#vali").submit(function(){

             $("#vali input:text, textarea, radio, number").each(function(){

     if($(this).val() === '' && $(this).attr('id')!=="noval"){


                    $(this).css({'border':'1px solid red'});
 $('html, body').animate({
                    scrollTop: $(this).offset().top - 150
                }, 1500);

                    error= 1;
                                  return  false;

                }
                else{
                    
                    $(this).css({'border':'1px solid #438eb9'});
error=0;
                }
            });
                
                if(error=="1")
                {
//      alert('Input can not be left blank');

                                                      return  false;

                }else
                {
                                                      return  true;

                }
      
        
        
    });
 $("#validateing").submit(function(){

             $("#validateing input:text, textarea, radio, number").each(function(){

     if($(this).val() === '' && $(this).attr('id')!=="noval"){


                    $(this).css({'border':'1px solid red'});
 $('html, body').animate({
                    scrollTop: $(this).offset().top - 150
                }, 1500);

                    error= 1;
                                  return  false;

                }
                else{
                    
                    $(this).css({'border':'1px solid #438eb9'});
error=0;
                }
            });
                
                if(error=="1")
                {
//      alert('Input can not be left blank');

                                                      return  false;

                }else
                {
                                                      return  true;

                }
      
        
        
    });
  




});


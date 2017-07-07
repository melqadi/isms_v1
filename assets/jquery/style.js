$(document).ready(function(){
    
    $("#next").click(function(){
             
      var  error=0;
         $("#tabol input").each(function(){

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
$("#taboll").show();
                     $("#tabol").hide();
                }
       
        // 
// alert('Next Btn');
//        $('#tabol input').each(function(){
//                if($(this).val() === ''){
//                    $(this).css({'border':'1px solid #F00'});
//
//                }
//                else{
//                    $(this).css({'border':'1px solid blue'});
//                    
//                }();
//            });
//            
//            
//        
        /*
       if($('#a').val() == ''){
      alert('Input can not be left blank');
   $("#a").css( "border", "1px solid red" );

        }else
   {
             $("#taboll").show();
        $("#tabol").hide();
 
   }*/
        
        
    });
   
     $("#vsal").click(function(){
      var  err=0;
         $("#taboll input").each(function(){

     if($(this).val() === '' && $(this).attr('id')!=="noval"){


                    $(this).css({'border':'1px solid red'});
 $('html, body').animate({
                    scrollTop: $(this).offset().top - 150
                }, 1500);

                    err= 1;
                                  return  false;

                }
                else{
                    
                    $(this).css({'border':'1px solid #438eb9'});
err=0;
                }
            });
                
                if(err=="1")
                {
//      alert('Input can not be left blank');

                                                      return  false;

                }else
                {
            return true;

                }
       
        
    });
   
    
    $("#back").click(function(){
        $("#tabol").show();
        $("#taboll").hide();

    });
    $("#nextt").click(function(){
        $("#tabolll").show();
        $("#taboll").hide();

    });
    $("#backk").click(function(){
        $("#taboll").show();
        $("#tabolll").hide();

    });
    $("#nexttt").click(function(){
        $("#tabollll").show();
        $("#tabolll").hide();

    });
    $("#backkk").click(function(){
        $("#tabolll").show();
        $("#tabollll").hide();

    });
    
    $("#f").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#g").show();
  }
    });
    $("#ff").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#g").hide();
  }
    });
    $("#fff").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#g").hide();
        
  }
    });
    
   $("#c").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#v").show();
  }
    });
    $("#cc").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#v").hide();
        $("#sp").hide();
        $("#sppp").hide();
        $("#spp").hide();
  }
    });
    
    
   $("#p").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#sp").show();
        $("#spp").hide();
        $("#sppp").hide();
  }
    });
   $("#pp").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#spp").show();
        $("#sp").hide();
        $("#sppp").hide();
  }
    });
   $("#ppp").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#sppp").show();
        $("#spp").hide();
        $("#sp").hide();
  }
    });
    
   $("#drt").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#one").show();
        $("#tow").hide();
  }
    });
   $("#drtt").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
        $("#tow").show();
        $("#one").hide();
  }
    });
    
    $("#ep").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);

            $("#ghj").hide();
        $("#ghjj").show();
  }
    });
    $("#epp").click(function(){
          var checked = $(this).attr('checked', true);
  if(checked){ 
          $(this).attr('checked', true);
$("#ghjj").hide();
        $("#ghj").show();  }
    });
    
    $("#rs").click(function(){
        $("#s").show();
        $("#ss").hide();
        $("#sss").hide();

    });
    $("#rss").click(function(){
        $("#ss").show();
        $("#s").hide();
        $("#sss").hide();

    });
    $("#rsss").click(function(){
        $("#sss").show();
        $("#ss").hide();
        $("#s").hide();

    });
    
    
    
    

});
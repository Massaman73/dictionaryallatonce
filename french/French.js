        
        $(function(){
            jQuery("#Switch").on("click",function(){
               jQuery("#Switch").css("background-color","gray");
               jQuery("#Input").attr("placeholder","search...");
               jQuery("#Switch2").css("background-color","");
               Cookies.set('flag','0');
             })})
             jQuery("#Switch_pequeno").on("click",function(){
                 jQuery("#Switch_pequeno").css("background-color","gray");
                 jQuery("#Input").attr("placeholder","search...");
                 jQuery("#Switch2_pequeno").css("background-color","");
                 Cookies.set('flag','0');
               })
             jQuery("#Switch2").on("click",function(){
               jQuery("#Switch2").css("background-color","gray");
               jQuery("#Input").attr("placeholder","chercher...")
               jQuery("#Switch").css("background-color","");
              Cookies.set('flag','1');
            
             })
             jQuery("#Switch2_pequeno").on("click",function(){
                 jQuery("#Switch2_pequeno").css("background-color","gray");
                 jQuery("#Input").attr("placeholder","cherher...")
                 jQuery("#Switch_pequeno").css("background-color","");
                Cookies.set('flag','1');
              
               })
             (function($){
                 var touch = false;
                 $('#humberger').on('click touchstart',function(e){
                     switch (e.type) {
                         case 'touchstart':
                             drawerToggle();
                             touch = true;
                             return false;
                         break;
                         case 'click':
                             if(!touch)
                                  drawerToggle();
                             return false;
                         break;
                      }
                     function drawerToggle(){
                         $('body').toggleClass('drawer-opened');
                         touch = false;
                     }
                 })
                 $('#overlay').on('click touchstart',function(){
                     $('body').removeClass('drawer-opened');
                 })
             })(jQuery)
             
            
             
           
                 
            
 
            
             
 
            
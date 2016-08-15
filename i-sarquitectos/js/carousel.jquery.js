;(function($,window,undefined){
   $.fn.carousel=function(previous,next){
    
       return this.each(function(){
           $container=$(this).children().eq(0);
           
           if($container){
               var $photos=$container.children();
               var length=$photos.length;
               var increment=$photos.outerWidth(true);
               var inCarousel=1;
               var firstElement=0;
               var isMoving=false;
           }
           $container.css('width',(length+inCarousel)*increment);
           for (var i=0;i<inCarousel;i++){
               $container.append($photos.eq(i).clone())
           }
           
           
           $(next).click(function(evt){
               evt.preventDefault();
             if(firstElement>length-1){
                 firstElement=1;
                 $container.css('left','0px');
             }
               else{
                   firstElement++;
               }
               if(!isMoving)
                   {
                       isMoving=true;
                       $container.animate({
                           left:'-='+increment
                        
                       },'swing',function(){
                           isMoving=false;
                       })
                   }
           });
           
           $(previous).click(function(evt){
               evt.preventDefault();
             if(firstElement==1){
                 $container.css('left',length*increment*-1);
                 firstElement=length;
             }
               else
                   {firstElement--;}
              
               if(!isMoving)
                   {
                       isMoving=true;
                       $container.animate({
                           left:'+='+increment
                        
                       },'swing',function(){
                           isMoving=false;
                       })
                   }
           });
           
           
           
       });
   }; 
    
})(jQuery,window);


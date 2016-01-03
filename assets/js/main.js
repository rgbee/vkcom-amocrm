jQuery(function($){
    // отключим переход для активных ссылок
   $('a.actived').click(function(){
       return false;
   }); 
   
   // показать загрузку при нажатии на кнопку
   $('.button-blue').click(function(){
      if ($(this).attr('type') == 'button') {
         return;
      }
         
      var width = $(this).width();
      $(this).html('<div style="width: ' + (width - 6) + 'px"><img height="10px" src="/amocrm/assets/images/loading.gif" /></div>'); 
      return false;
   });
   
   
   VK.init(function() {
      }, function() {
    }, '5.42');
});
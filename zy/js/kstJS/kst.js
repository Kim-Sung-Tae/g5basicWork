$(document).ready(function(){
  $(window).scroll(function(){
    if( $(window).scrollTop() > 0 ){
     $('#hd').addClass('colorGreen');
    }else{
     $('#hd').removeClass('colorGreen');
    }
  });


  

  //  juquery  bpopup 플러그인 사용   element_to_pop_up
(function($) {
  $(function() {
      $('#my-button').bind('click', function(e) {
          e.preventDefault();
          $('#element_to_pop_up').bPopup({
                   옵션값 :'ex',
                   speed:450,
                   modalColor:'yellow',
          });
      });
      
   });
})(jQuery);


})



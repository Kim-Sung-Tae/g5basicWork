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
  $(function(){
      $(".my-button").bind('click', function(e) {
        
          e.preventDefault();
          console.log(this)
          
          $(this).find(".element_to_pop_up").bPopup({
                   옵션값 :'ex',
                   speed:450,
                   modalColor:'yellow',
          });
      // 유튜브모달창이 떳을때  모달창 외에 다른화면 클릭시 페이지가 새로고침 되게 함 
        $('.b-modal').on("click",function(){
          location.reload();
        })
          
      });
   });
   
  })(jQuery);
  
  // 팝업창 닫기를 눌렀을때 페이지가 새로 고침 됩니다. 
  $('.b-close').click(function(){ //동영상닫기
    location.reload();
  })
  
  AOS.init(); // aos 실행문

  

  
     




})
// window.opener.document.location.href=window.opener.document.URL; self.close();






$(document).ready(function(){
  $(window).scroll(function(){
    if( $(window).scrollTop() > 0 ){
     $('#hd').addClass('colorGreen');
    }else{
     $('#hd').removeClass('colorGreen');
    }
  });
})


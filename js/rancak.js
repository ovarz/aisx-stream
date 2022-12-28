function ClosePopup(){
  $('.open-popup').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
};



/* scroll script */
function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */



function back_to_top(){
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	};
	return false;
  });
  
  $('.rancak-popup-overlay, .popup-close-button').click(function(){
    ClosePopup()
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
});
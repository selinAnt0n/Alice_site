$("input:radio").click(function() {   
   if ( $("#check4").is(':checked') && $("#check5").is(':not(:checked)')) {
   		$('.adres-holder-two').removeClass('revive'); 
   		$('.adres-holder').addClass('revive'); 
   } else if ( $("#check4").is(':not(:checked)') && $("#check5").is(':checked')) {
   		$('.adres-holder').removeClass('revive'); 
   		$('.adres-holder-two').addClass('revive');
   }
});
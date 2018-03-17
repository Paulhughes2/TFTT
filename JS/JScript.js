$(document).ready(function(){

	//$(".button-collapse").sideNav();
	 $('.target').pushpin({
      top: 0,
      bottom: 1000,
      offset: 0
    });

	$('#C2').carousel({fullWidth: true});  
	autoplay2();

	$("a.toscroll").on('click',function(e) {
		var url = e.target.href;
		var hash = url.substring(url.indexOf("#")+1);
		$('html, body').animate({
		scrollTop: $('#'+hash).offset().top -70
		}, 500);
		return false;
	});

	
});
function autoplay2() {
	$('#C2').carousel('next');
	setTimeout(autoplay2, 5500);  
} 



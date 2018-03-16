$(document).ready(function(){

	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();
	$('#push,secton').pushpin({ top:$('#push').height() });
	$('#C2').carousel({fullWidth: true});  
	autoplay2() 

	function autoplay2() {
	$('#C2').carousel('next');
	setTimeout(autoplay2, 5500);  
	} 
})
$("a.toscroll").on('click',function(e) {
	var url = e.target.href;
	var hash = url.substring(url.indexOf("#")+1);
	$('html, body').animate({
	scrollTop: $('#'+hash).offset().top -70
	}, 500);
	return false;
});


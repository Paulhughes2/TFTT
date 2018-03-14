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
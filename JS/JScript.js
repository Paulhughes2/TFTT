$(document).ready(function(){

	$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});
			
			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})
	
	$(".button-collapse").sideNav({closeOnClick: true});
	$('.target').pushpin({
      top: 0,
      bottom: 1000,
      offset: 0
    });
	
	$("a.toscroll").on('click',function(e) {
		var url = e.target.href;
		var hash = url.substring(url.indexOf("#")+1);
		$('html, body').animate({
		scrollTop: $('#'+hash).offset().top -80
		}, 500);
		return false;
	});

	$('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: 0, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        
            },
            complete: function() {  } // Callback for Modal close
            }
        );
});
function initMap() 
{
        var office = {lat: 52.5103800, lng: -2.0301030};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: office
        });
        var marker = new google.maps.Marker({
          position: office,
          map: map
        });
     
    var Circle = new google.maps.Circle({
      	strokeColor: '#FFA7BB',
      	strokeOpacity: 1,
      	strokeWeight: 3,
      	fillColor: '#FFBC88',
      	fillOpacity: 0.35,
      	map: map,
      	center: office,
      	radius: 12874.8 //This is meters, currently 8mile
    });

}

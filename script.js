// header section

// menu scroll

$(document).ready(function () {
  $('.navbar-nav').scroller();
});
// typed effect

var typed=new Typed(".type",{
	strings:[
		"Web Designer",
		"WordPress Customizer",
		"Freelancer"
	],
	typeSpeed:60,
	backSpeed:60,
	loop:true
});


// progress bar

$('#jq').LineProgressbar({
percentage:50,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});
$('#html').LineProgressbar({
percentage:90,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});
$('#css').LineProgressbar({
percentage:80,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});
$('#bootstrap').LineProgressbar({
percentage:70,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});
$('#wp').LineProgressbar({
percentage:80,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});
$('#graphic').LineProgressbar({
percentage:50,
radius: '10px',
height: '15px',
fillBackgroundColor: '#22CD6F'
});

// mixit up

var config =document.querySelector('.miup');
var mixer =mixitup(config);

// image scrolling on hover

$( window ).on( 'load', function(){
  $( '.screen' ).scrollImage();
})

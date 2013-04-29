$(document).ready(function() {

	$('#slider').rhinoslider();

	$('#content').load('home.php');
	$('#loadHome').addClass("selected");
	$('#loadHome').bind('click', function() {
		$('#content').load('home.php');
		$('#loadHome').effect( "bounce", "slow" );
		$('.selected').removeClass("selected");
		$('#loadHome').addClass("selected");
	});

	$('#loadSoluction').bind('click', function() {
		$('#content').load('soluction.php');
		$('#loadSoluction').effect( "bounce", "slow" );
		$('.selected').removeClass("selected");
		$('#loadSoluction').addClass("selected");
	});

	$('#loadTech').bind('click', function() {
		$('#content').load('technology.php');
		$('#loadTech').effect( "bounce", "slow" );
		$('.selected').removeClass("selected");
		$('#loadTech').addClass("selected");
	});

	$('#loadAbout').bind('click', function() {
		$('#content').load('about.php');
		$('#loadAbout').effect( "bounce", "slow" );
		$('.selected').removeClass("selected");
		$('#loadAbout').addClass("selected");
	});
});
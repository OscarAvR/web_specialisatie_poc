$( document ).ready(function() {
	var number = Math.floor((Math.random() * 8) + 1);
	var logo = $('#logoColor');
	var color;

	switch(number) {
		case 1:
			color = "rgb(117, 149, 87)";
			break;
		case 2:
			color = "rgb(140, 125, 102)";
			break;
		case 3:
			color = "rgb(89, 115, 175)";
			break;
		case 4:
			color = "rgb(111, 148, 200)";
			break;
		case 5:
			color = "rgb(235, 170, 183)";
			break;
		case 6:
			color = "rgb(179, 105, 205)";
			break;
		case 7:
			color = "rgb(194, 185, 128)";
			break;
		case 8:
			color = "rgb(241, 150, 124)";
			break;
	}
	logo.css( "color", color );
});

function FadeHeader() {
	var header = $('#header');
	header.addClass('noBackground');
}

function ShowHeader() {
	var header = $('#header');
	header.removeClass('noBackground');
}

function OpenMenu() {
	ShowHeader();

	var menu = $('#menu');
	var header = $('#header');

	menu.addClass('showMenu');

	setTimeout(function(){
		header.addClass('color');
	}, 10);

	setTimeout(function(){
		menu.addClass('slideMenu');
    }, 100);

	var burgerIcon = $('#burgerIcon');
	var burgerClose = $('#burgerClose');

	burgerIcon.addClass('hide');
	setTimeout(function(){
		burgerClose.addClass('show');
		burgerIcon.addClass('lock');
	}, 500);
}

function CloseMenu() {
	var menu = $('#menu');
	var header = $('#header');

	menu.removeClass('slideMenu');
	
	header.removeClass('color');

	setTimeout(function(){
		menu.removeClass('showMenu');
	}, 500);

	var burgerIcon = $('#burgerIcon');
	var burgerClose = $('#burgerClose');

	burgerClose.removeClass('show');
	burgerIcon.addClass('hide');
	burgerIcon.removeClass('lock');
	setTimeout(function(){
		burgerIcon.removeClass('hide');
	}, 500);
}
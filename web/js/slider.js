var currentSlide;
var currentBullet;

function InitiateSlider() {
    currentSlide = $('#slide1');
    currentSlide.addClass('show');

    UpdateBullets("1");

    currentBullet = $('#bullet1');
}

function Show(location) {
    var id = location.slice(6, 7);
    var slideId = "slide" + id;
    var newSlide = $('#' + slideId);

    currentSlide.removeClass('show');

    newSlide.addClass('show');

    currentSlide = newSlide;

    UpdateBullets(id);
}

function UpdateBullets(id) {
    var bulletId = "bullet" + id;
    var bullet = $('#' + bulletId);

    if (currentBullet != null) {
        currentBullet.css( "background", "url('/web/images/open-circle.png')" );
    };

    bullet.css( "background", "url('/web/images/closed-circle.png')" );

    currentBullet = bullet;
}

function ScrollToContent() {
    var viewportHtml = $('html');
    var viewportBody = $('body');

    viewportHtml.animate({scrollTop:$('#wp-content').offset().top-128}, 1500);
    viewportBody.animate({scrollTop:$('#wp-content').offset().top-128}, 1500);

    setTimeout(function(){
        viewportHtml.animate({scrollTop:$('#wp-content').offset().top-104}, 500);
        viewportBody.animate({scrollTop:$('#wp-content').offset().top-104}, 500);
    }, 2000);
}

function ScrollToCaseContent() {
    var viewportHtml = $('html');
    var viewportBody = $('body');

    viewportHtml.animate({scrollTop:$('#wp-content').offset().top-104}, 1500);
    viewportBody.animate({scrollTop:$('#wp-content').offset().top-104}, 1500);
}

function ClosePopup() {
    var container = $('#popup');

    container.addClass('hide');
}
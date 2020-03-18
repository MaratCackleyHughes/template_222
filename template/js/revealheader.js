$(function() {
    //caches a jQuery object containing the header element
    var revealheader = $(".mainnav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll <= 500) {
            revealheader.addClass("hiddenheader");
        } else {
            revealheader.removeClass("hiddenheader");
        }
    });
});
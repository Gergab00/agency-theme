// Add your custom JS here.
(function ($) {
    // Use the $ in peace...
    $(document).ready(function () {
        $('.carousel-posts').flickity({
            groupCells: 3,
            freeScroll: true,
            wrapAround: true,
            prevNextButtons: false,
            cellSelector: '.carousel-cell',
        });
    });

    $('.prev').on( 'click', function() {
        $('.carousel-posts').flickity('previous');
    });

    $('.next').on( 'click', function() {
        $('.carousel-posts').flickity('next');
    });

}(jQuery));
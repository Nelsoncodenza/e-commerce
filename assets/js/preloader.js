$WIN = $(window);
var ssPreloader = function() {
    $WIN.on('load', function() {
        // will first fade out the loading animation 
        $("#loader").fadeOut("slow", function() {

            // will fade out the whole DIV that covers the website.
            $("#preloader").delay(200).fadeOut("slow", function() {});

        });
    });
};
ssPreloader();
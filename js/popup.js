// JavaScript/jQuery code to handle image click event
$(document).ready(function() {
    $(".owl-carousel-image").click(function() {
        var imgSrc = $(this).attr("src");
        $("#modalImage").attr("src", imgSrc);
        $("#imageModal").css("display", "block");
        $("body").addClass("modal-open"); // Prevent scrolling on the background
    });

    $(".close").click(function() {
        $("#imageModal").css("display", "none");
        $("body").removeClass("modal-open"); // Enable scrolling on the background
    });

    $(window).click(function(event) {
        if (event.target.id == "imageModal") {
            $("#imageModal").css("display", "none");
            $("body").removeClass("modal-open"); // Enable scrolling on the background
        }
    });

    // Add mousewheel event to the modal content for zoom functionality
    $("#modalImage").on('mousewheel', function(e) {
        e.preventDefault(); // Prevent default scroll behavior
        var delta = e.originalEvent.wheelDelta;
        var zoomStep = 30; // Adjust zoom step as needed
        if (delta > 0) {
            // Zoom in
            var width = $(this).width() + zoomStep;
            $(this).css('width', width + 'px');
        } else {
            // Zoom out
            var width = $(this).width() - zoomStep;
            if (width > 0) {
                $(this).css('width', width + 'px');
            }
        }
    });
});



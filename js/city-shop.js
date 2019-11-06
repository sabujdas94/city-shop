(function($) {
    /* city shop preloader rmover */
    var removePreloader = function() {
            $('.city-shop-preloader').css('opacity', 0);
            setTimeout(function() { $('.city-shop-preloader').hide(); }, 500);
        }
        // When the user clicks on the button, scroll to the top of the document
    var scrollTopFunction = function() {
        $('#gototop').on("click", function() {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
        })
    }

    var popupNotice = function() {
        $('#popupNoticeTimes').on("click", function() {

            $('.mtt-nav-popup').addClass('mtt-nav-popup-dismissed');

        })
    }

    // Dom Ready
    $(function() {
        //removePreloader();
        //scrollTopFunction();
        popupNotice();
    });
})(jQuery);


/* JavaScript Code Without $ Sign Veriable */
/* When the user scrolls down 150px from the top of the document, show the Go to top Button button */
// window.onscroll = function() { scrollFunction() };

// function scrollFunction() {
//     if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
//         document.getElementById("gototop").style.display = "block";
//     } else {
//         document.getElementById("gototop").style.display = "none";
//     }
// }

/*
 * The End ! Theme created by https://maxtoptec.com
 */
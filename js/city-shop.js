(function(jQuery) {
    /* city shop preloader rmover */
    var removePreloader = function() {
            jQuery('.city-shop-preloader').css('opacity', 0);
            setTimeout(function() { jQuery('.city-shop-preloader').hide(); }, 500);
        }
        // When the user clicks on the button, scroll to the top of the document
    var scrollTopFunction = function() {
        jQuery('#gototop').on("click", function() {
            jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
        });
    }

    var popupNotice = function() {
        jQuery('#popupNoticeTimes').on("click", function() {
            jQuery('.mtt-nav-popup').fadeOut();
        });
    }
    jQuery('#mtt-categories').slick({
        infinite: true,
        slidesToShow: 9,
        slidesToScroll: 3,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });

    jQuery(document).scroll(function() {
      jQuery('body').toggleClass('fixed-header', jQuery(this).scrollTop() >= 50);
    });

    // Dom Ready
    jQuery(function() {
        //removePreloader();
        scrollTopFunction();
        popupNotice();
    });
    jQuery('.btn-number').click(function(e){
        e.preventDefault();
        console.log("Click");
        
        fieldName = jQuery(this).attr('data-field');
        type      = jQuery(this).attr('data-type');
        var input = jQuery("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    jQuery(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    jQuery(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    jQuery('.input-number').focusin(function(){
       jQuery(this).data('oldValue', jQuery(this).val());
    });
    jQuery('.input-number').change(function() {
        
        minValue =  parseInt(jQuery(this).attr('min'));
        maxValue =  parseInt(jQuery(this).attr('max'));
        valueCurrent = parseInt(jQuery(this).val());
        
        name = jQuery(this).attr('name');
        if(valueCurrent >= minValue) {
            jQuery(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            jQuery(this).val(jQuery(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            jQuery(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            jQuery(this).val(jQuery(this).data('oldValue'));
        }    
    });
    jQuery(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
})(jQuery);


/* JavaScript Code Without jQuery Sign Veriable */
/* When the user scrolls down 150px from the top of the document, show the Go to top Button button */
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        // document.getElementById("gototop").style.display = "block";
        var element = document.getElementById("gototop");
        element.classList.add("active-gototop");
    } else {
        // document.getElementById("gototop").style.display = "none";
        var element = document.getElementById("gototop");
        element.classList.remove("active-gototop");
    }
}

/*
 * The End ! Theme created by https://maxtoptech.com
 */
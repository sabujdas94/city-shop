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

    $(document).scroll(function() {
      $('body').toggleClass('fixed-header', $(this).scrollTop() >= 50);
    });

    // Dom Ready
    $(function() {
        //removePreloader();
        scrollTopFunction();
        popupNotice();
    });
    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
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


/* JavaScript Code Without $ Sign Veriable */
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
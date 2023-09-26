jQuery(document).ready(function(jQuery){

    jQuery(".on").click(function () {
        jQuery('.alert').css({
            'transform': 'translateX(0)',
        });
    });

    jQuery(".close").click(function () {
        jQuery('.alert').css({
            'transform': 'translateX(150%)',
        });
    });

    jQuery(".out").click(function () {
        jQuery('.alert').css({
            'transform': 'translateX(150%)',
        });
    })
    
    });
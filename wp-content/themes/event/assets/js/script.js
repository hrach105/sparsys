jQuery(document).ready(function($) {
    $(window).resize(function() {
        if ($(window).width() >= 1100) {
            $('.box:nth-child(2)').mouseover(function() {
                $(this).parents('.boxes').addClass('active');
                $(this).addClass('active');
            }).mouseleave(function() {
                $(this).parents('.boxes').removeClass('active');
                $(this).removeClass('active');
            });
            $('.box:nth-child(3)').mouseover(function() {
                $(this).parents('.boxes').addClass('show');
                $(this).addClass('show');
            }).mouseleave(function() {
                $(this).parents('.boxes').removeClass('show');
                $(this).removeClass('show');
            });






            // $('.box:nth-child(5)').mouseover(function() {
            //
            //     $(this).parents('.boxes').addClass('active');
            //     $(this).addClass('active');
            // }).mouseleave(function() {
            //     $(this).parents('.boxes').removeClass('active');
            //     $(this).removeClass('active');
            // });
            // $('.box:nth-child(6)').mouseover(function() {
            //     $(this).parents('.boxes').addClass('show');
            //     $(this).addClass('show');
            // }).mouseleave(function() {
            //     $(this).parents('.boxes').removeClass('show');
            //     $(this).removeClass('show');
            // });
        } else {
            $('.box:nth-child(2), .box:nth-child(3)').off('mouseover').off('mouseleave');
        }
    }).resize();

    jQuery('.carousel').carousel({
        interval: false,
        autoplay:false
    });
});


jQuery('.tab-content-wrapper-logo img').click(function ($){
    const id = jQuery(this).attr('data-id');
    jQuery('.content-item ').css('display',"none")
    jQuery(`.block-desc-${id}`).css('display','flex')

})




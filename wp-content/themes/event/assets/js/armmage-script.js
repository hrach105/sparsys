jQuery(document).ready(function($) {
    $(window).resize(function() {
        if ($(window).width() >= 1100) {
            $('.boxes1 .box:nth-child(2)').mouseover(function() {
                $(this).parents('.boxes1').addClass('active');
                $(this).addClass('active');
            }).mouseleave(function() {
                $(this).parents('.boxes1').removeClass('active');
                $(this).removeClass('active');
            });
            $('.boxes1 .box:nth-child(3)').mouseover(function() {
                $(this).parents('.boxes1').addClass('show');
                $(this).addClass('show');
            }).mouseleave(function() {
                $(this).parents('.boxes1').removeClass('show');
                $(this).removeClass('show');
            });

            $('.boxes2 .box:nth-child(2)').mouseover(function() {
                $(this).parents('.boxes2').addClass('active');
                $(this).addClass('active');
            }).mouseleave(function() {
                $(this).parents('.boxes2').removeClass('active');
                $(this).removeClass('active');
            });
            $('.boxes2 .box:nth-child(3)').mouseover(function() {
                $(this).parents('.boxes2').addClass('show');
                $(this).addClass('show');
            }).mouseleave(function() {
                $(this).parents('.boxes2').removeClass('show');
                $(this).removeClass('show');
            });

            $('.boxes3 .box:nth-child(2)').mouseover(function() {
                $(this).parents('.boxes3').addClass('active');
                $(this).addClass('active');
            }).mouseleave(function() {
                $(this).parents('.boxes3').removeClass('active');
                $(this).removeClass('active');
            });
            $('.boxes3 .box:nth-child(3)').mouseover(function() {
                $(this).parents('.boxes3').addClass('show');
                $(this).addClass('show');
            }).mouseleave(function() {
                $(this).parents('.boxes3').removeClass('show');
                $(this).removeClass('show');
            });

        } else {
            $('.box:nth-child(2), .box:nth-child(3)').off('mouseover').off('mouseleave');
        }
    }).resize();

    jQuery('.carousel').carousel({
        interval: false,
        autoplay: false,
        touch: true
    });

    jQuery('.ctm-select').click(function() {
        jQuery(this).find('svg').toggleClass('rotate');
    });
});

jQuery('.tab-content-wrapper-logo img').click(function() {
    const id = jQuery(this).attr('data-id');
    jQuery('.content-item').css('display', "none");
    jQuery(`.block-desc-${id}`).css('display', 'flex');
});
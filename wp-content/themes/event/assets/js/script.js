jQuery(document).ready(function($) {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><svg width=\"20\" height=\"37\" viewBox=\"0 0 20 37\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
            "<path d=\"M7.8868e-07 18.043C7.6041e-07 18.6898 0.240096 19.3364 0.719275 19.8295L15.8056 35.3457C16.7653 36.3327 18.3212 36.3327 19.2805 35.3457C20.2398 34.359 20.2398 32.7591 19.2805 31.7719L5.93131 18.043L19.2801 4.31407C20.2394 3.32703 20.2394 1.72721 19.2801 0.740665C18.3208 -0.246845 16.7648 -0.246845 15.8051 0.740665L0.718808 16.2566C0.23955 16.7499 8.16939e-07 17.3965 7.8868e-07 18.043Z\" fill=\"white\"/>\n" +
            "</svg>/button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"36\" viewBox=\"0 0 20 36\" fill=\"none\">\n" +
            "<path d=\"M20 17.543C20 18.1719 19.7599 18.8006 19.2807 19.28L4.19439 34.3662C3.23471 35.3259 1.67876 35.3259 0.719467 34.3662C-0.239823 33.4069 -0.239823 31.8512 0.719467 30.8915L14.0687 17.543L0.719932 4.19452C-0.239358 3.23484 -0.239358 1.67935 0.719932 0.720139C1.67922 -0.240006 3.23518 -0.240006 4.19485 0.720138L19.2812 15.8061C19.7604 16.2857 20 16.9145 20 17.543Z\" fill=\"white\"/>\n" +
            "</svg></button>"
    });

    jQuery('.box2').click(function (){
        jQuery('.boxes').addClass('biggest')
        jQuery(this).addClass('height')
    })
    jQuery('.box3').click(function (){
        jQuery('.boxes').removeClass('biggest')
        jQuery('.boxes').addClass('biggest2')
        jQuery(this).addClass('height')
    })
});


jQuery('.tab-content-wrapper-logo img').click(function ($){
    const id = jQuery(this).attr('data-id');
    jQuery('.content-item ').css('display',"none")
    jQuery(`.block-desc-${id}`).css('display','flex')

})




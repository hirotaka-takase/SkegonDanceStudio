jQuery(document).ready(function(){
// ハンバーガー
    var navFlg = false;
    $('.menu').on('click',function(){
        $('.menu__line').toggleClass('active');
        $('.gnav').fadeToggle();
        if(!navFlg){
            $('.gnav__menu__item').each(function(i){
                $(this).delay(i*300).animate({
                    'margin-left' : 0,
                    'opacity' : 1,
                },500);
            });
            navFlg = true;
        }
        else{
            $('.gnav__menu__item').css({
                'margin-left' : 100,
                'opacity' : 0,
            });
            navFlg = false;
        }
    });

// パララックス
    $('.parallax-window').parallax({imageSrc: './img/fv.jpg'});

// スクロールフワッと
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
                $(this).addClass('scrollin');
            }
        });
    });
});

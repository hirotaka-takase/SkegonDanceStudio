jQuery(document).ready(function(){
    $('.menu').on('click',function(){
        $('.menu__line').toggleClass('active');
        $('.gnav').fadeToggle();
    });
});
$(document).ready(function(){
    $(".menu-btn-top").on('click',function(){
        $(this).toggleClass("is-active");
        $(".munu-underTop ul").toggleClass("menu-op");
    });
});
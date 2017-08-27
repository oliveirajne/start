//Este script serve apenas para embelezar o site! Ele não interfere no funcionamento do Programa.php
if ($("#i1").hasClass('active')){
    $("#1").fadeIn();
} 
function mostrar(id, $this) {
    $(".conteudo").fadeOut();
    $(".item").removeClass('active');
    $(id).fadeIn();
    $this.addClass('active');
}
$('.item').click(function () {
    var id = $(this).html();
    var $this = $(this); 
    setTimeout(function () { mostrar(id, $this) }, 500);
}); 
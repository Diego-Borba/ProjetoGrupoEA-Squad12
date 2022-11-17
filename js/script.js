
$('.btnAbre').click(function () {
    debugger;
    $('.offcanvas').toggleClass('mostra');
});
$('.btn-close').click(function () {
    debugger;
    $('.offcanvas').toggleClass('mostra');
});

$(document).ready(function () {
    $('#tabela_chamados').DataTable({
        
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
        }
    });
    responsive: true
});

$(function () {
    $('table.table-hover tr').click(function () {
        window.location.href = $(this).data('url');
    });
})
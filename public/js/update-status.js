$(document).ready(function () {
    $(".change-status").click(function (e) { 
        const id = $(this).data('id')

        $('#report_id').val(id)
    });
})
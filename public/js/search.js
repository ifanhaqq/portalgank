$(document).ready(function () {

    let input = $('#searchInput')

    $(input).keyup(function (e) { 
        let value = $(this).val().toLowerCase()
        $('#reportsTable tbody tr').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        })
        console.log(value)
    });
})
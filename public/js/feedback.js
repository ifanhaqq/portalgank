$(document).ready(function () {
    const feedbackBtn = $('.feedback-btn')
    const feedbackContent = $('#feedback-content')
    const viewFeedback = $('.view-feedback-btn')

    $(feedbackBtn).click(function (e) { 
        // e.preventDefault();
        
        const id = $(this).data('id')

        $('#report_id').val(id)
    });
});
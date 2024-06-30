$(document).ready(function () {
    
    const articleDeleteBtn = $('.article-delete')

    articleDeleteBtn.click(function (event) {
        event.preventDefault()

        const id = $(this).data('id')

        Swal.fire({
            title: "Apa anda yakin ingin menghapus artikel ini?",
            showCancelButton: true,
            confirmButtonText: "Yes",
            confirmButtonColor: "#bd2f2f",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "http://127.0.0.1:8000/artikel/delete/" + id
            }
        })
    })
    

})



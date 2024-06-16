$(document).ready(function () {
    let currentIndex = 0
    const items = $('.custom-carousel-item')
    const totalItems = items.length
    const itemsPerPage = 3
    const nextBtn = $('#nextCarousel')
    const prevBtn = $('#prevCarousel')

    nextBtn.click(function () {
        if (currentIndex < totalItems - itemsPerPage) {
            currentIndex++
            updateCarousel()
        }
    })

    prevBtn.click(function () {
        if (currentIndex > 0) {
            currentIndex--
            updateCarousel()
        }
    })

    function updateCarousel() {
        const newTransform = -currentIndex * (100 / itemsPerPage)
        $('.custom-carousel-inner').css('transform', `translateX(${newTransform}%)`)

        prevBtn.prop('disabled', currentIndex === 0)
        nextBtn.prop('disabled', currentIndex >= totalItems - itemsPerPage)
    }

    updateCarousel()
})
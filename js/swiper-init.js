document.addEventListener('DOMContentLoaded', function () {
    // Zjistíme aktuální měsíc (1 = leden, 2 = únor, atd.)
    const currentMonth = new Date().getMonth(); // 0-based (leden = 0)

    // Inicializace SwiperJS
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // Automaticky přeskočíme na aktuální měsíc
    swiper.slideTo(currentMonth);
});

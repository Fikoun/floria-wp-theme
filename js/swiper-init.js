document.addEventListener('DOMContentLoaded', function () {
    // Zjistíme aktuální měsíc (1 = leden, 2 = únor, atd.)
    const currentMonth = new Date().getMonth(); // 0-based (leden = 0)
    // Inicializace SwiperJS
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: -1,
        centeredSlides: 1,
        activeIndex: currentMonth,

        on: {
            slideChange: function () {
                pickMonth(this.activeIndex);
            },
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
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

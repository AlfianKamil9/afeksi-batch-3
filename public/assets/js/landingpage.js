var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    autoplay: {
        delay: 3000, // Delay antara pergeseran slide dalam milidetik (misalnya, 3000 = 3 detik)
        disableOnInteraction: false, // Jangan hentikan autoplay setelah interaksi pengguna (default: true)
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        // renderBullet: function (index, className) {
        //     if (index < 4) {
        //         return '<span class="' + className + '"></span>';
        //     }
        //     return "";
        // },
        // dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        300: {
            slidesPerView: 1,
        },
        500: {
            slidesPerView: 1,
        },
        800: {
            slidesPerView: 2,
        },
        1010: {
            slidesPerView: 3,
        },
    },
});

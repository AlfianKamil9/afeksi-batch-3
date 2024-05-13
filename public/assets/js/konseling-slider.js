document.addEventListener("DOMContentLoaded", function() {
    const num = 5 || '{{ count($services) }}';
    let swiper = new Swiper(".slide-contents", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        autoplay: {
            delay: 500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: false,
            renderBullet: function(index, className) {
                if (index < num) {
                    return '<span class="' + className + '"></span>';
                }
                return "";
            },
        },

        breakpoints: {
            280: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1000: {
                slidesPerView: 3,
            },
        },
    });
    console.log(swiper);
    swiper.autoplay.start(); // Memulai ulang autoplay

    console.log(swiper.autoplay.running); // True jika autoplay berjalan

});

// Produtos Home
var swiper = new Swiper(".at-product-carousel", {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Produtos Home

// Accesories Home 
var swiper = new Swiper(".at-accessories__carousel", {
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Accesories Home 

// Testimony Home 
var swiper = new Swiper(".at-testimony__carousel", {
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Testimony Home 

// Testimony About 
var swiper = new Swiper(".about-testimonyCarousel", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
      },      
});
// Testimony About 


// Produto Shop

    var swiper2 = new Swiper(".at-shop__thumbs", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });


        var swiper = new Swiper('.at-shop__product__carousel', {
            loop: false,
            spaceBetween: 30,
                navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },

      thumbs: {
        swiper: swiper2,
      },
      
    });
    

    // Inicializar Magnific Popup
    $('.magnific-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        removalDelay: 300
    });
// Produto Shop


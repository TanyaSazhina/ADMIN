function testWebP(callback) {

    var webP = new Image();
    webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

    if (support == true) {
        document.querySelector('body').classList.add('webp');
    } else {
        document.querySelector('body').classList.add('no-webp');
    }
});
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
    loop: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    thumbs: {
        swiper: swiper,
    },
});
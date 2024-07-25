import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if (document.body.classList.contains("single-the-collection")) {

            var galleryThumbs = new Swiper(".swiper-thumbnails", {
                spaceBetween: 10,
                slidesPerView: 1,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                direction: 'vertical',
                breakpoints: {
                    640: {
                        slidesPerView: 6,
                    }
                }
            });
            
            var galleryTop = new Swiper(".swiper-collection", {
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs
                }
            });
		}

	}, false);
});
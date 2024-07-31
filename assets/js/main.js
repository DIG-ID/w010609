import "./swiper";
import "./the-collection";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';


const lenis = new Lenis({
  smooth: true,
  //infinite: true,
  //gestureDirection: 'both',
});

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time)=>{
  lenis.raf(time * 1000);
})

gsap.ticker.lagSmoothing(0)

gsap.registerPlugin(ScrollTrigger);


document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {



    if ( $(".page-template-page-home")[0] ) {
      //slider text
      var textSlider = document.querySelector(".text-slider");
      var sliderContent = document.querySelector(".text-slider-content");
      var numberOfCopies = 6;  // Number of times to append the content

      for (var i = 0; i < numberOfCopies; i++) {
        var sliderContent = sliderContent.cloneNode(true);
        textSlider.appendChild(sliderContent);
      }

      //slider text
      var textSliderMob = document.querySelector(".text-slider-mobile");
      var sliderContentMob = document.querySelector(".text-slider-mobile > .text-slider-content");
      var numberOfCopies = 6;  // Number of times to append the content

      for (var i = 0; i < numberOfCopies; i++) {
        var sliderContentMob = sliderContentMob.cloneNode(true);
        textSliderMob.appendChild(sliderContentMob);
      }

      //header shrink on scroll
      lenis.on( 'scroll',  ({ scroll }) => {
        var header = $('#header-home');
        var hero = $('.section-hero--right-wrapper');
        var scrollTop = $(window).scrollTop();
        var threshold = 0; 
        //var isSticky = header.hasClass('sticky');
      
        if (scrollTop > threshold) {
          //header.addClass('sticky');
          //maincontent.addClass( 'content-padding-top' );
          
  
          header.addClass('header-shrink');
          hero.addClass('header-shrink');
        } else if (scrollTop <= threshold) {
          //header.removeClass('sticky');
          //maincontent.removeClass( 'content-padding-top' );
          header.removeClass('header-shrink');
          hero.removeClass('header-shrink');
        }
      });
    }


    //header menu open/close - Hamburguer toggle
    const $toggleBtn = $('.menu-toggle')
    $toggleBtn.on('click', (e) => {

      if( $('#header-main, #header-home').hasClass( 'menu-open' ) ) {
        $('#header-main, #header-home').removeClass('menu-open');
        $('body').css('overflow', 'auto');
        $('.mega-menu').slideUp(700);
      } else {
        $('#header-main, #header-home').addClass('menu-open');
        $('body').css('overflow', 'hidden');
        $('.mega-menu').slideDown(700);
      }
    });

  }, false);
});



if ($(window).width() < 640) {

}
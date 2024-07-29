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

let mm = gsap.matchMedia();

// Initial animation timeline when we enter the website.
function initial_timeline() {

  var hero_tl = gsap.timeline({
    defaults: {
      opacity: 0,
      autoAlpha: 0
    }
  });
  hero_tl.from("#header-main", { y: -100, duration: 0.6})
    .from(".section-hero .fixed-assets__text--left", { x: -40, duration: 0.8 }, '<')
    .from(".section-hero .fixed-assets__text--right", { x: 40, duration: 0.8}, '<')
    .from(".section-hero .fixed-assets__numbers", {  opacity: 0, duration: 1 }, '<' )
    .from(".section-hero .hero-image", { y: 100, duration: 1 }, 0.4)
    .from(".section-hero .icons", { duration: 1, opacity: 0 }, 0.8)
    .from(".section-hero .brandname", { y: -80, duration: 1 }, 0.9)
    .from(".section-hero .available-text--01", { x: 80, duration: 1 }, 0.9)
    .from(".section-hero .available-text--02", { x: -80, duration: 1}, 0.9)
    .from(".section-hero .triangle", { duration: 2, opacity: 0 }, 0.9)
    .from(".section-hero .btn-cta-wrapper", { duration: 1, scale: 2, ease: "power4.inOut" }, 1);
}

window.addEventListener('load', function(event){
  initial_timeline();
  //ScrollTrigger.refresh();
});

// Animate the hero section

var hero_onScroll_tl = gsap.timeline({
  scrollTrigger: {
    trigger: '.section-hero',
    scrub: 1,
    start: 'center center',
    end: 'bottom top',
    toggleActions: 'play none none reset',
    //markers: true
  }, // start animation when ".box" enters the viewport
 });

//hero_onScroll_tl.to('.section-hero .hero-image', {y: -200, opacity: 0.5, duration: 2});
hero_onScroll_tl.to('.section-hero .brandname', {y: -200, opacity: 0, autoAlpha: 0, duration: 1})
  .to('.section-hero .available-text--01', {x: -200, opacity: 0, autoAlpha: 0, duration: 2}, '<')
  .to('.section-hero .available-text--02', {x: 200, opacity: 0, autoAlpha: 0, duration: 2}, '<')
  .to('.section-hero .triangle', { y: 40, opacity: 0, autoAlpha: 0, duration: 2 }, 1);

// Animate images on the middle section
gsap.from('.image-03', {
  scrollTrigger: {
    trigger: '.section-middle',
    scrub: 1,
    start: 'top center',
    end: '40% center',
   // markers: true
  }, // start animation when ".box" enters the viewport
  y: 500,
  opacity: 0,
  autoAlpha: 0,
  duration: 1,
});

gsap.from('.image-02', {
  scrollTrigger: {
    trigger: '.section-middle',
    scrub: 1,
    start: 'top 30%',
    end: 'bottom bottom',
    //markers: true
  }, // start animation when ".box" enters the viewport
  y: 500,
  opacity: 0,
  autoAlpha: 0,
  duration: 1,

});


// Animate the footer section


//mm.add("(min-width: 1280px)", () => {

  var footer_tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.section-footer',
      scrub: 1,
      start: 'top 30%',
      end: 'bottom bottom',
      toggleActions: 'play none none reset',
      //markers: true,
    },
   });
  
  footer_tl.from('.section-footer .image-04', {y: 200, opacity: 0, autoAlpha: 0, duration: 2})
    .from('.section-footer  .text-brandname-wrapper .icons', { opacity: 0, autoAlpha: 0, duration: 1 }, '<')
    .from('.section-footer .brandname', {y: -200, opacity: 0, autoAlpha: 0, duration: 2}, '<')
    .from('.section-footer .available-text--01', {x: -200, opacity: 0, autoAlpha: 0, duration: 3}, '<')
    .from('.section-footer .available-text--02', {x: 200, opacity: 0, autoAlpha: 0, duration: 3}, '<')
    .from('.section-footer .triangle', { y: 40, opacity: 0, autoAlpha: 0, duration: 1 }, 1);

//});

document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    //slider text
    var shopBtnSlider = document.querySelector(".text-slider");
    var shopBtnContent = document.querySelector(".text-slider-img");
    var numberOfCopies = 3;  // Number of times to append the content

    for (var i = 0; i < numberOfCopies; i++) {
        var shopBtnContentCopy = shopBtnContent.cloneNode(true);
        shopBtnSlider.appendChild(shopBtnContentCopy);
    }


    //header shrink on scroll
    $(window).on( 'scroll', function() {
      var header = $('#header-main');
      var hero = $('.hero');
      var logo = $('.header-logo');
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


    //header menu open/close - Hamburguer toggle
    const $toggleBtn = $('.menu-toggle')
    $toggleBtn.on('click', (e) => {

      if( $('#header-main').hasClass( 'menu-open' ) ) {
        $('#header-main').removeClass('menu-open');
        $('body').css('overflow', 'auto');
        $('.mega-menu').slideUp(700);
      } else {
        $('#header-main').addClass('menu-open');
        $('body').css('overflow', 'hidden');
        $('.mega-menu').slideDown(700);
      }
    });

  }, false);
});



if ($(window).width() < 640) {

}
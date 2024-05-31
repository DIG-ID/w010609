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
    .from(".section-hero .text-brandname-wrapper .icons", { duration: 1, opacity: 0 }, 0.8)
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

hero_onScroll_tl.to('.section-hero .hero-image', {y: -200, opacity: 0.5, duration: 2});
hero_onScroll_tl.to('.section-hero .brandname', {y: -200, opacity: 0, duration: 1}, '<');
hero_onScroll_tl.to('.section-hero .available-text--01', {x: -200, opacity: 0, duration: 2}, '<');
hero_onScroll_tl.to('.section-hero .available-text--02', {x: 200, opacity: 0, duration: 2}, '<');
hero_onScroll_tl.to(".section-hero .triangle", { y: 40, opacity: 0, duration: 2 }, 1);

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


mm.add("(min-width: 1280px)", () => {

  var footer_tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.section-footer',
      scrub: 1,
      start: '20% bottom',
      end: 'bottom bottom',
      toggleActions: 'play none none reset',
      markers: true,
    },
   });
  
  footer_tl.from('.section-footer .image-04', {y: -200, opacity: 0, autoAlpha: 0, duration: 2});
  footer_tl.from(".section-footer .text-brandname-wrapper .icons", { opacity: 0, autoAlpha: 0, duration: 1 });
  footer_tl.from('.section-footer .brandname', {y: -200, opacity: 0, autoAlpha: 0, duration: 2});
  footer_tl.from('.section-footer .available-text--01', {x: -200, opacity: 0, autoAlpha: 0, duration: 3});
  footer_tl.from('.section-footer .available-text--02', {x: 200, opacity: 0, autoAlpha: 0, duration: 3});
  footer_tl.from(".section-footer .triangle", { y: 40, opacity: 0, autoAlpha: 0, duration: 2 });

});

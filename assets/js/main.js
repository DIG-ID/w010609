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


// initial timeline for animations when we enter the website
var hero_tl = gsap.timeline({
 // repeat: 10,
  //repeatDelay: 0.1
});
hero_tl.from("#header-main", { y: -100, opacity: 0, autoAlpha: 0, duration: 1, ease: "power4.inOut"});
hero_tl.from(".section-hero .fixed-assets__numbers", { opacity: 0, scale: 2, duration: 2, ease: "power4.inOut" }, '<' );
hero_tl.from(".section-hero .fixed-assets__left", { y: 10, opacity: 0, duration: 1 }, 0.4);
hero_tl.from(".section-hero .fixed-assets__right", { y: 20, opacity: 0, duration: 1}, 0.6);
hero_tl.from(".section-hero .hero-image", { y: 100, opacity: 0, duration: 1 }, 0.7);
hero_tl.from(".section-hero .text-brandname-wrapper .icons", { opacity: 0, duration: 1 }, 0.8);
hero_tl.from(".section-hero .brandname", { y: -80, opacity: 0, duration: 1 }, 0.9);
//hero_tl.from(".btn-cta", { y: 80, opacity: 0, autoAlpha: 1, duration: 1 }, 0.9);
hero_tl.from(".section-hero .available-text-01", { x: 80, opacity: 0, duration: 1 }, 0.9);
hero_tl.from(".section-hero .available-text-02", { x: -80, opacity: 0, duration: 1}, 0.9);
hero_tl.from(".section-hero .triangles", { opacity: 0, duration: 1 }, 0.9);


// Animate the hero section

var hero_onScroll_tl = gsap.timeline({
  scrollTrigger: {
    trigger: '.section-hero',
    scrub: 1,
    start: 'center 48%',
    end: 'bottom center',
    //markers: true
  }, // start animation when ".box" enters the viewport
 });

hero_onScroll_tl.to('.section-hero .hero-image', {y: -200, duration: 2});
hero_onScroll_tl.to('.section-hero .brandname', {y: -200, opacity: 0, autoAlpha: 1, duration: 1}, '<');
hero_onScroll_tl.to('.section-hero .available-text-01', {x: -200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
hero_onScroll_tl.to('.section-hero .available-text-02', {x: 200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
hero_onScroll_tl.to(".section-hero .triangles", { y: 40, opacity: 0, duration: 2 }, 1);

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
var footer_tl = gsap.timeline({
  scrollTrigger: {
    trigger: '.section-footer',
    scrub: 1,
    start: 'top 40%',
    end: 'bottom bottom',
    //markers: true
  }, // start animation when ".box" enters the viewport
 });

footer_tl.from('.section-footer .image-04', {y: -200, opacity: 0, autoAlpha:0, duration: 2});
footer_tl.from(".section-footer .text-brandname-wrapper .icons", { opacity: 0, duration: 1 }, '<');
footer_tl.from('.section-footer .brandname', {y: -200, opacity: 0, autoAlpha: 1, duration: 1}, '<');
footer_tl.from('.section-footer .available-text-01', {x: -200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
footer_tl.from('.section-footer .available-text-02', {x: 200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
footer_tl.from(".section-footer .triangles", { y: 40, opacity: 0, duration: 2 }, 1);

/*import Cursor from './cursor';
import ButtonCtrl from './button';

// initialize custom cursor
const cursor = new Cursor(document.querySelector('.cursor'));
const button = new ButtonCtrl(document.querySelector('.btn-cta'));

button.on('enter', () => cursor.enter());
button.on('leave', () => cursor.leave());*/
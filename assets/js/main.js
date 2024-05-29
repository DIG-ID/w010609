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


// initial timeline for animtions when we enter the website
var hero_tl = gsap.timeline({
 // repeat: 10,
  //repeatDelay: 0.1
});
hero_tl.from("#header-main", { y: -100, opacity: 0, autoAlpha: 0, duration: 1, ease: "power4.inOut"});
hero_tl.from(".fixed-assets__numbers", { opacity: 0, scale: 2, duration: 2, ease: "power4.inOut" }, '<' );
hero_tl.from(".fixed-assets__left", { y: 10, opacity: 0, duration: 1 }, 0.4);
hero_tl.from(".fixed-assets__right", { y: 20, opacity: 0, duration: 1}, 0.6);
hero_tl.from(".hero-image", { y: 100, opacity: 0, duration: 1 }, 0.7);
hero_tl.from(".text-brandname-wrapper .icons", { opacity: 0, duration: 1 }, 0.8);
hero_tl.from(".brandname", { y: -80, opacity: 0, duration: 1 }, 0.9);
//hero_tl.from(".btn-cta", { y: 80, opacity: 0, autoAlpha: 1, duration: 1 }, 0.9);
hero_tl.from(".available-text-01", { x: 80, opacity: 0, duration: 1 }, 0.9);
hero_tl.from(".available-text-02", { x: -80, opacity: 0, duration: 1}, 0.9);
hero_tl.from(".triangles", { opacity: 0, duration: 1 }, 0.9);


// Animate the hero section

let heroElements = gsap.utils.toArray(".hero-image, .brandname, .available-text-01, .available-text-02")

var hero_onScroll_tl = gsap.timeline({
  scrollTrigger: {
    trigger: '.section-hero',
    scrub: 1,
    start: 'center 49%',
    end: 'bottom center',
    //markers: true
  }, // start animation when ".box" enters the viewport
 });

hero_onScroll_tl.to('.hero-image', {y: -200, duration: 2});
hero_onScroll_tl.to('.brandname', {y: -200, opacity: 0, autoAlpha: 1, duration: 1}, '<');
hero_onScroll_tl.to('.available-text-01', {x: -200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
hero_onScroll_tl.to('.available-text-02', {x: 200, opacity: 0, autoAlpha: 1, duration: 2}, '<');
hero_onScroll_tl.to(".triangles", { y: 40, opacity: 0, duration: 2 }, 1);

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
    start: 'center center',
    end: 'bottom bottom',
    //markers: true
  }, // start animation when ".box" enters the viewport
  y: 500,
  opacity: 0,
  autoAlpha: 0,
  duration: 1,

});

// Animate images on the middle section
gsap.from('.image-04', {
  scrollTrigger: {
    trigger: '.section-footer',
    scrub: 1,
    start: 'top center',
    end: '40% center',
    //markers: true
  }, // start animation when ".box" enters the viewport
  y: 500,
  opacity: 0,
  autoAlpha: 0,
  duration: 1,
});

/*import Cursor from './cursor';
import ButtonCtrl from './button';

// initialize custom cursor
const cursor = new Cursor(document.querySelector('.cursor'));
const button = new ButtonCtrl(document.querySelector('.btn-cta'));

button.on('enter', () => cursor.enter());
button.on('leave', () => cursor.leave());*/
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';





import Cursor from './cursor';
import ButtonCtrl from './button';

// initialize custom cursor
const cursor = new Cursor(document.querySelector('.cursor'));
const button = new ButtonCtrl(document.querySelector('.button'));

button.on('enter', () => cursor.enter());
button.on('leave', () => cursor.leave());
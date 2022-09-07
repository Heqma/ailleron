// Importing JavaScript
//
// You have two choices for including Bootstrap's JS files—the whole thing,
// or just the bits that you need.


// Option 1
//
// Import Bootstrap's bundle (all of Bootstrap's JS + Popper.js dependency)

// import 'bootstrap';


// Option 2
//
// Import just what we need

// If you're importing tooltips or popovers, be sure to include our Popper.js dependency
// import "popper.js/dist/popper.min.js";

import "bootstrap/js/dist/collapse";

import { createApp } from 'vue'
import VueJsCounter from './components/counter.vue';
import swiper from './components/carousel.vue';

const app = createApp()

app.component("counter", VueJsCounter)
app.component("carousel", swiper)

app.mount('main')
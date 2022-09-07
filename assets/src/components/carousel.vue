<template>
    <swiper class="swiper" :modules="modules" :space-between="30" :slides-per-view="1" :slides-per-group="1"
        :loop="true" :loop-fill-group-with-blank="true" :pagination="{ clickable: true }" :autoplay="{
            delay: 2000,
            disableOnInteraction: false
        }" :breakpoints="{
            '640': {
                slidesPerView: 2,
                spaceBetween: 20
            },
            '768': {
                slidesPerView: 3,
                spaceBetween: 40
            },
            '1024': {
                slidesPerView: 4,
                spaceBetween: 50
            },
            '1300': {
                slidesPerView: 6,
                spaceBetween: 50
            }
        }">
        <swiper-slide><a href="/tosoftware" title="software mind"><img src="/assets/images/webp/logo-software-mind.webp"
                    alt="software mind"></a></swiper-slide>
        <swiper-slide><a href="/toailleron" title="ailleron"><img src="/assets/images/webp/logo-ailleron.webp"
                    alt="Ailleron"></a></swiper-slide>
        <swiper-slide> <a href="/tolivebank" title="livebank"><img src="/assets/images/webp/logo-livebank24.webp"
                    alt="livebank"></a></swiper-slide>
        <swiper-slide><a href="/tosoftware" title="software mind"><img src="/assets/images/webp/logo-software-mind.webp"
                    alt="software mind"></a></swiper-slide>
        <swiper-slide><a href="/toailleron" title="ailleron"><img src="/assets/images/webp/logo-ailleron.webp"
                    alt="Ailleron"></a></swiper-slide>
        <swiper-slide> <a href="/tolivebank" title="livebank"><img src="/assets/images/webp/logo-livebank24.webp"
                    alt="livebank"></a></swiper-slide>
    </swiper>
</template>
  
<script>


import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
import { Autoplay } from 'swiper'
import 'swiper/css'

export default {
    name: 'App',
    components: {
        Swiper,
        SwiperSlide
    },
    setup() {
        return {
            modules: [Autoplay]
        }
    }
}
</script>

<style>
.swiper {
    max-width: 1252px;
    margin-top: 60px;
    margin-bottom: 50px;
}

.swiper-slide {
    text-align: center;
}
</style>
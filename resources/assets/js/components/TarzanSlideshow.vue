<template>
    <div class="main-carousel">
            <div v-for="slide in slides" class="carousel-cell carousel-bg-image" :data-flickity-bg-lazyload="slide"></div>
    </div>
</template>

<script>
    // Flickity
    const Flickity = require('flickity-imagesloaded'); 
    require('flickity-bg-lazyload');

    export default {
        data: function () {
            return {
              slides: ['/img/slides/tarzan-lorry-with-cocoa-bags.jpg','/img/slides/tarzan-reach-stacker.jpg']
            }
        },
        mounted: function(){
            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity( elem, {
                // options
                cellAlign: 'left',
                imagesLoaded: true,
                autoPlay: true,
                bgLazyLoad: true,
                contain: true
            });
        }
    }
</script>
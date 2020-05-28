<template lang="pug">
    div.carousel__container(:class="[$auth.check() ? 'carousel__container--auth':' ']")
        b-carousel(fade indicators )
            b-carousel-slide(caption="México verde y competitivo" img-src="../../images/slider/desktop/home_ren_01.jpg")
            b-carousel-slide(caption="Energía renovable para tu empresa" img-src="../../images/slider/desktop/home_ren_02.jpg")
        .icon-scroll

</template>

<style lang="scss" scoped>
.icon-scroll{
    position: absolute;
    height: 40px;
    width: 40px;
    left: 50%;
    bottom: 10px;
    background: transparent url(../../images/icon_scroll.png) 50% 50% no-repeat;
    background-size: 100% auto;
    -ms-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-animation: UpDown infinite 2s ease;
    -moz-animation: UpDown infinite 2s ease;
    -ms-animation: UpDown infinite 2s ease;
    -o-animation: UpDown infinite 2s ease;
    animation: UpDown infinite 2s ease;
    z-index: 10;
}
@keyframes UpDown {
    0% {
     bottom: 20px;
    }
    50% {
        bottom: 0;
    }
    100%{
        bottom: 20px;
    }
}
</style>

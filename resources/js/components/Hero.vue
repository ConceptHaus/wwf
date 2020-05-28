<template lang="pug">
    div.hero(:class="[$auth.check() ? 'hero--auth':' ']")
        img.img-fluid(:src="require(`../../images/acercade/desktop/${ImgSrc}`)")
        div.icon-scroll
</template>

<script>
export default {
    props:{
        ImgSrc:String
    }
}
</script>

<style lang="scss">
    .hero{
        &--auth{
            @include down-screen(mobile-big){
                margin-top: 100px;
            }
        }
    }
</style>

<template lang="pug">
    div.hero
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
    
</style>
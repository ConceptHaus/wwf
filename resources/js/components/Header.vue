<template lang="pug">
    div.fixed-top(v-if="!$auth.check()")
        .contaniner-fluid.header__background
            .row
                .col-12.text-center
                    p.header__p.m-0.py-3 {{$t('nav.banner')}} #[a.header__a(href="/registro") {{$t('nav.link')}}]
</template>
<script>
import Nav from './Nav'
export default {
    components:{
        Nav
    }
}
</script>
<style lang="scss">
.header{
    &__background{
        background-color: #eff7e6;
    }
    &__p{
        font-size: 18px;
    }
    &__a{
        color:#26a9e1;
        :hover{
            color: #8dc63f;
        }
    }
}
</style>

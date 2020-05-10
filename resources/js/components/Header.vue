<template lang="pug">
    div.fixed-top(v-if="!$auth.check()")
        .contaniner-fluid.header__background
            .row
                .col-12.text-center
                    p.header__p.m-0.py-3 Para conocer nuestra estrategia de compra de energía renovable #[a.header__a(href="#") Regístrate]
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

<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content(:class="[$auth.check() ? 'ruta__content--auth':' ']")
            div.container-fluid
                div.row.p-4
                    div.col-md-8.col-12
                        h1.home__h1.my-4.p-4 #[span] {{$t('strategy.title1')}}
                        p.my-4 {{$t('strategy.p1')}}

                div.row.py-4
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso.ruta__paso(href="/ruta-de-compra/1")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_01_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta1.title3')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/2")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_02_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta2.title7')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/3")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_03_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta3.title11')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/4")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_04_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta4.title14')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                div.row.mt-4.py-5
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/5")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_05_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta5.title17')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/6")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_06_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta6.title20')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/7")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_07_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text {{$t('strategy.ruta7.title23')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
                    div.col-md-3.col-12.my-4
                        a.d-block.ruta__paso(href="/ruta-de-compra/8")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_08_desk.jpg")
                            span.ruta__pasos--text {{$t('strategy.ruta8.title27')}}
                            span.ruta__pasos--more {{$t('strategy.read')}}
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
export default {
    components:{
        Header,
        Footer,
        Nav
    }
}
</script>
<style lang="scss" scoped>
    .ruta{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
            @include down-screen(mobile-big){
                background: none;
                padding: 0;
            }
        }
        &__content{
            margin-top:300px;
            @include down-screen(mobile-big){
                margin-top: 200px;
            }
           &--auth{
                @include down-screen(mobile-big){
                    margin-top: 100px;
                }
            }

        }
        &__paso{
            &:hover{
                img{
                    opacity: 1;
                }
                span{
                    color:#fff;
                }
            }
        }
        &__pasos{
            &--text{
               position: absolute;
               left: 45%;
               top: 50%;
               width: 70%;
               transform: translate(-50%, -50%);
               color:#000;
               @include down-screen(landscape){
                   font-size: .9rem;
                   width: 50%;
                   left: 45%;
               }
               @include down-screen(mobile-big){
                   left: 50%;
               }
               display: block;
            }
            &--more{
                position: absolute;
                bottom: 10%;
                color:#000;
                 @include down-screen(landscape){
                   bottom: 2%;
                }
                @include down-screen(mobile-big){
                    left: 40%;
                    bottom: 5%;
                }
                font-weight: bold;
                display: block;
                left: 10%;
            }
            &--img{
                max-width: 90%;
                opacity: .3;
                @include down-screen(mobile-big){
                    display: block;
                    margin: 0 auto;
                }
            }
        }
        i{
            position: absolute;
            right: 0;
            top: 50%;
            font-size: 2.5rem;
            color: #26a9e1;
            @include down-screen(mobile-big){
                    display: none;
            }
        }
    }
</style>

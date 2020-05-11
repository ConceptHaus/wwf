<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                div.row.p-4
                    div.col-8
                        h1.home__h1.my-4.p-4 #[span] Estrategia de compra
                        p.my-4 Siguiendo la Estrategia de Compra podrás definir en tan sólo ocho pasos una estrategia de abastecimiento de energía renovable para tu empresa. Ésta te facilitará la toma de decisiones sobre modalidades de suministro, diseño de licitaciones, evaluación de ofertas y elección de proveedores.

                div.row.py-4
                    div.col-3
                        a.d-block(href="/ruta-de-compra/1")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_01_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Analiza el consumo eléctrico y fija una meta de energía renovable
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/2")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_02_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Compara las alternativas de suministro de energía renovable
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/3")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_03_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Revisa las políticas de compras de tu empresa
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/4")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_04_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Asegura el compromiso de la dirección y otras áreas involucradas de la empresa
                            span.ruta__pasos--more Leer más...
                div.row.mt-4.py-5
                    div.col-3
                        a.d-block(href="/ruta-de-compra/5")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_05_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Cotiza, compara opciones y elige a tu proveedor
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/6")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_06_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Revisa las condiciones de compra y firma tu contrato
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/7")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_07_desk.jpg")
                            i.las.la-caret-right
                            span.ruta__pasos--text Prepara los aspectos asministrativos y técnicos necesarios para el suministro
                            span.ruta__pasos--more Leer más...
                    div.col-3
                        a.d-block(href="/ruta-de-compra/8")
                            img.img-fluid.ruta__pasos--img(src="../../images/ruta/ruta_08_desk.jpg")
                            span.ruta__pasos--text Monitorea y gestiona el suministro y sus resultados
                            span.ruta__pasos--more Leer más...
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
        }
        &__content{
            margin-top:300px;
        }
        &__pasos{
            &--text{
               position: absolute;
               left: 50%;
               top: 50%;
               width: 75%;
               transform: translate(-50%, -50%);
               color:#000;
               &:hover{
                   color:#fff;
               }
               display: block;
            }
            &--more{
                position: absolute;
                bottom: 10%;
                color:#000;
                &:hover{
                    color: #fff;
                }
                font-weight: bold;
                display: block;
                left: 10%;
            }
            &--img{
                max-width: 90%;
                opacity: .3;
                &:hover{
                    opacity:1;
                }
            }
        }
        i{
            position: absolute;
            right: 0;
            top: 50%;
            font-size: 2.5rem;
            color: #26a9e1;
        }
    }
</style>

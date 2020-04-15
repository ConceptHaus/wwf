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
                        img.img-fluid.w-75(src="../../images/ruta/ruta_01_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_02_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_03_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_04_desk.jpg")
                div.row.mt-4.py-5
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_05_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_06_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_07_desk.jpg")
                    div.col-3
                        img.img-fluid.w-75(src="../../images/ruta/ruta_08_desk.jpg")
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
<style lang="scss">
    .ruta{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
        }
        &__content{
            margin-top:300px;
        }
    }
</style>
<template lang="pug">
    div.recursos
        Header
        Nav.bg-header
        section.recursos__content
            div.container-fluid
            h1.home__h1.my-4.p-4 #[span] Recursos
            div.row.p-4
                div.col-md-6.col-12
                        div.row
                            div.col-md-6.col-12
                                img.img-fluid(src="../../images/noticias/noticia-01_desk.jpg")
                            div.col-md-6.col-12
                                h5.my-4 Cemento 100% Renovable, Una realidad en Argentina
                                p.my-4 La cementera Holcim consumirá electricidad de un parque solar en construcción ubicado en la provincia de Buenos Aires (Argentina).
                                a.text-right(href="#") Leer completo
                div.col-md-6.col-12
                    div.row
                        div.col-md-6.col-12
                            img.img-fluid(src="../../images/noticias/noticia-02_desk.jpg")
                        div.col-md-6.col-12
                            h5 Cemento 100% Renovable, Una realidad en Argentina
                            p Para Toyota la generación en sitio es la solución más apropiada para ahorrar y combatir su huella de carbono. ¿Cuál es tu solución?.
                            a.text-right(href="#") Leer completo
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
    .recursos{
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
        }

    }
</style>

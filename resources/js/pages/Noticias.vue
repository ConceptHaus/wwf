<template lang="pug">
    div.noticias
        Nav.bg-header
        section.noticas__content
            div.container-fluid
                h1 Noticias
                div.row
                    div.col-6
                        div.row
                            div.col-6
                                img.img-fluid(src="../../images/noticias/noticia-01_desk.jpg")
                            div.col-6
                                h5 Cemento 100% Renovable, Una realidad en Argentina
                                p La cementera Holcim consumirá electricidad de un parque solar en construcción ubicado en la provincia de Buenos Aires (Argentina).
                                a.text-right(href="#") Leer completo
                    div.col-6
                        div.row
                            div.col-6
                                img.img-fluid(src="../../images/noticias/noticia-02_desk.jpg")
                            div.col-6
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
    .noticias{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
        }  
    }
</style>
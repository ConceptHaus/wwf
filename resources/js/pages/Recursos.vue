<template lang="pug">
    div.recursos
        Nav.bg-header
        section.recursos__content
            div.container-fluid
            h1 Recursos
            div.row
                div.col-3
                    img(src="")
                    h5 Soluciones para la Compra de Energía Renovable 2019
                    p Con el objetivo de conectar directamente a los usuarios con los oferentes de energía renovable, presentamos información sobre los servicios y trayectoria de proveedores de energía renovable en las modalidades de generación distribuida,generación en sitio, generación a gran escala y suministro calificado. Además de información sobre empresas enfocadas en la asesoría en compra de energía...
                    button.btn.btn-success.btn-lg.btn-block Abrir
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
        }
    }
</style>
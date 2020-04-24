<template lang="pug">
    div.noticias
        Header
        Nav.bg-header
        section.noticias__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Catálogo de soluciones
                div.row.p-4.justify-content-center
                    div.col-10
                        p.mt-3 Con el objetivo de facilitar el acceso a energía renovable para grandes usuarios industriales y comerciales,  #[b WWF México]  ha trabajado en conjunto con  #[b Zumma Energy Consulting] en la elaboración de este catálogo de Soluciones para la Compra de Energía Renovable.
                        p Este esfuerzo se inserta dentro de las actividades de la iniciativa  #[b Ren mx]  y nace con el objetivo de conectar directamente a los usuarios con los oferentes de energía renovable en las modalidades de generación distribuida, generación en sitio, generación a gran escala y suministro calificado, así como con empresas enfocadas en la asesoría técnica, financiera y legal que sirven de soporte en la compra de energía.
                        p.mb-5 El catálogo incluye empresas con una sólida trayectoria en México y el mundo, y se actualizará anualmente para reflejar el dinamismo del sector. Te invitamos a descargarlo a través del siguiente botón:
                        a.btn.btn-lg.btn-primary(href="https://makkenbucket.s3.us-east-2.amazonaws.com/WWF_Ren+mx_Cata%CC%81logo+Soluciones+Compra+Energi%CC%81a+Renovable_VersionFinal.pdf", target="_blank") Descargar

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
    .noticias{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
        }  
        &__content{
            margin-top:300px;
        }
        a{color:white}
    }
</style>
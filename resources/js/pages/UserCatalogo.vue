<template lang="pug">
    div.noticias
        Header
        Nav.bg-header
        section.noticias__content(:class="[$auth.check() ? 'noticias__content--auth':' ']")
            div.container-fluid
                h1.home__h1.my-md-4.my-lg-4.p-4 #[span] Catálogo de soluciones
                div.row.p-4.justify-content-center
                    div.col-md-5.col-12
                        img.p-md-4.p-lg-4.img-fluid(:src="catalogo.img")
                    div.col-md-7.col-12.mt-md-4.mt-lg-4
                        p.mt-3 Con el objetivo de facilitar el acceso a energía renovable para grandes usuarios industriales y comerciales,  #[b WWF México]  ha trabajado en conjunto con  #[b Zumma Energy Consulting] en la elaboración de este catálogo de Soluciones para la Compra de Energía Renovable.
                        p Este esfuerzo se inserta dentro de las actividades de la iniciativa  #[b Ren mx]  y nace con el objetivo de conectar directamente a los usuarios con los oferentes de energía renovable en las modalidades de generación distribuida, generación en sitio, generación a gran escala y suministro calificado, así como con empresas enfocadas en la asesoría técnica, financiera y legal que sirven de soporte en la compra de energía.
                        p.mb-5 El catálogo incluye empresas con una sólida trayectoria en México y el mundo, y se actualizará anualmente para reflejar el dinamismo del sector. Te invitamos a descargarlo a través del siguiente botón:
                        a.btn.btn-lg.btn-primary(:href="catalogo.file", target="_blank") Descargar
                        AddCatalogo

        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
import AddCatalogo from '../components/AddCatalogo'
export default {
    data(){
        return{
            catalogo:[]
        }
    },
    components:{
        Header,
        Footer,
        Nav,
        AddCatalogo
    },
    async mounted(){
        await this.axios.get('/catalogo')
            .then(res=>{
                this.catalogo = res.data.catalogo;
                console.log(this.catalogo);
            })
    }
}
</script>

<style lang="scss">
    .noticias{
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
                        margin-top: 120px;
                    }
                }

        }
        //a{color:white}
    }
</style>

<template lang="pug">
    div.recursos
        Header
        Nav.bg-header
        section.recursos__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Recursos externos
                div.row.p-4
                    div.col-md-4.col-12(v-for="recurso in recursos" :key="recurso.id" v-if="recursos && recursos.length > 0")
                        img.img-fluid(:src="recurso.img")
                        h5.my-4 {{recurso.titulo}}
                        p.my-4 {{recurso.descripcion}}
                        a.text-right(:href="recurso.url") Leer completo
                    h2.text-center(v-else) No hay material disponible.

</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'

export default {
    data(){
        return{
            recursos:''
        }
    },
    async mounted(){
        await this.axios.get('/recursos')
            .then(res=>{
                this.recursos = res.data.recursos;
                console.log(this.recursos);
            })
    },
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

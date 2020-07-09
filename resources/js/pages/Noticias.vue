<template lang="pug">
    div.noticias
        Header
        Nav.bg-header
        section.noticias__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] {{$t('casesstudies')}}
                div.row.p-4
                    div.col-md-4.col-12(v-for="caso in casos" :key="casos.id" v-if="casos && casos.length > 0")
                        img.img-fluid.img-catalog.my-4(:src="caso.img")
                        h5.my-4 {{caso.titulo}}
                        p.my-4 {{caso.descripcion}}
                        a.text-right(:href="caso.url") Leer completo
                    h2.text-center(v-else) No hay material disponible.
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'

export default {
    data(){
        return{
            casos:''
        }
    },
    components:{
        Header,
        Footer,
        Nav
    },
    async mounted(){
        await this.axios.get('/casos')
            .then(res=>{
                this.casos = res.data.caso;
                console.log(this.casos)
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
        }
        &__content{
            margin-top:300px;
        }
    }
    .img-catalog{
        min-height: 350px;
    }
</style>

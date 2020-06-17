<template lang="pug">
    div.noticias
        Header
        Nav.bg-header
        section.noticias__content(:class="[$auth.check() ? 'noticias__content--auth':' ']")
            div.container-fluid
                h1.home__h1.my-md-4.my-lg-4.p-4 #[span] {{$t('catalogue.title')}}
                div.row.p-4.justify-content-center
                    div.col-md-5.col-12
                        img.p-md-4.p-lg-4.img-fluid(:src="catalogo.img")
                    div.col-md-7.col-12.mt-md-4.mt-lg-4
                        p.mt-3 {{$t('catalogue.p1')}}
                        p {{$t('catalogue.p2')}}
                        p.mb-5 {{$t('catalogue.p3')}}
                        a.btn.btn-lg.btn-primary(:href="catalogo.file", target="_blank") {{$t('catalogue.button')}}
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

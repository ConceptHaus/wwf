<template lang="pug">
    div.home
        Header
        Nav
        Slider
        section.home__quees
            div.container-fluid.p-md-5
                div.row.py-4
                    div.col-12.col-md-6.my-5
                        h1.home__h1.my-4 #[span] {{$t('home.title1')}}
                        p.my-4 {{$t('home.p1')}}
                        p.my-4 {{$t('home.p2')}}
                        router-link.btn.btn-lg.btn-primary(tag="button",to="acerca-de-ren") {{$t('home.button1')}}
                    div.col-12.col-md-6
                        img.img-fluid(src="../../images/home/ren_desk.jpg")
        section.home__estrategia
            div.container-fluid.p-4
                div.row.py-4
                    div.col-12.col-md-6.my-5
                        img.img-fluid(src="../../images/home/ren_01_desk.jpg")
                    div.col-12.col-md-6
                        h1.home__h1.my-4 #[span] {{$t('home.title2')}}
                        p.my-4 {{$t('home.p3')}}
                        p.my-4 {{$t('home.p4')}}
                        router-link.btn.btn-lg.btn-primary(tag="button",to="ruta-de-compra") {{$t('home.button2')}}
        section.home__recursos
            div.container-fluid.p-4
                div.row.py-4
                    div.col-12.col-md-6.my-5
                        h1.home__h1.my-4 #[span] {{$t('home.title3')}}
                        p.my-4 {{$t('home.p5')}}
                        router-link.btn.btn-lg.btn-primary(tag="button", to="recursos") {{$t('home.button3')}}
                    div.col-12.col-md-6
                        img.img-fluid(src="../../images/home/ren_02_desk.jpg")
        Footer

</template>

<script>
import Header from '../components/Header';
import Nav from '../components/Nav';
import Slider from '../components/Slider';
import Footer from '../components/Footer';
import Noticias from '../components/Noticias';
export default {
    components:{
        Header,
        Nav,
        Slider,
        Noticias,
        Footer
    }
}
</script>

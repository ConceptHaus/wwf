<template lang="pug">
    div.about
        Header
        Nav
        Hero(ImgSrc="banner.jpg")
        section.que-hacemos#quehacemos
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-12.col-md-6.my-5
                        h1.home__h1.my-4 #[span] {{$t('about.title1')}}
                        h4.my-4 {{$t('about.p1')}}
                        p.my-4 {{$t('about.p2')}}
                    div.col-12.col-md-6
                        img.img-fluid(src="../../images/home/img-quehacemos.jpg")
                div.row
                    div.col-12
                        h3 {{$t('about.p3')}}
                div.row.mt-5
                    div.col-12
                        div.row.my-4
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-01.jpg")
                            div.col-md-4.col-12.mt-4
                                h4 {{$t('about.p4')}}
                            div.col-md-4.col-12
                                p {{$t('about.p5')}}
                        div.row.my-4
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-02.jpg")
                            div.col-md-4.col-12.mt-4
                                h4 {{$t('about.p6')}}
                            div.col-md-4.col-12
                                p {{$t('about.p7')}}
                        div.row.my-4
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-03.jpg")
                            div.col-md-4.col-12.mt-4
                                h4 {{$t('about.p8')}}
                            div.col-md-4.col-12
                                p {{$t('about.p9')}}
        section.sumate#sumate
            div.container-fluid.px-5
                div.row.py-4
                    div.col-md-8.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('about.title2')}}
                        p.my-4 {{$t('about.p10')}}
                    div.col-md-4.col-12
                        img.img-fluid.w-75.my-0.mx-auto.p-5.d-none.d-sm-block(src="../../images/home/sumate-01.png")
                div.row.justify-content-center
                    div.col-md-4.col-12
                        img.img-fluid.w-75.p-3.d-none.d-sm-block(src="../../images/home/sumate-02.png")
                    div.col-md-6.col-12
                        h3 {{$t('about.p11')}}
                        ul
                            li {{$t('about.list1')}}
                            li {{$t('about.list2')}}
                            li {{$t('about.list3')}}
                            li {{$t('about.list4')}}
                                ul
                                    li {{$t('about.list5')}}
                                    li {{$t('about.list6')}}
                                    li {{$t('about.list7')}}
                                    li {{$t('about.list8')}}
                                    li {{$t('about.list9')}}
                div.row.justify-content-center.py-5
                    div.col-md-8.col-12.text-center
                        p.my-4 {{$t('about.p12')}}
                        router-link.btn.btn-primary.btn-lg.mb-4(tag="button", to="contacto") {{$t('about.button')}}
        section.beneficios#beneficios
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('about.title3')}}
                        p.my-4 {{$t('about.p13')}}
                        h3.my-4 {{$t('about.p14')}}
                        ul
                            li {{$t('about.list10')}}
                            li {{$t('about.list11')}}
                            li {{$t('about.list12')}}
                            li {{$t('about.list13')}}
                            li {{$t('about.list14')}}
                            li {{$t('about.list15')}}
                            li {{$t('about.list16')}}
                        p {{$t('about.p15')}}
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/home/img-beneficios.jpg")
        section.socios#empresas
            div.container-fluid.p-3.p-md-4
                div.row.py-4
                    div.col-md-12.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('about.title4')}}
                        p.my-4 {{$t('about.p16')}}
                        slick(ref="slick" :options="slickOptions")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/TetraPack.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Soriana.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Samsung.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Royal-Holiday.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/PUMA.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Nestle.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Liverpool.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/HSBC.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Herdez.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Modelo.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Gerdau-Corsa.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/FUNO.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Faurecia.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/C&A.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Cuprum.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/CMR.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Cemex.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Banamex.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Baker.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Auto.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Audi.jpg")
                        p.my-4 {{$t('about.p17')}}
                        p.my-4 {{$t('about.p18')}}
        section.wwf#wwf
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('about.title5')}}
                        p.my-4 {{$t('about.p19')}}
                        p.my-4 {{$t('about.p20')}}
                        p.my-4 {{$t('about.p21')}}
                        h3 {{$t('about.p22')}}
                        ul
                            li {{$t('about.list17')}}
                            li {{$t('about.list18')}}
                            li {{$t('about.list19')}}
                        h3 {{$t('about.p23')}}
                        a(href="www.wwf.org.mx", target="_blank") www.wwf.org.mx
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/home/ren_03_desk.jpg")
        section.equipo#equipo
            div.container-fluid.p-3.p-md-4
                div.row.py-4
                    div.col-md-4.col-11.my-5
                        img.img-fluid(src="../../images/home/luli-pequeira.png")
                    div.col-md-8.col-12
                        h3.my-4 Luli Pesqueira
                        p.my-4 {{$t('about.p25')}}
                        p.my-4 {{$t('about.p26')}}
                div.row
                    div.col-md-4.col-12
                        img.img-fluid.avatar(src="../../images/home/guillermo.png")
                    div.col-md-8.col-12
                        h3.my-4 Guillermo Punzo
                        p.my-4 {{$t('about.p28')}}
                        p.my-4 {{$t('about.p29')}}
                div.row
                    div.col-md-4.col-12
                        img.img-fluid(src="../../images/home/ninel-escobar.png")
                    div.col-md-8.col-12
                        h3.my-4 Ninel Escobar
                        p.my-4 {{$t('about.p31')}}
                        p.my-4 {{$t('about.p32')}}
        Footer
</template>

<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'
import Slick from 'vue-slick';
export default {
    data(){
        return {
            slickOptions:{
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }
    },
    components:{
        Header,
        Hero,
        Slick,
        Nav,
        Footer
    }
}
</script>
<style lang="scss" scoped>
@import "~slick-carousel/slick/slick.css";
@import "~slick-carousel/slick/slick-theme.css";
</style>

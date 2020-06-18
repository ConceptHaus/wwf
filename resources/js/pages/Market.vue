<template lang="pug">
    div.market
        Header
        Nav
        Hero(ImgSrc="bannerm.jpg")
        section.mem#mem
            div.continer-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('market.title1')}}
                        p.my-4 {{$t('market.p1')}}
                        p.my-4 {{$t('market.p2')}}
                        p.my-4 {{$t('market.p3')}}
                        ul
                            li {{$t('market.list1')}}
                            li {{$t('market.list2')}}
                            li {{$t('market.list3')}}
                        p {{$t('market.p4')}}
                        p {{$t('market.p5')}}
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/mercado/el-mem.jpg")
        section.tendencias#tendencias
            div.container-fluid.p-3.p-md-5
                h1.home__h1.my-4 #[span] {{$t('market.title2')}}
                div.row.py-4
                    div.col-md-8.col-12
                        p.my-4 {{$t('market.p6')}}
                        p.my-4 {{$t('market.p7')}}
                        p.my-4 {{$t('market.p8')}}
                div.row.justify-content-center
                    div.col-md-8.col-12
                        img.img-fluid(src="../../images/mercado/grafica-01.png")
        section.usuarios-finales#usuarios
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-8.col-12
                        h1.home__h1.my-4 #[span] {{$t('market.title3')}}
                        p.my-4 {{$t('market.p9')}}
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-01.jpg")
                    div.col-md-8.col-12
                        h3.my-4 {{$t('market.p10')}}
                        p.my-4 {{$t('market.p11')}}
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-02.jpg")
                    div.col-md-8.col-12
                        h3.my-4 {{$t('market.p12')}}
                        p.my-4 {{$t('market.p13')}}
                        p.my-4 {{$t('market.p14')}}
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-03.jpg")
                    div.col-md-8.col-12
                        h3.my-4 {{$t('market.p15')}}
                        p.my-4 {{$t('market.p16')}}
        section.opciones-compra#opciones
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-7.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('market.title4')}}
                        h3.my-4 {{$t('market.p17')}}
                        h4.my-4 {{$t('market.p18')}}
                        p.my-4 {{$t('market.p19')}}
                        h4.my-4 {{$t('market.p20')}}
                        p.my-4 {{$t('market.p21')}}
                        h4.my-4 {{$t('market.p22')}}
                        p.my-4 {{$t('market.p23')}}
                        h3.my-4 {{$t('market.p24')}}
                        h4.my-4 {{$t('market.p25')}}
                        p.my-4 {{$t('market.p26')}}
                        h4.my-4 {{$t('market.p27')}}
                        p.my-4 {{$t('market.p28')}}
                        h4.my-4 {{$t('market.p29')}}
                        p.my-4 {{$t('market.p30')}}
                    div.col-md-5.col-12
                        img.img-fluid(src="../../images/mercado/opciones.jpg")
                div.row.justify-content-center
                    div.col-md-10.col-12.py-5
                        img.img-fluid(src="../../images/mercado/opciones-01.jpg")
        Footer
</template>
<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'

export default {
    components:{
        Header,
        Hero,
        Nav,
        Footer
    }
}
</script>

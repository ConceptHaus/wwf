<template lang="pug">
    div.home
        Header
        Nav
        Slider
        section.home__quees
            div.container-fluid.p-5
                div.row.py-4
                    div.col-6.my-5
                        h1.home__h1.my-4 #[span] ¿Qué es Ren mx?
                        p.my-4 #[strong Ren mx] ayuda al sector empresarial mexicano a ser más competitivo a través del consumo de energía renovable, descarbonizando sus operaciones y aumentando la proporción de fuentes renovables en la red eléctrica de México.
                        p.my-4 Invitamos a todas las empresas que operan en México a tomar medidas ambiciosas y rápidas para aumentar su productividad por medio del suministro de energía renovable, la eficiencia energética y el establecimiento de objetivos de reducción de emisiones.
                        button.btn.btn-lg.btn-primary Más sobre Ren mx
                    div.col-6
                        img.img-fluid(src="../../images/home/ren_desk.jpg")
        section.home__estrategia
            div.container-fluid.py-4
                div.row.py-4
                    div.col-6.my-5
                        img.img-fluid(src="../../images/home/ren_01_desk.jpg")
                    div.col-6
                        h1.home__h1.my-4 #[span] Estrategia de compra
                        p.my-4 Ren mx es una plataforma empresarial dedicada a agilizar y acelerar la compra de energía renovable a gran escala.
                        p.my-4 Siguiendo un proceso de tan sólo ocho pasos, las empresas obtienen acceso a guías y herramientas diseñadas para definir una estrategia de abastecimiento de energía renovable, facilitando la toma de decisiones sobre modalidades de suministro, diseño de licitaciones, evaluación de ofertas y elección de proveedores.
                        button.btn.btn-lg.btn-primary Conoce los 8 pasos
        section.home__recursos
            div.container-fluid.py-4
                div.row.py-4
                    div.col-6.my-5
                        h1.home__h1.my-4 #[span] Recursos
                        p.my-4 Ponemos a tu dispocisión una compilación de materiales relevantes que ayudarán a tu empresa a alcanzar un suministro de energía renovable de manera eficiente y confiable.
                        button.btn.btn-lg.btn-primary Conoce los recursos
                    div.col-6
                        img.img-fluid(src="../../images/home/ren_02_desk.jpg")
        Noticias
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
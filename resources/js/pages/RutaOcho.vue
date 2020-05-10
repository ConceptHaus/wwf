<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 8 Monitorea y gestiona el suministro y sus resultados
                .row
                    .col-12
                        p Como parte de la operación deberás realizar actividades periódicas para la correcta y óptima operación del suministro de energía renovable, así como el monitoreo del desempeño.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Prevé el consumo de tus centros de carga y reportarlo a tu suministrador de energía renovable.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Define tus requerimientos de CEL con base en tus objetivos independientes (voluntario) y en sus requisitos obligatorios conforme a la CRE (compromiso).
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Revisa y monitorea el cumplimiento de objetivos (financieros y contables, riesgos, sostenibilidad, relaciones con inversionistas, etc.) con respecto al consumo eléctrico y las emisiones asociadas.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Amplia tu estrategia de suministro de energía renovable, aumentando las metas de la empresa y buscando un portafolio energético óptimo.
                .row
                    .col-12
                        h1.home__h1.my-4.p-4 #[span] Otros materiales
        Pasos
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
import Pasos from '../components/Pasos'
export default {
    components:{
        Header,
        Footer,
        Nav,
        Pasos
    }
}
</script>

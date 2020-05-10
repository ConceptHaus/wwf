<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 7 Prepara los aspectos administrativos y técnicos necesarios para el suministro
                .row
                    .col-12
                        p La pre-operación implica llevar a cabo los trámites administrativos y cumplir los requerimientos técnicos necesarios. Puedes comenzar con este paso incluso antes de firmar un contrato, te ahorrará tiempo para comenzar operaciones con tu nuevo suministrador. Tu suministrador puede ayudarte a realizar algunas de las siguientes actividades.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Registra como usuario calificado a los centros de carga que apliquen, revisa el paso 1.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Procede a instalar los medidores o el hardware necesario para cumplir con los requerimiento técnicos.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Firma los contratos con CFE Distribución o Transmisión según el voltaje de línea al que requiera conectarse cada centro de carga.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Diseña el proceso de pronóstico de consumo de energía, involucra al área de operaciones. Al mismo tiempo diseña un mecanismo para otorgarle esta información a tu nuevo suministrador de energía.
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

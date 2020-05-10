<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 2 Compara las alternativas de suministro de energía renovable
                .row
                    .col-12
                        p En este paso podrás comparar y elegir una o varias modalidades de suministro de electricidad renovable. La selección de una u otra opción dependerá del tipo de usuario (básico o calificado), así como de los objetivos económicos y de energía renovable que haya fijado la empresa.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Investiga los procedimientos y requerimientos específicos de cada alternativa de suministro de electricidad renovable.
                                .row
                                    .col-6
                                        button.m-3.btn.btn-primary.btn-lg.btn-block Generación Local y Abasto Aisaldo
                                    .col-6
                                        button.m-3.btn.btn-primary.btn-lg.btn-block Subastas de Mediano y Largo Plazo
                                    .col-6
                                        button.m-3.btn.btn-primary.btn-lg.btn-block Contratos Bilaterales
                                    .col-6
                                        button.m-3.btn.btn-primary.btn-lg.btn-block Generación Distribuida
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Compara las ventajas y desventajas de cada modalidad.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Elige la(s) alternativa(s) que se mejor se adapten a las necesidades y restricciones de tu empresa, así como al porcentaje de energía renovable que asignaste.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Comienza a identificar a posibles proveedores.
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

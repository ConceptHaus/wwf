<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 3 Revisa las políticas de compras, financieras y contables de tu empresa
                .row
                    .col-12
                        p En esta fase, es necesario que te involucres con otras área de tu empresa para conocer los procedimientos y políticas de compras, finanzas y contabilidad para conocerlos y tomarlos en cuenta al emitir una licitación. Será importante asegurarte de que estos criterios estén alineados con las condiciones del suministro seleccionado.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Define a un responsable(s) de gestionar el suministro de energía renovable. Puedes utilizar el capital humano de áreas ya establecidas (e.j. compras o mantenimiento) ó crear una nueva área o comité designado a la gestión energética.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Identifica, en conjunto con otras áreas relevantes (finanzas, compras, Dirección), las restricciones y requerimientos de contrataciones/abastecimiento de tu empresa. Algunos ejemplos son: tipo de moneda, periodo de contratación, políticas de pago, beneficios fiscales, políticas de inversión de capital (CAPEX), etc.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Diseña del proceso de adquisición de energía, incluyendo la licitación del suministro(s) de energía elegido(s) y la identificación de proveedores potenciales.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Con base en la estrategia de la compañía, diseña los indicadores clave para medir el desempeño del suministro eléctrico con el fin de poder monitorear y medir los resultados obtenidos.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 5
                            .col-6
                                p Establece los mecanismos y responsables de la medición del desempeño del suministro y los procedimientos derivados para mantener un control de calidad.
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

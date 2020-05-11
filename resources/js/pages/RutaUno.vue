<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 1 Analiza la situación actual (energía y costo) y define un porcentaje de energía renovable
                .row
                    .col-12
                        p Este paso consiste en realizar un diagnóstico del consumo histórico de energía de la empresa y los costos asociados. Además, en este paso es indispensable fijar el porcentaje mínimo de electricidad renovable que se desea adquirir. Toda esta información será clave para definir las necesidades de la empresa y guiar tus decisiones de compra.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Analiza la información histórica de todos puntos de consumo (centros de carga) de la empresa. Utiliza la herramienta Análisis de Consumo Eléctrico para registrar las mediciones históricas del consumo de energía (en kWh o MWh) y el tipo de tarifas en el que actualmente está contratada la empresa, según lo indicado en los recibos de CFE. Para obtener un panorama completo, registra el consumo de los últimos 12 meses de cada centro de carga.
                                a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/Analisis_de_consumo_electrico.xlsm" target="_blank") #[i.las.la-cloud-download-alt] Análisis de consumo eléctrico
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p A partir de la información obtenida en el punto anterior, determina qué centros de carga pueden registrarse como usuario calificado y cuáles deberán de permanecer como usuario básico. Recuerda que los usuarios básicos también tienen opciones para obtener energía renovable.
                                a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/paso1.2.jpg" target="_blank") #[i.las.la-cloud-download-alt] Clasificación de centros de carga
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Fija el porcentaje mínimo deseado de suministro de electricidad renovable a partir de las metas establecidas en la estrategia energética y de sostenibilidad de la empresa. Esto te permitirá diversificar tu portafolio de suministro, dirigir tus esfuerzos y medir el desempeño a mediano/largo plazo e informar a los consumidores sobre las contribuciones ambientales y sociales de tu empresa.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Registra a los centros de carga que fueron identificados como usuario calificado. Hacer esto ahora, te ahorrará tiempo más adelante.
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

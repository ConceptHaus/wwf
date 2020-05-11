<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 5 Cotiza, compara opciones y elige a tu proveedor
                .row
                    .col-12
                        p Una vez que la empresa se encuentre lista para iniciar el proceso de compra, solicita formalmente, y de forma clara y transparente, una cotización o propuesta (RFP, por sus siglas en inglés) a los potenciales proveedores de energía renovable. Posteriormente, procede a evaluar y comparar bajo los mismos términos y condiciones las propuestas de cada proveedor.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Antes de elaborar tu solicitud (RFP), confirma los requerimientos de la empresa en materia regulatoria en cuanto a potencia y CEL, así como la cantidad de electricidad a contratar y el lapso mínimo y máximo del contrato.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Utiliza la herramienta Solicitud de Propuesta para preparar tu licitación y agregar la información requerida (utiliza la información que obtuviste en el Paso 1 y en la actividad anterior para saber con precisión los volúmenes de energía y productos que necesitas contratar). Como parte del proceso de licitación, tendrás que organizar sesiones de preguntas y respuestas para aclarar las dudas de los proveedores que estén interesados en participar, también deberás proveer más información sobre el consumo de cada centro de carga.
                                a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/Solicitud-de-Propuesta-(RFP).-PPA.docx" target="_blank") #[i.las.la-cloud-download-alt] Solicitud de propuesta (RFP). PPA
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Una vez recibidas las ofertas de los suministradores, compáralas utilizando los mismos términos y condiciones con la ayuda de la herramienta Comparativo de Ofertas de Suministro. Si tienes dudas sobre las propuestas, puedes solicitar apoyo del equipo de Ren mx.
                                a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/Comparativo-de-propuestas.-PPA.xlsx" target="_blank") #[i.las.la-cloud-download-alt] Comparativo de propuestas. PPA
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Acota a los proveedores que hayan presentado las ofertas más atractivas en una “lista corta” y solicita información más detallada sobre su propuesta. Cita a los proveedores elegidos para revisar los detalles y aclarar dudas sobre cada oferta. A partir de este análisis más profundo de cada ofertas, podrás definir al proveedor seleccionado para el suministro de energía renovable ¡Será tu aliado de ahora en adelante!
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

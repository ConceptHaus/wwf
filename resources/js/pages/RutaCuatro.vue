<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 4 Asegura el compromiso de la dirección y otras áreas involucradas de la empresa
                .row
                    .col-12
                        p Este paso consiste en asegurar el compromiso de la Dirección y el resto de las áreas involucradas en el proceso de compra. Contar con su apoyo y convicción es de vital importancia para concretar todas las fases del proceso.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Asegura el involucramiento temprano de la Dirección y las áreas involucradas
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Comunica de forma clara y efectiva los beneficios y riesgos de la(s) modalidad(es) de compra de electricidad renovable seleccionada
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Planea una campaña de comunicación interna y externa que resalte el hecho de que sus productos o servicios están hechos con energía renovable.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Confirma que el reporte de sostenibilidad, el sitio web de la empresa, los comunicados a inversionistas y otros medios clave de la empresa incluirá información sobre su consumo de energía renovable.
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

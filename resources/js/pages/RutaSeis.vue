<template lang="pug">
    div.ruta
        Header
        Nav.bg-header
        section.ruta__content
            div.container-fluid
                .row
                    .col-8
                        h1.home__h1.my-4.p-4 #[span] 6 Revisa las condiciones de compra y firma tu contrato
                .row
                    .col-12
                        p Define los términos, las condiciones y detalles de compra a establecer en el contrato de suministro.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 1
                            .col-6
                                p Comienza por revisar la guía Elaboración de contratos de compra de energía eléctrica (PPA)
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 2
                            .col-6
                                p Identifica aspectos relevantes de la oferta seleccionada que no son compatibles con los requerimientos de tu empresa, determina el grado posible de negociación y evalúa los riesgos que potencialmente conllevan.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 3
                            .col-6
                                p Define el primer modelo de contrato. Puedes desarrollar un contrato de suministro o revisar la propuesta del proveedor de energía que elegiste. Puedes pedir ayuda al área legal de tu empresa o contratar una firma de abogados, también puedes contactar a la iniciativa Ren mx.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 4
                            .col-6
                                p Revisa, valida y negocia los términos y condiciones contenidos en el contrato con tu suministrador de energía renovable. Cuenta con el apoyo de todas las áreas involucradas para la firma exitosa del mismo.
                    .col-12
                        .row.justify-content-center
                            .col-1
                                h1 5
                            .col-6
                                p Cuando te sientas cómodo con las condiciones, obtén las autorizaciones pertinentes dentro de tu empresa y procede a la firma del contrato.
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

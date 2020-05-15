<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
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
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Comienza por revisar la guía Elaboración de contratos de compra de energía eléctrica (PPA)
                                a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/Guia.Elaboracion_de_contratos_de_compra_de_energia.-PPA.pdf" target="_blank") #[i.las.la-cloud-download-alt] Guía de Elaboración de contratos de compra de energía. PPA
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Identifica aspectos relevantes de la oferta seleccionada que no son compatibles con los requerimientos de tu empresa, determina el grado posible de negociación y evalúa los riesgos que potencialmente conllevan.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Define el primer modelo de contrato. Puedes desarrollar un contrato de suministro o revisar la propuesta del proveedor de energía que elegiste. Puedes pedir ayuda al área legal de tu empresa o contratar una firma de abogados, también puedes contactar a la iniciativa Ren mx.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Revisa, valida y negocia los términos y condiciones contenidos en el contrato con tu suministrador de energía renovable. Cuenta con el apoyo de todas las áreas involucradas para la firma exitosa del mismo.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 5
                            .col-6.my-4
                                p.ruta_inner__p Cuando te sientas cómodo con las condiciones, obtén las autorizaciones pertinentes dentro de tu empresa y procede a la firma del contrato.
                                AddMaterial(:ruta="ruta",@update-recursos="updateRecursos")
                .row
                    .col-12
                        h1.home__h1.my-4.p-4(v-if="recursos.length>0") #[span] Otros materiales
                        .material(v-for="recurso in recursos", :key="recurso.id")
                            p {{recurso.titulo}}
        Pasos
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
import Pasos from '../components/Pasos'
import AddMaterial from '../components/AddMaterial'
export default {
    data(){
        return{
            ruta:6,
            recursos:[]
        }
    },
    async mounted(){
        await this.axios.get(`/recursos/rutas/${this.ruta}`)
        .then(res=>{
            this.recursos = res.data.recursos;
            console.log(this.recursos);
        })
    },
    methods:{
        updateRecursos(e){
            this.recursos.push(e);
            console.log('emit',e)
        }
    },
    components:{
        Header,
        Footer,
        Nav,
        Pasos,
        AddMaterial
    }
}
</script>

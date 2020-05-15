<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
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
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p Investiga los procedimientos y requerimientos específicos de cada alternativa de suministro de electricidad renovable.
                                .row
                                    .col-6.my-2
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/generacion_local.jpg" target="_blank") #[i.las.la-cloud-download-alt] Generación Local y Abasto Aisaldo
                                    .col-6.my-2
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/subasta.jpg" target="_blank") #[i.las.la-cloud-download-alt] Subastas de Mediano y Largo Plazo
                                    .col-6.my-2
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/contratos_bilaterales.jpg" target="_blank") #[i.las.la-cloud-download-alt] Contratos Bilaterales
                                    .col-6.my-2
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="#") #[i.las.la-cloud-download-alt] Generación Distribuida
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Compara las ventajas y desventajas de cada modalidad.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Elige la(s) alternativa(s) que se mejor se adapten a las necesidades y restricciones de tu empresa, así como al porcentaje de energía renovable que asignaste.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Comienza a identificar a posibles proveedores.
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
            ruta:2,
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

<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
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
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Prevé el consumo de tus centros de carga y reportarlo a tu suministrador de energía renovable.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Define tus requerimientos de CEL con base en tus objetivos independientes (voluntario) y en sus requisitos obligatorios conforme a la CRE (compromiso).
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Revisa y monitorea el cumplimiento de objetivos (financieros y contables, riesgos, sostenibilidad, relaciones con inversionistas, etc.) con respecto al consumo eléctrico y las emisiones asociadas.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Amplia tu estrategia de suministro de energía renovable, aumentando las metas de la empresa y buscando un portafolio energético óptimo.
                                AddMaterial(:ruta="ruta",@update-recursos="updateRecursos")
                .row
                    .col-12
                        h1.home__h1.my-4.p-44(v-if="recursos.length>0") #[span] Otros materiales
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
            ruta:8,
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

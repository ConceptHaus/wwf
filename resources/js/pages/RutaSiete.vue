<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
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
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Registra como usuario calificado a los centros de carga que apliquen, revisa el paso 1.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Procede a instalar los medidores o el hardware necesario para cumplir con los requerimiento técnicos.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Firma los contratos con CFE Distribución o Transmisión según el voltaje de línea al que requiera conectarse cada centro de carga.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Diseña el proceso de pronóstico de consumo de energía, involucra al área de operaciones. Al mismo tiempo diseña un mecanismo para otorgarle esta información a tu nuevo suministrador de energía.
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
            ruta:7,
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

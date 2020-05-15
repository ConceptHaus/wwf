<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
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
                            .col-1.my-4
                                h1.ruta_inner__number 1
                            .col-6.my-4
                                p.ruta_inner__p Define a un responsable(s) de gestionar el suministro de energía renovable. Puedes utilizar el capital humano de áreas ya establecidas (e.j. compras o mantenimiento) ó crear una nueva área o comité designado a la gestión energética.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 2
                            .col-6.my-4
                                p.ruta_inner__p Identifica, en conjunto con otras áreas relevantes (finanzas, compras, Dirección), las restricciones y requerimientos de contrataciones/abastecimiento de tu empresa. Algunos ejemplos son: tipo de moneda, periodo de contratación, políticas de pago, beneficios fiscales, políticas de inversión de capital (CAPEX), etc.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 3
                            .col-6.my-4
                                p.ruta_inner__p Diseña del proceso de adquisición de energía, incluyendo la licitación del suministro(s) de energía elegido(s) y la identificación de proveedores potenciales.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 4
                            .col-6.my-4
                                p.ruta_inner__p Con base en la estrategia de la compañía, diseña los indicadores clave para medir el desempeño del suministro eléctrico con el fin de poder monitorear y medir los resultados obtenidos.
                    .col-12
                        .row.justify-content-center
                            .col-1.my-4
                                h1.ruta_inner__number 5
                            .col-6.my-4
                                p.ruta_inner__p Establece los mecanismos y responsables de la medición del desempeño del suministro y los procedimientos derivados para mantener un control de calidad.
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
            ruta:3,
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
    components:{
        Header,
        Footer,
        Nav,
        Pasos,
        AddMaterial
    },
    methods:{
        updateRecursos(e){
            this.recursos.push(e);
            console.log('emit',e)
        }
    },
}
</script>

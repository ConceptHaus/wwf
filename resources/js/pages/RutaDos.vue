<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
            div.container-fluid
                .row
                    .col-md-8.col-12
                        h1.home__h1.my-4.p-4 #[span] 2 Compara las alternativas de suministro de energía renovable
                .row
                    .col-md-8.col-12
                        p En este paso podrás comparar y elegir una o varias modalidades de suministro de electricidad renovable. La selección de una u otra opción dependerá del tipo de usuario (básico o calificado), así como de los objetivos económicos y de energía renovable que haya fijado la empresa.
                .row.justify-content-center
                    .col-md-4.col-12.my-4
                        a.btn.btn-lg.btn-primary.my-5(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/opciones-01.jpg" target="_blank") #[i.las.la-cloud-download-alt] Modalidad de suministro eléctrico
                    .col-md-6.col-12.p-md-5#collapse
                        p Dado que los usuarios básicos no participan en el mercado eléctrico mayorista (MEM), éstos obtienen su electricidad a través de un suministrador de servicios básicos (SSB). Y, como opciones complementarias, pueden obtener un porcentaje de su electricidad de fuentes renovables a partir de la compra voluntaria de certificados de energía limpia (CEL) o de la generación en sitio, ya sea en la modalidad de generación distribuida (GD) o abasto aislado (AA).
                        b-collapse(id="collapse-1")
                            p En el extremo opuesto, los usuarios calificados participantes del mercado (UCPM) pueden acceder a todas las modalidades de suministro pero tienen que gestionar su consumo y participación en el MEM con un escritorio que opere 24/7.
                            p Una de las opciones de suministro de energía más atractiva para la mayoría de las empresas en México es el suministro calificado. En esta modalidad, la compra de energía se hace a través de un contrato bilateral, PPA (power purchase agreement) por sus siglas en inglés, con un suministrador de servicios calificados (SSC) que representa al usuario final ante el MEM y le provee electricidad renovable.
                        a.text-right.d-block(href="#collapse" v-b-toggle.collapse-1) Leer más
                    .col-12
                        h1.home__h1.my-4.p-4 #[span] Actividades
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 1
                            .col-md-6.col-12.my-4
                                p Investiga los procedimientos y requerimientos específicos de cada alternativa de suministro de electricidad renovable.
                                //- .row
                                //-     .col-6.my-2
                                //-         a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/generacion_local.jpg" target="_blank") #[i.las.la-cloud-download-alt] Generación Local y Abasto Aisaldo
                                //-     .col-6.my-2
                                //-         a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/subasta.jpg" target="_blank") #[i.las.la-cloud-download-alt] Subastas de Mediano y Largo Plazo
                                //-     .col-6.my-2
                                //-         a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/contratos_bilaterales.jpg" target="_blank") #[i.las.la-cloud-download-alt] Contratos Bilaterales
                                //-     .col-6.my-2
                                //-         a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(href="#") #[i.las.la-cloud-download-alt] Generación Distribuida
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso1", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="1", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 2
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Compara las ventajas y desventajas de cada modalidad.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso2", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="2", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 3
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Elige la(s) alternativa(s) que se mejor se adapten a las necesidades y restricciones de tu empresa, así como al porcentaje de energía renovable que asignaste.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso3", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="3", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 4
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Comienza a identificar a posibles proveedores.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso4", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="4", @update-button="updateButton")
                                AddMaterial(:ruta="ruta",@update-recursos="updateRecursos")
                .row
                    .col-12
                        h1.home__h1.my-4.p-4(v-if="recursos.length>0") #[span] Otros materiales
                .row
                    .col-12
                        .ruta_inner__material.d-inline-block(v-for="recurso in recursos", :key="recurso.id")
                            a(:href="recurso.file",target="_blank")
                                img.img-fluid.ruta_inner__icon(src="../../images/icons/img.svg", v-if="recurso.ext == 'png' || recurso.ext == 'jpg'")
                                img.img-fluid.ruta_inner__icon(src="../../images/icons/pdf.svg", v-if="recurso.ext == 'pdf'")
                                img.img-fluid.ruta_inner__icon(src="../../images/icons/word.svg", v-if="recurso.ext == 'doc' || recurso.ext == 'docx'")
                                img.img-fluid.ruta_inner__icon(src="../../images/icons/excel.svg", v-if="recurso.ext == 'xls' || recurso.ext == 'csv' || recurso.ext == 'xlsx'")
                                img.img-fluid.ruta_inner__icon(src="../../images/icons/power.svg", v-if="recurso.ext == 'ppt' || recurso.ext == 'pptx'")
                                p.ruta_inner__p--nobg.my-2.text-center.small {{recurso.titulo}}
        Pasos
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
import Pasos from '../components/Pasos'
import AddMaterial from '../components/AddMaterial'
import AddButton from '../components/AddButton'
export default {
    data(){
        return{
            ruta:2,
            buttons:[],
            recursos:[]
        }
    },
    async mounted(){
        await this.axios.get(`/recursos/rutas/${this.ruta}`)
        .then(res=>{
            this.recursos = res.data.recursos;
            console.log(this.recursos);
        })
        await this.axios.get(`/button/${this.ruta}`)
        .then(res=>{
            this.buttons = res.data.buttons;
            this.filterButtons();
        })
    },
    methods:{
        updateRecursos(e){
            this.recursos.push(e);
            console.log('emit',e)
        },
        updateButton(e, paso){
            this.buttons.push(e)
            this.filterButtons()
            console.log('Button emit',e, this.buttons)
        },
        filterButtons(){
            this.buttons.paso1 = this.buttons.filter(function(button){
                return button.innerpaso == 1;
            })
            this.buttons.paso2 = this.buttons.filter(function(button){
                return button.innerpaso == 2;
            })
            this.buttons.paso3 = this.buttons.filter(function(button){
                return button.innerpaso == 3;
            })
            this.buttons.paso4 = this.buttons.filter(function(button){
                return button.innerpaso == 4;
            })
        }
    },
    components:{
        Header,
        Footer,
        Nav,
        Pasos,
        AddMaterial,
        AddButton
    }
}
</script>
<style lang="scss" scoped>
    #collapse{
        background-image: -webkit-gradient(linear, left top, left bottom, from(#e3f3fb), to(#eff7e6));
    }
</style>

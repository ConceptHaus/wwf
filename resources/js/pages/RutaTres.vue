<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
            div.container-fluid
                .row
                    .col-md-8.col-12
                        h1.home__h1.my-4.p-4 #[span] 3 Revisa las políticas de compras, financieras y contables de tu empresa
                .row
                    .col-12
                        p En esta fase, es necesario que te involucres con otras área de tu empresa para conocer los procedimientos y políticas de compras, finanzas y contabilidad para conocerlos y tomarlos en cuenta al emitir una licitación. Será importante asegurarte de que estos criterios estén alineados con las condiciones del suministro seleccionado.
                        h1.home__h1.my-4.p-4 #[span] Actividades
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 1
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Define a un responsable(s) de gestionar el suministro de energía renovable. Puedes utilizar el capital humano de áreas ya establecidas (e.j. compras o mantenimiento) ó crear una nueva área o comité designado a la gestión energética.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso1", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="1", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 2
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Identifica, en conjunto con otras áreas relevantes (finanzas, compras, Dirección), las restricciones y requerimientos de contrataciones/abastecimiento de tu empresa. Algunos ejemplos son: tipo de moneda, periodo de contratación, políticas de pago, beneficios fiscales, políticas de inversión de capital (CAPEX), etc.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso2", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="2", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 3
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Diseña del proceso de adquisición de energía, incluyendo la licitación del suministro(s) de energía elegido(s) y la identificación de proveedores potenciales.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso3", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="3", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 4
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Con base en la estrategia de la compañía, diseña los indicadores clave para medir el desempeño del suministro eléctrico con el fin de poder monitorear y medir los resultados obtenidos.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso4", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="4", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 5
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p Establece los mecanismos y responsables de la medición del desempeño del suministro y los procedimientos derivados para mantener un control de calidad.
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso5", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="5", @update-button="updateButton")
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
            ruta:3,
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
    components:{
        Header,
        Footer,
        Nav,
        Pasos,
        AddMaterial,
        AddButton
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
            this.buttons.paso5 = this.buttons.filter(function(button){
                return button.innerpaso == 5;
            })
        }
    },
}
</script>

<template lang="pug">
    div.ruta_inner
        Header
        Nav.bg-header
        section.ruta_inner__content
            div.container-fluid
                .row
                    .col-md-8.col-12
                        h1.home__h1.my-4.p-4 #[span] {{$t('strategy.ruta2.title6')}}
                .row
                    .col-md-8.col-12
                        p {{$t('strategy.ruta2.p11')}}
                .row.justify-content-center
                    .col-md-4.col-12.my-4
                        a.btn.btn-lg.btn-primary.my-5(href="https://kiperbucket.s3.us-east-2.amazonaws.com/wwf/opciones-01.jpg" target="_blank") #[i.las.la-cloud-download-alt] Modalidad de suministro eléctrico
                    .col-md-6.col-12.p-md-5#collapse
                        p {{$t('strategy.ruta2.p12')}}
                        b-collapse(id="collapse-1")
                            p {{$t('strategy.ruta2.p13')}}
                            p {{$t('strategy.ruta2.p14')}}
                        a.text-right.d-block(@click="readMore()" href="#collapse" v-b-toggle.collapse-1) {{$t('strategy.read',{msg:msg})}}
                    .col-12
                        h1.home__h1.my-4.p-4 #[span] {{$t('strategy.ruta2.title8')}}
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 1
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p {{$t('strategy.ruta2.p15')}}
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso1", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="1", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 2
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p {{$t('strategy.ruta2.p16')}}
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso2", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="2", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 3
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p {{$t('strategy.ruta2.p17')}}
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso3", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="3", @update-button="updateButton")
                    .col-12
                        .row.justify-content-center
                            .col-3.col-md-1.my-4
                                h1.ruta_inner__number 4
                            .col-md-6.col-12.my-4
                                p.ruta_inner__p {{$t('strategy.ruta2.p18')}}
                                .row
                                    .col-6.my-2(v-for="item in buttons.paso4", :key="item.id")
                                        a.ruta_inner__button.btn.btn-primary.btn-lg.my-0.mx-auto.d-block(:href="item.file" target="_blank") #[i.las.la-cloud-download-alt] {{item.titulo}}
                                AddButton(:ruta="ruta", :paso="4", @update-button="updateButton")
                                AddMaterial(:ruta="ruta",@update-recursos="updateRecursos")
                .row
                    .col-12
                        h1.home__h1.my-4.p-4(v-if="recursos.length>0") #[span] {{$t('strategy.ruta2.title9')}}
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
            more:true,
            ruta:2,
            buttons:[],
            recursos:[],
            msg:'más'
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
        readMore(){
            if(this.more){
                this.more = false
                this.msg = 'menos'

            }else{
                this.more = true
                this.msg = 'mas'
            }
            console.log(this.more)
        },
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

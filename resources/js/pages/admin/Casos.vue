<template lang="pug">
    div.catalogo
        Header
        Nav.bg-header
        section.catalogo__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] {{$t('casesstudies')}}
                    div.row.p-4
                        div.col-12.my-5
                            button.btn.btn-primary.btn-lg(v-b-modal.addCatalog) Agregar caso de estudio o reporte
                        div.col-12.my-4
                            table.table.table-striped(v-if="casos && casos.length > 0")
                                thead.thead-dark.table-bordered
                                    tr
                                        th #
                                        th Título
                                        th Descripción
                                        th Acciones
                                tbody(v-for="(caso,index) in casos", :key="caso.id")
                                    tr
                                        td {{ caso.id }}
                                        td {{ caso.titulo }}
                                        td {{ caso.descripcion }}
                                        td
                                            div.btn-group(role="group")
                                                button.btn.btn-primary.btn-sm.d-inline-block(@click="getOne(caso)")
                                                    i.las.la-edit
                                                button.btn.btn-danger.btn-sm.d-inline-block(@click="deleteOne(caso.id,index)")
                                                    i.las.la-ban
                            h2.text-center(v-else) No hay registros 😔
        Footer
        b-modal(id="addCatalog", title="Edita el caso de estudio", hide-footer)
            form(@submit.prevent="sendData",enctype="multipart/form-data",autocomplete="off")
                input(v-model="id_caso" type="hidden")
                div.form-group
                    input.form-control(v-model="titulo",type="text", placeholder="Título")
                div.form-group
                    textarea.form-control(v-model="descripcion", placeholder="Descripción")
                div.form-group
                    vue-dropzone(ref="catalogoDropzone", url="/api/casos/" id="dropzone", :options="dropzoneOptions", v-on:vdropzone-sending="sendCatalog", v-on:vdropzone-success="successServer", v-on:vdropzone-error="errorServer")
                button.btn.btn-primary.btn-lg.btn-block(type="submit") Agregar datos

</template>
<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'
import Nav from '../../components/Nav'
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
    data(){
        return{
            id_caso:undefined,
            casos:'',
            titulo:'',
            descripcion:'',
            dropzoneOptions: {
                url:'/api/casos',
                headers: {
                    Authorization:`Bearer ${this.$auth.token()}`,
                },
                thumbnailWidth: 200,
                addRemoveLinks: true,
                dictRemoveFile:'X',
                thumbnailMethod:'contain',
                acceptedFiles:'image/*,.pdf,.xlsx,.csv,.docx',
                maxFiles:2,
                autoProcessQueue:false,
                uploadMultiple: true,
                parallelUploads: 100,
                dictDefaultMessage: "<i class='la la-cloud-upload'></i> Arrastra tu archivo o da click aquí para subirlo.",
            }
        }
    },
    components:{
        vueDropzone: vue2Dropzone,
        Header,
        Footer,
        Nav
    },
    async mounted(){
        await this.axios.get('/casos')
            .then(res=>{
                this.casos = res.data.caso;
                console.log(this.casos);
            })
    },
    methods:{
        async getOne(caso){
            await this.axios.get(`/casos/${caso.id}`)
                .then(res=>{
                    this.titulo = res.data.caso.titulo
                    this.descripcion = res.data.caso.descripcion
                    this.id_caso = res.data.caso.id
                })
            this.$bvModal.show('addCatalog')
        },
        async deleteOne(id, index){
            console.log(id,index)
            this.casos.splice(index,1)
            await this.axios.delete(`/casos/${id}`)
                .then(res=>{
                    console.log(res)
                })
        },
        sendData(){
            if(this.$refs.catalogoDropzone.getAcceptedFiles().length > 0){
                this.$swal({
                    title:'<h1>ESPERA...</h1>',
                    html:'<p>Estamos subiendo tu información</p>',
                    showConfirmButton: false,
                })
                this.$refs.catalogoDropzone.processQueue();
            }
        },
        sendCatalog(file, xhr, formData){
            formData.append('id', this.id_caso);
            formData.append('titulo', this.titulo);
            formData.append('descripcion', this.descripcion);
        },
        successServer(file,response){
            this.$swal({
                title:'<h1>¡Todo bien!</h1>',
                html:'<p>Tu catálogo se ha subido con éxito.</p>'
            }).then(result=>{
                if(result.value){
                    this.$refs.catalogoDropzone.removeAllFiles();
                    this.titulo = '';
                    this.descripcion = '';
                    this.$bvModal.hide('addCatalog')
                }
            })
        },
        errorServer(file, message, xhr){
            this.$swal({
                title:'<h1>¡OH, NO!</h1>',
                html:'<p>Algo salió mal. Inténtalo más tarde.</p>'
            });
            this.$refs.catalogoDropzone.removeAllFiles();
            this.titulo = '';
            this.descripcion='';
            this.$bvModal.hide('addCatalog')
        }
    }
}
</script>
<style lang="scss">
    .catalogo{
        .bg-header{
            background: transparent url(../../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
            @include down-screen(mobile-big){
                background: none;
                padding: 0;
            }
        }
        &__content{
           margin-top:300px;
        }
        th{
            font-size: 16px;
        }
        td{
            font-size: 14px;
            font-weight: 400;
        }
    }
</style>

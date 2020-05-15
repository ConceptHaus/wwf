<template lang="pug">
    div.catalogo
        Header
        Nav.bg-header
        section.catalogo__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Recursos
                    div.row.p-4
                        div.col-12.my-5
                            button.btn.btn-primary.btn-lg(v-b-modal.addCatalog) Agregar material
                        div.col-12.my-4
                            table.table.table-striped
                                thead.thead-dark.table-bordered
                                    tr
                                        th #
                                        th Título
                                        th Descripción
                                        th Acciones
                                tbody(v-for="catalogo in catalogos", :key="catalogo.id")
                                    tr
                                        td {{ catalogo.id }}
                                        td {{ catalogo.titulo }}
                                        td {{ catalogo.descripcion }}
                                        td
                                            div.btn-group(role="group")
                                                button.btn.btn-primary.btn-sm.d-inline-block
                                                    i.las.la-edit
                                                button.btn.btn-danger.btn-sm.d-inline-block
                                                    i.las.la-ban

            b-modal(id="addCatalog", title="Agregar catálogo", hide-footer)
                form(@submit.prevent="sendData",enctype="multipart/form-data",autocomplete="off")
                    div.form-group
                        input.form-control(v-model="titulo",type="text", placeholder="Título")
                    div.form-group
                        input.form-control(v-model="link",type="text", placeholder="Link")
                    div.form-group
                        textarea.form-control(v-model="descripcion", placeholder="Descripción")
                    div.form-group
                        vue-dropzone(ref="recursosDropzone", id="dropzone", :options="dropzoneOptions", v-on:vdropzone-sending="sendCatalog", v-on:vdropzone-success="successServer", v-on:vdropzone-error="errorServer")
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

            recursos:'',
            titulo:'',
            link:'',
            descripcion:'',
            dropzoneOptions: {
                url:'/api/recursos',
                headers: {
                    Authorization:`Bearer ${this.$auth.token()}`,
                },
                thumbnailWidth: 200,
                addRemoveLinks: true,
                dictRemoveFile:'X',
                thumbnailMethod:'contain',
                acceptedFiles:'image/*',
                maxFiles:1,
                autoProcessQueue:false,
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
        await this.axios.get('/recursos')
            .then(res=>{
                this.recursos = res.data.catalogos;
                console.log(this.recursos);
            })
    },
    methods:{
        sendData(){
            if(this.$refs.recursosDropzone.getAcceptedFiles().length > 0){
                this.$swal({
                    title:'<h1>ESPERA...</h1>',
                    html:'<p>Estamos subiendo tu información</p>',
                    showConfirmButton: false,
                })
                this.$refs.recursosDropzone.processQueue();
            }
        },
        sendCatalog(file, xhr, formData){
            formData.append('titulo', this.titulo);
            formData.append('link', this.link);
            formData.append('descripcion', this.descripcion);
        },
        successServer(file,response){
            this.$swal({
                title:'<h1>¡Todo bien!</h1>',
                html:'<p>Tu catálogo se ha subido con éxito.</p>'
            }).then(result=>{
                if(result.value){
                    this.$refs.recursosDropzone.removeAllFiles();
                    this.titulo = '';
                    this.link = '';
                    this.descripcion = '';
                }
            })
        },
        errorServer(file, message, xhr){
            this.$swal({
                title:'<h1>¡OH, NO!</h1>',
                html:'<p>Algo salió mal. Inténtalo más tarde.</p>'
            });
            this.$refs.recursosDropzone.removeAllFiles();
            this.titulo = '';
            this.link='';
            this.descripcion='';
            console.log(message);
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

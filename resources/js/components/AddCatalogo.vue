<template lang="pug">
    .addCatalogo.text-left.mt-4
        a.text-center(href="#" v-b-modal="'addCatalogo'" v-if="$auth.user().is_admin") Editar catálogo
        b-modal(id="addCatalogo" title="Editar Catalogo" hide-footer)
            form(@submit.prevent="sendData" enctype="multipart/form-data" autocomplete="off")
                .form-group
                    vue-dropzone(ref="catalogoDropzone" id="dropzone" :options="dropzoneOptions", v-on:vdropzone-sending="sendCatalogo",v-on:vdropzone-success="successServer", v-on:vdropzone-error="errorServer")
                    button.btn.btn-primary.btn-lg.btn-block(type="submit") Agregar catálogo
</template>
<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
    data(){
        return{
            dropzoneOptions:{
                url:'/api/catalogo',
                headers:{
                    Authorization:`Bearer ${this.$auth.token()}`,
                },
                thumbnailWidth:200,
                addRemoveLinks: true,
                dictRemoveFile:'X',
                thumbnailMethod:'contain',
                acceptedFiles:'image/*,.pdf,.xlsx,.csv,.docx',
                maxFiles:2,
                uploadMultiple: true,
                autoProcessQueue:false,
                dictDefaultMessage: "<i class='la la-cloud-upload'></i> El primer archivo es la imagen y el segundo el botón, arrastra o da click aquí para subirlo.",
            }
        }
    },
    components:{
        vueDropzone: vue2Dropzone
    },
    methods:{
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
        sendCatalogo(file,xhr, formData){
            console.log(file)
        },
        successServer(file, response){
            this.$swal({
                title:'<h1>¡Todo bien!</h1>',
                html:'<p>Tu material se ha subido con éxito.</p>'
            }).then(result=>{
                if(result.value){
                    this.$refs.catalogoDropzone.removeAllFiles();
                    this.titulo = '';
                    this.$bvModal.hide('addButton-'+this.paso);
                    //this.$emit('update-button',response.button,this.paso);
                }
            })
        },
        errorServer(file, message, xhr){
            this.$swal({
                title:'<h1>¡OH, NO!</h1>',
                html:'<p>Algo salió mal. Inténtalo más tarde.</p>'
            });
            this.$refs.catalogoDropzone.removeAllFiles();
        }
    }
}
</script>

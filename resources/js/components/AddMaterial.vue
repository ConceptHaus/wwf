<template lang="pug">
    .addMaterial(v-if="$auth.user().is_admin")
        button.btn.btn-lg.btn-primary.my-0.mx-auto.d-block(v-b-modal.addCatalog) Agregar material

        b-modal(id="addCatalog", title="Agregar material", hide-footer)
                form(@submit.prevent="sendData",enctype="multipart/form-data",autocomplete="off")
                    .form-group
                        input.form-control(v-model="titulo",type="text", placeholder="Título")
                    .form-group
                        vue-dropzone(ref="recursosDropzone", id="dropzone", :options="dropzoneOptions", v-on:vdropzone-sending="sendCatalog", v-on:vdropzone-success="successServer", v-on:vdropzone-error="errorServer")
                    button.btn.btn-primary.btn-lg.btn-block(type="submit") Agregar material
</template>
<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
    data(){
        return{
            titulo:'',
            link:'',
            descripcion:'',
            dropzoneOptions: {
                url:'/api/recursos/rutas',
                headers: {
                    Authorization:`Bearer ${this.$auth.token()}`,
                },
                thumbnailWidth: 200,
                addRemoveLinks: true,
                dictRemoveFile:'X',
                thumbnailMethod:'contain',
                acceptedFiles:'',
                maxFiles:1,
                autoProcessQueue:false,
                dictDefaultMessage: "<i class='la la-cloud-upload'></i> Arrastra tu archivo o da click aquí para subirlo.",
            }
        }
    },
    props:['ruta'],
    components:{
        vueDropzone: vue2Dropzone
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
            formData.append('ruta', this.ruta);
        },
        successServer(file,response){
            this.$swal({
                title:'<h1>¡Todo bien!</h1>',
                html:'<p>Tu material se ha subido con éxito.</p>'
            }).then(result=>{
                if(result.value){
                    this.$refs.recursosDropzone.removeAllFiles();
                    this.titulo = '';
                    this.link = '';
                    this.descripcion = '';
                    this.$bvModal.hide('addCatalog');
                    console.log('response',response.recurso);
                    this.$emit('update-recursos',response.recurso);
                }
            })

        },
        errorServer(file, message, xhr){
            this.$swal({
                title:'<h1>¡OH, NO!</h1>',
                html:'<p>Algo salió mal. Inténtalo más tarde.</p>'
            });
            this.$refs.recursosDropzone.removeAllFiles();
        }
    }
}
</script>
<style lang="scss" scoped>
    .addMaterial{
        margin: 5rem 0;
    }
</style>

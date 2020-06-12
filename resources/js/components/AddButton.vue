<template lang="pug">
    .addButton.text-center
        a.text-center( href="#" v-b-modal="'addButton-'+ paso" v-if="$auth.user().is_admin") Agregar botón
        b-modal( :id="'addButton-'+ paso", title="Agregar botón", hide-footer)
                form(@submit.prevent="sendData",enctype="multipart/form-data",autocomplete="off")
                    .form-group
                        input.form-control(v-model="titulo" type="text", placeholder="Título")
                    .form-group
                        vue-dropzone(ref="buttonDropzone" id="dropzone" :options="dropzoneOptions", v-on:vdropzone-sending="sendButton",v-on:vdropzone-success="successServer", v-on:vdropzone-error="errorServer")
                    button.btn.btn-primary.btn-lg.btn-block(type="submit") Agregar material
</template>

<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
    data(){
        return{
            titulo:'',
            dropzoneOptions:{
                url:'/api/button',
                headers:{
                    Authorization:`Bearer ${this.$auth.token()}`,
                },
                thumbnailWidth:200,
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
    props:{
        ruta:Number,
        paso:Number
    },
    components:{
       vueDropzone: vue2Dropzone
    },
    methods:{
        sendData(){
           if(this.$refs.buttonDropzone.getAcceptedFiles().length > 0){
                this.$swal({
                    title:'<h1>ESPERA...</h1>',
                    html:'<p>Estamos subiendo tu información</p>',
                    showConfirmButton: false,
                })
                this.$refs.buttonDropzone.processQueue();
            }
        },
        sendButton(file, xhr, formData){
            formData.append('titulo', this.titulo);
            formData.append('ruta', this.ruta);
            formData.append('innerpaso', this.paso);
            console.log('test');
        },
        successServer(file, response){
            this.$swal({
                title:'<h1>¡Todo bien!</h1>',
                html:'<p>Tu material se ha subido con éxito.</p>'
            }).then(result=>{
                if(result.value){
                    this.$refs.buttonDropzone.removeAllFiles();
                    this.titulo = '';
                    this.$bvModal.hide('addButton');
                    console.log('response',response.button);
                    //this.$emit('update-recursos',response.button);
                }
            })
        },
        errorServer(file, message, xhr){
            this.$swal({
                title:'<h1>¡OH, NO!</h1>',
                html:'<p>Algo salió mal. Inténtalo más tarde.</p>'
            });
            this.$refs.buttonDropzone.removeAllFiles();
        }
    }
}
</script>
<style lang="scss" scoped>
    .addButton{
        margin: 1rem 0;
    }
</style>

<template lang="pug">
    div.contacto
        Header
        Nav.bg-header
        section.contacto__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Contáctanos
                div.row.justify-content-center
                    div.col-5.mb-5
                        h3 Escríbenos y en breve nos comunicaremos.
                        form(@submit.prevent="contacto")
                            div.form-group
                                input.form-control(type="text",placeholder="Nombre",v-model="name")
                            div.form-group
                                input.form-control(type="email", placeholder="E-mail",v-model="email")
                            div.form-group
                                input.form-control(type="phone",placeholder="Teléfono",v-model="phone")
                            div.form-group
                                input.form-control(type="text",placeholder="Asunto",v-model="subject")
                            div.form-group
                                textarea.form-control(type="text",placeholder="Mensaje", v-model="message")
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Enviar
        Footer
</template>
<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'

export default {
    data(){
        return{
            name:'',
            email:'',
            phone:'',
            subject:'',
            message:''
        }
    },
    methods:{
        async contacto(){
            this.$swal({
                title:'<h1>Espera...</h1>',
                html:'<p>Estamos enviando tu mensaje</p>'
            })
             await this.axios.post('/contacto',{
                            name:this.name,
                            email:this.email,
                            phone:this.phone,
                            subject:this.subject,
                            message:this.message
                        })
                        .then(res=>{
                            this.$swal({
                                title:'<h1>¡Mensaje recibido!</h1>',
                                html:'<p>Pronto te contáctaremos.</p>',
                                icon:'success'
                            })
                        },error=>{
                            this.$swal({
                                title:'<h1>Error</h1>',
                                html:'<p>Algo salió mal.</p>',
                                icon:'error'
                            })
                        })

        }
    },
    components:{
        Header,
        Hero,
        Nav,
        Footer
    }
}
</script>
<style lang="scss">
    .contacto{
       .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
        }
        &__content{
            margin-top: 300px;
        } 
    }
</style>
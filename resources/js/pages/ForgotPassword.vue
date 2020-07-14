<template lang="pug">
    .login
        Header
        Nav.bg-header
        section.login__content
            .container-fluid
                h1.home__h1.my-4.p-4 #[span] Recupera tu contraseña
                .row.justify-content-center
                    .col-md-4.col-12.mb-5
                        form(autocomplete="off" @submit.prevent="sendEmail")
                            .form-group
                                label.form-error(for="email")
                                input.form-control(type="email" placeholder="E-mail" v-model="email")
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Recuperar contraseña
                .row.justify-content-center
                    .col-4.mb-4
                        a.text-center(href="/login") Inicia sesión
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
export default {
    data(){
        return{
            email:''
        }
    },
    methods:{
        sendEmail(){
            this.axios.post('auth/password',{
                email:this.email
            })
            .then(res=>{
                this.$swal({
                    title:'<h1>Todo bien</h1>',
                    html:'<p>Revisa tu correo electrónico para cambiar tu contraseña</p>',
                    icon:'success'
                })
            })
            .catch(err=>{
                this.$swal({
                    title:'<h1>Error</h1>',
                    html:'<p>Algo salió mal</p>',
                    icon:'error'
                })
            })
        }
    },
    components:{
        Header,
        Footer,
        Nav
    }
}
</script>
<style lang="scss">
.login{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
            @include down-screen(mobile-big){
                background: none;
                padding: 0;
            }
        }
        &__content{
            margin-top: 300px;
        }
    }
</style>

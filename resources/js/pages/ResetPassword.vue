<template lang="pug">
    .login
        Header
        Nav.bg-header
        section.login__content
            .container-fluid
                h1.home__h1.my-4.p-4 #[span] Cambia tu contraseña
                .row.justify-content-center
                    .col-md-4.col-12.mb-5
                        form(autocomplete="off" @submit.prevent="resetPassword")
                            .form-group
                                label.form-error(for="email")
                                input.form-control(type="password" placeholder="Nueva contraseña" v-model="password")
                            .form-group
                                label.form-error
                                input.form-control(type="password" placeholder="Confirma contraseña")
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Recuperar contraseña
        Footer
</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
export default {
    data(){
        return{
            token:null,
            email:null,
            password:null,
            password_confirmation:null,
            has_error:false
        }
    },
    created(){
        console.log(this.$route.params.token)
    },
    methods:{
        resetPassword(){
            self = this;
            this.axios.post('auth/reset-password',{
                token:self.$route.params.token,
                password:self.password
            })
            .then(res=>{
                console.log(res)
                this.$swal({
                    title:'<h1>¡TODO BIEN!</h1>',
                    html:'<p>Tu contraseña se ha restablecido con éxito.</p>'
                })
            })
            .catch(err=>{
                this.$swal({
                    title:'<h1>¡Oh, NO!</h1>',
                    html:'<p>Este link no es válido.</p>'
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
<style lang="scss" scoped>
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

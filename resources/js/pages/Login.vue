<template lang="pug">
    div.login
        Header
        Nav.bg-header
        section.login__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Inicia sesión
                div.row.justify-content-center.p-4
                    div.col-4.my-5
                        form
                            div.form-group
                                input.form-control(type="email", placeholder="E-mail")
                            div.form-group
                                input.form-control(type="password", placeholder="Contraseña")
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Recuerdame
                            button.btn.btn-primary.btn-lg(type="submit") Entrar
        Footer
                            
        
</template>

<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
export default {
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
        }
        &__content{
            margin-top: 300px;
        }
    }
</style>
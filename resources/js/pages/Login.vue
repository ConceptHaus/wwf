<template lang="pug">
    div.login
        Header
        Nav.bg-header
        section.login__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Inicia sesión
                div.row.justify-content-center
                    div.col-4.mb-5
                        form(@submit.prevent="login")
                            div.form-group
                                label.form-error.text-left.d-block(v-if="validador.email.error === 'error'",for="email") {{validador.email.message}}
                                input.form-control(type="email", placeholder="E-mail", name="email", :class="validador.email.error", v-model="email", @change="validator('email')")
                            div.form-group
                                label.form-error.text-left.d-block(v-if="validador.password.error === 'error'", for="password") {{validador.password.message}}
                                div.input-group
                                    input.form-control(:type="inputType", name="password", placeholder="Contraseña", :class="validador.password.error", v-model="password", @change="validator('password')")
                                    div.input-group-prepend(@click="changeInputType")
                                        div.input-group-text
                                            i.la.la-eye(v-if="inputType === 'password'", aria-hidden="true")
                                            i.la.la-eye-slash(v-if="inputType !== 'password'", aria-hidden="true")
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Recuerdame
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Entrar
        Footer
                            
        
</template>

<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'
export default {
    data(){
        return{
            inputType:'password',
            email:'',
            password:'',
            error:false,
            errors:{},
            validador:{
                email:{
                    error:'',
                    message:''
                },
                password:{
                    error:'',
                    message:''
                }
            }
        }
    },
    methods:{
        changeInputType(){
            var self = this;
            if(self.inputType === 'password'){
                self.inputType = 'text';
            }else{
                self.inputType = 'password'
            }
        },
        validator(tipo){
            var self = this;
            const regexp = new RegExp(`^-?[0-9]*$`);
            switch(tipo){
                case 'email':
                    if(self.email.length < 1){
                        self.validador.email.error = 'error';
                        self.validador.email.message = 'Este campo es necesario';
                    }
                    else{
                        if(!self.email.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i)){
                            self.validador.email.error = 'error';
                            self.validador.email.message = 'Ingresa un correo electrónico válido';
                        }else{
                            self.validador.email.error = 'success';
                            self.validador.email.message = '';
                        }
                    }
                    break;
                case 'password':
                   if(self.password.length < 1){
                        self.validador.password.error = 'error';
                        self.validador.password.message = 'Este campo es necesario';
                    }else{
                        if(self.password.length < 6 || self.password.length > 10){
                            self.validador.password.error = 'error';
                            self.validador.password.message = 'La contraseña debe tener entre 6 y 10 caracteres';
                        }else{
                            self.validador.password.error = 'success';
                            self.validador.password.message = '';
                        }
                    }
                    break;
                default:
                    break; 
            }
        },
        login(){
            var redirect = this.$auth.redirect();
            var self=this;
            this.$swal({
                title:'<h1>Espera...</h1>',
                html:'<p>Estamos verificando tus datos.</p>',
                showConfirmButton:false
            });
            this.$auth.login({
                data:{
                    email:self.email.toLowerCase(),
                    password:self.password
                },
                success:function(){
                    this.$swal().close();
                    let redirectTo;
                    if(redirect){
                        redirectTo = redirect.from.name;
                    }else{
                        redirectTo = this.$auth.user().is_admin === 0 ? 'home' : 'admin.dashboard';
                    }
                    this.$router.push({name:redirectTo});
                },
                error: function(){
                    this.$swal({
                        title:'<h1>Ocurrió un error</h1>',
                        html:'<p>Tu e-mail o password son incorrectos.</p>',
                        icon:'error'
                    })
                },
                rememberMe:true,
                fetchUser:true
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
        }
        &__content{
            margin-top: 300px;
        }
    }
</style>
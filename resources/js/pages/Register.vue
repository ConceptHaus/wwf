<template lang="pug">
    div.register
        Header
        Nav.bg-header
        section.register__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] {{$t('nav.account.signup')}}
                div.row.justify-content-center
                    div.col-md-5.col-12
                        h3.my-4 {{$t('signup.text')}}
                        form.my-4(@submit.prevent="register")
                            div.form-group
                                label.form-error(v-if="validador.name.error === 'error'") {{validador.name.message}}
                                input.form-control(type="text",v-model="name", placeholder="Nombre Completo")
                            div.form-group
                                label.form-error(v-if="validador.email.error === 'error'") {{validador.email.message}}
                                input.form-control(type="email",v-model="email", placeholder="E-mail")
                            div.form-group
                                label.form-error(v-if="validador.password.error === 'error'") {{validador.password.message}}
                                input.form-control(type="password",v-model="password", placeholder="Contraseña")
                            div.form-group
                                label.form-error(v-if="validador.password_confirm.error === 'error'") {{validador.password_confirm.message}}
                                input.form-control(type="password", v-model="password_confirm", placeholder="Confirmar contraseña")
                            div.form-group
                                label.form-error(v-if="validador.phone.error === 'error'") {{validador.phone.message}}
                                input.form-control(type="phone", v-model="phone", placeholder="Teléfono")
                            div.form-group
                                label.form-error(v-if="validador.company.error === 'error'") {{validador.company.message}}
                                input.form-control(type="text", v-model="company", placeholder="Empresa")
                            div.form-group
                                label.form-error(v-if="validador.puesto.error === 'error'") {{validador.puesto.message}}
                                input.form-control(type="text", v-model="puesto", placeholder="Puesto")
                            div.form-group
                                label.form-error(v-if="validador.sector.error === 'error'") {{validador.sector.message}}
                                input.form-control(type="text",v-model="sector", placeholder="Sector")
                            h3.my-4 {{$t('signup.q1')}}
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="1", v-model="intereses")
                                    | Analizar mi historial de consumo eléctrico
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="2",v-model="intereses")
                                    | Conocer las opciones disponibles para comprar electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="3",v-model="intereses")
                                    | Comenzar un proceso de suministro de electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="4",v-model="intereses")
                                    | Identificar potenciales suministradores de electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="5",v-model="intereses")
                                    | Obtener más información sobre la estructura y negociación de contratos bilaterales de suministro
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox",value="6",v-model="intereses")
                                    | Otro
                            h3.my-4 {{$t('signup.q1')}}
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio",value="No",v-model="consumo")
                                    | No
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio",value="Sí, entre 5 y 15GWh",v-model="consumo")
                                    | Sí, entre 5 y 15 GWh
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio",value="Sí, mayor a 20GWh",v-model="consumo")
                                    | Sí, mayor a 20GWh
                            button.btn.btn-primary.btn-lg.my-4.mx-auto.d-block Crear cuenta
        Footer


</template>
<script>
import Header from '../components/Header'
import Footer from '../components/Footer'
import Nav from '../components/Nav'

export default {
    data(){
        return{
            checked:true,
            name:'',
            email:'',
            phone:'',
            password:'',
            password_confirm:'',
            company:'',
            puesto:'',
            sector:'',
            intereses:[],
            consumo:'',
            error:false,
            errors:{},
            validador:{
                name:{
                    error:'',
                    message:''
                },
                email:{
                    error:'',
                    message:''
                },
                phone:{
                    error:'',
                    message:''
                },
                password:{
                    error:'',
                    message:''
                },
                password_confirm:{
                    error:'',
                    message:''
                },
                company:{
                    error:'',
                    message:''
                },
                puesto:{
                    error:'',
                    message:''
                },
                sector:{
                    error:'',
                    message:''
                }
            },
            success:false

        }
    },
    methods:{
        validator(tipo){
            var app = this;
            const regexp = new RegExp(`^-?[0-9]*$`);
            switch(tipo){
                case 'name':
                    if(app.name.length < 1){
                        app.validador.name.error = 'error';
                        app.validador.name.message = 'Este campo es necesario';
                    }else{
                        if(app.name.length < 2){
                            app.validador.name.error = 'error';
                            app.validador.name.message = 'El nombre es demasiado corto';
                        }else{
                            app.validador.name.error = 'success';
                            app.validador.name.message = ''
                        }
                    }
                    break;
                case 'email':
                    if(app.email.length < 1){
                        app.validador.email.error = 'error';
                        app.validador.email.message = 'Este campo es necesario';
                    }else{
                        if(!app.email.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i)){
                            app.validador.email.error = 'error';
                            app.validador.email.message = 'Ingresa un correo electrónico válido';
                        }else{
                            app.validador.email.error = 'success';
                            app.validador.email.message = '';
                        }
                    }
                    break;
                case 'password':
                    if(app.password.length < 1){
                        app.validador.password.error = 'error';
                        app.validador.password.message = 'Este campo es necesario';
                    }else{
                        if(app.password.length < 6 || app.password.length > 10){
                            app.validador.password.error = 'error';
                            app.validador.password.message = 'La contraseña debe tener entre 6 y 10 caracteres';
                        }else{
                            app.validador.password.error = 'success';
                            app.validador.password.message = '';
                        }
                    }
                    break;
                case 'password_confirm':
                    if(app.password_confirm.length < 1){
                        app.validador.password_confirm.error = 'error';
                        app.validador.password_confirm.message = 'Este campo es necesario';
                    }else{
                        if(app.password_confirm.length < 6 || app.password_confirm.length > 10){
                            app.validador.password_confirm.error = 'error';
                            app.validador.password_confirm.message = 'La contraseña debe tener entre 6 y 10 caracteres';
                        }else{
                            app.validador.password_confirm.error = 'success';
                            app.validador.password_confirm.message = '';
                        }
                    }
                    break;
                case 'phone':
                    if(app.phone.length < 1){
                        app.validador.phone.error = 'error';
                        app.validador.phone.message = 'Este campo es necesario';
                    }else{
                        if(!regexp.test(app.phone) || app.phone.length > 12){
                            app.validador.phone.error = 'error';
                            app.validador.phone.message = 'Ingresa un número telefónico válido';
                        }else{
                            app.validador.phone.error = 'success';
                            app.validador.phone.message = '';
                        }
                    }
                    break;
                case 'company':
                    if(app.company.length < 1){
                        app.validador.company.error = 'error';
                        app.validador.company.message = 'Este campo es necesario';
                    }else{

                            app.validador.company.error = 'success';
                            app.validador.company.message = ''
                    }
                    break;
                case 'sector':
                    if(app.name.length < 1){
                        app.validador.sector.error = 'error';
                        app.validador.sector.message = 'Este campo es necesario';
                    }else{

                            app.validador.sector.error = 'success';
                            app.validador.sector.message = ''
                    }
                    break;
                case 'puesto':
                    if(app.puesto.length < 1){
                        app.validador.puesto.error = 'error';
                        app.validador.puesto.message = 'Este campo es necesario';
                    }else{

                            app.validador.puesto.error = 'success';
                            app.validador.puesto.message = ''
                    }
                    break;

            }
        },
        register(){
            this.$swal({
                title:'<h1>Espera...</h1>',
                html:'<p>Estamos creando tu cuenta.</p>',
                showConfirmButon:false
            });
            var app = this;
            this.$auth.register({
                data:{
                    name:app.name,
                    email:app.email.toLowerCase(),
                    phone:app.phone,
                    password:app.password,
                    password_confirm:app.password_confirm,
                    company:app.company,
                    sector:app.sector,
                    puesto:app.puesto,
                    intereses:app.intereses,
                    consumo:app.consumo
                },
                success:function(){
                    this.$swal().close();
                    app.sucess = true;
                },
                error:function(res){
                    app.error = true;
                    app.errors = res;
                    if(res.response.status===422){
                        errores.forEach(element =>{
                            this.$swal({
                                title:'<h1>Ocurrió un error</h1>',
                                html:`<p>${res.response.data.errors[element][0]}</p>`,
                                icon:'error'
                            });
                        })
                    }else{
                        this.$swal({
                            title:'<h1>Ocurrió un error</h1>',
                            html:'<p>Algo salió mal. Contacta al administrador</p>',
                            icon:'error'
                        })
                    }
                },
                autoLogin:true,
                rememberMe:true,
                redirect:'/'
            });
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
    .register{
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

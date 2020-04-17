<template lang="pug">
    div.contacto
        Header
        Nav.bg-header
        section.contacto__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Cambiar contraseña
                div.row.justify-content-center
                    div.col-5.mb-5
                        form(@submit.prevent="editPassword")
                            label.form-error(v-if="error.length > 0") {{error}}
                            div.form-group
                                input.form-control(type="password",placeholder="Nueva contraseña",v-model="password")
                            div.form-group
                                input.form-control(type="password",placeholder="Confirma tu contraseña",v-model="password_confirm")
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Editar contraseña
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
            password:'',
            password_confirm:'',
            error:''
        }
    },
    methods:{
        async editPassword(){
            if(this.password === this.password_confirm){
                await this.axios.post('auth/password/manual',{password:this.password})
                    .then(res=>{
                        this.$swal({
                            title:'<h1>Todo bien</h1>',
                            html:'<p>Tu contraseá se ha reestablecido</p>',
                            icon:'success'
                        })
                    },err=>{
                        this.$swal({
                            title:'<h1>Ocurrió un error</h1>',
                            html:'<p>Algo salió mal</p>',
                            icon:'error'
                        })
                    })
            }else{
                this.error = 'Tu contraseña no coincide'
            }
            
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
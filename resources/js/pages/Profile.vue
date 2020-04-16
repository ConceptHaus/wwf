<template lang="pug">
    div.contacto
        Header
        Nav.bg-header
        section.contacto__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Editar mis datos
                div.row.justify-content-center
                    div.col-5.mb-5
                        form(@submit.prevent="edit")
                            div.form-group
                                input.form-control(type="email", placeholder="E-mail", v-model="email")
                            div.form-group
                                input.form-control(type="text",placeholder="Nombre",v-model="name")
                            div.form-group
                                input.form-control(type="phone",placeholder="Teléfono",v-model="phone")
                            div.form-group
                                input.form-control(type="text",placeholder="Empresa",v-model="company")
                            div.form-group
                                input.form-control(type="text",placeholder="Puesto",v-model="puesto")
                            div.form-group
                                input.form-control(type="text",placeholder="Sector",v-model="sector")
                            button.btn.btn-primary.btn-lg.btn-block(type="submit") Editar datos
        Footer
</template>
<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'
export default {
    components:{
        Header,
        Hero,
        Nav,
        Footer
    }
}
</script>

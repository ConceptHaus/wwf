<template lang="pug">
    div.catalogo
        Header
        Nav.bg-header
        section.catalogo__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Usuarios registrados
                    div.row.p-4
                        div.col-12.my-5
                            a.btn.btn-primary.btn-lg(href="/api/download/users" target="_blank") #[i.las.la-cloud-download-alt] Descargar usuarios
                        div.col-12.my-4
                            table.table.table-striped(v-if="users && users.length > 0")
                                thead.thead-dark.table-bordered
                                    tr
                                        th #
                                        th Nombre
                                        th E-mail
                                        th Teléfono
                                        th Empresa
                                tbody(v-for="user in users", :key="user.id")
                                    tr
                                        td {{user.id}}
                                        td {{user.name}}
                                        td {{user.email}}
                                        td {{user.phone}}
                                        td Empresa
                            h2.text-center(v-else) No hay usuarios registrados 😔
        Footer
</template>
<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'
import Nav from '../../components/Nav'

export default {
    data(){
        return{
            users:[]
        }
    },
    components:{
        Header,
        Footer,
        Nav
    },
    async mounted(){
        await this.axios.get('/users')
            .then(res=>{
                this.users = res.data.users;
                console.log(this.users);
            })
    },
    methods:{

    }
}
</script>

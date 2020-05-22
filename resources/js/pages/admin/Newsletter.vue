<template lang="pug">
    div.catalogo
        Header
        Nav.bg-header
        section.catalogo__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Registros Newsletter
                    div.row.p-4
                        div.col-12.my-5
                            //- button.btn.btn-primary.btn-lg(v-b-modal.addCatalog) Agregar caso de estudio
                        div.col-12.my-4
                            table.table.table-striped(v-if="newsletter && newsletter.length > 0")
                                thead.thead-dark.table-bordered
                                    tr
                                        th #
                                        th Correo
                                        th Acciones
                                tbody(v-for="data in newsletter", :key="data.id")
                                    tr
                                        td {{ data.id }}
                                        td {{ data.email }}
                                        td
                                            div.btn-group(role="group")
                                                button.btn.btn-primary.btn-sm.d-inline-block
                                                    i.las.la-edit
                                                button.btn.btn-danger.btn-sm.d-inline-block
                                                    i.las.la-ban
                            h2.text-center(v-else) No hay registros 😔
        Footer

</template>
<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'
import Nav from '../../components/Nav'
export default {
    data(){
        return{
            newsletter:undefined
        }
    },
    components:{
        Header,
        Footer,
        Nav
    },
    async mounted(){
        await this.axios.get('/newsletter')
            .then(res=>{
                this.newsletter = res.data.newsletter;
            })
    }
}
</script>


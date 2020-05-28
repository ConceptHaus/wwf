<template lang="pug">
    div.catalogo
        Header
        Nav.bg-header
        section.catalogo__content
            div.container-fluid
                h1.home__h1.my-4.p-4 #[span] Mensajes recibidos
                    div.row.p-4
                        div.col-12.my-5
                            a.btn.btn-primary.btn-lg(href="/api/download/mensajes" target="_blank") #[i.las.la-cloud-download-alt] Descargar mensajes
                        div.col-12.my-4
                            table.table.table-striped(v-if="mensajes && mensajes.length > 0")
                                thead.thead-dark.table-bordered
                                    tr
                                        th #
                                        th Nombre
                                        th E-mail
                                        th Asunto
                                        th Teléfono
                                        th Comentario
                                tbody(v-for="mensaje in mensajes", :key="mensaje.id")
                                    tr
                                        td {{mensaje.id}}
                                        td {{mensaje.nombr}}
                                        td {{mensaje.email}}
                                        td {{mensaje.telefono}}
                                        td {{mensaje.comentario}}
                            h2.text-center(v-else) No hay mensajes recibidos 😔
        Footer
</template>
<script>
import Header from '../../components/Header'
import Footer from '../../components/Footer'
import Nav from '../../components/Nav'
export default {
    data(){
        return{
            mensajes:[]
        }
    },
    components:{
        Header,
        Footer,
        Nav
    },
    async mounted(){
        await this.axios.get('/mensajes')
            .then(res=>{
                this.mensajes = res.data.mensajes;
                console.log(this.mensajes);
            })
    },
}
</script>

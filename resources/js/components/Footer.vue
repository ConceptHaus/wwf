<template lang="pug">
    footer
        div.container.py-5
            div.row.justify-content-center.align-items-center
                div.col-6
                    div.input-group.mb-3
                        input.form-control(type="text",v-model="email")
                        div.input-group-append
                            button.btn.btn-primary(@click.prevent="newsletter()") Suscribirse
            div.row.py-3
                div.col
                    img(src="../../images/wwf.png")
                    img(src="../../images/ico-logo.png")
                div.col
                div.col
                    a(href="/contacto").btn.btn-light Contáctanos
                div.col
                    a(href="#") Aviso de privacidad | REN MX 2019.
            

</template>

<script>
export default {
    data(){
        return {
            email:''
        }
    },
    methods:{
        async newsletter(){
            await this.axios.post('/newsletter',{email:this.email})
                        .then(res=>{
                            this.$swal({
                                title:'<h1>Excelente</h1>',
                                html:'<p>Te has registrado a nuestro Newsletter</p>',
                                icon:'success'
                            })
                        },err=>{
                            this.$swal({
                                title:'<h1>Error</h1>',
                                html:'<p>Algo salió mal</p>',
                                icon:'error'
                            })
                        });
        }
    }
}
</script>
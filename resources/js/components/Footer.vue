<template lang="pug">
    footer
        div.container.py-md-5.py-4
            div.row.justify-content-center.align-items-center
                div.col-md-6.col-lg-6.col-10
                    div.input-group.mb-3
                        input.form-control(type="text",v-model="email", :placeholder="$t('footer.text2')")
                        div.input-group-append
                            button.btn.btn-primary(@click.prevent="newsletter()") {{$t('footer.button')}}
            div.row.py-3
                div.col-md-3.col-12.text-center
                    img.img-fluid(src="../../images/wwf.png")
                    img.img-fluid(src="../../images/ico-logo.png")
                div.col-md-3.col-12
                    ul.m-3
                        a(href="https://www.facebook.com/WWF.Mexico/" target="_blank")
                            li.m-2.lab.la-facebook-f
                        a(href="https://twitter.com/WWF_Mexico" target="_blank")
                            li.m-2.lab.la-twitter
                        a(href="https://www.instagram.com/wwf_mexico/?hl=es" target="_blank")
                            li.m-2.lab.la-instagram
                        a(href="https://www.youtube.com/channel/UCnxxMFJOd4OKLz7xnpWh6CQ" target="_blank")
                            li.m-2.lab.la-youtube
                div.col-md-3.col-12.mt-2
                    a(href="/contacto").btn.btn-light.btn-lg.my-0.mx-auto.d-block {{$t('footer.text1')}}
                div.col-md-3.col-12.mt-2
                    router-link.white(to="aviso").my-0.mx-auto.d-block {{$t('footer.text3')}} | REN MX 2020.


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
<style lang="scss" scoped>
footer{
    background: #fff url(../../images/bkg-footer.jpg) 50% 100% no-repeat;
    background-size: 100% auto;
   .white{
        color:#fff;
        @include down-screen(mobile-big){
        text-align: center;
        }
    }
    @include down-screen(mobile-big){
        background-size: cover;
    }
    li{
        color:#fff;
        display: inline;
        font-size: 33px;
    }
    a{
        &:hover{
            text-decoration: none;
        }
    }
}
</style>

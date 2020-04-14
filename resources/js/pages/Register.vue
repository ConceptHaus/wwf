<template lang="pug">
    div.register
        Nav.bg-header
        section.register__content
            div.container-fluid
                h1 Registro
                div.row.justify-content-center
                    div.col-5
                        h3 Registrate para conocer nuestra ruta de compra de energía renovable
                        form
                            div.form-group
                                input.form-control(type="text", placeholder="Nombre Completo")
                            div.form-group
                                input.form-control(type="email", placeholder="E-mail")
                            div.form-group
                                input.form-control(type="password", placeholder="Contraseña")
                            div.form-group
                                input.form-control(type="password", placeholder="Confirmar contraseña")
                            div.form-group
                                input.form-control(type="phone", placeholder="Teléfono")
                            div.form-group
                                input.form-control(type="text", placeholder="Empresa")
                            div.form-group
                                input.form-control(type="text", placeholder="Puesto")
                            div.form-group
                                input.form-control(type="text", placeholder="Sector")
                            h3 ¿Cuál es tu interés principal al visitar nuestro sitio?
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Analizar mi historial de consumo eléctrico
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Conocer las opciones disponibles para comprar electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Comenzar un proceso de suministro de electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Identificar potenciales suministradores de electricidad renovable
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Obtener más información sobre la estructura y negociación de contratos bilaterales de suministro
                            div.form-group.form-check
                                label.form-check-label
                                    input.form-check-input(type="checkbox")
                                    | Otro
                            h3 ¿Conoces el consumo eléctrico de tu empresa?
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio")
                                    | No
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio")
                                    | Sí, entre 5 y 15 GWh
                            div.form-group.form-check-inline
                                label.form-check-label
                                    input.form-check-input(type="radio")
                                    | Sí, mayor a 20GWh
                            button.btn.btn-primary.btn-lg Crear cuenta
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
    .register{
        .bg-header{
            background: transparent url(../../images/bkg-header.jpg) 50% 100% no-repeat;
            background-size: auto 100%;
            padding: 25px 0 50px 0;
        }
    }
</style>
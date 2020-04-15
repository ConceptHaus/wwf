<template lang="pug">
    div.navbar-top
        b-navbar
            b-navbar-brand(href="/")
                img.img-fluid.w-50(src="../../images/logo.png")
            b-collapse.justify-content-end(is-nav)
                b-navbar-nav
                    b-nav-item Iniciar sesión
                    b-nav-item Registrarse
        b-navbar(type="light", toggleable="lg")
            b-navbar-toggle(target="nav-collapse")
            b-collapse#nav-collapse(is-nav)
                b-navbar-nav
                    b-nav-item-dropdown.mx-3(text="Acerca de Ren mx", left)
                        b-dropdown-item(href="/acerca-de-ren") ¿Qué hacemos?
                        b-dropdown-item(href="#") Súmate a la inciativa
                        b-dropdown-item(href="#") Beneficios del suministro renovable
                        b-dropdown-item(href="#") Acerca de WWF
                        b-dropdown-item(href="#") Nuestro equipo
                        b-dropdown-item(href="#") Nuestros socios
                    b-nav-item.mx-3 Estrategía de compra
                    b-nav-item-dropdown.mx-3(text="El mercado eléctrico mayorista")
                        b-dropdown-item(href="#") El MEM y la energía renovable
                        b-dropdown-item(href="#") Tendencias en la compra corporativa de electricidad
                        b-dropdown-item(href="#") Usuarios finales
                        b-dropdown-item(href="#") Opciones de compra de energía
                    b-nav-item.mx-3 Recursos
                    b-nav-item.mx-3 Noticias
                    b-nav-form.mx-3
                        b-nav-form
                        b-form-input(placeholder="Buscar...")
                        b-button.my-2.my-sm-0(variant="outline-light",type="submit") Buscar
</template>
<style lang="scss" scoped>
    .navbar-top{
        position: absolute;
        z-index: 10;
        margin-top: 60px;
        background: transparent;
    }
</style>
<template lang="pug">
    div.navbar-top(:class="[$auth.check() ? 'navbar-top--noheader' : '']")
        b-navbar
            b-navbar-brand(href="/")
                img.img-fluid.w-50(src="../../images/logo.png")
            b-collapse.justify-content-end(is-nav)
                b-navbar-nav(v-if="!$auth.check()")
                    b-nav-item(href="/login") Iniciar sesión
                    b-nav-item(href="/registro") Registrarse
                b-navbar-nav(v-else)
                    b-nav-item-dropdown.mr-5.drop-down-user(text="Mi cuenta")
                        b-dropdown-item(href="/edit/profile") Editar mi perfil
                        b-dropdown-item(href="/edit/password") Cambiar contraseña
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/casos") Casos de estudios y reportes
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/recursos") Recursos externos
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/newsletter") Newsletter
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/users") Usuarios
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/mensajes") Mensajes
                        b-dropdown-item(href="#" @click="$auth.logout()") Cerrar sesión
        b-navbar(type="light", toggleable="lg")
            b-navbar-toggle(target="nav-collapse")
            b-collapse#nav-collapse(is-nav)
                b-navbar-nav
                    b-nav-item-dropdown.mx-2(text="Acerca de Ren mx", left)
                        b-dropdown-item(href="/acerca-de-ren#quehacemos") ¿Qué hacemos?
                        b-dropdown-item(href="/acerca-de-ren#sumate") Súmate a la inciativa
                        b-dropdown-item(href="/acerca-de-ren#benefecios") Beneficios del suministro renovable
                        b-dropdown-item(href="/acerca-de-ren#empresas") Empresas que participan
                        b-dropdown-item(href="/acerca-de-ren#wwf") Acerca de WWF
                        b-dropdown-item(href="/acerca-de-ren#equipo") Nuestro equipo
                    b-nav-item.mx-2(href="/ruta-de-compra") Estrategía de compra
                    b-nav-item.mx-2(href="/catalogo") Catálogo de soluciones
                    b-nav-item.mx-2(href="/noticias") Casos de estudio y reportes
                    b-nav-item-dropdown.mx-2(text="El mercado eléctrico mayorista")
                        b-dropdown-item(href="/el-mercado-electrico-mayorista") El MEM y la energía renovable
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#tendencias") Tendencias en la compra corporativa de electricidad
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#usuarios") Usuarios finales
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#opciones") Opciones de compra de energía
                    b-nav-item.mx-2(href="/recursos") Recursos externos
</template>
<style lang="scss" scoped>
    .navbar{
        @include down-screen(mobile-big){
             background: #26a9e1;
        }
    }
    .navbar-top{
        &--noheader{
          margin-top: 0px;
          @include down-screen(mobile-big){
              margin-top: 0px !important;
          }
        }
        position: absolute;
        z-index: 10;
        margin-top: 60px;
        //background: transparent;
        top: 0;
        width: 100%;
        @include down-screen(mobile-big){
            margin-top: 90px;
        }
    }
    .dropdown-item{
        font-size: 12px;
    }
</style>

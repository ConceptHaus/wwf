<template lang="pug">
    div.navbar-top(:class="[$auth.check() ? 'navbar-top--noheader' : '']")
        b-navbar
            b-navbar-brand(href="/")
                img.img-fluid.w-50(src="../../images/logo.png")
            b-collapse.justify-content-end(is-nav)
                b-navbar-nav
                    b-nav-item(v-for="entry in languages" :key="entry.title" @click="changeLocale(entry.language)")
                        flag(:iso="entry.flag" :squared="false") {{entry.title}}
                b-navbar-nav(v-if="!$auth.check()")
                    b-nav-item(href="/login") {{$t('nav.account.login')}}
                    b-nav-item(href="/registro") {{$t('nav.account.signup')}}
                b-navbar-nav(v-else)
                    b-nav-item-dropdown.mr-5.drop-down-user.dropleft(:text="$t('nav.account.myprofile')")
                        b-dropdown-item(href="/edit/profile") {{$t('nav.account.profile')}}
                        b-dropdown-item(href="/edit/password") {{$t('nav.account.password')}}
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/casos") {{$t('nav.account.cases')}}
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/recursos") {{$t('nav.account.resources')}}
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/newsletter") {{$t('nav.account.newsletter')}}
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/users") {{$t('nav.account.users')}}
                        b-dropdown-item(v-if="$auth.user().is_admin" href="/admin/mensajes") {{$t('nav.account.messages')}}
                        b-dropdown-item(href="#" @click="$auth.logout()") {{$t('nav.account.logout')}}
        b-navbar(type="light", toggleable="lg")
            b-navbar-toggle(target="nav-collapse")
            b-collapse#nav-collapse(is-nav)
                b-navbar-nav
                    b-nav-item-dropdown.mx-2(:text="$t('nav.about.section')", left)
                        b-dropdown-item(href="/acerca-de-ren#quehacemos") {{$t('nav.about.menu1')}}
                        b-dropdown-item(href="/acerca-de-ren#sumate") {{$t('nav.about.menu2')}}
                        b-dropdown-item(href="/acerca-de-ren#benefecios") {{$t('nav.about.menu3')}}
                        b-dropdown-item(href="/acerca-de-ren#empresas") {{$t('nav.about.menu4')}}
                        b-dropdown-item(href="/acerca-de-ren#wwf") {{$t('nav.about.menu5')}}
                        b-dropdown-item(href="/acerca-de-ren#equipo") {{$t('nav.about.menu6')}}
                    b-nav-item.mx-2(href="/ruta-de-compra") {{$t('nav.strategy')}}
                    b-nav-item.mx-2(href="/catalogo") {{$t('nav.catalogue')}}
                    b-nav-item.mx-2(href="/casos") {{$t('nav.cases')}}
                    b-nav-item-dropdown.mx-2(:text="$t('nav.market.section')")
                        b-dropdown-item(href="/el-mercado-electrico-mayorista") {{$t('nav.market.menu1')}}
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#tendencias") {{$t('nav.market.menu2')}}
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#usuarios") {{$t('nav.market.menu3')}}
                        b-dropdown-item(href="/el-mercado-electrico-mayorista#opciones") {{$t('nav.market.menu4')}}
                    b-nav-item.mx-2(href="/recursos") {{$t('nav.resources')}}
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
<script>

export default {
    data(){
        return{
            languages: [
                    { flag: 'gb', language: 'en', title: 'English' },
                    { flag: 'mx', language: 'es', title: 'Español' }
                ]
        }
    },
    methods:{
        changeLocale(locale) {
                this.$i18n.locale = locale;
                this.$store.dispatch('language/setLanguage', locale);
                console.log(this.$i18n.locale)
            }
    }
}
</script>

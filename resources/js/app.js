
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import {CarouselPlugin, NavbarPlugin, ModalPlugin} from 'bootstrap-vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import App from './App.vue';
import Home from './pages/Home';
import About from './pages/About';
import Market from './pages/Market';
import Ruta from './pages/Ruta';
import Login from './pages/Login';
import Register from './pages/Register';
import Recursos from './pages/Recursos';
import Noticias from './pages/Noticias';
import Contacto from './pages/Contacto';
import Profile from './pages/Profile';
import Password from './pages/Password';
import Catalogo from './pages/admin/Catalogo';
import UserCatalogo from './pages/UserCatalogo';
import RutaUno from './pages/RutaUno';
import RutaDos from './pages/RutaDos';
import RutaTres from './pages/RutaTres';
import RutaCuatro from './pages/RutaCuatro';
import RutaCinco from './pages/RutaCinco';
import RutaSeis from './pages/RutaSeis';
import RutaSiete from './pages/RutaSiete';
import RutaOcho from './pages/RutaOcho';

const moment = require('moment');
require('moment/locale/es');


const optionsAlert = {
    confirmButtonColor: '#26a9e1',
    cancelButtonColor: '#5d5d5d',
};

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(NavbarPlugin);
Vue.use(CarouselPlugin);
Vue.use(ModalPlugin);
Vue.use(VueAxios, axios);
Vue.use(VueSweetalert2, optionsAlert);
Vue.use(require('vue-moment'),{
    moment
});

axios.defaults.baseURL = `${process.env.MIX_API_URL}/api`;

const router = new VueRouter({
    mode:'history',
    scrollBehavior(to, from, savedPosition){
        if (savedPosition) {
            return savedPosition
        }
        return { x: 0, y: 0 }
    },
    routes: [
        {
            path:'/',
            name:'home',
            component:Home,

        },
        {
            path:'/acerca-de-ren',
            name:'acercade',
            component:About
        },
        {
            path:'/el-mercado-electrico-mayorista',
            name:'mercado',
            component:Market
        },
        {
            path:'/ruta-de-compra',
            name:'ruta',
            component:Ruta
        },
        {
            path:'/ruta-de-compra/1',
            name:'ruta-uno',
            component:RutaUno
        },
        {
            path:'/ruta-de-compra/2',
            name:'ruta-dos',
            component:RutaDos
        },
        {
            path:'/ruta-de-compra/3',
            name:'ruta-tres',
            component:RutaTres
        },
        {
            path:'/ruta-de-compra/4',
            name:'ruta-cuatro',
            component:RutaCuatro
        },
        {
            path:'/ruta-de-compra/5',
            name:'ruta-cinco',
            component:RutaCinco
        },
        {
            path:'/ruta-de-compra/6',
            name:'ruta-seis',
            component:RutaSeis
        },
        {
            path:'/ruta-de-compra/7',
            name:'ruta-siete',
            component:RutaSiete
        },
        {
            path:'/ruta-de-compra/8',
            name:'ruta-ocho',
            component:RutaOcho
        },
        {
            path:'/recursos',
            name:'recursos',
            component:Recursos
        },
        {
            path:'/catalogo',
            name:'catalogo',
            component:UserCatalogo
        },
        {
            path:'/noticias',
            name:'noticias',
            component:Noticias
        },
        {
            path:'/contacto',
            name:'contacto',
            component:Contacto
        },
        {
            path:'/login',
            name:'login',
            component:Login,
            meta:{
                auth:false
            }
        },
        {
            path:'/registro',
            name:'registro',
            component:Register,
            meta:{
                auth:false
            }
        },
        {
            path:'/edit/profile',
            name:'perfil',
            component:Profile,
            meta:{
                auth:true
            }
        },
        {
            path:'/edit/password',
            name:'password',
            component:Password,
            meta:{
                auth:true
            }
        },
        {
            path:'/admin/catalogo',
            name:'admin.catalogo',
            component:Catalogo
        }

    ]
})

Vue.router = router;

Vue.use(require('@websanova/vue-auth'),{
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
    authRedirect:{path:'/login'},
    notFoundRedirect:{path:'/'},
    loginData:{redirect:'/'},
    rolesVar:'is_admin'
});


App.router = Vue.router;

new Vue(App).$mount('#app');

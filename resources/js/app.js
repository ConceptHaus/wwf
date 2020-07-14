
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import {CarouselPlugin, NavbarPlugin, ModalPlugin, CollapsePlugin} from 'bootstrap-vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
import VueScrollTo from 'vue-scrollto'
import FlagIcon from 'vue-flag-icon'
import store from './store/index.js'
import { i18n } from './plugins/i18n'
import App from './App.vue'
import Home from './pages/Home'
import About from './pages/About'
import Market from './pages/Market'
import Ruta from './pages/Ruta'
import Login from './pages/Login'
import Register from './pages/Register'
import Recursos from './pages/Recursos'
import Noticias from './pages/Noticias'
import Contacto from './pages/Contacto'
import Profile from './pages/Profile'
import Password from './pages/Password'
import ForgotPassword from './pages/ForgotPassword'
import ResetPassword from './pages/ResetPassword'
import Casos from './pages/admin/Casos'
import AdminRecursos from './pages/admin/Recursos'
import Aviso from './pages/Aviso'
import Newsletter from './pages/admin/Newsletter'
import Users from './pages/admin/Users'
import Mensajes from './pages/admin/Mensajes'
import UserCatalogo from './pages/UserCatalogo'
import RutaUno from './pages/RutaUno'
import RutaDos from './pages/RutaDos'
import RutaTres from './pages/RutaTres'
import RutaCuatro from './pages/RutaCuatro'
import RutaCinco from './pages/RutaCinco'
import RutaSeis from './pages/RutaSeis'
import RutaSiete from './pages/RutaSiete'
import RutaOcho from './pages/RutaOcho'

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
Vue.use(CollapsePlugin)
Vue.use(VueAxios, axios);
Vue.use(VueSweetalert2, optionsAlert);
Vue.use(VueScrollTo);
Vue.use(FlagIcon);
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
            component:RutaUno,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/2',
            name:'ruta-dos',
            component:RutaDos,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/3',
            name:'ruta-tres',
            component:RutaTres,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/4',
            name:'ruta-cuatro',
            component:RutaCuatro,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/5',
            name:'ruta-cinco',
            component:RutaCinco,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/6',
            name:'ruta-seis',
            component:RutaSeis,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/7',
            name:'ruta-siete',
            component:RutaSiete,
            meta:{
                auth:true
            }
        },
        {
            path:'/ruta-de-compra/8',
            name:'ruta-ocho',
            component:RutaOcho,
            meta:{
                auth:true
            }
        },
        {
            path:'/recursos',
            name:'recursos',
            component:Recursos
        },
        {
            path:'/catalogo',
            name:'catalogo',
            component:UserCatalogo,
            meta:{
                auth:true
            }
        },
        {
            path:'/casos',
            name:'casos',
            component:Noticias
        },
        {
            path:'/contacto',
            name:'contacto',
            component:Contacto
        },
        {
            path:'/aviso',
            name:'aviso',
            component:Aviso
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
            path:'/forgot-password',
            name:'forgot',
            component:ForgotPassword
        },
        {
            path:'/reset-password/:token',
            name:'reset',
            component:ResetPassword
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
            path:'/admin/recursos',
            name:'admin.recursos',
            component:AdminRecursos,
            meta:{
                auth:true
            }
        },
        {
            path:'/admin/casos',
            name:'admin.casos',
            component:Casos,
            meta:{
                auth:true
            }
        },
        {
            path:'/admin/newsletter',
            name:'admin.newsletter',
            component:Newsletter,
            meta:{
                auth:true
            }
        },
        {
            path:'/admin/users',
            name:'admin.users',
            component:Users,
            meta:{
                auth:true
            }
        },
        {
            path:'/admin/mensajes',
            name:'admin.mensajes',
            component:Mensajes,
            meta:{
                auth:true
            }
        }

    ]
})
router.beforeEach((to,from,next)=>{
    if (store.state.language.language && store.state.language.language !== i18n.locale) {
        i18n.locale = store.state.language.language;
        next();
      } else if (!store.state.language.language) {
        store.dispatch('language/setLanguage', navigator.languages)
          .then(() => {
            i18n.locale = store.state.language.language;
            next();
          });
      } else {
        next();
      }
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

new Vue({store,
        i18n,
        render:h=>h(App),
    }).$mount('#app');


import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import {CarouselPlugin, NavbarPlugin} from 'bootstrap-vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import App from './App.vue';
import Home from './pages/Home';
import About from './pages/About';
import Market from './pages/Market';
const moment = require('moment');
require('moment/locale/es');


const optionsAlert = {
    confirmButtonColor: '#006fb9',
    cancelButtonColor: '#de213f',
};

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(NavbarPlugin);
Vue.use(CarouselPlugin);
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
    loginData:{redirect:''},
    rolesVar:'is_admin'
});


App.router = Vue.router;

new Vue(App).$mount('#app');
import Vue from 'vue';
import VueI18n from 'vue-i18n';

Vue.use(VueI18n);
const messages = {
    "en": {
        "nav":{
            "account":{
                "login":"Login",
                "signup":"Signup",
                "myprofile":"My account",
                "profile":"Edit my profile",
                "password":"Change password",
                "cases":"Study cses and reports",
                "resources":"External resources",
                "newsletter":"Newsletter",
                "users":"Users",
                "messages":"Messages",
                "logout":"Logout"
            },
            "about":{
                "section":"About Ren mx",
                "menu1":"What we do?",
                "menu2":"Join the initiative",
                "menu3":"Advantages of using renewable energies",
                "menu4":"Companies that have engaged with us",
                "menu5":"About WWF",
                "menu6":"Our team"
            },
            "strategy":"Purchase strategy",
            "catalogue":"Catalogue of solutions",
            "cases":"Case studies and reports",
            "market":{
                "section":"Mexican Wholesale Electricity Market - (MEM)",
                "menu1":"MEM and renewable energies",
                "menu2":"Trends in corporate electricity purchasing",
                "menu3":"End users",
                "menu4":"Purchase options",
            },
            "resources":"Other resources"

        },
        "home":{
            "title1":"What is Ren mx?",
            "p1":"Ren mx helps the Mexican business sector to be more competitive through the consumption of renewable energy, which helps to decarbonize its operations and increase the proportion of renewable sources in the Mexican electricity grid.",
            "p2":" We invite all companies operating in Mexico to take ambitious and rapid steps to increase their productivity by purchasing clean energy and setting emission reduction targets",
            "button1":"More about Ren mx",
            "title2":"The purchase strategy",
            "p3":"Ren mx is a business platform dedicated to accelerate the purchase of renewable energy on a large scale.",
            "p4":" Following a process of only eight steps, companies gain access to guides and tools designed to define a renewable energy supply strategy, facilitating decision-making on supply modalities, tender design, bid evaluation and supplier selection.",
            "button2":"Go to the purchase strategy",
            "title3":"Resources",
            "p5":"We provide you with a compilation of relevant materials that will help your business achieve an efficient and reliable renewable energy supply.",
            "button3":" Go to resources",
        },
        "catalogue":{
            "title":"Catalogue of solutions",
            "p1":"In order to facilitate access to renewable energy for large industrial and commercial users, WWF Mexico has worked together with Zumma Energy Consulting in the development of this Catalogue of solutions for the purchase of renewable energy.",
            "p2":"This effort is part of the activities in the Ren mx initiative and was created with the objective of connecting users with renewable energy providers in the modalities of distributed generation, on-site generation, large-scale generation and qualified supply, as well as with companies focused on technical, financial and legal advice that guide users through the process.",
            "p3":"The catalogue includes companies with a solid track record both globally and in Mexico, and will be updated annually to reflect the dynamism of the sector. We invite you to download it by clicking on the following button:",
            "button":"Download"
        }


    },
    "es": {
        "nav":{
            "account":{
                "login":"Iniciar sesión",
                "signup":"Registrarse",
                "myprofile":"Mi cuenta",
                "profile":"Editar mi perfil",
                "password":"Cambiar contraseña",
                "cases":"Casos de estudios y reportes",
                "resources":"Recursos externos",
                "newsletter":"Newsletter",
                "users":"Usuarios",
                "messages":"Mensajes",
                "logout":"Cerrar sesión"
            },
            "about":{
                "section":"Acerca de Ren mx",
                "menu1":"¿Qué hacemos?",
                "menu2":"Súmate a la inciativa",
                "menu3":"Beneficios del suministro renovable",
                "menu4":"Empresas que participan",
                "menu5":"Acerca de WWF",
                "menu6":"Nuestro equipo"
            },
            "strategy":"Estrategía de compra",
            "catalogue":"Catálogo de soluciones",
            "cases":"Casos de estudio y reportes",
            "market":{
                "section":"El mercado eléctrico mayorista",
                "menu1":"El MEM y la energía renovable",
                "menu2":"Tendencias en la compra corporativa de electricidad",
                "menu3":"Usuarios finales",
                "menu4":"Opciones de compra de energía"
            },
            "resources":"Recursos externos"

        },
        "home":{
            "title1":"¿Qué es Ren mx?",
            "p1":"Ren mx ayuda al sector empresarial mexicano a ser más competitivo a través del consumo de energía renovable, descarbonizando sus operaciones y aumentando la proporción de fuentes renovables en la red eléctrica de México.",
            "p2":"Invitamos a todas las empresas que operan en México a tomar medidas ambiciosas y rápidas para aumentar su productividad por medio del suministro de energía renovable, la eficiencia energética y el establecimiento de objetivos de reducción de emisiones.",
            "button1":"Más sobre Ren mx",
            "title2":"Estrategia de compra",
            "p3":"Ren mx es una plataforma empresarial dedicada a agilizar y acelerar la compra de energía renovable a gran escala.",
            "p4":"Siguiendo un proceso de tan sólo ocho pasos, las empresas obtienen acceso a guías y herramientas diseñadas para definir una estrategia de abastecimiento de energía renovable, facilitando la toma de decisiones sobre modalidades de suministro, diseño de licitaciones, evaluación de ofertas y elección de proveedores.",
            "button2":"Conoce los 8 pasos",
            "title3":"Recursos",
            "p5":"Ponemos a tu dispocisión una compilación de materiales relevantes que ayudarán a tu empresa a alcanzar un suministro de energía renovable de manera eficiente y confiable.",
            "button3":"Conoce los recursos"
        },
        "catalogue":{
            "title":"Catálogo de soluciones",
            "p1":"Con el objetivo de facilitar el acceso a energía renovable para grandes usuarios industriales y comerciales,  #[b WWF México]  ha trabajado en conjunto con  #[b Zumma Energy Consulting] en la elaboración de este catálogo de Soluciones para la Compra de Energía Renovable.",
            "p2":"Este esfuerzo se inserta dentro de las actividades de la iniciativa  #[b Ren mx]  y nace con el objetivo de conectar directamente a los usuarios con los oferentes de energía renovable en las modalidades de generación distribuida, generación en sitio, generación a gran escala y suministro calificado, así como con empresas enfocadas en la asesoría técnica, financiera y legal que sirven de soporte en la compra de energía.",
            "p3":"El catálogo incluye empresas con una sólida trayectoria en México y el mundo, y se actualizará anualmente para reflejar el dinamismo del sector. Te invitamos a descargarlo a través del siguiente botón:",
            "button":"Descargar"
        }

    }
};
const i18n = new VueI18n({
    locale: 'es', // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
});

export default i18n;

<template lang="pug">
    div.about
        Header
        Nav
        Hero(ImgSrc="banner.jpg")
        section.que-hacemos#quehacemos
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-12.col-md-6.my-5
                        h1.home__h1.my-4 #[span] ¿Qué hacemos?
                        h4.my-4 La iniciativa Ren mx tiene como objetivo acelerar y facilitar el acceso a energía renovable a usuarios industriales y comerciales en México.
                        p.my-4 Ayudamos al sector empresarial mexicano a ser más competitivo a través del consumo de energía renovable, descarbonizando sus operaciones y aumentando la aportación de las fuentes renovables a la red eléctrica de México.
                    div.col-12.col-md-6
                        img.img-fluid(src="../../images/home/img-quehacemos.jpg")
                div.row
                    div.col-12
                        h3 Líneas de trabajo
                div.row
                    div.col-12
                        div.row
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-01.jpg")
                            div.col-md-4.col-12
                                h4 Generamos y compartimos conocimiento
                            div.col-md-4.col-12
                                p Proporcionamos información relevante y simplificada sobre el mercado eléctrico en México y las opciones para adquirir energía renovable. También, difundimos historias de éxito para promover el aprendizaje colectivo y eliminar barreras existentes.
                        div.row
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-02.jpg")
                            div.col-md-4.col-12
                                h4 Capacitamos a usuarios potenciales
                            div.col-md-4.col-12
                                p Capacitamos a empresas en el proceso de adquisición de energía renovable y ponemos a su disposición herramientas para analizar sus necesidades y agilizar la toma de decisiones.
                        div.row
                            div.col-md-2.col-12
                                img.img-fluid(src="../../images/home/linea-03.jpg")
                            div.col-md-4.col-12
                                h4 Conectamos a usuarios y suministradores
                            div.col-md-4.col-12
                                p Fomentamos interacción entre compradores potenciales y suministradores y generadores de energía renovable para promover transacciones bilaterales beneficiosas.
        section.sumate#sumate
            div.container-fluid.px-5
                div.row.py-4
                    div.col-md-8.col-12.my-5
                        h1.home__h1.my-4 #[span] Súmate a la iniciativa
                        p.my-4 Invitamos a todas las empresas que operan en México a tomar medidas ambiciosas y rápidas para aumentar su productividad por medio del suministro de energía renovable, la eficiencia energética y el establecimiento de objetivos de reducción de emisiones.
                    div.col-md-4.col-12
                        img.img-fluid.w-75.my-0.mx-auto.p-5.d-none.d-sm-block(src="../../images/home/sumate-01.png")
                div.row.justify-content-center
                    div.col-md-4.col-12
                        img.img-fluid.w-75.p-3.d-none.d-sm-block(src="../../images/home/sumate-02.png")
                    div.col-md-6.col-12
                        h3 Al participar en la iniciativa Ren mx, obtendrás acceso a nuestros eventos, herramientas y guías exclusivas, incluyendo:
                        ul
                            li Sesiones de diálogo exclusivas para usuarios finales de energía renovable para compartir experiencias y mejores prácticas
                            li Guía en línea para desarrollar una Estrategia de Compra, que indica los principales pasos e hitos para abastecer tu empresa con energía renovable
                            li Programa de acompañamiento personalizado para identificar oportunidades específicas de suministro de energía para tu empresa
                            li Plantillas y guías para:
                                ul
                                    li Analizar el consumo y demanda energética de tu empresa para conocer cuánta electricidad necesitas contratar
                                    li Conocer las diferentes opciones de suministro y sus implicaciones
                                    li Negociar un PPA o contrato de suministro, asegurando las mejores condiciones de contratación
                                    li Recomendaciones para diseñar y publicar licitaciones
                                    li Sugerencias para formar un equipo multidisciplinario que  gestione la compra de electricidad en tu empresa
                div.row.justify-content-center.py-5
                    div.col-md-8.col-12.text-center
                        p.my-4 ¿Quieres participar en nuestros eventos y conocer más nuestros servicios?
                        router-link.btn.btn-primary.btn-lg.mb-4(tag="button", to="contacto") Contáctanos aqui
        section.beneficios#beneficios
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] Beneficios del Suministro Renovable
                        p.my-4 El nuevo mercado energético ofrece a los usuarios comerciales e industriales libertad para elegir entre diferentes opciones de suministro de electricidad que ofrezcan precios competitivos y les permitan acceder a energías renovables.
                        h3.my-4 La elección de un proveedor privado de energía renovable ofrece ventajas considerables como:
                        ul
                            li Flexibilidad para negociar un contrato a tu conveniencia
                            li Estabilidad en el costo de la electricidad
                            li Ahorros atractivos y gestión efectiva de riesgos
                            li Beneficio en los márgenes de operación, al liberar capital para otras inversiones
                            li Cumplimiento de metas de sostenibilidad
                            li Transparencia en los costos de la electricidad y los productos asociados del mercado
                            li Asesoría en estrategias de gestión y ahorro de energía
                        p Además, tu empresa estaría contribuyendo a impulsar a México hacia una economía sostenible, mejorando su reputación y anticipándose a nuevas regulaciones sobre emisiones.
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/home/img-beneficios.jpg")
        section.socios#empresas
            div.container-fluid.p-3.p-md-4
                div.row.py-4
                    div.col-md-8.col-12.my-5
                        h1.home__h1.my-4 #[span] Empresas que participan
                        p.my-4 Entre 2017 y 2020, más de 280empresas han participado en los eventos, casos de estudio, catálogo y programa de acompañamiento organizados por Ren mx. De estas empresas, al menos 100 ya tienen un suministro renovable o están buscando conseguirlo
                        slick(ref="slick" :options="slickOptions")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Tetrapak.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Soriana.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Samsung.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Royal_Holiday.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Puma.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Nestle.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Liverpool.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/HSBC.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Herdez.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Grupo Modelo.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Gerdau Corsa.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/FUNO.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Faurecia.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/CyA.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Cuprum.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Cmr.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Cemex.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Citibanamex.png")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Baker McKenzie.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Autozone.jpg")
                            a(href="#")
                                img.img-fluid.w-50(src="../../images/acercade/socios/Audi.jpg")
                        p.my-4 Además, colaboramos con otras organizaciones de la sociedad civil, gobiernos locales y asociaciones industriales que comparten nuestra visión de transformación para  el sector  eléctrico y que contribuyen a crear oportunidades para lograr un despliegue acelerado de las energías renovables y un mejor acceso a éstas por parte de los grandes usuarios industriales y comerciales.
                        p.my-4 Ren mx es parte de una red global de iniciativas de WWF que promueven la adopción de energía renovable en Australia, China, Corea, Estados Unidos, India y Vietnam.
        section.wwf#wwf
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] Acerca de WWF
                        p.my-4 El Fondo Mundial para la Naturaleza es la organización de conservación líder en el mundo. Nacida en Suiza en 1961, es conocida por el logo del panda y tiene presencia en más de 100 países.
                        p.my-4 Bajo el nombre de World Wildlife Fund (WWF), surgió como un pequeño grupo de naturalistas preocupados y comprometidos con la conservación del planeta y ha crecido hasta convertirse en una de las organizaciones independientes más grandes y respetadas del mundo, apoyada por unos cinco millones de personas. Con los años, el objetivo de WWF ha evolucionado hacia una ambiciosa estrategia para preservar la biodiversidad y alcanzar el desarrollo sostenible en todo el planeta.
                        p.my-4 En México trabajamos para conservar las riquezas naturales, impulsar políticas públicas innovadoras y asegurar la transformación del mercado hacia un modelo más justo y sostenible. Nuestro trabajo en el área de clima y energía se enfoca en catalizar la acción climática por parte de los actores no estatales para cumplir las metas planteadas en la política nacional e internacional y para acelerar la transición del país hacia una economía baja en carbono.
                        h3 Para ello, nos hemos planteado las siguientes metas:
                        ul
                            li Acelerar la adquisición de energía renovable a través de la generación de conocimiento, capacitación y facilitación de transacciones bilaterales
                            li Fortalecer el diseño e implementación de acciones climáticas coordinadas entre empresas, gobiernos locales, universidades y representantes de la sociedad civil
                            li Impulsar a las empresas a adoptar metas de reducción de emisiones basadas en la ciencia del cambio climático
                        h3 Para conocer más:
                        a(href="www.wwf.org.mx", target="_blank") www.wwf.org.mx
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/home/ren_03_desk.jpg")
        section.equipo#equipo
            div.container-fluid.p-3.p-md-4
                div.row.py-4
                    div.col-md-4.col-12.my-5
                        img.img-fluid(src="../../images/home/luli-pequeira.png")
                    div.col-md-8.col-12
                        h3.my-4 Luli Pesqueira
                        p.my-4 Coordinadora de Relaciones Corporativas
                        p.my-4 Es especialista en nuevos modelos de acción colectiva, sobre todo en alianzas entre el sector privado y organismos no gubernamentales (ONG) para la creación de estándares de producción sustentable y certificación, así como para asegurar la transición a una economía baja en carbono. Tiene experiencia de trabajo en áreas comerciales, tanto en el sector privado, como en ONG y sector público, así como en áreas de investigación y enseñanza. Luli es doctora y maestra en Desarrollo Sostenible por la Universidad de Utrecht en los Países Bajos y licenciada en Comunicación por la Universidad Iberoamericana en la Ciudad de México.
                div.row
                    div.col-md-4.col-12
                        img.img-fluid.avatar(src="../../images/home/guillermo.png")
                    div.col-md-8.col-12
                        h3.my-4 Guillermo Punzo
                        p.my-4 Oficial Jr de Mercados de Energía Renovable
                        p.my-4 Posee experiencia en temas de investigación, ejecución de proyectos y desarrollo de negocios en los sectores de energía y medio ambiente. Su trabajo está enfocado en apoyar a las empresas de la iniciativa Ren mx en su proceso de transición a un suministro eléctrico renovable. Guillermo es Ingeniero Civil del Tecnológico de Monterrey campus Guadalajara y Maestro en Ingeniería Ambiental por la Universidad de McGill en Montreal, Canadá.
                div.row
                    div.col-md-4.col-12
                        img.img-fluid(src="../../images/home/ninel-escobar.png")
                    div.col-md-8.col-12
                        h3.my-4 Ninel Escobar
                        p.my-4 Coordinadora de Cambio Climático y Energía
                        p.my-4 Es especialista en adaptación al cambio climático. Su trabajo se enfoca en la planeación estratégica de WWF en cambio climático y energía; coordinar la implementación de proyectos y brindar apoyo técnico al resto de la organización en materia de mitigación y adaptación. Ha coordinado las contribuciones de WWF en instrumentos de política como la Estrategia Nacional de Cambio Climático, el Programa Especial de Cambio Climático y la Estrategia de Cambio Climático desde las Área Naturales Protegidas. Ninel cuenta con una maestría en Economía Ambiental y Recursos Naturales de la Universidad de Concepción en Chile y una licenciatura en Economía por el Centro de Investigación y Docencia Económicas (CIDE).
        Footer
</template>

<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'
import Slick from 'vue-slick';
export default {
    data(){
        return {
            slickOptions:{
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }
    },
    components:{
        Header,
        Hero,
        Slick,
        Nav,
        Footer
    }
}
</script>
<style lang="scss" scoped>
@import "~slick-carousel/slick/slick.css";
@import "~slick-carousel/slick/slick-theme.css";
</style>

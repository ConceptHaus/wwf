<template lang="pug">
    div.market
        Header
        Nav
        Hero(ImgSrc="banner.jpg")
        section.mem
            div.continer-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-6.col-12.my-5
                        h1.home__h1.my-4 #[span] {{$t('market.title1')}}
                        p.my-4 {{$t('market.p1')}}
                        p.my-4 {{$t('market.p2')}}
                        p.my-4 {{$t('market.p3')}}
                        ul
                            li {{$t('market.list1')}}
                            li {{$t('market.list2')}}
                            li {{$t('market.list3')}}
                        p {{$t('market.p4')}}
                        p {{$t('market.p5')}}
                    div.col-md-6.col-12
                        img.img-fluid(src="../../images/mercado/el-mem.jpg")
        section.tendencias#tendencias
            div.container-fluid.p-3.p-md-5
                h1.home__h1.my-4 #[span] {{$t('market.title2')}}
                div.row.py-4
                    div.col-md-8.col-12
                        p.my-4 A nivel mundial, la compra de electricidad de fuentes renovables por parte de las empresas alcanzó un total de 465 TWh en 2017 (IRENA, 2018), más de la mitad del consumo total de electricidad en México en el mismo año. Compañías de los sectores minero, industrial y tecnologías de la información, así como el sector comercial, lideran esta tendencia.
                        p.my-4 En el panorama global, las principales formas de adquirir energía por empresas son: 1) generación en sitio, 2) garantías de origen, y 3) contratos bilaterales (PPA)
                        p.my-4 En México, los usuarios finales de los sectores industrial y comercial han podido comprar electricidad directamente de generadores desde 1994. Actualmente existen más de 1,500 empresas en México que compran electricidad renovable a través de contratos bilaterales (PPA), siendo los sectores minero, industrial y químico los que tienen una mayor demanda de energía y las tecnologías eólica y solar las encargadas de satisfacerla.
                div.row.justify-content-center
                    div.col-md-8.col-12
                        img.img-fluid(src="../../images/mercado/grafica-01.png")
        section.usuarios-finales#usuarios
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-8.col-12
                        h1.home__h1.my-4 #[span] Usuarios finales
                        p.my-4 En el modelo eléctrico mexicano existen tres tipos de usuarios finales o consumidores. La segmentación está hecha con base en su demanda y consumo de electricidad, y cada uno de estos usuarios interactúa en mayor o menor medida con el MEM.
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-01.jpg")
                    div.col-md-8.col-12
                        h3.my-4 Usuarios básicos
                        p.my-4 Este tipo de usuario tiene una demanda de electricidad no superior a 1 MW y su única interacción con el MEM es a través de un Suministrador de Servicios Básicos (SSB). El Usuario Básico (UB) tiene pocas opciones de participar en el MEM y el precio que paga por la energía consumida y demás servicios está sujeto a Tarifas Finales del Suministro Básico establecidas por la Comisión Reguladora de Energía (CRE) sin ninguna opción de negociación.
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-02.jpg")
                    div.col-md-8.col-12
                        h3.my-4 Usuarios calificados
                        p.my-4 Los Usuarios Calificados (UC) tienen una demanda mayor o igual a 1 MW y su interacción con el MEM es a través de un Suministrador de Servicios Calificados (SSC) que los representa ante el mercado. El precio por la energía consumida y demás servicios está sujeto a negociaciones entre el SSC y el UC y establecido en un Contrato de Compra de Energía o PPA, por sus siglas en inglés (Power Purchase Agreement).
                        p.my-4 Además de la modalidad PPA, los UC pueden acceder a dos modalidades para la generación de electricidad renovable en sitio. La primera es la Generación Local (GL) y la segunda es la Generación Distribuida (GD).
                div.row
                    div.col-md-2.col-12
                        img.img-fluid(src="../../images/mercado/numero-03.jpg")
                    div.col-md-8.col-12
                        h3.my-4 Usuarios calificados participantes del mercado
                        p.my-4 Son usuarios responsables de su carga. Se representan a sí mismos en el MEM, sin la necesidad de ningún intermediario. Su demanda debe ser mayor a 5 MW y su consumo de energía de al menos 20 GWh. La principal opción para comprar energía para un Usuario Calificado Participante del Mercado (UCPM) es a través de un PPA directamente con un Generador. También cuenta con las opciones para generación en sitio como GL y GD.
        section.opciones-compra#opciones
            div.container-fluid.p-3.p-md-5
                div.row.py-4
                    div.col-md-7.col-12.my-5
                        h1.home__h1.my-4 #[span] Opciones de compra de energía
                        h3.my-4 Opciones fuera de sitio
                        h4.my-4 Suministro básico
                        p.my-4 Es la opción de “no hacer nada”. Bajo este esquema los usuarios finales pagan una tarifa regulada por la CRE a través de un Suministrador de Servicios Básicos (SSB). Actualmente el SSB con mayor preponderancia en el mercado es la CFE, sin embargo, existen nuevas compañías que buscan proveer electricidad a este segmento de usuarios.
                        h4.my-4 Contrato de compra de energía (PPA) con suministrador calificado
                        p.my-4 Es un acuerdo para la compra de energía entre un UC y un SSC. Entre las principales ventajas se encuentra la posibilidad de seleccionar al suministrador y mejorar el precio por la energía y productos asociados. Estos acuerdos suelen ser de corto plazo, entre 1 y 5 años, pero es importante mencionar que un mayor plazo aumenta sustancialmente las posibilidades de conseguir un precio menor.
                        h4.my-4 Contrato de compra de energía (PPA) con Generador
                        p.my-4 Los usuarios calificados participantes del mercado tienen la opción de celebrar contratos para la compra de energía directamente con Generadores. Al no requerir de ningún intermediador entre el usuario y el MEM, el usuario absorbe los beneficios y riesgos del MEM.
                        h3.my-4 Opciones en sitio
                        h4.my-4 Generación local (GL) y abasto aislado (AA)
                        p.my-4 Consisten en la generación de electricidad en el sitio del consumo, para lo cual se requiere de una red privada. En estas modalidades se puede o no conectar el sistema (generador-red privada) al sistema interconectado nacional para la compra de energía faltante y venta de excedentes.
                        h4.my-4 Generación distribuida (GD)
                        p.my-4 A diferencia de los opciones anteriores la GD es una opción de generación de energía a pequeña escala, la capacidad máxima por sistema debe ser menor a 0.5 MW. A pesar de que esta modalidad es la preferida de los UB, también ha sido ampliamente utilizada por grandes usuarios como una estrategia de compra de electricidad complementaria.
                        h4.my-4 Garantías de origen (Certificados de Energía Limpia)
                        p.my-4 La compra de certificados o CEL es un mecanismo para garantizar que la energía consumida provenga de fuentes renovables. Se pueden adquirir vía PPA o en el mercado que organiza el Centro Nacional de Control de Energía (Cenace) anualmente. Una de sus ventajas es las facilidad para adquirirlos y así cumplir con metas establecidas.
                    div.col-md-5.col-12
                        img.img-fluid(src="../../images/mercado/opciones.jpg")
                div.row.justify-content-center
                    div.col-md-10.col-12.py-5
                        img.img-fluid(src="../../images/mercado/opciones-01.jpg")
        Footer
</template>
<script>
import Header from '../components/Header'
import Hero from '../components/Hero'
import Nav from '../components/Nav'
import Footer from '../components/Footer'

export default {
    components:{
        Header,
        Hero,
        Nav,
        Footer
    }
}
</script>

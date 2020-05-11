<template lang="pug">
    .container-fluid.pasos
        .row
            .col-12
                button.pasos__button
                    i.las.la-angle-down
                .row.justify-content-center.my-4
                    a.pasos__inner(href="/ruta-de-compra/1")
                        img.img-fluid(src="../../images/ruta/ruta_01_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/2")
                        img.img-fluid(src="../../images/ruta/ruta_02_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/3")
                        img.img-fluid(src="../../images/ruta/ruta_03_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/4")
                        img.img-fluid(src="../../images/ruta/ruta_04_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/5")
                        img.img-fluid(src="../../images/ruta/ruta_05_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/6")
                        img.img-fluid(src="../../images/ruta/ruta_06_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/7")
                        img.img-fluid(src="../../images/ruta/ruta_07_desk.jpg")
                        i.right-arrow.las.la-caret-right

                    a.pasos__inner(href="/ruta-de-compra/8")
                        img.img-fluid(src="../../images/ruta/ruta_08_desk.jpg")


</template>
<style lang="scss" scoped>
    .pasos{
        position: relative;
        background:#eee;
        &__inner{
            position: relative;
            display: inline-block;
            padding: 0 30px;
            img{
                max-width: 90px;
            }
            i.right-arrow{
                position: absolute;
                right: -12px;
                top: 30%;
                font-size: 2rem;
                color: #26a9e1;
            }
        }
        &__button{
            background: #eee;
            border-radius: 60px 60px 0 0;
            position: absolute;
            top:-60px;
            left: 45%;
            width: 120px;
            height: 60px;
            -webkit-appearance: none;
            border:0;
            i{
                font-size: 1.5em;
                color: #26a9e1;
            }
        }

    }
</style>

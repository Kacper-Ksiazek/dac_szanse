<template>
    <section class="ds-cert-main">
        <!--  -->
        <h1 class="about-intro">Centrum Edukacji Rehabilitacji i Terapii- <span class="pink">CERT</span></h1>
        <!--  -->
        <div class="ds-cert-floor" v-for="(floor, index) in floorsList" :key="floor.header" :class="index === currentActiveFloor ? 'active' : ''">
            <div class="ds-floor-header">
                <h1 v-text="floor.header"></h1>
                <div class="d-flex">
                    <a :href="floor.href">Zobacz galerie</a>
                    <button @click="currentActiveFloor = currentActiveFloor !== index ? index : null"><i class="fa fa-arrow-down"></i></button>
                </div>
            </div>
            <!--  -->
            <div class="ds-floor-features">
                <div class="feature" v-for="feature in floor.features" :key="feature.title">
                    <h2 v-text="feature.title"></h2>
                    <div class="img-wrapper">
                        <span class="black"></span>
                        <a :href="`${floor.href}#${feature.href}`">Zobacz</a>
                        <img :src="`${floor.imagesPrefix}${feature.img}`" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            currentActiveFloor: null,
            floorsList: [
                {
                    header: "Parter",
                    features: [
                        { title: "Budynek", img: "budynek/1.jpg", href: "budynek" },
                        { title: "Recepcja ", img: "recepcja/3.jpg", href: "recepcja" },
                        { title: "Poczekalnia ", img: "poczekalnia/5.jpg", href: "poczekalnia" },
                        { title: "Sale rehabilitacyjne", img: "sala/16.jpg", href: "sala-rehabilitacyjne" },
                        { title: "Darczyńcy", img: "darczyncy/2.jpg", href: "darczyncy" }
                    ],
                    href: "/o-nas/budowa-cert/parter",
                    imagesPrefix: "/images/about/cert/parter/"
                },
                {
                    header: "1. piętro",
                    features: [
                        { title: "Dyrektor", img: "dyrektor/1.jpg", href: "dyrektor" },
                        { title: "Gabinety terapeutyczne ", img: "gabinety/5.jpg", href: "gabinety" },
                        { title: "OREW ", img: "OREW/3.jpg", href: "orew" },
                        { title: "Poczekalnia", img: "poczekalnia/5.jpg", href: "poczekalnia" },
                        { title: "Sekretariat", img: "sekretariat/1.jpg", href: "sekretariat" }
                    ],
                    href: "/o-nas/budowa-cert/pietro-pierwsze",
                    imagesPrefix: "/images/about/cert/pierwsze/"
                },
                {
                    header: "2. piętro",
                    features: [
                        { title: "Administracja", img: "administracja/1.jpg", href: "administracja" },
                        { title: "Gabinety terapeutyczne ", img: "gabinety/9.jpg", href: "gabinety" },
                        { title: "Główny księgowy ", img: "ksiegowy/1.jpg", href: "ksiegowy" },
                        { title: "Księgowość", img: "ksiegowosc/1.jpg", href: "ksiegowosc" },
                        { title: "Sekretariat", img: "wice_prezes_zarzadu/1.jpg", href: "sekretariat" },
                        { title: "Zarząd", img: "zarzad/1.jpg", href: "zarzad" }
                    ],
                    href: "/o-nas/budowa-cert/pietro-drugie",
                    imagesPrefix: "/images/about/cert/drugie/"
                }
            ]
        };
    }
};
</script>

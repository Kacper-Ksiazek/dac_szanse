<template>
    <section class="ds-cert-main">
        <div class="ds-cert-floor" v-for="floor in floorsList" :key="floor.header">
            <div class="ds-floor-header">
                <span v-text="floor.header"></span>
                <button>Rozwin</button>
                <a :href="floor.href">Zobacz galerie</a>
            </div>
            <!--  -->
            <div class="ds-floor-features">
                <div class="feature" v-for="feature in floor.features" :key="feature.title">
                    <h2 v-text="feature.title"></h2>
                    <img :src="`${floor.imagesPrefix}${feature.img}`" style="width: 50vw" />
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            floorsList: [
                {
                    header: "Parter",
                    features: [
                        { title: "Budynek", img: "budynek/9.jpg", href: "#" },
                        { title: "Recepcja ", img: "recepcja/3.jpg", href: "#" },
                        { title: "Poczekalnia ", img: "poczekalnia/5.jpg", href: "#" },
                        { title: "Sale rehabilitacyjne", img: "sala/16.jpg", href: "#" },
                        { title: "Darczyńcy", img: "darczyncy/2.jpg", href: "#" }
                    ],
                    href: "#",
                    imagesPrefix: "/images/about/cert/parter/"
                }
                // {
                //     header: "1 pientro",
                //     items: ["Dyrektor", "Gabinety terapeutyczne", "OREW", "Poczekalnia", "Sekretariat"],
                //     href: "#"
                // },
                // {
                //     header: "2 pientro",
                //     items: ["Prezes Zarzadu", "Wice Prezes zarzadu", "Administracja", "Główny księgowy", "Księgowość", "Gabinety terapeutyczne"],
                //     href: "#"
                // }
            ]
        };
    }
};
</script>

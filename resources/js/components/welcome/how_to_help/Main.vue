<template>
    <div class="ds-welcome-how-to-help">
        <!--  -->
        <!--  -->
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="header">Jak pomóc?</h1>
        </div>
        <!--  -->
        <!--  -->
        <div class="how-to-help-content">
            <!--  -->
            <desktop-head @setCurrentSection="setCurrentSection" :currentHelpSection="currentHelpSection" :howToHelpList="howToHelpList"></desktop-head>
            <mobile-head @setCurrentSection="setCurrentSection" :currentHelpSection="currentHelpSection" :howToHelpList="howToHelpList"></mobile-head>
            <!--  -->
            <!--  -->
            <div class="body-wrapper">
                <!--  -->
                <!-- SPAN THAT HANDLE TOUGCH SWAPPING -->
                <!--  -->
                <span class="control" ref="control"></span>
                <!--  -->
                <!-- MAIN CONTENT -->
                <!--  -->
                <desktop-body :howToHelpList="howToHelpList" :currentHelpSection="currentHelpSection" rel="body"></desktop-body>
                <mobile-body :howToHelpList="howToHelpList" :currentHelpSection="currentHelpSection"></mobile-body>
                <!-- buttons that toggle between text and img preview on card section -->
                <button
                    class="toggle-img-text"
                    v-if="howToHelpList[currentHelpSection].type === 'card'"
                    @click="howToHelpList[currentHelpSection].showImg = !howToHelpList[currentHelpSection].showImg"
                    :class="howToHelpList[currentHelpSection].showImg ? 'active' : ''"
                >
                    <i class="fa fa-arrow-right"></i>
                </button>
                <!--  -->
                <!-- NAVIGATION SECTION -->
                <!--  -->
                <div class="bottom">
                    <!--  -->
                    <!-- Control dots -->
                    <!--  -->
                    <div v-if="howToHelpList[currentHelpSection].type === 'gallery'" class="control">
                        <div class="dots">
                            <div
                                class="dot"
                                @click="howToHelpList[currentHelpSection].currentImageIndex = 0"
                                :class="howToHelpList[currentHelpSection].currentImageIndex === 0 ? 'active' : ''"
                            ></div>
                            <div
                                class="dot"
                                @click="howToHelpList[currentHelpSection].currentImageIndex = 1"
                                :class="howToHelpList[currentHelpSection].currentImageIndex === 1 ? 'active' : ''"
                            ></div>
                            <div
                                class="dot"
                                @click="howToHelpList[currentHelpSection].currentImageIndex = 2"
                                :class="howToHelpList[currentHelpSection].currentImageIndex === 2 ? 'active' : ''"
                            ></div>
                        </div>
                    </div>
                    <!--  -->
                    <!-- SHOW MORE -->
                    <!--  -->
                    <a :href="howToHelpList[currentHelpSection].href" class="show-more main">Zobacz wiecej</a>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</template>
<script>
//Components
import DesktopBody from "./DesktopBody";
import MobileBody from "./MobileBody";
import DesktopHead from "./DesktopHead";
import MobileHead from "./MobileHead";
//Scripts
import { tougchSwapping } from "../../../scripts/tougchSwapping";
//
//
export default {
    mounted() {
        const rightCaseSwap = () => {
            const { currentHelpSection, howToHelpList } = this;
            if (currentHelpSection < howToHelpList.length - 1) this.currentHelpSection++;
        };
        //
        const leftCaseSwap = () => {
            if (this.currentHelpSection > 0) this.currentHelpSection--;
        };
        //
        tougchSwapping({
            that: this,
            methodIfRight: rightCaseSwap,
            methodIfLeft: leftCaseSwap,
            initValue: "swapXOnStart",
            element: this.$refs.control
        });
    },
    components: {
        "desktop-body": DesktopBody,
        "desktop-head": DesktopHead,
        "mobile-head": MobileHead,
        "mobile-body": MobileBody
    },
    methods: {
        getImgPath(prefix, extenstion, item) {
            return `${prefix}${item}.${extenstion}`;
        },
        setBodyStyles() {
            const { howToHelpList, currentHelpSection } = this,
                width = `width: ${100 * howToHelpList.length}vw;`,
                transform = `transform: translateX(-${(currentHelpSection * 100) / howToHelpList.length}%);`;

            return width + transform;
        },
        setCurrentSection(val) {
            this.currentHelpSection = val;
        }
    },
    //
    data() {
        return {
            swapXOnStart: null,
            currentHelpSection: 0,
            howToHelpList: [
                {
                    id: 0,
                    type: "gallery",
                    images: ["ambasada_1", "ambasada_2", "ambasada_3", "ambasada_4", "ambasada_5", "ambasada_6", "ambasada_7"],
                    prefix: "/images/help/ambasadorzy/",
                    extenstion: "jpg",
                    currentImageIndex: 0,
                    title: "Ambasadorzy",
                    href: "/jak-pomoc/ambasadorzy"
                },
                {
                    id: 1,
                    type: "gallery",
                    images: [
                        "abs bank spółdzielczy",
                        "androimpex",
                        "astor",
                        "bahlsen",
                        "cukiernia lenia",
                        "łysoń park hotel",
                        "maspex wadowice",
                        "madix",
                        "panelstyl",
                        "pss spolem",
                        "zpc skawa",
                        "Dinolandia",
                        "galicjanka wadowice",
                        "inwałd park",
                        "mini zoo",
                        "bajka",
                        "ogrod jana pawla ii",
                        "salon mira",
                        "ogrodowa logo",
                        "only you",
                        "spektakor logo",
                        "molo logo1",
                        "saferna photography",
                        "slodycza malowane",
                        "czarny gron logo",
                        "fotomix logo",
                        "paese logo",
                        "bielenda logo",
                        "inex",
                        "morawski",
                        "podoestetik",
                        "muszyna",
                        "radocza park1",
                        "sport fuel",
                        "indywiduali spa",
                        "black dragon",
                        "mawashi",
                        "pasoa",
                        "u rudej",
                        "abrakebabra",
                        "kwiaciarnia grochal",
                        "emi sport",
                        "skarby doliny karpia",
                        "hotel wadowice",
                        "steakhouse",
                        "dura farby",
                        "chem bud wadowice",
                        "wycieraczki samochodowe"
                    ],
                    prefix: "/images/help/darczyncy/",
                    extenstion: "png",
                    currentImageIndex: 0,
                    title: "Darczyńcy",
                    href: "/jak-pomoc/darczyncy"
                },

                {
                    id: 2,
                    type: "gallery",
                    images: [
                        "beskidzka 24",
                        "powiat live",
                        "wadowice online",
                        "wck wadowice",
                        "kultura andrychów2",
                        "ckst kalwaria",
                        "tvk hd",
                        "http://mamatezkobieta.pl/",
                        "https://kampaniespoleczne.pl/",
                        "mamnewsa1"
                    ],
                    prefix: "/images/help/wspolprace/",
                    extenstion: "png",
                    currentImageIndex: 0,
                    title: "Współpraca",
                    href: "/jak-pomoc/wspolpraca"
                },
                {
                    id: 3,
                    type: "card",
                    images: [],
                    prefix: "",
                    showImg: false,
                    title: "Przekaż 1% podatku",
                    text: {
                        header: "Pomaganie jest proste - wystarczy jeden wpis w Twoim zeznaniu podatkowym PIT !",
                        content: `Drodzy Państwo,
                                 Dzięki przekazaniu 1 % podatku przez osoby wielkiego serca, nasze dzieci mogą uczestniczyć w zajęciach, które są dla nich jednocześnie zabawą, ale i ciężką pracą terapeutyczną. `
                    },
                    href: "/jak-pomoc/podatek"
                }
            ]
        };
    }
};
</script>

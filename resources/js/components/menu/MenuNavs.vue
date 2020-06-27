<template>
    <div>
        <!-- OPEN MOBILE MENU -->
        <span class="open-mobile-menu" @click="mobileMenu ? exitMobileMenu() : (mobileMenu = true)" :class="{ active: mobileMenu }">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </span>
        <div class="" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>
            <!-- Right Side Of Navbar -->

            <!-- DESKTOP/TABLET MENU -->
            <ul class="navbar-nav ml-auto ds-menu-big">
                <li class="ds-menu-item" v-for="nav in navs" :key="nav.header.content">
                    <span class="ds-menu-header">
                        <a v-if="nav.header.href" :href="nav.header.href" class="content" v-text="nav.header.content"></a>
                        <a v-else class="content" v-text="nav.header.content"></a>
                    </span>
                    <div class="ds-menu-dropdown p-1" v-if="nav.body">
                        <div v-for="task in nav.body" :key="task.content"><a v-text="task.content" :href="task.href" :target="task.href.includes('http') ? '_blank' : ''"></a></div>
                    </div>
                </li>
            </ul>
            <!-- MOBILE MENU -->
            <div class="ds-menu-small" v-if="mobileMenu">
                <!-- IMAGES -->
                <section class="ds-menu-small-content">
                    <div class="navs-wrapper">
                        <div
                            class="small-nav-item"
                            v-for="(nav, index) in navs"
                            :key="nav.header.content"
                            :class="developItemIndex === index ? 'active' : ''"
                            :style="setTransform()"
                        >
                            <span class="ds-menu-small-nav-header">
                                <i v-if="nav.body" class="fa fa-chevron-down" @click="developItemIndex = developItemIndex === index ? -1 : index"></i>
                                <span v-else class="indent"></span>
                                <a v-if="nav.header.href" :href="nav.header.href" v-text="nav.header.content"></a>
                                <a v-else v-text="nav.header.content" @click="developItemIndex = developItemIndex === index ? -1 : index"></a>
                            </span>
                            <br />
                            <div>
                                <a v-for="task in nav.body" :key="task.content" v-text="task.content" :href="task.href" class="ds-menu-small-dropdown-item"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    //header- to co widzimy i z czym wchodzimy w interakcje
    //body- to co widzimy po najechaniu w header
    data() {
        return {
            developItemIndex: -1,
            mobileMenu: false,
            navs: [
                {
                    header: { content: "O nas", href: "" },
                    body: [
                        { content: "Zarząd", href: "/o-nas/zarzad" },
                        { content: "Historia", href: "/o-nas/historia" },
                        { content: "Nagrody i Wyróżnienia", href: "/o-nas/nagrody-i-wyroznienia" },
                        { content: "CERT", href: "/o-nas/cert" },
                        { content: "RODO", href: "/o-nas/polityka-rodo" }
                    ]
                },
                {
                    header: { content: "Aktualności", href: "/aktualnosci" }
                },
                {
                    header: { content: "Działalność", href: "" },
                    body: [
                        { content: "Zajęcia", href: "/dzialalnosc/zajecia" },
                        { content: "Projekty", href: "/dzialalnosc/projekty" }
                    ]
                },
                {
                    header: { content: "Nasze placówki", href: "/nasze-placowki" },
                    body: [
                        { content: "Niepubliczna Specjalistyczna Poradnia Psychologiczno-Pedagogiczna", href: "http://www.poradnia-wadowice.pl/" },
                        { content: "Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy", href: "/nasze-placowki/niepubliczny-osrodek-rewalidacyjno-wychowawczy" },
                        { content: 'Niepubliczny Punkt Przedszkolny "Dać Szansę"', href: "http://www.przedszkoledacszanse.pl/" },
                        { content: 'Świetlica Terapeutyczno-Integracyjna "Szansa"', href: "/nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa" },
                        { content: 'Spółdzielnia Socjalna "AMICUS"', href: "http://spoldzielniaamicus.pl/" }
                    ]
                },
                {
                    header: { content: "Jak pomóc", href: "/jak-pomoc" },
                    body: [
                        { content: "Ambasadorzy", href: "/jak-pomoc/ambasadorzy" },
                        { content: "Darczyńcy", href: "/jak-pomoc/darczyncy" },
                        { content: "Współpraca", href: "/jak-pomoc/wspolpraca" },
                        { content: "Nowożeńcy dają szansę!", href: "/jak-pomoc/nowozency" },
                        { content: "Przekaż 1% podatku", href: "/jak-pomoc/przekaz-1%-podatku" },
                        { content: "Allegro charytatywni", href: "/jak-pomoc/allegro-charytatywni" },
                        { content: "Pomóż nam zaoszczędzić", href: "/jak-pomoc/pomoz-nam-zaoszczedzic" },
                        { content: "Siepomaga", href: "/jak-pomoc/siepomaga" },
                        { content: "Zrzutka.pl", href: "/jak-pomoc/zrzutka" }
                    ]
                },
                {
                    header: { content: "Kontakt", href: "/kontakt" }
                }
            ]
        };
    },
    methods: {
        setTransform() {
            const { developItemIndex } = this;
            if (developItemIndex === -1) return "";
            return `transform: translateY(-${developItemIndex * 60}px)`;
        },
        exitMobileMenu(e) {
            const el = document.querySelector("div.ds-menu-small");
            el.classList.add("exit");
            setTimeout(() => {
                el.classList.remove("exit");
                this.mobileMenu = false;
            }, 600);
        }
    }
};
</script>

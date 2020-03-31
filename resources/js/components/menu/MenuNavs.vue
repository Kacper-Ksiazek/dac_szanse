<template>
    <div>
        <!-- OPEN MOBILE MENU -->
        <button class="ds-menu-navbar-toggler" type="button" @click="openMobileMenu"><i class="fa fa-bars"></i></button>

        <div class="" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>
            <!-- Right Side Of Navbar -->

            <!-- DESKTOP/TABLET MENU -->
            <ul class="navbar-nav ml-auto ds-menu-big">
                <li class="ds-menu-item" v-for="nav in navs" :key="nav.header.content">
                    <span class="ds-menu-header">
                        <a :href="nav.header.href" class="content" v-text="nav.header.content"></a>
                    </span>
                    <div class="ds-menu-dropdown p-1" v-if="nav.body">
                        <div v-for="task in nav.body" :key="task.content"><a v-text="task.content" :href="task.href" :target="task.href.includes('http') ? '_blank' : ''"></a></div>
                    </div>
                </li>
            </ul>
            <!-- MOBILE MENU -->
            <div class="ds-menu-small" v-if="mobileMenu">
                <div class="ds-menu-small-logo">
                    <div>
                        <div class="ds-menu-small-logo-img"></div>
                        <button class="btn btn-primary" @click="exitMobileMenu"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- <img src="./images/logo.png" alt="" /> -->
                </div>
                <section class="ds-menu-small-content">
                    <div class="small-nav-item" v-for="nav in navs" :key="nav.header.content">
                        <span class="ds-menu-small-nav-header">
                            <i class="fa fa-chevron-down" @click="mobileToggleClass"></i>
                            <a :href="nav.header.href" v-text="nav.header.content"></a>
                        </span>
                        <br />
                        <div>
                            <!-- <a href="#" class="ds-menu-small-dropdown-item">adasd</a> -->
                            <a v-for="task in nav.body" :key="task.content" v-text="task.content" :href="task.href" class="ds-menu-small-dropdown-item"></a>
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
            mobileMenu: false,
            navs: [
                {
                    header: { content: "O nas", href: "/o-nas" },
                    body: [
                        { content: "Zarząd", href: "#" },
                        { content: "Historia", href: "#" },
                        { content: "Nagrody i Wyróżnienia", href: "#" },
                        { content: "Budowa CERT", href: "#" },
                        { content: "RODO", href: "#" }
                    ]
                },
                {
                    header: { content: "Aktualności", href: "/aktualnosci" }
                },
                {
                    header: { content: "Działalność", href: "/dzialalnosc" },
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
                        { content: 'Niepubliczny Punkt Przedszkolny "Dać Szansę', href: "http://www.przedszkoledacszanse.pl/" },
                        { content: 'Świetlica Terapeutyczno-Integracyjna  "Szansa', href: "/nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa" },
                        { content: 'Spółdzielnia Socjalna "AMICUS', href: "http://spoldzielniaamicus.pl/" }
                    ]
                },
                {
                    header: { content: "Jak pomóc", href: "/jak-pomoc" },
                    body: [
                        { content: "Ambasadorzy", href: "/jak-pomoc/ambasadorzy" },
                        { content: "Darczyńcy", href: "/jak-pomoc/darczyncy" },
                        { content: "Współpraca", href: "/jak-pomoc/wspolpraca" },
                        { content: "Nowożeńcy dają szansę!", href: "/jak-pomoc/nowozency" },
                        { content: "Jak przekazać darowiznę", href: "#" },
                        { content: "Allegro charytatywni", href: "/jak-pomoc/allegro-charytatywni" },
                        { content: "Pomóż nam zaoszczędzić", href: "/jak-pomoc/pomoz-nam-zaoszczedzic" },
                        { content: "Siepomaga", href: "/jak-pomoc/siepomaga" },
                        { content: "Zrzutka.pl", href: "/jak-pomoc/zrzutka" }
                    ]
                },
                {
                    header: { content: "Kontakt", href: "#" }
                }
            ]
        };
    },
    methods: {
        openMobileMenu() {
            this.mobileMenu = true;
        },
        mobileToggleClass(e) {
            const el = e.target.parentNode.parentNode,
                addActive = el.classList.contains("active");
            document.querySelectorAll(".small-nav-item").forEach(item => item.classList.remove("active"));
            if (!addActive) el.classList.add("active");
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

<template>
    <section class="ds-footer">
        <!--  -->
        <div class="footer-box" v-for="item in routesBlocks" :key="item.header">
            <h3 v-text="item.header"></h3>
            <ul>
                <li v-for="route in item.items" :key="route.title"><a :href="route.href" v-text="route.title"></a></li>
            </ul>
        </div>
        <!--  -->
        <div class="footer-box f-logo"></div>
        <!--  -->
        <div class="footer-box info">
            <div>Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych "Dać Szansę" w Wadowicach</div>
            <div class="mt-3">ul. Kochanowskiego 42, 34-100 Wadowice</div>

            <div class="mt-3">(33)873-18-87 - <strong>Recepcja</strong> 697-280-553, 695-727-833 - <strong>Administracja stowarzyszenie@dacszanse.pl</strong></div>

            <div class="mt-3">
                <strong>Bank Pekao SA o/Wadowice</strong>
                <p>89 1240 4197 1111 0000 46 92 9350</p>
            </div>
            <div class="mt-3">
                <strong>Bank Alior Bank o/Wadowice</strong>
                <p>60 2490 0005 0000 4530 8455 3611</p>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    //
    data() {
        return {
            //
            routesBlocks: [
                {
                    header: "Stowarzyszenie",
                    items: [
                        {
                            title: "Strona Główna",
                            href: "/"
                        },
                        {
                            title: "Budowa CERT",
                            href: "/o-nas#cert"
                        },
                        {
                            title: "Działalność",
                            href: "/dzialalnosc"
                        },
                        {
                            title: "Aktualności",
                            href: "/aktualnosci"
                        },
                        {
                            title: "Jak pomóc",
                            href: "/jak-pomoc"
                        },
                        {
                            title: "Kontakt",
                            href: "/kontakt"
                        },
                        {
                            title: "O nas",
                            href: "/o-nas"
                        }
                    ]
                },
                {
                    header: "Nasze placówki",
                    items: [
                        { title: "Niepubliczna Specjalistyczna Poradnia Psychologiczno-Pedagogiczna", href: "http://www.poradnia-wadowice.pl/" },
                        { title: "Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy", href: "/nasze-placowki/niepubliczny-osrodek-rewalidacyjno-wychowawczy" },
                        { title: 'Niepubliczny Punkt Przedszkolny "Dać Szansę', href: "http://www.przedszkoledacszanse.pl/" },
                        { title: 'Świetlica Terapeutyczno-Integracyjna  "Szansa', href: "/nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa" },
                        { title: 'Spółdzielnia Socjalna "AMICUS', href: "http://spoldzielniaamicus.pl/" }
                    ]
                },
                {
                    header: "Formy terapii",
                    items: [
                        {
                            title: "Zajęcia psychologiczno - pedagogiczno - logopedyczne",
                            href: "/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne"
                        },
                        {
                            title: "Zajęcia w Sali Doświadczania świata",
                            href: "/dzialalnosc/zajecia/sala-doswiadczania-swiatla"
                        },
                        {
                            title: "Zajęcia Integracji Sensorycznej ",
                            href: "/dzialalnosc/zajecia/sala-ingegracji-sensorycznej"
                        },
                        {
                            title: "Zajęcia rehabilitacyjne ",
                            href: "/dzialalnosc/zajecia/zajecia-rehabilitacyjne"
                        },
                        {
                            title: "Hipoterapia",
                            href: "/dzialalnosc/zajecia/hipoterapia"
                        },
                        {
                            title: "Hydroterapia",
                            href: "/dzialalnosc/zajecia/hydroterapia"
                        },
                        {
                            title: "Dogoterapia ",
                            href: "/dzialalnosc/zajecia/dogoterapia"
                        },
                        {
                            title: "Muzykoterapia ",
                            href: "/dzialalnosc/zajecia/muzykoterapia"
                        },
                        {
                            title: "Arteterapia",
                            href: "/dzialalnosc/zajecia/arteterapia"
                        },
                        {
                            title: "Biofeedback",
                            href: "/dzialalnosc/zajecia/biofeedback"
                        }
                    ]
                }
            ]
        };
    }
};
</script>

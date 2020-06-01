<template>
    <section class="ds-footer">
        <!--  -->
        <div class="image"></div>
        <div class="content">
            <h1>Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych "Dać Szansę" w Wadowicach</h1>
            <!--  -->
            <div class="fields">
                <div class="field">
                    <span>ul. Kochanowskiego 42</span>
                    <span>34-100 Wadowice</span>
                    <span>www.dacszanse.pl</span>
                </div>
                <!--  -->
                <div class="field">
                    <span>tel. (33) 873 18 87</span>
                    <span>kom. 697 280 553</span>
                    <span>kom. 695 727 833</span>
                </div>
                <!--  -->
                <div class="field">
                    <span>stowarzyszenie@dacszanse.pl</span>
                    <span>KRS 0000146813</span>
                    <span>Bank Pekao SA 89 1240 4197 1111 0000 4692 9350</span>
                </div>
            </div>
            <!--  -->
            <div class="bottom">
                <a href="">Regulamin</a>
                <a href="">Polityka prywatności</a>
                <a href="">Kontakt</a>
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

<template>
    <section class="ds-about-wrapper">
        <h1>Zarząd - z potrzeby serca</h1>
        <!--  -->
        <!--  -->
        <!--  -->
        <people-list :list="peopleList"></people-list>
        <!--  -->
        <!--  -->
        <!--  -->
        <h1>Historia Stowarzyszenia „Dać Szansę”</h1>
        <!--  -->
        <div class="history-text">
            <div class="main">
                Początki Stowarzyszenia „Dać Szansę” sięgają 2002 roku, kiedy to kilkoro rodziców dzieci z różnego rodzaju niepełnosprawnościami postanowiło wspólnie starać się o
                lepszy start życiowy dla swoich pociech. Doszliśmy do wniosku, że razem możemy więcej! – dlatego członków Stowarzyszenia szybko zaczęło przybywać.
            </div>
            <div class="second" :class="historyAllText ? 'active' : ''">
                <span>
                    Z chwilą podpisania deklaracji o przystąpieniu do „Dać Szansę” dziecko stawało się podopiecznym Stowarzyszenia i mogło uczestniczyć w zajęciach indywidualnych i
                    grupowych, prowadzonych przez specjalistówz dziedziny fizjoterapii, psychologii, pedagogiki specjalnej, logopedii. Dzisiaj dziecikorzystają dodatkowo jeszcze z
                    hydroterapii, zajęć integracji sensorycznej, arteterapii orazzajęć na Sali Doświadczania Świata. Wiele dzieci korzysta również ze
                    świetlicyTerapeutyczno-Integracyjnej „Szansa”, gdzie organizowane są zajęcia w określonych grupachwiekowych i na podobnym stopniu rozwoju.Chętnych do
                    skorzystania z bogatej oferty zajęć od samego początku nie brakuje. W dziesiątąrocznicę powstania Stowarzyszenia obejmowaliśmy kompleksową opieką już 230
                    dzieci. Dziś naszychpodopiecznych jest już ponad 500 i wciąż zgłaszają się kolejni.Chcąc jak najlepiej odpowiedzieć na potrzeby dzieci, Stowarzyszenie powołało
                    NiepublicznąSpecjalistyczną Poradnię Psychologiczno-Pedagogiczną, a kilka lat później Niepubliczny PunktPrzedszkolny (dla dzieci z autyzmem) oraz Niepubliczny
                    Ośrodek Rehabilitacyjno-Wychowawczy dladzieci z głębszą niepełnosprawnością intelektualną. W 2019 roku udało nam się sfinalizowaćbudowę Centrum
                    Edukacyjno-Rehabilitacyjno-Terapeutycznego. Oznacza to, że prowadzone zajęciamożemy pomieścić w jednym, specjalnie przystosowanym dla osób niepełnosprawnych
                    budynku i tymsamym ułatwić korzystanie z nich naszym podopiecznym.Przy naszym Stowarzyszeniu działa również Centrum Wolontariatu, co oznacza możliwość
                    włączeniasię wolontariuszy w nasze działania w sposób bardzo czynny i kreatywny. Powołaliśmy także PunktInformacyjno-Doradczy dla osób niepełnosprawnych i ich
                    rodzin.Chociaż tak wiele już za nami i tyle udało się nam już osiągnąć, to pomysłów nam nie brakuje. Odpoczątku istnienia nasza działalność była możliwa dzięki
                    ludzkiej życzliwości. Zajęcia zdziećmi są finansowane m. in. dzięki darowiznom osób prywatnych oraz przekazanego w ramach akcji1 % podatku. Wszystkich którzy
                    czytają „O Nas” serdecznie zapraszamy do zapoznania się z nasządziałalnością oraz wsparcie i podarowania nam tej niewielkiej części swojego podatku.
                </span>
            </div>
            <button @click="historyAllText = !historyAllText">Zobacz więcej</button>
        </div>
    </section>
</template>
<script>
//
//
import PeopleList from "./PeopleList.vue";
export default {
    components: {
        "people-list": PeopleList
    },
    data() {
        return {
            historyAllText: false,
            peopleList: [
                {
                    id: 0,
                    header: "Zarząd",
                    list: [
                        { id: 0, position: "Prezes Zarządu", name: "Bogumiła Jończyk" },
                        { id: 1, position: "Wiceprezes Zarządu", name: "Joanna Szymańska" },
                        { id: 2, position: "Członek Zarządu", name: "Jolanta Dziergas" },
                        { id: 3, position: "Członek Zarządu", name: "Andrzej Palkij" },
                        { id: 4, position: "Członek Zarządu", name: "Robert Susfał" },
                        { id: 5, position: "Członek Zarządu", name: "Jarosław Jakubiec" },
                        { id: 6, position: "Członek Zarządu", name: "Mirosław Śmiech" }
                    ]
                },
                //
                {
                    id: 1,
                    header: "Komisja Rewizyjna",
                    list: [
                        { id: 0, position: "Przewodnicząca Komisji Rewizyjnej", name: "Katarzyna Wolanin" },
                        { id: 1, position: "Członek Komisji Rewizyjnej", name: "Mirosława Drabik" },
                        { id: 2, position: "Członek Komisji Rewizyjnej", name: "Jadwiga Łojewska" }
                    ]
                },
                //
                {
                    id: 2,
                    header: "Sąd  Koleżeński",
                    list: [
                        { id: 0, position: "Przewodnicząca Sądu Koleżeńskiego", name: "Elżbieta Kosik" },
                        { id: 1, position: "Sekretarz Sądu Koleżeńskiego", name: "Katarzyna Wykręt" },
                        { id: 2, position: "Członek Sądu Koleżeńskiego", name: "Tomasz Pasternak" }
                    ]
                }
            ],
            awardsList: [
                {
                    id: 0,
                    content:
                        "W latach 2008 i 2010 zostaliśmy dwukrotnym laureatem konkursu „Warto być za!  - konkurs organizowany był przez Kampanię Piwowarską. Wygrane pieniądze przeznaczone zostały na realizację wsparcia dla dzieci niepełnosprawnych w tym otwarcie pierwszej w powiecie  Sali Doświadczania Świata.",
                    image1: "",
                    image2: ""
                },
                {
                    id: 1,
                    content: 'W 2008 zostaliśmy finalistami konkursu „Kryształy Soli" – za całokształt działalności na rzecz osób niepełnosprawnych.',
                    image1: "",
                    image2: ""
                },
                {
                    id: 2,
                    content:
                        "Działalność naszego Stowarzyszenia została dostrzeżona i w 2006 oraz 2007 roku byliśmy półfinalistami w konkursie o nagrodę Marszałka Województwa Małopolskiego „Kryształy Soli” w kategorii Polityka Społeczna.",
                    image1: "",
                    image2: ""
                },
                {
                    id: 3,
                    content:
                        'W roku 2013 otrzymaliśmy Wyróżnienie w Konkursie o Nagrodę Marszałka Województwa Małopolskiego "Kryształy Soli" w kategorii polityka społeczna, zdrowie oraz działalność na rzecz osób niepełnosprawnych:',
                    image1: "",
                    image2: ""
                },
                {
                    id: 4,
                    content: "A także pierwsze miejsce w kategorii Lodołamacz - instytucja.",
                    image1: "",
                    image2: ""
                }
            ]
        };
    }
};
</script>

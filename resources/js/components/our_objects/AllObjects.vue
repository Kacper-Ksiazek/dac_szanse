<template>
    <div>
        <logo></logo>
        <single-object v-for="item in objects" :key="item.title" :data="item"></single-object>
        <!-- DAYROOM -->
        <span class="ds-oo-break-line"></span>
    </div>
</template>
<script>
import OOLogo from "./OOLogo.vue";
import SingleObject from "./SingleObject.vue";
export default {
    components: { logo: OOLogo, "single-object": SingleObject },
    data() {
        return {
            objects: [
                {
                    type: "item",
                    title: "Niepubliczna Specjalistyczna Poradnia Psychologiczno-Pedagogiczna",
                    href: "http://www.poradnia-wadowice.pl/",
                    img: "./images/ourObjects/item1.jpg",
                    left: [
                        { icon: "fa fa-phone", value: "608 822 852" },
                        { icon: "fa fa-phone", value: "531 403 805" },
                        { icon: "fa fa-globe", value: "www.poradnia-wadowice.pl" },
                        { icon: "fa fa-envelope", value: "poradnia@dacszanse.pl" }
                    ],
                    right: [
                        { title: "KRS", value: "0000146813m" },
                        { title: "NIP", value: "551 261 74 91" },
                        { title: "REGON", value: "122936595" },
                        { title: "Konto", value: "Alior Bank o/Wadowice 74 2490 0005 0000 4600 6140 3101" }
                    ]
                },
                {
                    type: "item",
                    title: "Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy",
                    href: "./nasze-placowki/niepubliczny-osrodek-rewalidacyjno-wychowawczy",
                    img: "/images/ourObjects/item2.jpg",
                    left: [],
                    right: []
                },
                {
                    type: "item",
                    title: `Świetlica Terapeutyczno-Integracyjna "Szansa"`,
                    href: "./nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa",
                    img: "/images/ourObjects/item3.jpg",
                    left: [],
                    right: []
                },
                {
                    type: "item",
                    title: `Niepubliczny Punkt Przedszkolny "Dać Szansę"`,
                    href: "http://www.przedszkoledacszanse.pl/",
                    img: "/images/ourObjects/item4.jpg",
                    left: [],
                    right: []
                },
                {
                    type: "item",
                    title: `Spółdzielnia Socjalna "AMICUS"`,
                    href: "http://spoldzielniaamicus.pl/",
                    img: "/images/ourObjects/item5.jpg",
                    left: [],
                    right: []
                }
            ]
        };
    }
};
</script>

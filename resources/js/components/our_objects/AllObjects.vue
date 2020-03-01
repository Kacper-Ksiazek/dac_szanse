<template>
    <div>
        <logo></logo>
        <!-- ITEM ONE -->
        <section class="ds-oo-place" id="section1" :class="itemOne">
            <img src="./images/item1.png" />
            <div class="content">
                <h1><span>Niepubliczna Specjalistyczna Poradnia Psychologiczno-Pedagogiczna</span></h1>
                <div class="ds-oo-place-content-wrapper">
                    <!-- {{-- LEFT SIDE --}} -->
                    <div class="ds-oo-border">
                        <span><i class="fa fa-phone"></i> 608 822 852</span>
                        <span><i class="fa fa-phone"></i> 531 403 805</span>
                        <span><i class="fa fa-globe"></i><strong> www.poradnia-wadowice.pl</strong></span>
                        <span><i class="fa fa-envelope"></i><strong> poradnia@dacszanse.pl</strong></span>
                    </div>
                    <!-- {{-- RIGHT SIDE --}} -->
                    <div>
                        <span><strong>KRS:</strong> 0000146813</span>
                        <span><strong>NIP:</strong> 551 261 74 91</span>
                        <span><strong>REGON:</strong> 122936595</span>
                        <span><strong>Konto:</strong> Alior Bank o/Wadowice 74 2490 0005 0000 4600 6140 3101</span>
                    </div>
                </div>
                <button class="ds-oo-see-more">Zobacz szczegóły <i class="fa fa-info-circle"></i></button>
            </div>
        </section>

        <!-- ITEM TWO -->
        <section class="ds-oo-place" id="section2" :class="itemTwo">
            <img src="./images/item2.png" />
            <div class="content">
                <h1><span>Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy</span></h1>
                <div class="ds-oo-place-content-wrapper">
                    <!-- {{-- LEFT SIDE --}} -->
                    <div class="ds-oo-border">
                        <span><i class="fa fa-phone"></i> 531 403 805</span>
                        <span><i class="fa fa-globe"></i><strong> www.poradnia-wadowice.pl</strong></span>
                        <span><i class="fa fa-envelope"></i><strong> poradnia@dacszanse.pl</strong></span>
                    </div>
                    <!-- {{-- RIGHT SIDE --}} -->
                    <div>
                        <span><strong>KRS:</strong> 0000146813</span>
                        <span><strong>NIP:</strong> 551 261 74 91</span>
                        <span><strong>REGON:</strong> 122936595</span>
                        <span><strong>Konto:</strong> Alior Bank o/Wadowice 74 2490 0005 0000 4600 6140 3101</span>
                    </div>
                </div>
                <button class="ds-oo-see-more">Zobacz szczegóły <i class="fa fa-info-circle"></i></button>
            </div>
        </section>

        <!-- DAYROOM -->
        <section class="ds-oo-dayroom" id="dayroom" :class="dayroom">
            <h1><span>Świetlica Terapeutyczno-Integracyjna "Szansa"</span></h1>
            <button class="ds-oo-dayroom-btn">Zobacz szczegóły <i class="fa fa-info-circle"></i></button>
        </section>

        <!-- ITEM THREE -->
        <section class="ds-oo-place" id="section3" :class="itemThree">
            <img src="./images/item1.png" />
            <div class="content">
                <h1><span>Niepubliczny Punkt Przedszkolny "Dać Szansę"</span></h1>
                <br />
                <br />
                <br />
                <button class="ds-oo-see-more">Zobacz stronę <i class="fa fa-info-circle"></i></button>
            </div>
        </section>

        <!-- ITEM FOUR -->
        <section class="ds-oo-place" id="section4" :class="itemFour">
            <img src="./images/item2.png" />
            <div class="content">
                <h1><span>Spółdzielnia Socjalna "AMICUS"</span></h1>
                <br />
                <br />
                <br />
                <button class="ds-oo-see-more">Zobacz stronę <i class="fa fa-info-circle"></i></button>
            </div>
        </section>

        <span class="ds-oo-break-line"></span>
    </div>
</template>
<script>
import OOLogo from "./OOLogo.vue";
export default {
    components: { logo: OOLogo },
    created() {
        window.addEventListener("scroll", () => {
            const scroll = window.scrollY;
            this.itemOne = scroll > 0 ? "active" : this.itemOne;
            this.itemTwo = document.getElementById("section1").offsetTop < scroll ? "active" : this.itemTwo;
            this.dayroom = document.getElementById("section2").offsetTop + 300 < scroll ? "active" : this.dayroom;
            this.itemThree = document.getElementById("dayroom").offsetTop < scroll ? "active" : this.itemThree;
            this.itemFour = document.getElementById("section3").offsetTop < scroll ? "active" : this.itemFour;
        });
    },
    data() {
        return {
            itemOne: "",
            itemTwo: "",
            itemThree: "",
            itemFour: "",
            dayroom: ""
        };
    }
};
</script>

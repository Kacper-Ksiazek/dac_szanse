<template>
    <section class="ds-contact">
        <!-- Logo -->
        <div class="ds-contact-logo logo">
            <h1>Kontakt</h1>
        </div>
        <!-- Formy -->
        <div class="ds-contact-form">
            <div class="single-form" v-for="(item, index) in contactForms" :key="index">
                <div class="line">
                    <span v-text="item.firstLine.title"></span>
                    <strong v-text="item.firstLine.strong"></strong>
                </div>
                <!--  -->
                <div v-if="item.secondLine" class="line">
                    <span v-text="item.secondLine.title"></span>
                    <strong v-text="item.secondLine.strong"></strong>
                </div>
            </div>
        </div>
        <!-- Mapy -->
        <div class="ds-content-items">
            <!--  -->
            <div class="wrapper">
                <!--  -->
                <!-- First -->
                <!--  -->
                <div class="single-map">
                    <div class="info">
                        <div class="d-flex">
                            <i class="fa fa-location-arrow"></i>
                            <h1>Stowarzyszenie+ Poradnia+ NOREW</h1>
                        </div>
                        <span>34-100 Wadowice ul. Kochanowskiego 42</span>
                    </div>
                    <a href="https://www.google.com/maps/place/Jana+Kochanowskiego+42,+34-100+Wadowice" target="_blank">
                        <img src="/images/contact/maps/poradnia.jpg" alt="" />
                    </a>
                </div>
                <!--  -->
                <!-- Seconds -->
                <!--  -->
                <div class="single-map">
                    <div class="info">
                        <div class="d-flex">
                            <i class="fa fa-location-arrow"></i>
                            <h1>Spółdzielnia</h1>
                        </div>
                        <span>34-100 Wadowice Os. XX-lecia Konstytucji RP 19/1</span>
                    </div>
                    <a href="https://www.google.com/maps/search/34-100+Wadowice+Os.+XX-lecia+Konstytucji+RP+19%2F1" target="_blank">
                        <img src="/images/contact/maps/spoldzielnia.jpg" alt="" />
                    </a>
                </div>
            </div>
            <!--  -->
            <!-- Single big map -->
            <div class="big-map">
                <div class="info">
                    <div class="d-flex">
                        <i class="fa fa-location-arrow"></i>
                        <h1>Stowarzyszenie+ Poradnia+ NOREW</h1>
                    </div>
                    <span>34-100 Wadowice ul. Kochanowskiego 42</span>
                </div>
                <a href="https://www.google.com/maps/place/Ko%C5%9Bcielna+3,+34-123+Chocznia" target="_blank">
                    <img src="/images/contact/maps/przedszkole.jpg" alt="" />
                </a>
            </div>
            <!--  -->
        </div>
        <!--  -->
    </section>
</template>
<script>
export default {
    //
    data() {
        return {
            contactForms: [
                {
                    firstLine: { title: "Godziny pracy: ", strong: "poniedziałek-piątek 7:30-15:30" }
                },
                {
                    firstLine: { title: "Recepcja: ", strong: "(33)873-18-87" }
                },
                {
                    firstLine: { title: "Administracja: ", strong: "697-280-553" },
                    secondLine: { title: "lub", strong: "697-280-553" }
                },
                {
                    firstLine: { title: "email: ", strong: "stowarzyszenie@dacszanse.pl" }
                },
                {
                    firstLine: { title: "Bank Pekao SA o/Wadowice: ", strong: "89 1240 4197 1111 0000 46 92 9350" },
                    secondLine: { title: "Bank Alior Bank o/Wadowice", strong: "60 2490 0005 0000 4530 8455 3611" }
                }
            ]
        };
    }
};
</script>

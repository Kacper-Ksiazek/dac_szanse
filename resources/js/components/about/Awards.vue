<template>
    <section class="ds-about-awards">
        <h1>Nasze <span class="pink">wyróżnienia</span></h1>
        <div class="items">
            <div class="single-award" v-for="(award, index) in awardsList" :key="index">
                <!--  -->
                <div class="image" :style="award.image | getBackgroundPath"></div>
                <!--  -->
                <div class="content">
                    <p v-text="award.content"></p>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    filters: {
        getBackgroundPath(val) {
            return `background-image: url('/images/about/awards/${val}')`;
        }
    },
    data() {
        return {
            awardsList: [
                {
                    content:
                        "W latach 2008 i 2010 zostaliśmy dwukrotnym laureatem konkursu „Warto być za!  - konkurs organizowany był przez Kampanię Piwowarską. Wygrane pieniądze przeznaczone zostały na realizację wsparcia dla dzieci niepełnosprawnych w tym otwarcie pierwszej w powiecie  Sali Doświadczania Świata.",
                    image: "nagroda1.jpg"
                },
                {
                    content: 'W 2008 zostaliśmy finalistami konkursu „Kryształy Soli" – za całokształt działalności na rzecz osób niepełnosprawnych.',
                    image: "nagroda3.jpg"
                },
                {
                    content:
                        "Działalność naszego Stowarzyszenia została dostrzeżona i w 2006 oraz 2007 roku byliśmy półfinalistami w konkursie o nagrodę Marszałka Województwa Małopolskiego „Kryształy Soli” w kategorii Polityka Społeczna.",
                    image: "nagroda4.jpg"
                },
                {
                    content:
                        'W roku 2013 otrzymaliśmy Wyróżnienie w Konkursie o Nagrodę Marszałka Województwa Małopolskiego "Kryształy Soli" w kategorii polityka społeczna, zdrowie oraz działalność na rzecz osób niepełnosprawnych:',
                    image: "nagroda6.jpg"
                },
                {
                    content: "A także pierwsze miejsce w kategorii Lodołamacz - instytucja.",
                    image: "nagroda7.jpg"
                }
            ]
        };
    }
};
</script>

<template>
    <section class="ds-landing-page">
        <div class="main-logo">
            <div class="text">
                <h1>Dla Ciebie to tylko 1% podatku,</h1>
                <h1>Dla nas to 100% twojego serca!</h1>
                <h1>
                    <div class="heart"></div>
                    KRS: 000146813
                </h1>
            </div>
        </div>
        <!--  -->
        <activities></activities>
        <!--  -->
        <news :newsList="JSON.parse(news)"></news>
        <!--  -->
        <support></support>
        <!--  -->
    </section>
</template>
<script>
import activities from "./Activities";
import news from "./News";
import support from "./Support";
//
export default {
    props: ["news"],
    components: {
        activities,
        news,
        support
    }
};
</script>

<template>
    <section class="ds-weclome-wrapper">
        <div class="main-logo"></div>
        <!--  -->
        <!--  -->
        <!--  -->
        <activities :projects="projects"></activities>
        <!--  -->
        <!--  -->
        <!--  -->
        <about-us></about-us>
        <!--  -->
        <!--  -->
        <!--  -->
        <news :news="news"></news>
        <!--  -->
        <!--  -->
        <!--  -->
        <how-to-help></how-to-help>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </section>
</template>
<script>
//
import Activities from "./Activities";
import AboutUs from "./AboutUs";
import News from "./News";
import HowToHelp from "./how_to_help/Main";
//
export default {
    props: ["projects", "news"],
    components: {
        activities: Activities,
        "about-us": AboutUs,
        news: News,
        "how-to-help": HowToHelp,
    },
};
</script>

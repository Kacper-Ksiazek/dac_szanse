<template>
    <div class="about-our-awards-wrapper">
        <h1>Nasze wyróżnienia</h1>
        <!--  -->
        <!--  -->
        <desktop :awards="awards"></desktop>
        <mobile :awards="awards"></mobile>
    </div>
</template>
<script>
import Desktop from "./Desktop.vue";
import Mobile from "./Mobile.vue";
export default {
    //
    components: {
        desktop: Desktop,
        mobile: Mobile
    },
    props: ["awards"]
};
</script>

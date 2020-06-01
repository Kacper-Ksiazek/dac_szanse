<template>
    <section class="ds-landing-help" ref="wrapper">
        <div class="content">
            <!--  -->
            <div class="text">
                <h1 class="you">ty też możesz</h1>
                <h1 class="dac-szanse">Dać Szansę</h1>
                <a href="/jak-pomoc" class="how-to-help"><span>Zobacz jak pomóc</span></a>
            </div>
            <!--  -->
            <div class="help-forms">
                <div class="single-help-form" v-for="item in 5" :key="item" :style="`background-image: url('/images/welcome/help_forms/${item}.png')`"></div>
            </div>
            <!--  -->
            <div class="tree"></div>
        </div>
    </section>
</template>
<script>
export default {
    mounted() {
        const a = this.$refs.wrapper;
        window.addEventListener("scroll", () => {
            if (scrollY > a.offsetTop - a.offsetHeight) a.classList.add("active");
        });
    }
};
</script>

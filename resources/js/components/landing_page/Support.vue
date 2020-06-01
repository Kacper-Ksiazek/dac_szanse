<template>
    <section class="ds-landing-support" ref="wrapper">
        <h1 class="header">wspierają nas</h1>
        <div class="content">
            <div class="single-supporter" v-for="(item, index) in list" :key="index" :style="`background-image: url('/images/welcome/support/${item}')`"></div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            list: ["1.jpg", "2.png", "3.png", "4.jpg", "1.jpg", "2.png"]
        };
    },
    mounted() {
        const a = this.$refs.wrapper;
        window.addEventListener("scroll", () => {
            if (scrollY > a.offsetTop - a.offsetHeight - 500) a.classList.add("active");
        });
    }
};
</script>

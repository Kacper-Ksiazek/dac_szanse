<template>
    <div class="ds-a-tasks-hydrotherapy" ref="hydro">
        <h1>
            Hydroterapia
        </h1>
        <h4>
            Rehabilitacja prowadzona w basenie pozwala wykorzystać właściwości fizyko - chemiczne wody do zwiększenia efektywności terapii.
        </h4>
        <a :href="href" class="ds-show-more-green">Zobacz wiecej <i class="fa fa-info-circle"></i></a>
    </div>
</template>
<script>
export default {
    props: ["href"],
    mounted() {
        const el = this.$refs.hydro;
        window.addEventListener("scroll", () => {
            if (scrollY > el.previousElementSibling.lastElementChild.offsetTop) el.classList.add("active");
        });
    }
};
</script>

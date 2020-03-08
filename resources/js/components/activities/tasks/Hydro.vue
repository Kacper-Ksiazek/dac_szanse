<template>
    <div class="ds-a-tasks-hydrotherapy" ref="hydro">
        <h1>
            Hydroterapia
        </h1>
        <h4>
            Rehabilitacja prowadzona w basenie pozwala wykorzystać właściwości fizyko - chemiczne wody do zwiększenia efektywności terapii.
        </h4>
        <button class="ds-show-more-green">Zobacz wiecej <i class="fa fa-info-circle"></i></button>
    </div>
</template>
<script>
export default {
    mounted() {
        const el = this.$refs.hydro;
        window.addEventListener("scroll", () => {
            console.log(scrollY, el.previousElementSibling.lastElementChild.offsetTop);
            if (scrollY > el.previousElementSibling.lastElementChild.offsetTop) el.classList.add("active");
        });
    }
};
</script>

<template>
    <button class="ds-scroll" @click="scroll" ref="btn"><i class="fa fa-arrow-up"></i></button>
</template>
<script>
export default {
    mounted() {
        const { classList } = this.$refs.btn;
        window.addEventListener("scroll", () => {
            if (scrollY > 300) {
                classList.add("active");
                if (classList.contains("exit")) classList.remove("exit");
            } else if (scrollY < 300) {
                if (classList.contains("active")) classList.add("exit");
            }
        });
    },
    methods: {
        scroll() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        },
        data() {
            return {
                closing: false
            };
        }
    }
};
</script>

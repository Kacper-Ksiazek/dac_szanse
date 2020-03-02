<template>
    <button class="ds-scroll" @click="scroll" :class="access ? 'active' : ''"><i class="fa fa-arrow-up"></i></button>
</template>
<script>
export default {
    created() {
        window.addEventListener("scroll", () => (this.access = scrollY > 300 ? true : false));
    },
    methods: {
        scroll() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        }
    },
    data() {
        return {
            access: false,
            pendingCreating: false
        };
    }
};
</script>

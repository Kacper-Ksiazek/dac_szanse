<template>
    <div class="ds-oo-single-item-wrapper" ref="wrapper">
        <section :class="classes" class="ds-oo-place">
            <img :src="data.img" />
            <div class="content">
                <h1><span v-text="data.title"></span></h1>
                <div class="ds-oo-place-content-wrapper">
                    <!-- {{-- LEFT SIDE --}} -->
                    <div class="ds-oo-border">
                        <span v-for="item in data.left" :key="item.value">
                            <i :class="item.icon"></i>
                            <span v-text="item.value"></span>
                        </span>
                    </div>
                    <!-- {{-- RIGHT SIDE --}} -->
                    <div>
                        <span v-for="item in data.right" :key="item.title">
                            <strong v-text="item.title"></strong>
                            <span v-text="item.value"></span>
                        </span>
                    </div>
                </div>
                <a :href="data.href" class="ds-oo-see-more">Zobacz szczegóły <i class="fa fa-info-circle"></i></a>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    props: ["data"],
    data() {
        return {
            classes: ""
        };
    },
    created() {
        window.addEventListener("scroll", () => {
            if (scrollY > this.$refs.wrapper.previousElementSibling.offsetTop) this.classes = "active";
        });
    }
};
</script>

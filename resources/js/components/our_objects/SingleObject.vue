<template>
    <div class="ds-oo-single-item-wrapper" ref="wrapper">
        <div :class="classes" class="ds-oo-place">
            <div class="img-wrapper" :style="data.img | setImgPath"></div>
            <div class="content">
                <h1 v-text="data.title"></h1>
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
                <a :href="data.href" class="ds-show-more-green">Zobacz szczegóły <i class="fa fa-info-circle"></i></a>
            </div>
        </div>
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
    mounted() {
        if (this.$refs.wrapper.previousElementSibling.classList.contains("ds-section-logo")) this.classes = "active";
        else {
            window.addEventListener("scroll", () => {
                if (scrollY > this.$refs.wrapper.previousElementSibling.offsetTop) this.classes = "active";
            });
        }
    },
    filters: {
        setImgPath(val) {
            return `background-image: url('${val}')`;
        }
    }
};
</script>

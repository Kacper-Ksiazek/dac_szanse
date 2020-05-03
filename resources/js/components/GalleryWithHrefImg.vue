<template>
    <section class="ds-gallery-with-hrefs">
        <div class="gallery-item" v-for="item in content" :key="item.img">
            <!--  -->
            <a v-if="item.href" :href="item.href" target="blank">
                <img :src="setPath(item.img)" alt="" />
                <span class="wrap"><span>Zobacz wiecej</span></span>
            </a>
            <!--  -->
            <a v-else>
                <img :src="setPath(item.img)" alt="" />
            </a>
        </div>
    </section>
</template>
<script>
export default {
    props: ["prefix", "content"],
    methods: {
        setPath(val) {
            return `${this.prefix}/${val}.png`;
        }
    }
};
</script>

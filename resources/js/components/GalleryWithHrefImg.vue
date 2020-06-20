<template>
    <section class="ds-gallery-with-hrefs">
        <h1 class="about-intro">Nasze <span class="pink">Współprace</span></h1>
        <div class="gallery-item" v-for="item in content" :key="item.img">
            <div class="image" :style="setPath(item.image)"></div>
            <div class="text">
                <p v-text="item.description"></p>
                <a v-if="item.link" :href="item.link" target="_blank">Zobacz więcej</a>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ["prefix", "content"],
    methods: {
        setPath(val) {
            return `background-image: url('${this.prefix}/${val}')`;
        }
    }
};
</script>

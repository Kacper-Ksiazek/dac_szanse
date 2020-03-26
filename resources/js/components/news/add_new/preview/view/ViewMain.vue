<template>
    <div class="ds-news-view">
        <div class="text">
            <h1 v-text="title" class="title"></h1>
            <!--  -->
            <!--  -->
            <!--  -->
            <single-item v-for="item in content" :key="item.id" :data="item"></single-item>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <gallery v-if="gallery.length" class="mt-0" prefix="DONT_USE_FILE_EXTENSION" :images="galleryToUse()" :modal="modal"></gallery>
    </div>
</template>
<script>
import Gallery from "../../../../activities/tasks/SingleTaskGallery.vue";
import SingleContentItem from "./SingleContentItem.vue";
export default {
    //
    components: {
        "single-item": SingleContentItem,
        gallery: Gallery
    },
    props: ["type", "content", "gallery", "title", "logo", "modal"],
    methods: {
        galleryToUse() {
            const result = [];
            this.gallery.forEach(item => result.push(item.href));
            return result;
        }
    }
};
</script>

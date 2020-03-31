<template>
    <div class="ds-news-view">
        <div class="text">
            <h1 v-text="title" class="title"></h1>
            <!--  -->
            <!--  -->
            <!--  -->
            <single-item v-for="item in contentToUse()" :key="item.id" :data="item"></single-item>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <gallery v-if="galleryToUse().length" class="mt-0" :prefix="setPrefix()" :images="galleryToUse()" :modal="modal" :extensions="false"></gallery>
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
    props: ["type", "content", "gallery", "title", "modal", "directory"],
    methods: {
        galleryToUse() {
            const { type, gallery } = this;
            if (type === "view") return JSON.parse(gallery);
            const result = [];
            gallery.forEach(item => result.push(item.href));
            return result;
        },
        contentToUse() {
            const { content, type } = this;
            if (type === "preview") return content;
            else return JSON.parse(content);
        },
        setPrefix() {
            const { modal, directory } = this;
            if (!modal) return;
            else return `/storage/news/${directory}/gallery/`;
        }
    }
};
</script>

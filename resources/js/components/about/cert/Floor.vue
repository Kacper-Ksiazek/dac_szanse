<template>
    <section class="ds-cert-single-floor">
        <!--  -->
        <div class="d-flex justify-content-center">
            <h1 v-text="title"></h1>
        </div>
        <!--  -->
        <div class="cert-floor-place" v-for="place in structure" :key="place.title">
            <h2 v-text="place.title"></h2>
            <gallery :images="setImages(place.images)" :header="false" :prefix="setPrefix(place.path)"></gallery>
        </div>
    </section>
</template>
<script>
import Gallery from "../../activities/tasks/SingleTaskGallery";
export default {
    //
    components: { gallery: Gallery },
    props: ["title", "structure", "folder"],
    methods: {
        setImages(items) {
            const result = [];
            for (let i = 1; i <= items; i++) result.push(i);
            return result;
        },
        setPrefix(directory) {
            return `/images/about/cert/${this.folder}/${directory}/`;
        }
    }
};
</script>

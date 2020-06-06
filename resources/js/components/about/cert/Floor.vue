<template>
    <section class="ds-cert-single-floor">
        <!--  -->
        <template v-if="title.toLowerCase() == 'parter'">
            <div class="header">
                <a href="/o-nas/budowa-cert/pietro-pierwsze">Pierwsze pietro</a>
                <h1 v-text="title"></h1>
                <a href="/o-nas/budowa-cert/pietro-drugie">Drugie pietro</a>
            </div>
        </template>
        <!--  -->
        <template v-if="title.toLowerCase() == 'pierwsze piętro'">
            <div class="header">
                <a href="/o-nas/budowa-cert/parter">Parter</a>
                <h1 v-text="title"></h1>
                <a href="/o-nas/budowa-cert/pietro-drugie">Drugie pietro</a>
            </div>
        </template>
        <!--  -->
        <template v-if="title.toLowerCase() == 'drugie piętro'">
            <div class="header">
                <a href="/o-nas/budowa-cert/pietro-pierwsze">Pierwsze pietro</a>
                <h1 v-text="title"></h1>
                <a href="/o-nas/budowa-cert/parter">Parter</a>
            </div>
        </template>
        <!--  -->
        <!--  -->
        <div class="cert-floor-place" v-for="place in structure" :key="place.title" :class="place.id">
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
    },
    mounted() {
        const expression = /[^#]*$/g,
            eClass = location.href.match(expression)[0];
        if (eClass == location.href) return;
        const element = document.querySelector(`div.${eClass}`);
        setTimeout(() => {
            window.scrollTo({
                top: element.offsetTop - 50,
                left: 0,
                behavior: "smooth"
            });
        }, 500);
    }
};
</script>

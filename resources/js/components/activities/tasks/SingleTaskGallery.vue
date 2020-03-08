<template>
    <section class="ds-single-task-gallery mt-5">
        <h1>Galeria<i class="fa fa-picture-o"></i></h1>
        <div class="ds-single-task-images-wrapper">
            <img :src="item | setImagePath" v-for="(item, index) in temporaryImages" :key="item" @click="modalIndex = index" />
        </div>
        <button class="ds-show-more-green mt-3" @click="showAll = !showAll" v-text="showAll ? 'Ukryj' : 'Pokaż wszystkie'"></button>
        <modal :index="modalIndex" :all_images="images" @close="modalIndex = -1" v-if="modalIndex >= 0"></modal>
    </section>
</template>
<script>
import Modal from "./Modal";
export default {
    components: { modal: Modal },
    props: ["images"],
    data() {
        return {
            temporaryImages: this.images.slice(0, 3),
            showAll: false,
            modalIndex: -1
        };
    },
    filters: {
        setImagePath(value) {
            return `/images/activities/psychologiczno-pedaogiczno-logopedyczne/${value}.jpg`;
        }
    },
    watch: {
        showAll(value) {
            this.temporaryImages = value ? this.images : this.images.slice(0, 3);
        }
    }
};
</script>

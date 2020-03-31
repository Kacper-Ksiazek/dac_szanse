<template>
    <section class="ds-single-task-gallery mt-2">
        <h1>Galeria<i class="fa fa-picture-o"></i></h1>
        <div class="ds-single-task-images-wrapper">
            <img :src="setImagePath(item)" v-for="(item, index) in temporaryImages" :key="item" @click="modalIndex = index" />
        </div>
        <button v-if="images.length > 3" class="ds-show-more-green mt-3" @click="showAll = !showAll" v-text="showAll ? 'Ukryj' : 'Pokaż wszystkie'"></button>
        <modal :index="modalIndex" :all_images="images" @close="modalIndex = -1" v-if="modalIndex >= 0 && modal !== false" :prefix="prefix" :extensions="extensions"></modal>
    </section>
</template>
<script>
import Modal from "./Modal";
export default {
    components: { modal: Modal },
    props: ["images", "prefix", "modal", "extensions"],
    data() {
        return {
            temporaryImages: this.images.slice(0, 3),
            showAll: false,
            modalIndex: -1
        };
    },
    methods: {
        setImagePath(value) {
            if (this.prefix == "DONT_USE_FILE_EXTENSION") return value;
            else if (this.extensions !== false) return `${this.prefix}${value}.jpg`;
            else return `${this.prefix}${value}`;
        }
    },
    watch: {
        showAll(value) {
            this.temporaryImages = value ? this.images : this.images.slice(0, 3);
        }
    }
};
</script>

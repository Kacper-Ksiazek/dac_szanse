<template>
    <section class="ds-single-task-gallery mt-2">
        <h1 v-if="header !== false">Galeria<i class="fa fa-picture-o"></i></h1>
        <div class="ds-single-task-images-wrapper">
            <div class="img-wrapper" v-for="(item, index) in temporaryImages" :key="item" @click="modalIndex = index">
                <img :data-src="setImagePath(item)" ref="lazy" />
            </div>
        </div>
        <button v-if="images.length > 3" class="ds-show-more-green mt-3" @click="showAll ? closeGallery() : openGallery()" v-text="showAll ? 'Ukryj' : 'Pokaż wszystkie'"></button>
        <modal :index="modalIndex" :all_images="images" @close="modalIndex = -1" v-if="modalIndex >= 0 && modal !== false" :prefix="prefix" :extensions="extensions"></modal>
    </section>
</template>
<script>
import Modal from "./Modal";
export default {
    components: { modal: Modal },
    props: ["images", "prefix", "modal", "extensions", "header"],
    mounted() {
        this.lazy();
    },
    data() {
        return {
            temporaryImages: this.images.slice(0, 3),
            showAll: false,
            modalIndex: -1,
            posY: null
        };
    },
    methods: {
        setImagePath(value) {
            if (this.prefix == "DONT_USE_FILE_EXTENSION") return value;
            else if (this.extensions !== false) return `${this.prefix}${value}.jpg`;
            else return `${this.prefix}${value}`;
        },
        lazy() {
            setTimeout(() => {
                this.$refs.lazy.forEach(img => {
                    img.src = img.dataset.src;
                });
            }, 100);
        },
        openGallery() {
            this.posY = scrollY;
            this.showAll = true;
        },
        closeGallery() {
            scrollTo({
                top: this.posY,
                left: 0,
                behavior: "smooth"
            });
            setTimeout(() => {
                this.showAll = false;
            }, 300);
            this.posY = null;
        }
    },
    watch: {
        showAll(value) {
            this.temporaryImages = value ? this.images : this.images.slice(0, 3);
            this.lazy();
        },
        images(value) {
            this.temporaryImages = value.slice(0, 3);
        }
    }
};
</script>

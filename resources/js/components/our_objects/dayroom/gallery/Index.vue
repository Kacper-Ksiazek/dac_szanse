<template>
    <section id="ds-s-gallery-wrapper">
        <h1>Galeria zdjęć <i class="fa fa-picture-o"></i></h1>
        <!--  -->
        <!-- DESKTOP HEADER -->
        <!--  -->
        <header-desktop @showImages="showImages" :showAllImages="showAllImages"></header-desktop>
        <!--  -->
        <!-- MOBILE HEADER -->
        <!--  -->
        <header-mobile @showImages="showImages" :showAllImages="showAllImages"></header-mobile>
        <!--  -->
        <!-- SHOW ALL IMAGES -->
        <!--  -->
        <show-all-images v-if="showAllImages" :all_images="all_images" @handleClick="handleImageClick"></show-all-images>
        <!--  -->
        <!-- DISPLAY SINGLE IMAGE MODAL -->
        <!--  -->
        <modal
            :index="modalActiveImageIndex"
            :all_images="all_images"
            @close="modalActiveImageIndex = -1"
            v-if="modalActiveImageIndex >= 0"
            prefix="/images/ourObjects/dayroom/body/"
            :extensions="false"
        ></modal>
        <!--  -->
    </section>
</template>
<script>
import DayroomGalleryModal from "../../../activities/tasks/Modal";
import DayroomGalleryAllImages from "./Images.vue";
import HeaderControl from "./HeaderControl.vue";
import MobileHeader from "./MobileHeader.vue";
import DesktopHeader from "./DesktopHeader.vue";
export default {
    components: {
        modal: DayroomGalleryModal,
        "show-all-images": DayroomGalleryAllImages,
        "header-control": HeaderControl,
        "header-mobile": MobileHeader,
        "header-desktop": DesktopHeader
    },
    methods: {
        handleImageClick(index) {
            this.modalActiveImageIndex = index;
        },

        showImages() {
            if (this.pendingScrolling) return;
            if (this.showAllImages) {
                this.pendingScrolling = true;
                window.scroll({
                    top: this.scrollTo,
                    left: 0,
                    behavior: "smooth"
                });
                setTimeout(() => {
                    this.showAllImages = !this.showAllImages;
                    this.pendingScrolling = false;
                }, 500);
            } else {
                this.showAllImages = !this.showAllImages;
                this.scrollTo = scrollY;
            }
        }
    },
    data() {
        return {
            showAllImages: false,
            modalActiveImageIndex: -1,
            scrollTo: null,
            pendingScrolling: false,
            all_images: [
                "b_styczen_i_luty_1.jpg",
                "b_styczen_i_luty_2.jpg",
                "b_styczen_i_luty_3.jpg",
                "b_styczen_i_luty_4.jpg",
                "b_styczen_i_luty_5.jpg",
                "b_styczen_i_luty_6.jpg",
                "b_styczen_i_luty_7.jpg",
                "b_styczen_i_luty_8.jpg",
                "b_styczen_i_luty_9.jpg",
                "b_styczen_i_luty_10.jpg",
                "b_styczen_i_luty_11.jpg",
                "b_styczen_i_luty_12.jpg",
                "b_styczen_i_luty_13.jpg",
                "b_styczen_i_luty_14.jpg",
                "b_styczen_i_luty_15.jpg",
                "b_styczen_i_luty_16.jpg",
                "b_styczen_i_luty_17.jpg",
                "b_styczen_i_luty_18.jpg",
                "b_styczen_i_luty_19.jpg",
                "b_styczen_i_luty_20.jpg",
                "b_styczen_i_luty_21.jpg",
                "b_styczen_i_luty_22.jpg",
                "b_styczen_i_luty_23.jpg",
                "b_styczen_i_luty_24.jpg",
                "b_styczen_i_luty_25.jpg",
                "b_styczen_i_luty_26.jpg",
                "b_styczen_i_luty_27.jpg",
                "b_styczen_i_luty_28.jpg",
                "b_styczen_i_luty_29.jpg",
                "b_styczen_i_luty_30.jpg",
                "b_styczen_i_luty_31.jpg",
                "b_styczen_i_luty_32.jpg",
                "b_styczen_i_luty_33.jpg",
                "b_styczen_i_luty_34.jpg",
                "b_styczen_i_luty_35.jpg",
                "b_styczen_i_luty_36.jpg",
                "b_styczen_i_luty_37.jpg",
                "b_styczen_i_luty_38.jpg",
                "b_styczen_i_luty_39.jpg",
                "b_styczen_i_luty_40.jpg",
                "b_styczen_i_luty_41.jpg",
                "b_styczen_i_luty_42.jpg",
                "b_styczen_i_luty_43.jpg",
                "b_styczen_i_luty_44.jpg",
                "b_styczen_i_luty_45.jpg",
                "b_styczen_i_luty_46.jpg",
                "b_styczen_i_luty_47.jpg",
                "b_styczen_i_luty_48.jpg",
                "b_styczen_i_luty_49.jpg",
                "b_styczen_i_luty_50.jpg"
            ]
        };
    }
};
</script>

<template>
    <section id="ds-s-gallery-wrapper">
        <h1>Galeria zdjęć <i class="fa fa-picture-o"></i></h1>
        <!--  -->
        <div class="ds-s-gallery-images-wrapper">
            <!--  -->
            <div class="ds-s-gallery-header">
                <!--  -->
                <!-- IMAGES IN HEADER -->
                <!--  -->
                <div class="ds-s-gallery-header-images" :style="desktopStyle">
                    <div class="ds-s-gallery-header-item" v-for="item in headers" :key="item" :style="item | setPathHeader"></div>
                </div>
                <!--  -->
                <!-- NAVIGATION DOTS -->
                <!--  -->
                <div class="ds-s-gallery-dots-wrapper">
                    <div class="ds-s-gallery-dots" :class="desktopRotation == 0 ? 'active' : ''" @click="desktopRotation = 0"></div>
                    <div class="ds-s-gallery-dots" :class="desktopRotation == 2 ? 'active' : ''" @click="desktopRotation = 2"></div>
                    <div class="ds-s-gallery-dots" :class="desktopRotation == 4 ? 'active' : ''" @click="desktopRotation = 4"></div>
                    <div class="ds-s-gallery-dots" :class="desktopRotation == 6 ? 'active' : ''" @click="desktopRotation = 6"></div>
                </div>
                <!--  -->
                <!-- SHOW/HIDE ALL IMAGES -->
                <!--  -->
                <button @click="showAllImages = !showAllImages" v-text="showAllImages ? 'Pokaż mniej' : 'Pokaż wszystkie'">Zobacz wszystkie</button>
            </div>
            <!--  -->
            <!-- NEXT PREV BUTTONS -->
            <!--  -->
            <div class="control-wrapper">
                <span class="next" @click="desktopRotation += 2" v-if="desktopRotation < 6"><i class="fa fa-chevron-right"></i></span>
                <span class="prev" @click="desktopRotation -= 2" v-if="desktopRotation > 0"><i class="fa fa-chevron-left"></i></span>
            </div>
            <!--  -->
        </div>
        <!--  -->
        <!-- SHOW ALL IMAGES -->
        <!--  -->
        <div class="ds-s-gallery-all-images" v-if="showAllImages">
            <section>
                <div class="ds-s-gallery-image" v-for="(item, index) in all_images" :key="item" :style="item | setPathBody" @click="handleImageClick(index)"></div>
            </section>
            <footer>
                <div class="logo"></div>
                <h3>ŚWIETLICA TERAPEUTYCZNO-INTEGRACYJNA SZANSA</h3>
            </footer>
        </div>
        <!--  -->
        <!-- DISPLAY SINGLE IMAGE MODAL -->
        <!--  -->
        <div class="ds-s-gallery-modal" v-if="modalActiveImageIndex >= 0">
            <span class="ds-s-gallery-modal-exit" @click="modalActiveImageIndex = -1">
                <i class="fa fa-times"></i>
            </span>
            <div class="ds-s-gallery-modal-image" :style="all_images[modalActiveImageIndex] | setPathBody"></div>
            <!--  -->
            <span class="ds-s-gallery-order" v-text="orderNote"></span>
            <!--  -->
            <span class="next" @click="modalActiveImageIndex++" v-if="modalActiveImageIndex < all_images.length - 1"><i class="fa fa-chevron-right"></i></span>
            <span class="prev" @click="modalActiveImageIndex--" v-if="modalActiveImageIndex > 0"><i class="fa fa-chevron-left"></i></span>
        </div>
    </section>
</template>
<script>
export default {
    watch: {
        desktopRotation(val) {
            this.desktopStyle = `transform: translateX(calc(${(-50 * val) / 6}%))`;
        },
        modalActiveImageIndex(val) {
            this.orderNote = `${val + 1} z ${this.all_images.length}`;
        }
    },
    filters: {
        setPathBody(value) {
            return `background-image: url('/images/dayroom/body/${value}')`;
        },
        setPathHeader(value) {
            return `background-image: url('/images/dayroom/header/${value}.jpg')`;
        }
    },
    methods: {
        handleImageClick(index) {
            console.log(index);
            this.modalActiveImageIndex = index;
        }
    },
    data() {
        return {
            desktopRotation: 0,
            desktopStyle: null,
            showAllImages: false,
            modalActiveImageIndex: -1,
            orderNote: null,
            headers: ["header1", "header2", "header3", "header4", "header5", "header6"],
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

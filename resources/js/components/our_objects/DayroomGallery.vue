<template>
    <section id="ds-s-gallery-wrapper">
        <h1>Galeria zdjęć <i class="fa fa-picture-o"></i></h1>
        <!--  -->
        <div class="ds-s-gallery-images-wrapper">
            <!--  -->
            <!-- DESKTOP HEADER -->
            <!--  -->

            <div class="ds-s-gallery-header-desktop">
                <!-- IMAGES IN HEADER -->
                <div class="ds-s-gallery-header-images" :style="desktopStyle">
                    <div class="ds-s-gallery-header-item" v-for="item in headers" :key="item" :style="item | setPathHeader"></div>
                </div>
                <!-- NAVIGATION DOTS -->
                <div class="ds-s-gallery-dots-wrapper-desktop">
                    <div
                        class="ds-s-gallery-dots"
                        v-for="item in desktopHelperDotsCreate"
                        :key="item"
                        :class="desktopRotation == item ? 'active' : ''"
                        @click="desktopRotation = item"
                    ></div>
                </div>
                <!-- SHOW/HIDE ALL IMAGES -->
                <button @click="showImages" v-text="showAllImages ? 'Pokaż mniej' : 'Pokaż wszystkie'" ref="showAllBtn">Zobacz wszystkie</button>
            </div>

            <!--  -->
            <!-- MOBILE HEADER -->
            <!--  -->

            <div class="ds-s-gallery-header-mobile">
                <!-- IMAGES IN HEADER -->
                <div class="ds-s-gallery-header-images" :style="mobileStyle">
                    <div class="ds-s-gallery-header-item" v-for="item in headers" :key="item" :style="item | setPathHeader"></div>
                </div>
                <!-- NAVIGATION DOTS -->
                <div class="ds-s-gallery-dots-wrapper-mobile">
                    <div
                        class="ds-s-gallery-dots"
                        v-for="item in mobileHelperDotsCreate"
                        :key="item"
                        :class="mobileRotation == item ? 'active' : ''"
                        @click="mobileRotation = item"
                    ></div>
                </div>
                <!-- SHOW/HIDE ALL IMAGES -->
                <button @click="showImages" v-text="showAllImages ? 'Pokaż mniej' : 'Pokaż wszystkie'" ref="showAllBtn">Zobacz wszystkie</button>
            </div>

            <!-- NEXT PREV BUTTONS ONLY DESKTOP!!!-->

            <div class="control-wrapper">
                <span class="next" @click="desktopRotation += 2" v-if="mobileRotation < mobileHelperDotsCreate[mobileHelperDotsCreate.length - 1]"
                    ><i class="fa fa-chevron-right"></i
                ></span>
                <span class="prev" @click="desktopRotation -= 2" v-if="mobileRotation > 0"><i class="fa fa-chevron-left"></i></span>
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
        <div class="ds-s-gallery-modal" v-if="modalActiveImageIndex >= 0" ref="modal">
            <span class="ds-s-gallery-modal-exit" @click="closeModal">
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
    created() {
        this.limit;
    },
    watch: {
        desktopRotation(val) {
            this.desktopStyle = `transform: translateX(calc(${(-50 * val) / 6}%))`;
        },
        mobileRotation(val) {
            this.mobileStyle = `transform: translateX(calc(${(-50 * val) / 6}%))`;
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
            this.modalActiveImageIndex = index;
        },
        closeModal(e) {
            if (this.pendingClosing) return;
            this.$refs.modal.classList.add("exit");
            this.pendingClosing = true;
            setTimeout(() => {
                this.modalActiveImageIndex = -1;
                this.$refs.modal.classList.remove("exit");
                this.pendingClosing = false;
            }, 400);
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
            desktopRotation: 0,
            desktopStyle: null,
            desktopHelperDotsCreate: [0, 2, 4, 6],

            mobileRotation: 0,
            mobileStyle: null,
            mobileHelperDotsCreate: [0, 2, 4, 6, 8, 10],

            showAllImages: false,
            modalActiveImageIndex: -1,
            orderNote: null,
            pendingClosing: false,
            scrollTo: null,
            pendingScrolling: false,
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

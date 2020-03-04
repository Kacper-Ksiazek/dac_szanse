<template>
    <div class="ds-s-gallery-images-wrapper">
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
            <button @click="$emit('showImages')" v-text="showAllImages ? 'Pokaż mniej' : 'Pokaż wszystkie'" ref="showAllBtn">Zobacz wszystkie</button>
        </div>
        <!--  -->
        <!-- NEXT PREV BUTTONS ONLY DESKTOP!!!-->
        <!--  -->
        <header-control
            @next="desktopRotation += 2"
            @prev="desktopRotation -= 2"
            :limit="desktopHelperDotsCreate[desktopHelperDotsCreate.length - 1]"
            :desktopRotation="desktopRotation"
        ></header-control>
    </div>
</template>
<script>
import HeaderControl from "./HeaderControl.vue";

export default {
    components: {
        "header-control": HeaderControl
    },
    props: ["showAllImages"],
    data() {
        return {
            desktopRotation: 0,
            desktopStyle: null,
            desktopHelperDotsCreate: [0, 2, 4, 6],
            headers: ["header1", "header2", "header3", "header4", "header5", "header6"]
        };
    },
    watch: {
        desktopRotation(val) {
            this.desktopStyle = `transform: translateX(calc(${(-50 * val) / 6}%))`;
        }
    },
    filters: {
        setPathHeader(value) {
            return `background-image: url('/images/dayroom/header/${value}.jpg')`;
        }
    }
};
</script>

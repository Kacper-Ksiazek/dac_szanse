<template>
    <div class="ds-s-gallery-images-wrapper">
        <div class="ds-s-gallery-header-desktop">
            <!-- IMAGES IN HEADER -->
            <div class="ds-s-gallery-header-images" :style="desktopStyle">
                <span class="control" ref="control"></span>
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
import { tougchSwapping } from "../../../../scripts/tougchSwapping";
import HeaderControl from "./HeaderControl.vue";

export default {
    mounted() {
        const rightCaseSwap = () => {
            if (this.desktopRotation < 6) this.desktopRotation += 2;
        };
        //
        const leftCaseSwap = () => {
            if (this.desktopRotation > 0) this.desktopRotation -= 2;
        };
        //
        tougchSwapping({
            that: this,
            methodIfRight: rightCaseSwap,
            methodIfLeft: leftCaseSwap,
            initValue: "swapXOnStart",
            element: this.$refs.control
        });
    },
    components: {
        "header-control": HeaderControl
    },
    props: ["showAllImages"],
    data() {
        return {
            swapXOnStart: null,
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
            return `background-image: url('/images/ourObjects/dayroom/header/${value}.jpg')`;
        }
    }
};
</script>

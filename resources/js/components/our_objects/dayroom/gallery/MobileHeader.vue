<template>
    <div class="ds-s-gallery-images-wrapper">
        <div class="ds-s-gallery-header-mobile">
            <!-- IMAGES IN HEADER -->
            <div class="ds-s-gallery-header-images" :style="mobileStyle">
                <div class="ds-s-gallery-header-item" v-for="item in headers" :key="item" :style="item | setPathHeader"></div>
            </div>
            <span class="control" ref="control"></span>
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

            <button @click="$emit('showImages')" v-text="showAllImages ? 'Pokaż mniej' : 'Pokaż wszystkie'" ref="showAllBtn">Zobacz wszystkie</button>
        </div>
    </div>
</template>
<script>
import { tougchSwapping } from "../../../../scripts/tougchSwapping";
export default {
    mounted() {
        const rightCaseSwap = () => {
            if (this.mobileRotation < 10) this.mobileRotation += 2;
        };
        //
        const leftCaseSwap = () => {
            if (this.mobileRotation > 0) this.mobileRotation -= 2;
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
    props: ["showAllImages"],
    data() {
        return {
            mobileHelperDotsCreate: [0, 2, 4, 6, 8, 10],
            mobileStyle: null,
            mobileRotation: 0,
            headers: ["header1", "header2", "header3", "header4", "header5", "header6"]
        };
    },
    watch: {
        mobileRotation(val) {
            this.mobileStyle = `transform: translateX(calc(${(-50 * val) / 6}%))`;
        }
    },
    filters: {
        setPathHeader(value) {
            return `background-image: url('/images/ourObjects/dayroom/header/${value}.jpg')`;
        }
    }
};
</script>

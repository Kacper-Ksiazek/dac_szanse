<template>
    <div class="content-wrapper-desktop">
        <!--  -->
        <!--  -->
        <div class="awards-items-wrapper" :style="setAwardsWrapperTransform()">
            <!-- <span class="control" ref="control"></span> -->
            <div ref="item" class="award-item" v-for="item in awards" :key="item.id" :class="currentAwardIndex === item.id ? 'active' : null">
                <h2 v-text="item.content"></h2>
                <div class="award-images-wrapper">
                    <!--  -->
                    <div class="carousel" :style="setImagesWrapperTransform(item.currentImage)">
                        <div class="img" :style="item.image1 | setImagePath"></div>
                        <div v-if="item.image2" class="img" :style="item.image2 | setImagePath"></div>
                    </div>
                    <!--  -->
                    <div v-if="item.image2" class="dots">
                        <span v-if="item.image2" class="left" @click="item.currentImage === 1 ? item.currentImage-- : null"><i class="fa fa-chevron-left"></i></span>
                        <div class="dot" v-for="dot in [0, 1]" :key="dot" @click="item.currentImage = dot" :class="item.currentImage === dot ? 'active' : ''"></div>
                        <span v-if="item.image2" class="right" @click="item.currentImage === 0 ? item.currentImage++ : null"><i class="fa fa-chevron-right"></i></span>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!--  -->
        <div class="dots">
            <div class="dot" v-for="item in awards" :key="item.id" @click="currentAwardIndex = item.id" :class="currentAwardIndex === item.id ? 'active' : ''"></div>
        </div>
        <!--  -->
        <span class="right" @click="currentAwardIndex < 4 ? currentAwardIndex++ : null"><i class="fa fa-chevron-right"></i></span>
        <span class="left" @click="currentAwardIndex >= 1 ? currentAwardIndex-- : null"><i class="fa fa-chevron-left"></i></span>
    </div>
</template>
<script>
import { tougchSwapping } from "../../../../scripts/tougchSwapping";
import Modal from "../../../activities/tasks/Modal.vue";
//
export default {
    //
    mounted() {
        const rightCaseSwap = () => {
            if (this.currentAwardIndex < 4) this.currentAwardIndex++;
        };
        //
        const leftCaseSwap = () => {
            if (this.currentAwardIndex > 0) this.currentAwardIndex--;
        };
        //
        tougchSwapping({
            that: this,
            methodIfRight: rightCaseSwap,
            methodIfLeft: leftCaseSwap,
            initValue: "swapXOnStart",
            element: this.$refs.item
        });
    },
    components: { modal: Modal },
    props: ["awards"],
    data() {
        return {
            swapXOnStart: null,
            currentAwardIndex: 0
        };
    },
    methods: {
        setAwardsWrapperTransform() {
            return `transform: translateX(-${this.currentAwardIndex * 20}%)`;
        },
        setImagesWrapperTransform(val) {
            return `transform: translateX(-${val * 50}%)`;
        },
        getImagesForModal() {
            const { awards, currentAwardIndex } = this;
            const result = [awards[currentAwardIndex].image1];
            awards[currentAwardIndex].image2 ? result.push(awards[currentAwardIndex].image2) : null;
            return result;
        }
    },
    filters: {
        setImagePath(val) {
            return `background-image: url('/images/about/awards/${val}')`;
        }
    }
};
</script>

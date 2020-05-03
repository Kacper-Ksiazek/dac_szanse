<template>
    <div class="content-wrapper-mobile">
        <!--  -->
        <!--  -->
        <div class="awards-items-wrapper" :style="setAwardsWrapperTransform()">
            <div class="award-item" ref="item" v-for="item in awards" :key="item.id" :class="currentAwardIndex === item.id ? 'active' : null">
                <!--  -->
                <div class="buttons-wrapper">
                    <div :class="item.mobileShowText ? 'active' : ''" class="buttons">
                        <button class="textToggle" @click="item.mobileShowText = !item.mobileShowText"><i class="fa fa-align-left"></i></button>
                        <button class="textToggle" @click="item.mobileShowText = !item.mobileShowText"><i class="fa fa-picture-o"></i></button>
                    </div>
                </div>
                <!--  -->
                <div class="award-content" :class="item.mobileShowText ? 'active' : ''">
                    <h2 v-text="item.content"></h2>
                    <div class="award-images-wrapper">
                        <!--  -->
                        <div class="carousel" :style="setImagesWrapperTransform(item.currentImage)">
                            <img :src="item.image1 | setImagePath" />
                            <img v-if="item.image2" :src="item.image2 | setImagePath" />
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
        </div>
        <!--  -->
        <div class="dots">
            <span class="left" @click="currentAwardIndex >= 1 ? currentAwardIndex-- : null"><i class="fa fa-chevron-left"></i></span>
            <div class="dot" v-for="item in awards" :key="item.id" @click="currentAwardIndex = item.id" :class="currentAwardIndex === item.id ? 'active' : ''"></div>
            <span class="right" @click="currentAwardIndex < 4 ? currentAwardIndex++ : null"><i class="fa fa-chevron-right"></i></span>
        </div>
        <!--  -->
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
    //
    components: { modal: Modal },
    props: ["awards"],
    data() {
        return {
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
            return `/images/about/awards/${val}`;
        }
    }
};
</script>

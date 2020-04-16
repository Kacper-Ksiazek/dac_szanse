<template>
    <div class="body-mobile" :style="setBodyStyles()">
        <!--  -->
        <div class="body-item" v-for="item in howToHelpList" :key="item.id" :style="`width: ${100 / howToHelpList.length}%`">
            <div class="gallery" v-if="item.type === 'gallery'" :class="currentHelpSection === item.id ? 'active' : ''" :style="setGalleryTransform(item)">
                <!--  -->
                <div class="img-wrapper">
                    <img :src="getImgPath(item.prefix, item.extenstion, item.images[0])" />
                </div>
                <div class="img-wrapper">
                    <img :src="getImgPath(item.prefix, item.extenstion, item.images[1])" />
                </div>
                <!--  -->
                <div class="img-wrapper">
                    <img :src="getImgPath(item.prefix, item.extenstion, item.images[2])" />
                </div>
            </div>
            <div v-if="item.type === 'gallery'" class="control">
                <div class="dots">
                    <div class="dot" @click="item.currentImageIndex = 0" :class="item.currentImageIndex === 0 ? 'active' : ''"></div>
                    <div class="dot" @click="item.currentImageIndex = 1" :class="item.currentImageIndex === 1 ? 'active' : ''"></div>
                    <div class="dot" @click="item.currentImageIndex = 2" :class="item.currentImageIndex === 2 ? 'active' : ''"></div>
                </div>
                <a class="show-more">Zobacz wiecej</a>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->
            <div class="text" v-if="item.type === 'card'" :class="currentHelpSection === item.id ? 'active' : ''">
                <button @click="item.showImg = !item.showImg" :class="item.showImg ? 'active' : ''"><i class="fa fa-arrow-right"></i></button>
                <div class="wrapper" :class="item.showImg ? 'active' : ''">
                    <div class="content">
                        <h1 v-text="item.text.header"></h1>
                        <p v-text="item.text.content"></p>
                    </div>
                    <!--  -->
                    <div class="img"></div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</template>
<script>
export default {
    props: ["howToHelpList", "currentHelpSection"],
    methods: {
        getImgPath(prefix, extenstion, item) {
            return `${prefix}${item}.${extenstion}`;
        },
        setBodyStyles() {
            const { howToHelpList, currentHelpSection } = this,
                width = `width: ${100 * howToHelpList.length}vw;`,
                transform = `transform: translateX(-${(currentHelpSection * 100) / howToHelpList.length}%);`;

            return width + transform;
        },
        setGalleryTransform(item) {
            return `transform: translateX(-${(item.currentImageIndex * 100) / 3}%)`;
        },
    },
};
</script>

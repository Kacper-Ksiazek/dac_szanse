<template>
    <div class="body-desktop" :style="setBodyStyles()">
        <!--  -->
        <div class="body-item" v-for="item in howToHelpList" :key="item.id" :style="`width: ${100 / howToHelpList.length}%`">
            <div class="gallery" v-if="item.type === 'gallery'" :class="currentHelpSection === item.id ? 'active' : ''">
                <!--  -->
                <img :src="getImgPath(item.prefix, item.extenstion, item.images[0])" v-if="item.images[0]" />
                <img :src="getImgPath(item.prefix, item.extenstion, item.images[1])" v-if="item.images[1]" />
                <img :src="getImgPath(item.prefix, item.extenstion, item.images[2])" v-if="item.images[2]" />
                <a class="show-more" :href="item.href">Zobacz wiecej</a>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->
            <div class="text" v-else :class="currentHelpSection === item.id ? 'active' : ''">
                <div class="content">
                    <h1 v-text="item.text.header"></h1>
                    <p v-text="item.text.content"></p>
                    <div class="d-flex justify-content-center">
                        <a class="show-more controlled" :href="item.href">Zobacz wiecej</a>
                    </div>
                </div>
                <!--  -->
                <div class="img"></div>
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
        }
    }
};
</script>

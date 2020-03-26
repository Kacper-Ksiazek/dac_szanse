<template>
    <div class="ds-news-view-item">
        <!--  -->
        <!--  -->
        <!--  -->
        <h1 v-if="data.type === 'header'" v-text="data.content" :style="getPreviewTextStyles()" class="content-item"></h1>
        <!--  -->
        <!--  -->
        <!--  -->
        <p v-if="data.type === 'textarea'" v-text="data.content" :style="getPreviewTextStyles()" class="content-item"></p>
        <!--  -->
        <!--  -->
        <!--  -->
        <ul v-if="data.type === 'list'" class="content-item">
            <li v-for="item in data.content" :key="item.id" v-text="item.content" :style="getPreviewTextStyles()"></li>
        </ul>
    </div>
</template>
<script>
export default {
    props: ["data"],
    methods: {
        getPreviewTextStyles() {
            const { data } = this;
            if (!data) return;
            const bold = `font-weight: ${data.bold ? "bold" : "normal"};`,
                size = `font-size: ${data.size}px;`,
                color = `color: ${data.color};`,
                italic = `font-style: ${data.italic ? "italic" : "normal"}; `,
                center = `text-align: ${data.center ? "center" : "left"}`;
            return bold + size + color + italic + center;
        }
    }
};
</script>

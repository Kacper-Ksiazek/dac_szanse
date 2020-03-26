<template>
    <section class="ds-news-preview">
        <div class="nav-btn-wrapper">
            <button class="grey-btn reverse" @click="$emit('changeCurrentPage', 'content')" :class="currentPreviewPage === 'content' ? 'active' : ''">Podgląd treści</button>
            <button class="grey-btn reverse" @click="$emit('changeCurrentPage', 'onList')" :class="currentPreviewPage === 'onList' ? 'active' : ''">Podgląd na liście</button>
        </div>
        <div class="ds-news-preview" :class="currentPreviewPage === 'onList' ? 'active' : ''">
            <view-news :type="type" :content="content" :gallery="gallery" :title="title" :logo="logo" :modal="false"></view-news>
            <!--  -->
            <!--  -->
            <!--  -->
            <div class="ds-news-on-list">
                <on-list :date="date" :title="title" :logo="logo" :content="content" type="preview"></on-list>
            </div>
        </div>
    </section>
</template>
<script>
import View from "./view/ViewMain.vue";
import OnList from "./on_list/Item";
export default {
    //
    components: {
        "view-news": View,
        "on-list": OnList
    },
    props: ["type", "content", "gallery", "title", "date", "logo", "currentPreviewPage"]
};
</script>

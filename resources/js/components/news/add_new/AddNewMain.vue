<template>
    <section class="ds-news-add-new">
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="toggle-editing-section">
            <button :class="currentSection === 'content' ? 'active' : ''" @click="currentSection = 'content'" class="grey-btn reverse">Treść</button>
            <button :class="currentSection === 'gallery' ? 'active' : ''" @click="currentSection = 'gallery'" class="grey-btn reverse">Galeria</button>
            <button :class="currentSection === 'preview' ? 'active' : ''" @click="currentSection = 'preview'" class="grey-btn reverse">Podgląd</button>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <edit-content
            v-if="currentSection === 'content'"
            :logoHref="logoHref"
            :content="content"
            :editingContentItemIndex="editingContentItemIndex"
            @changeTitle="changeTitle"
            @changeDate="changeDate"
            @changeContentEditItem="changeContentEditItem"
        ></edit-content>
        <!--  -->
        <!--  -->
        <!--  -->
        <edit-gallery v-if="currentSection === 'gallery'"></edit-gallery>
    </section>
</template>
<script>
import ContentMain from "./content/ContentMain.vue";
import EditGallery from "./EditGallery.vue";
export default {
    //
    components: {
        "edit-content": ContentMain,
        "edit-gallery": EditGallery
    },
    //
    methods: {
        //
        //
        //

        //
        //
        //
        //
        //
        //

        //
        //
        //

        //
        //
        changeTitle(val) {
            this.title = val;
        },
        //
        //
        changeDate(val) {
            this.date = val;
        },
        //
        //
        changeContentEditItem(val) {
            this.editingContentItemIndex = val;
        },
        //
        //
        findIndex(id) {
            let result;
            this.content.forEach((item, index) => {
                if (item.id == id) result = index;
            });
            return result;
        }
    },
    //
    data() {
        return {
            currentSection: "content",
            editingContentItemIndex: false,
            //
            logoHref: null,
            galleryHrefs: [],
            //
            title: null,
            date: null,
            logo: null,
            content: [],
            gallery: []
        };
    }
};
</script>

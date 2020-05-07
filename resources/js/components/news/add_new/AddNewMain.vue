<template>
    <section class="ds-news-add-new">
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="toggle-editing-section">
            <button :class="currentSection === 'content' ? 'active' : ''" @click="currentSection = 'content'" class="grey-btn reverse">Treść</button>
            <button :class="currentSection === 'gallery' ? 'active' : ''" @click="currentSection = 'gallery'" class="grey-btn reverse">Galeria</button>
            <button :class="currentSection === 'preview' ? 'active' : ''" @click="currentSection = 'preview'" class="grey-btn reverse">Podgląd</button>
            <button :class="currentSection === 'continue' ? 'active' : ''" @click="currentSection = 'continue'" class="grey-btn reverse">Dodaj</button>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="main-content-wrapper" :style="setTransform()">
            <edit-content
                :logoHref="logoHref"
                :content="content"
                :editingContentItemIndex="editingContentItemIndex"
                :ptitle="title"
                :pdate="date"
                @changeValue="changeMainValue"
                @changeContentEditItem="changeContentEditItem"
            ></edit-content>
            <!--  -->
            <!--  -->
            <!--  -->
            <edit-gallery :gallery="gallery" :galleryHrefs="galleryHrefs"></edit-gallery>
            <!--  -->
            <!--  -->
            <!--  -->
            <preview
                :title="title"
                :content="content"
                :gallery="galleryHrefs"
                :date="date"
                :logo="logoHref"
                :currentPreviewPage="currentPreviewPage"
                @changeCurrentPage="val => (currentPreviewPage = val)"
            ></preview>
            <!--  -->
            <!--  -->
            <!--  -->
            <div class="continue-wrapper" :class="currentSection === 'continue' ? 'active' : ''">
                <div class="content">
                    <!--  -->
                    <div class="text">
                        <h1>Podsumowanie</h1>
                        <span class="hr"></span>
                        <div class="stats">
                            <h2><span>Tytuł</span> <i :class="title && title.length > 3 ? 'fa fa-check' : 'fa fa-times'"></i></h2>
                            <!--  -->
                            <h2><span>Data</span> <i :class="date ? 'fa fa-check' : 'fa fa-times'"></i></h2>
                            <!--  -->
                            <h2><span>Logo</span> <i :class="logo ? 'fa fa-check' : 'fa fa-times'"></i></h2>
                            <!--  -->
                            <h2><span>Treść</span> <i :class="contentIsValid() ? 'fa fa-check' : 'fa fa-times'"></i></h2>
                            <!--  -->
                            <h2>
                                <span>Galeria<strong>*</strong></span>
                                <i :class="gallery.length ? 'fa fa-check' : 'fa fa-times'"></i>
                            </h2>
                            <!--  -->
                            <h3 v-if="gallery.length"><span>Ilość elementów w galerii: </span><strong v-text="gallery.length"></strong></h3>
                            <br v-else />
                            <!--  -->
                        </div>
                        <button @click="submitNewNews" v-if="submitAccess()">Dodaj</button>
                        <!--  -->
                        <br />
                        <i class="note"> <strong>*</strong> niewymagane </i>
                    </div>
                    <i class="fa fa-folder-open c-logo"></i>
                    <!--  -->
                </div>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="ds-news-add-loading" ref="loading" v-if="loading">
            <div class="body">
                <div class="loading">
                    <span class="loading">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <i class="fa fa-check"></i>
                </div>
                <div class="buttons">
                    <a href="/"><button>Strona główna</button></a>
                    <a :href="`/aktualnosci/${title}`"><button class="green">Przejdź do aktualności</button></a>
                    <a href="/admin/dodaj-aktualnosc"><button>Dodaj kolejną</button></a>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import ContentMain from "./content/ContentMain.vue";
import EditGallery from "./gallery/EditGallery.vue";
import PreviewMain from "./preview/PreviewMain.vue";
export default {
    //
    components: {
        "edit-content": ContentMain,
        "edit-gallery": EditGallery,
        preview: PreviewMain
    },
    //
    methods: {
        submitNewNews() {
            const { gallery, content, loading, title, logo, date } = this;
            //
            if (!this.submitAccess()) return;
            const data = new FormData();
            //
            data.append("title", title);
            data.append("date", date);
            data.append("logo", logo);
            data.append("content", JSON.stringify(content));
            gallery.forEach((item, index) => data.append(`gallery_item_${index}`, item));
            //
            this.loading = true;
            axios.post("/admin/dodaj-aktualnosc", data).then(r => this.$refs.loading.classList.add("stoped"));
        },
        //
        //
        //
        submitAccess() {
            const { title, date, logo } = this;
            return !!title && !!date && !!logo && this.contentIsValid();
        },
        //
        //
        //
        contentIsValid() {
            const { content } = this;
            if (!content.length) return false;
            let result = true;
            //
            content.forEach(item => {
                if (item.content.length < 3) result = false;
            });
            //
            return result;
        },
        //
        //
        //
        changeMainValue(type, val) {
            this[type] = val;
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
        },
        //
        //
        //
        setTransform() {
            let value;
            const { currentSection } = this;
            //
            if (currentSection === "content") value = 0;
            else if (currentSection === "gallery") value = 25;
            else if (currentSection === "preview") value = 50;
            else if (currentSection === "continue") value = 75;
            //
            return `transform: translateX(-${value}%)`;
        }
    },
    //
    data() {
        return {
            currentSection: "content",
            editingContentItemIndex: false,
            currentPreviewPage: "content",
            loading: false,
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

<template>
    <section class="ds-a-add-project">
        <div class="left-side-wrapper">
            <h1>Dodawanie nowego projektu</h1>
            <div class="form-wrapper">
                <label for="title">Wpisz tytuł</label>
                <input v-model="title" type="text" id="title" />
            </div>
            <!--  -->
            <div class="form-wrapper date">
                <label for="since">Początek projektu</label>
                <input v-model="since" type="date" id="since" />
                <!--  -->
                <label for="till">Zakończenie projektu</label>
                <input v-model="till" type="date" id="till" />
            </div>
            <!--  -->
            <div class="form-wrapper date">
                <label for="image">Logo projektu</label>
                <button @click="$refs.imgInput.click()">Prześlij</button>
                <input class="d-none" @change="handleUploadImage" type="file" id="image" accept="image/*" ref="imgInput" />
            </div>
            <!--  -->
            <hr />
            <div class="form-wrapper content">
                <label>Treść projektu</label>
                <content-item v-for="item in content" :key="item.id" :data="item" @delete="deleteItemFromContent" @changeOrder="changeItemOreder"></content-item>
            </div>
            <!--  -->
        </div>
        <div class="right-side-wrapper">
            <h1>Edycja treści projektu</h1>
            <div class="buttons-wrapper">
                <button @click="addItemToContent('header')">Dodaj nagłówek</button>
                <button @click="addItemToContent('textarea')">Pole tekstowe</button>
                <button @click="addItemToContent('list')">Dodaj liste</button>
            </div>
            <!--  -->
            <hr />
            <h1>Podgląd loga</h1>
            <div class="view-img" :style="setBackgroundImageStyle()" :class="logo ? 'active' : ''">
                <span v-if="!viewLogoHref">Prześlij logo <i class="fa fa-picture-o"></i></span>
            </div>
            <hr />
            <!--  -->
            <div class="stats">
                <span><strong>Tytuł: </strong> <i :class="title && title.length >= 5 ? 'fa fa-check' : 'fa fa-times'"></i></span>
                <span><strong>Treść: </strong> <i :class="contentIsValid() ? 'fa fa-check' : 'fa fa-times'"></i></span>
                <span><strong>Logo: </strong> <i :class="logo ? 'fa fa-check' : 'fa fa-times'"></i></span>
                <span><strong>Rozpoczęcie: </strong> <i :class="since ? 'fa fa-check' : 'fa fa-times'"></i></span>
                <span><strong>Zakończenie: </strong> <i :class="till ? 'fa fa-check' : 'fa fa-times'"></i></span>
                <!-- Rozpoczecie: Zakończenie -->
            </div>
            <hr />
            <!--  -->
            <div class="buttons-wrapper closer">
                <button @click="preview = true">Podgląd</button>
                <button :disabled="!dataForSubmitIsValid()" class="green" @click="submitNewProject">Dodaj</button>
                <!-- <button class="green" @click="submitNewProject">Dodaj</button> -->
            </div>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <loading v-if="loading" @clear="clear" :title="title"></loading>
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="ds-a-add-project-preview" v-if="preview" :class="previewClasses">
            <div class="body">
                <preview :title="title" :content="content" :img="viewLogoHref" @close="closePreview" type="preview" :since="since" :till="till"></preview>
            </div>
        </div>
    </section>
</template>
<script>
import ContentItem from "./ContentItem.vue";
import Loading from "./Loading.vue";
import Index from "../showOneProject/Index.vue";
export default {
    components: {
        "content-item": ContentItem,
        loading: Loading,
        preview: Index
    },
    data() {
        return {
            title: null,
            since: null,
            till: null,
            logo: null,
            content: [],
            viewLogoHref: null,
            loading: false,
            preview: false,
            previewClasses: ""
        };
    },
    methods: {
        closePreview() {
            this.previewClasses = "exit";
            setTimeout(() => {
                this.preview = false;
                this.previewClasses = "";
            }, 800);
        },
        clear() {
            this.title = null;
            this.since = null;
            this.till = null;
            this.logo = null;
            this.content = [];
            this.viewLogoHref = null;
            this.loading = false;
        },
        dataForSubmitIsValid() {
            const { title, since, till, logo } = this;
            return !!(title && title.length >= 5 && this.contentIsValid() && logo && till && since);
        },
        contentIsValid() {
            if (!this.content.length) return false;
            let result = true;
            this.content.forEach(item => {
                if (typeof item.content === "object") {
                    if (!item.content.length) result = false;
                    item.content.forEach(el => {
                        if (!el.content.length) result = false;
                    });
                } else {
                    if (!item.content.length) result = false;
                }
            });
            return result;
        },
        setBackgroundImageStyle() {
            if (!this.viewLogoHref) return;
            return `background-image: url('${this.viewLogoHref}')`;
        },
        handleUploadImage(e) {
            this.logo = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(this.logo);
            reader.onload = e => {
                this.viewLogoHref = e.target.result;
            };
        },
        submitNewProject() {
            const { title, since, till, content, logo } = this;

            if (!this.dataForSubmitIsValid()) return;

            let data = new FormData();
            const items = { title, content: JSON.stringify(content), since, till, logo };
            for (let index in items) data.append(index, items[index]);
            //
            axios.post("/admin/dodaj-projekt", data).then(r => (this.loading = true));
        },
        addItemToContent(type) {
            const len = this.content.length;
            //
            let id;
            try {
                id = this.content[len - 1].id + 1;
            } catch (e) {
                id = 0;
            }
            //
            this.content.push({
                id,
                type,
                content: type === "list" ? [{ id: 1, content: "" }] : ""
            });
        },
        deleteItemFromContent(id) {
            this.content.splice(this.findIndex(id), 1);
        },
        changeItemOreder(id, order) {
            const len = this.content.length;
            //
            //Return cases
            const thereIsOnlyOneElementInList = len === 1;
            const firstItemInListWantsToMoveUp = order === "up" && this.findIndex(id) === 0;
            const lastItemInListWantsToMoveDown = order === "down" && this.findIndex(id) === len - 1;
            //
            if (thereIsOnlyOneElementInList || firstItemInListWantsToMoveUp || lastItemInListWantsToMoveDown) return;
            //
            if (order === "up") {
                const index = this.findIndex(id),
                    el = {
                        content: this.content[index].content,
                        type: this.content[index].type,
                        id: this.content[index].id
                    },
                    prev = {
                        content: this.content[index - 1].content,
                        type: this.content[index - 1].type,
                        id: this.content[index - 1].id
                    };
                //
                for (let item in el) this.content[index - 1][item] = el[item];
                for (let item in prev) this.content[index][item] = prev[item];
            } else if (order === "down") {
                const index = this.findIndex(id),
                    el = {
                        content: this.content[index].content,
                        type: this.content[index].type,
                        id: this.content[index].id
                    },
                    next = {
                        content: this.content[index + 1].content,
                        type: this.content[index + 1].type,
                        id: this.content[index + 1].id
                    };
                //
                for (let item in el) this.content[index + 1][item] = el[item];
                for (let item in next) this.content[index][item] = next[item];
            }
        },
        findIndex(id) {
            let result;
            this.content.forEach((item, index) => {
                if (item.id == id) result = index;
            });
            return result;
        }
    }
};
</script>

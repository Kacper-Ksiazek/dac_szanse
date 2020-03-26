<template>
    <div class="ds-news-edit-content-wrapper">
        <!--  -->
        <!-- LEFT SIDE -->
        <!--  -->
        <div class="left-side">
            <h1>Dodawanie nowej aktualności</h1>
            <!--  -->
            <div class="form-item">
                <label for="title">Podaj tytuł</label>
                <input v-model="title" id="title" type="text" />
            </div>
            <!--  -->
            <div class="form-item">
                <label for="date">Wybierz date</label>
                <input v-model="date" id="date" type="date" />
            </div>
            <!--  -->
            <div class="form-item image">
                <label for="image">Prześlij logo</label>
                <button @click="$refs.image.click()" class="grey-btn">Prześlij</button>
                <input @change="changeLogo" ref="image" class="d-none" type="file" accept="image/*" />
            </div>
            <!--  -->
            <!-- MAIN CONTENT -->
            <!--  -->
            <div class="form-item main">
                <label>Treść aktualności</label>
                <content-item
                    v-for="item in content"
                    :key="item.id"
                    :data="item"
                    :active="editingContentItemIndex !== false ? content[editingContentItemIndex].id == item.id : false"
                    @setEditingItem="setEditingItem"
                    @deleteItemFromContent="deleteItemFromContent"
                ></content-item>
            </div>
        </div>
        <!--  -->
        <!-- ADDING CONTENT BUTTONS -->
        <!--  -->
        <div class="right-side" :class="editingContentItemIndex !== false ? 'active' : ''">
            <div class="news-content">
                <!--  -->
                <!--  -->
                <!--  -->
                <h1>Edycja treści</h1>
                <!--  -->
                <div class="button-wrapper">
                    <button class="grey-btn" @click="addItemToContent('header')">Dodaj nagłówek</button>
                    <button class="grey-btn" @click="addItemToContent('textarea')">Dodaj pole tekstowe</button>
                    <button class="grey-btn" @click="addItemToContent('list')">Dodaj liste</button>
                </div>
                <hr />
                <!--  -->
                <div class="image-preview">
                    <h1>Podgląd loga</h1>
                    <div class="preview-img" :style="this.logoHref ? `background-image: url(${this.logoHref})` : ''" :class="logoHref ? 'active' : ''">
                        <span v-if="!logoHref">Prześlij logo <i class="fa fa-picture-o"></i></span>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
            </div>

            <!--  -->
            <!-- EDIT SINGLE ITEM -->
            <!--  -->
            <edit-item
                @close="setEditingItem(false)"
                :prevItem="content[editingContentItemIndex]"
                @changeItemOreder="changeItemOreder"
                @editContetItemValue="changeItemOreder"
            ></edit-item>
        </div>
    </div>
</template>
<script>
import Item from "./Item.vue";
import EditItem from "./EditItem.vue";
export default {
    components: {
        "content-item": Item,
        "edit-item": EditItem
    },
    props: ["logoHref", "content", "editingContentItemIndex", "pdate", "ptitle"],
    data() {
        return {
            title: this.ptitle,
            date: this.pdate,
            logo: null
        };
    },
    methods: {
        changeLogo(e) {
            if (!e.target.files[0]) return;
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = e => {
                this.$emit("changeValue", "logoHref", e.target.result);
            };
            this.$emit("changeValue", "logo", file);
        },
        //
        //
        //
        setEditingItem(id) {
            const val = id === false ? false : this.findIndex(id);
            this.$emit("changeContentEditItem", val);
        },
        //
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
        deleteItemFromContent(id) {
            if (this.findIndex(id) == this.editingContentItemIndex) {
                this.$emit("changeContentEditItem", false);
            }
            this.content.splice(this.findIndex(id), 1);
        },
        //
        //
        //
        addItemToContent(type) {
            const len = this.content.length;
            //
            let id = 0;
            if (len) {
                this.content.forEach(item => {
                    if (item.id > id || !id) id = item.id;
                });
                id++;
            }

            //
            this.content.push({
                id,
                type,
                color: "#000000",
                size: type === "header" ? "36" : "22",
                italic: false,
                bold: false,
                center: false,
                content: type === "list" ? [{ id: 0, content: "" }] : ""
            });
        },
        //
        //
        //
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
                    el = Object.assign({}, this.content[index]),
                    prev = Object.assign({}, this.content[index - 1]);
                //
                //
                for (let item in el) this.content[index - 1][item] = el[item];
                for (let item in prev) this.content[index][item] = prev[item];
                this.$emit("changeContentEditItem", this.editingContentItemIndex - 1);
                //
            } else if (order === "down") {
                const index = this.findIndex(id),
                    el = Object.assign({}, this.content[index]),
                    next = Object.assign({}, this.content[index + 1]);
                //
                for (let item in el) this.content[index + 1][item] = el[item];
                for (let item in next) this.content[index][item] = next[item];
                this.$emit("changeContentEditItem", this.editingContentItemIndex + 1);
            }
        }
    },
    watch: {
        title(val) {
            this.$emit("changeValue", "title", val);
        },
        date(val) {
            this.$emit("changeValue", "date", val);
        }
    }
};
</script>

<!-- -->
<!-- -->
<!--        THIS IS EDIT FORM FOR ONE SINGLE NEWS CONTENT ITEM COMPONENT-->
<!-- -->
<!-- -->
<template>
    <div class="edit-item">
        <button class="grey-btn delete exit" @click="$emit('close')">Zamknij</button>
        <h1>Edycja pola</h1>
        <hr />
        <!--  -->
        <!-- UP/DOWN BUTTONS -->
        <!--  -->
        <div class="buttons-wrapper">
            <button class="grey-btn" @click="$emit('changeItemOreder', prevItem.id, 'up')"><i class="fa fa-arrow-up"></i></button>
            <button class="grey-btn" @click="$emit('changeItemOreder', prevItem.id, 'down')"><i class="fa fa-arrow-down"></i></button>
        </div>
        <!--  -->
        <!-- SELECT COLOR -->
        <!--  -->
        <div class="form-item">
            <label for="color">Kolor</label>
            <input v-if="prevItem" v-model="prevItem.color" id="color" type="color" />
        </div>
        <!--  -->
        <!-- SELECT FONT SIZE -->
        <!--  -->
        <div class="form-item">
            <label for="size">Rozmiar</label>
            <select v-if="prevItem" v-model="prevItem.size" id="size" type="number">
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="20">20</option>
                <option value="22">22</option>
                <option value="24">24</option>
                <option value="26">26</option>
                <option value="28">28</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="72">72</option>
            </select>
        </div>
        <!--  -->
        <!-- SELECT BOLD -->
        <!--  -->
        <div class="form-item">
            <label for="bold">Pogrubienie</label>
            <label class="switch">
                <input v-if="prevItem" v-model="prevItem.bold" type="checkbox" />
                <span class="slider round"></span>
            </label>
        </div>
        <!--  -->
        <!-- SELECT ITALIC -->
        <!--  -->
        <div class="form-item">
            <label for="italic">Kursywa</label>
            <label class="switch">
                <input v-if="prevItem" v-model="prevItem.italic" type="checkbox" />
                <span class="slider round"></span>
            </label>
        </div>
        <!--  -->
        <!-- TEXT PREVIEW -->
        <!--  -->
        <hr />
        <div class="text-preview" :style="getPreviewTextStyles()">
            <span>Tekst</span>
        </div>
    </div>
</template>
<script>
export default {
    props: ["prevItem"],
    methods: {
        getPreviewTextStyles() {
            if (!this.prevItem) return;
            const bold = `font-weight: ${this.prevItem.bold ? "bold" : "normal"};`,
                size = `font-size: ${this.prevItem.size}px;`,
                color = `color: ${this.prevItem.color};`,
                italic = `font-style: ${this.prevItem.italic ? "italic" : "normal"}; `;
            return bold + size + color + italic;
        }
    }
};
</script>

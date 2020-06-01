<template>
    <div class="header-mobile">
        <!--  -->
        <div class="titles">
            <div class="content" :style="getTitlesTransform()">
                <h3 v-for="item in howToHelpList" :key="item.id" v-text="item.title"></h3>
            </div>
        </div>
        <div class="buttons">
            <button @click="handleButton('previous')">Poprzedni</button>
            <button @click="handleButton('next')">Następny</button>
        </div>
    </div>
</template>
<script>
export default {
    //
    props: ["howToHelpList", "currentHelpSection"],
    methods: {
        handleButton(action) {
            const { currentHelpSection, howToHelpList } = this;
            if (action === "previous" && currentHelpSection) this.$emit("setCurrentSection", currentHelpSection - 1);
            else if (action === "next" && currentHelpSection < howToHelpList.length - 1) this.$emit("setCurrentSection", currentHelpSection + 1);
        },
        getTitlesTransform() {
            return `transform: translateY(-${(this.currentHelpSection * 100) / 4}%)`;
        },
    },
};
</script>

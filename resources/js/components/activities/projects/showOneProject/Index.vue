<template>
    <section class="ds-a-project-view-wrapper" :class="classes">
        <button v-if="type === 'preview'" class="close-preview" @click="$emit('close')">Zamknij podgląd</button>
        <!--  -->
        <!--  -->
        <!--  -->

        <div class="wrapper">
            <!--  -->
            <div class="content">
                <!--  -->
                <!-- TITLE -->
                <!--  -->
                <h1 class="main-header" v-text="title"></h1>
                <!--  -->
                <!-- CONTENT -->
                <!--  -->
                <project-content-field v-for="item in contentToUse" :key="item.id" :data="item"></project-content-field>
                <!--  -->
            </div>
            <!--  -->
            <img :src="hrefToUse" />
            <!--  -->
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
        <h4 v-text="getProjectDurationText()" class="duration-time"></h4>
        <div class="view-buttons-wrapper">
            <a :href="prev | setPrevNextHref" v-if="prev || type === 'preview'">Poprzedni</a>
            <a :href="next | setPrevNextHref" v-if="next || type === 'preview'">Następny</a>
        </div>
    </section>
</template>
<script>
import ViewOneProject from "./ViewOneProjectField.vue";
export default {
    components: { "project-content-field": ViewOneProject },
    props: ["title", "content", "img", "next", "prev", "type", "since", "till"],
    computed: {
        contentToUse() {
            if (typeof this.content === "object") return this.content;
            else if (typeof this.content === "string") return JSON.parse(this.content);
        },
        hrefToUse() {
            if (this.type === "preview") return this.img;
            else if (this.type === "view") return `/storage/projects/${this.title}/${this.img}`;
        }
    },
    filters: {
        setPrevNextHref(val) {
            return `/dzialalnosc/projekty/${val}`;
        }
    },
    data() {
        return {
            classes: ""
        };
    },
    methods: {
        getProjectDurationText() {
            const getTranslatedDate = date => {
                const months = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
                let day, month, year;
                day = date.getDate();
                month = months[date.getMonth()];
                year = date.getFullYear();
                return `${day} ${month} ${year}`;
            };
            //
            const from = getTranslatedDate(new Date(this.since));
            const since = getTranslatedDate(new Date(this.till));
            return `Okres realizacji: ${from} do ${since}`;
        }
    }
};
</script>
